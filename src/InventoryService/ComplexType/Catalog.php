<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

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
 * @property Warranty $Warranty
 * @property Condition $Condition
 * @property Packaging $Packaging
 * @property array $InBox
 * @property string $Title
 * @property string $AltTitle
 * @property string $AltTitle2
 * @property Manufacturer $Manufacturer
 * @property Brand $Brand
 * @property array $SKUs #todo
 * @property CountryOfOrigin $CountryOfOrigin
 * @property Category $Category
 * @property Attributes $Attributes
 * @property array $Pricing #todo
 * @property array $Features
 * @property string $SpecSheetURL
 * @property string $Description
 * @property PrimaryImage $PrimaryImage
 * @property array $AdditionalImages
 * @property array $Documents
 * @property array $Tags
 * @property integer $VersionNumber
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
     * @param Warranty $warranty
     * @return $this
     */
    public function setWarranty(Warranty $warranty)
    {
        $this->values['Warranty'] = $warranty;
        return $this;
    }

    /**
     * Identifies the  Condition of inventory
     *
     * @param Condition $condition
     * @return $this
     */
    public function setCondition(Condition $condition)
    {
        $this->values['Condition'] = $condition;
        return $this;
    }

    /**
     * Identifies the  $packaging of inventory
     *
     * @param Packaging $packaging
     * @return $this
     */
    public function setPackaging(Packaging $packaging)
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
     * @param Manufacturer $manufacturer
     * @return $this
     */
    public function setManufacturer(Manufacturer $manufacturer)
    {
        $this->values['Manufacturer'] = $manufacturer;
        return $this;
    }

    /**
     * Identifies the  $brand of inventory
     *
     * @param Brand $brand
     * @return $this
     */
    public function setBrand(Brand $brand)
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
    public function setSKUs( $SKUs)
    {
        $this->values['SKUs'] = $SKUs;
        return $this;
    }

    /**
     * Identifies the  $country_of_origin of inventory
     *
     * @param CountryOfOrigin $country_of_origin
     * @return $this
     */
    public function setCountryOfOrigin(CountryOfOrigin $country_of_origin)
    {
        $this->values['CountryOfOrigin'] = $country_of_origin;
        return $this;
    }
    /**
     * Identifies the  $catalog of inventory
     *
     * @param Catalog $catalog
     * @return $this
     */
    public function setCatalog(Catalog $catalog)
    {
        $this->values['Catalog'] = $catalog;
        return $this;
    }
    /**
     * Identifies the  Attributes of inventory
     *
     * @param Attributes $attributes
     * @return $this
     */
    public function setAttributes(Attributes $attributes)
    {
        $this->values['Attributes'] = $attributes;
        return $this;
    }

    /**
     * Identifies the  Pricing of inventory
     *
     * @param array $pricing
     * @return $this
     */
    public function setPricing( $pricing)
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
     * @param PrimaryImage $primary_image
     * @return $this
     */
    public function setPrimaryImage(PrimaryImage $primary_image)
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
    public function setAdditionalImages( $additional_images)
    {
        $this->values['AdditionalImages'] = $additional_images;
        return $this;
    }

    /**
     * Identifies the  Documents of inventory
     *
     * @param array $documents
     * @return $this
     */
    public function setDocuments( $documents)
    {
        $this->values['Documents'] = $documents;
        return $this;
    }

    /**
     * Identifies the  Tags of inventory
     *
     * @param array $tags
     * @return $this
     */
    public function setTags( $tags)
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
}
