<?php


namespace Hkonnet\QuiptApi\Common\ComplexType;

use Hkonnet\QuiptApi\Common\SimpleType\SeverityStatus;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $Code
 * @property string $Text
 * @property SeverityStatus|int $Severity
 */

class Message extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Message';

    /**
     * Identifies the Code of inventory.
     *
     * @param string $Code
     * @return $this
     */
    public function setCode($Code)
    {
        $this->values['Code'] = $Code;
        return $this;
    }

    /**
     * Identifies the Text of inventory.
     *
     * @param string $Text
     * @return $this
     */
    public function setText($Text)
    {
        $this->values['Text'] = $Text;
        return $this;
    }

    /**
     * Identifies the Severity of inventory
     *
     * @param SeverityStatus|int $Severity
     * @return $this
     */
    public function setSeverity($Severity)
    {
        $this->values['Severity'] = $Severity;
        return $this;
    }
}
