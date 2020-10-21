<?php


namespace Hkonnet\QuiptApi\Common\ComplexType;


/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property int $PageNumber
 * @property int $Total
 * @property boolean $HasMoreRecords
 */

class Paging extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Paging';

    /**
     * Identifies the PageNumber of inventory.
     *
     * @param int $PageNumber
     * @return $this
     */
    public function setPageNumber($PageNumber)
    {
        $this->values['PageNumber'] = $PageNumber;
        return $this;
    }

    /**
     * Identifies the Total of inventory.
     *
     * @param int $Total
     * @return $this
     */
    public function setTotal($Total)
    {
        $this->values['Total'] = $Total;
        return $this;
    }

    /**
     * Identifies the HasMoreRecords of inventory
     *
     * @param bool $HasMoreRecords
     * @return $this
     */
    public function setHasMoreRecords($HasMoreRecords)
    {
        $this->values['HasMoreRecords'] = $HasMoreRecords;
        return $this;
    }
}
