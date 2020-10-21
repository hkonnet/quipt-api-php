<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

use Hkonnet\QuiptApi\Common\ComplexType\CatalogCondition;
use Hkonnet\QuiptApi\Common\ComplexType\Country;
use Hkonnet\QuiptApi\Common\ComplexType\Dimensions;
use Hkonnet\QuiptApi\Common\ComplexType\Weight;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $Id
 * @property Weight $Weight
 * @property Dimensions $Dimensions
 * @property CatalogWarranty $Warranty
 * @property CatalogCondition $Condition
 * @property CatalogPackaging $Packaging
 * @property array $InBox
 * @property string $Title
 * @property string $AltTitle
 * @property string $AltTitle2
 * @property CatalogManufacturer $Manufacturer
 * @property CatalogManufacturer $Brand
 * @property array $SKUs
 * @property Country $CountryOfOrigin
 * @property CatalogCategory $Category
 * @property array $Attributes
 * @property CatalogPricing $Pricing
 * @property array $Features
 * @property string $SpecSheetURL
 * @property string $Description
 * @property Asset $PrimaryImage
 * @property array $AdditionalImages
 * @property array $Documents
 * @property array $Tags
 * @property integer $VersionNumber
 * @property boolean $InitializeOnly
 */

class Catalog extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Catalog';

    /**
     * Identifies the Id of inventory.
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }

    /**
     * Identifies the Weight of inventory
     *
     * @param Weight $weight
     * @return $this
     */
    public function setWeight(Weight $weight)
    {
        $this->values['Weight'] = $weight;
        return $this;
    }

    /**
     * Identifies the dimensions of inventory
     *
     * @param Dimensions $dimensions
     * @return $this
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->values['Dimensions'] = $dimensions;
        return $this;
    }

    /**
     * Identifies the warranty of inventory
     *
     * @param CatalogWarranty $warranty
     * @return $this
     */
    public function setWarranty(CatalogWarranty $warranty)
    {
        $this->values['Warranty'] = $warranty;
        return $this;
    }

    /**
     * Identifies the  Condition of inventory
     *
     * @param CatalogCondition $condition
     * @return $this
     */
    public function setCondition(CatalogCondition $condition)
    {
        $this->values['Condition'] = $condition;
        return $this;
    }

    /**
     * Identifies the  $packaging of inventory
     *
     * @param CatalogPackaging $packaging
     * @return $this
     */
    public function setPackaging(CatalogPackaging $packaging)
    {
        $this->values['Packaging'] = $packaging;
        return $this;
    }

    /**
     * Identifies the  $in_box of inventory
     *
     * @param array $in_box
     * @return $this
     */
    public function setInBox( $in_box)
    {
        $this->values['InBox'] = $in_box;
        return $this;
    }

    /**
     * Identifies the  $Title of inventory
     *
     * @param string $title
     * @return $this
     */
    public function setTitle( $title)
    {
        $this->values['Title'] = $title;
        return $this;
    }
    /**
     * Identifies the  $AltTitle of inventory
     *
     * @param string $alt_title
     * @return $this
     */
    public function setAltTitle( $alt_title)
    {
        $this->values['AltTitle'] = $alt_title;
        return $this;
    }

    /**
     * Identifies the  $AltTitle2 of inventory
     *
     * @param string $alt_title2
     * @return $this
     */
    public function setAltTitle2( $alt_title2)
    {
        $this->values['AltTitle2'] = $alt_title2;
        return $this;
    }

    /**
     * Identifies the  $manufacturer of inventory
     *
     * @param CatalogManufacturer $manufacturer
     * @return $this
     */
    public function setManufacturer(CatalogManufacturer $manufacturer)
    {
        $this->values['Manufacturer'] = $manufacturer;
        return $this;
    }

    /**
     * Identifies the  $brand of inventory
     *
     * @param CatalogManufacturer $brand
     * @return $this
     */
    public function setBrand(CatalogManufacturer $brand)
    {
        $this->values['Brand'] = $brand;
        return $this;
    }

    /**
     * Identifies the  $SKUs of inventory
     *
     * @param array $SKUs
     * @return $this
     */
    public function setSKUs(array $SKUs)
    {
        $count=array_filter($SKUs, function ($obj) {
            return !($obj instanceof CatalogSKU);
        }
        );
        if (count($count) > 0){
            throw new \Exception('an array of CatalogSKU must be provided');
        }
        $this->values['SKUs'] = $SKUs;
        return $this;
    }

    /**
     * Identifies the  $country_of_origin of inventory
     *
     * @param Country $country
     * @return $this
     */
    public function setCountryOfOrigin(Country $country)
    {
        $this->values['CountryOfOrigin'] = $country;
        return $this;
    }
    /**
     * Identifies the  $category of inventory
     *
     * @param CatalogCategory $category
     * @return $this
     */
    public function setCategory(CatalogCategory $category)
    {
        $this->values['Category'] = $category;
        return $this;
    }
    /**
     * Identifies the  Attributes of inventory
     *
     * @param array $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $count=array_filter($attributes, function ($obj) {
                  return !($obj instanceof CatalogAttribute);
            }
        );
        if (count($count) > 0){
                 throw new \Exception('an array of CatalogAttribute must be provided');
            }
        $this->values['Attributes'] = $attributes;
        return $this;
    }

    /**
     * Identifies the  Pricing of inventory
     *
     * @param CatalogPricing $pricing
     * @return $this
     */
    public function setPricing(CatalogPricing $pricing)
    {
        $this->values['Pricing'] = $pricing;
        return $this;
    }

    /**
     * Identifies the  Features of inventory
     *
     * @param array $features
     * @return $this
     */
    public function setFeatures( $features)
    {
        $this->values['Features'] = $features;
        return $this;
    }

    /**
     * Identifies the  spec_sheet_URL of inventory
     *
     * @param string $spec_sheet_URL
     * @return $this
     */
    public function setSpecSheetURL( $spec_sheet_URL)
    {
        $this->values['SpecSheetURL'] = $spec_sheet_URL;
        return $this;
    }

    /**
     * Identifies the  Description of inventory
     *
     * @param string $description
     * @return $this
     */
    public function setDescription( $description)
    {
        $this->values['Description'] = $description;
        return $this;
    }

    /**
     * Identifies the  PrimaryImage of inventory
     *
     * @param Asset $primary_image
     * @return $this
     */
    public function setPrimaryImage(Asset $primary_image)
    {

        $this->values['PrimaryImage'] = $primary_image;
        return $this;
    }

    /**
     * Identifies the  AdditionalImages of inventory
     *
     * @param array $additional_images
     * @return $this
     */
    public function setAdditionalImages(array $additional_images)
    {
        $count=array_filter($additional_images, function ($obj) {
            return !($obj instanceof Asset);
        }
        );
        if (count($count) > 0){
            throw new \Exception('an array of Asset must be provided');
        }
        $this->values['AdditionalImages'] = $additional_images;
        return $this;
    }

    /**
     * Identifies the  Documents of inventory
     *
     * @param array $documents
     * @return $this
     */
    public function setDocuments(array $documents)
    {
        $count=array_filter($documents, function ($obj) {
            return !($obj instanceof Asset);
        }
        );
        if (count($count) > 0){
            throw new \Exception('an array of Asset must be provided');
        }
        $this->values['Documents'] = $documents;
        return $this;
    }

    /**
     * Identifies the  Tags of inventory
     *
     * @param array $tags
     * @return $this
     */
    public function setTags(array $tags)
    {
        $this->values['Tags'] = $tags;
        return $this;
    }

    /**
     * Identifies the  VersionNumber of inventory
     *
     * @param integer $version_number
     * @return $this
     */
    public function setVersionNumber( $version_number)
    {
        $this->values['VersionNumber'] = $version_number;
        return $this;
    }

    /**
     * Identifies the  initialize_only of inventory
     *
     * @param boolean $initialize_only
     * @return $this
     */
    public function setInitializeOnly( $initialize_only)
    {
        $this->values['InitializeOnly'] = $initialize_only;
        return $this;
    }
}
