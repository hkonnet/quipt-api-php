<?php

namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

use Hkonnet\QuiptApi\AbstractComplexType;
/**
 * Two part authentication string used for the sender's identity
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 *
 * @property string $oauth_consumer_key
 * @property string $oauth_consumer_secret
 * @property string $oauth_token
 * @property string $oauth_token_secret
 */
class WebAuthenticationCredential extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'WebAuthenticationCredential';

    /**
     * Identifying part of authentication credential. This value is provided by Quipt after registration
     *
     * @param string $oauth_consumer_key
     * @return $this
     */
    public function setOauthConsumerKey($oauth_consumer_key)
    {
        $this->values['oauth_consumer_key'] = $oauth_consumer_key;
        return $this;
    }

    /**
     * Secret part of authentication key. This value is provided by Quipt after registration.
     *
     * @param string $oauth_consumer_secret
     * @return $this
     */
    public function setOauthConsumerSecret($oauth_consumer_secret)
    {
        $this->values['oauth_consumer_secret'] = $oauth_consumer_secret;
        return $this;
    }

    /**
     * Secret part of authentication key. This value is provided by Quipt after registration.
     *
     * @param string $oauth_token
     * @return $this
     */
    public function setOauthToken($oauth_token)
    {
        $this->values['oauth_token'] = $oauth_token;
        return $this;
    }
    /**
     * Secret part of authentication key. This value is provided by Quipt after registration.
     *
     * @param string $oauth_token_secret
     * @return $this
     */
    public function setOauthTokenSecret($oauth_token_secret)
    {
        $this->values['oauth_token_secret'] = $oauth_token_secret;
        return $this;
    }
}
