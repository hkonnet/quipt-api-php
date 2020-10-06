<?php


namespace Hkonnet\QuiptApi;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use Hkonnet\QuiptApi\InventoryService\ComplexType\WebAuthenticationCredential;

class Base extends Client
{

    protected $nonce_chars='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

    protected $action;

    protected $path;

    protected $default_signature_method="HMAC-SHA1";

    protected $oauth_version="1.0";

    private $base_uri = 'https://api.getquipt.com';

    protected $oauth_nonce;

    protected $oauth_timestamp;

    protected $oauth_signature;

    protected $credential;

    public $headers= [];

    public function __construct(WebAuthenticationCredential $credential)
    {
        if (!isset($credential->oauth_consumer_key, $credential->oauth_consumer_secret, $credential->oauth_token, $credential->oauth_token_secret)) {
            throw new \Exception('Your oauth_consumer_key,oauth_consumer_secret,oauth_token and/or oauth_token_secret key are not set?');
        }
        $this->credential=$credential;
        parent::__construct([
            'base_uri' => $this->base_uri,
        ]);

    }

    protected function header($url,$action='GET'){
        $this->getNonce();
        $this->getTimeStamp();
        $this->generateSignature($url,$action);

        $oauth='OAuth oauth_consumer_key="'.$this->credential->oauth_consumer_key.'", oauth_signature="'.$this->oauth_signature.'", oauth_signature_method="'.$this->default_signature_method.'", oauth_token="'.$this->credential->oauth_token.'", oauth_version="'.$this->oauth_version.'", oauth_timestamp="'.$this->oauth_timestamp.'", oauth_nonce="'.$this->oauth_nonce.'"';

        $this->headers=[
            'Authorization'=>$oauth,
            'Content-Type'=>'application/json;charset=UTF-8',
            'Accept'=>'*/*'
        ];
    }
    protected function generateSignature($url,$action){
        $oauth = array( 'oauth_consumer_key' => $this->credential->oauth_consumer_key,
            'oauth_nonce' => $this->oauth_nonce,
            'oauth_signature_method' => $this->default_signature_method,
            'oauth_timestamp' => $this->oauth_timestamp,
            'oauth_token' => $this->credential->oauth_token,
            'oauth_version' => $this->oauth_version);

        $base_info = $this->buildBaseString($url, $action, $oauth);
        $composite_key = rawurlencode($this->credential->oauth_consumer_secret) . '&' . rawurlencode($this->credential->oauth_token_secret);
        $oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
        $this->oauth_signature=$oauth_signature;

    }
    protected  function buildBaseString($baseURI, $method, $params){
        $r = array();
        ksort($params);
        foreach($params as $key=>$value){
            $r[] = "$key=" . rawurlencode($value);
        }
        return $method."&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
    }
    /**
     * @param int $length
     * @return string
     */
    protected function getNonce($length = 7)
    {
        $result = '';
        $cLength = strlen($this->nonce_chars);
        for ($i = 0; $i < $length; $i++) {
            $rnum = rand(0, $cLength - 1);
            $result .= substr($this->nonce_chars, $rnum, 1);
        }
        $this->oauth_nonce = $result;

        return $result;
    }

    /**
     * @return int
     */
    protected function getTimeStamp()
    {
        return $this->oauth_timestamp = time();
    }


    /**
     * Set the target URL (does not include the parameters)
     *
     * @param string $path the fully qualified URI (excluding query arguments) (e.g "http://example.org/foo")
     * @return $this
     * @throws \Exception
     */
    public function setURL($path)
    {
        if (empty($path)) {
            throw new \Exception('No path specified for OAuthSimple.setURL');
        }
        $this->path=$path;

        return $this;
    }

    /**
     * Set the "action" for the url, (e.g. GET,POST, DELETE, etc.)
     *
     * @param string $action HTTP Action word.
     * @return $this
     * @throws \Exception
     */
    public function setAction($action)
    {
        if (empty($action)) {
            $action = 'GET';
        }

        $action = strtoupper($action);

        if (preg_match('/[^A-Z]/', $action)) {
            throw new \Exception('Invalid action specified for OAuthSimple.setAction');
        }

        $this->action = $action;

        return $this;
    }

    /**
     * Get a resource using the assigned endpoint ($this->endpoint).
     *
     * @param  array  $options
     * @param  string  $endpoint
     * @return \stdClass
     */
    public function get($options = [], $endpoint = '')
    {
        $this->header($this->base_uri.$endpoint,'GET');
        $response = $this->request('GET', "{$endpoint}", ['query' => $options,'headers'=>$this->headers]);

        return  json_decode($response->getBody()->getContents());
    }

    /**
     * Post to a resource using the assigned endpoint ($this->endpoint).
     *
     * @param  array  $options
     * @param  string  $endpoint
     * @return \stdClass
     */
    public function post($options = [], $endpoint = '')
    {
        $this->header($this->base_uri.$endpoint,'POST');
        $response = $this->request('POST', "{$endpoint}", ['json' => $options,'headers'=>$this->headers ]);

        return json_decode($response->getBody()->getContents());
    }

    /**
     * Delete a resource using the assigned endpoint ($this->endpoint).
     *
     * @param  string  $endpoint
     * @return \stdClass
     */
    public function delete($options=[],$endpoint = '')
    {
        $response = $this->request('DELETE', "{$endpoint}",['query' => $options,'headers'=>$this->headers]);

        return json_decode($response->getBody()->getContents());
    }

    /**
     * Update a resource using the assigned endpoint ($this->endpoint).
     *
     * @param  array  $options
     * @param  string  $endpoint
     * @return \stdClass
     */
    public function update($options = [], $endpoint = '')
    {
        $response = $this->request('PUT', "{$endpoint}", ['json' => $options,'headers'=>$this->headers]);

        return json_decode($response->getBody()->getContents());
    }


    public function greet($greet = "Hello World")
    {

        return $greet;
    }
}
