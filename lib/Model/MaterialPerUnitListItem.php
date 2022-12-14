<?php
/**
 * MaterialPerUnitListItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bouw7 API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.27
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * MaterialPerUnitListItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MaterialPerUnitListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MaterialPerUnitListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'ean_code' => 'string',
        'cost_price' => 'string',
        'selling_price' => 'string',
        'article_number' => 'string',
        'unit' => '\Swagger\Client\Model\NestedMaterialUnitListItem',
        'material' => '\Swagger\Client\Model\NestedMaterialListItem',
        'supplier' => '\Swagger\Client\Model\NestedContactListItem',
        'is_active' => 'bool',
        'material_group' => '\Swagger\Client\Model\NestedMaterialGroupListItem',
        'delivery_time_in_days' => 'int',
        'conversion_factor' => 'string',
        'vat_tariff' => '\Swagger\Client\Model\NestedVatTariffListItem',
        'visibility_flag' => 'int',
        'form_factor_type' => 'int',
        'form_factor_unit' => 'int',
        'form_factor_sizes' => 'string',
        'form_factor_weight' => 'string',
        'created_by' => '\Swagger\Client\Model\BlameableUser',
        'created_at' => 'string',
        'updated_by' => '\Swagger\Client\Model\BlameableUser',
        'updated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'ean_code' => null,
        'cost_price' => null,
        'selling_price' => null,
        'article_number' => null,
        'unit' => null,
        'material' => null,
        'supplier' => null,
        'is_active' => null,
        'material_group' => null,
        'delivery_time_in_days' => null,
        'conversion_factor' => null,
        'vat_tariff' => null,
        'visibility_flag' => null,
        'form_factor_type' => null,
        'form_factor_unit' => null,
        'form_factor_sizes' => null,
        'form_factor_weight' => null,
        'created_by' => null,
        'created_at' => null,
        'updated_by' => null,
        'updated_at' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'ean_code' => 'eanCode',
        'cost_price' => 'costPrice',
        'selling_price' => 'sellingPrice',
        'article_number' => 'articleNumber',
        'unit' => 'unit',
        'material' => 'material',
        'supplier' => 'supplier',
        'is_active' => 'isActive',
        'material_group' => 'materialGroup',
        'delivery_time_in_days' => 'deliveryTimeInDays',
        'conversion_factor' => 'conversionFactor',
        'vat_tariff' => 'vatTariff',
        'visibility_flag' => 'visibilityFlag',
        'form_factor_type' => 'formFactorType',
        'form_factor_unit' => 'formFactorUnit',
        'form_factor_sizes' => 'formFactorSizes',
        'form_factor_weight' => 'formFactorWeight',
        'created_by' => 'createdBy',
        'created_at' => 'createdAt',
        'updated_by' => 'updatedBy',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'ean_code' => 'setEanCode',
        'cost_price' => 'setCostPrice',
        'selling_price' => 'setSellingPrice',
        'article_number' => 'setArticleNumber',
        'unit' => 'setUnit',
        'material' => 'setMaterial',
        'supplier' => 'setSupplier',
        'is_active' => 'setIsActive',
        'material_group' => 'setMaterialGroup',
        'delivery_time_in_days' => 'setDeliveryTimeInDays',
        'conversion_factor' => 'setConversionFactor',
        'vat_tariff' => 'setVatTariff',
        'visibility_flag' => 'setVisibilityFlag',
        'form_factor_type' => 'setFormFactorType',
        'form_factor_unit' => 'setFormFactorUnit',
        'form_factor_sizes' => 'setFormFactorSizes',
        'form_factor_weight' => 'setFormFactorWeight',
        'created_by' => 'setCreatedBy',
        'created_at' => 'setCreatedAt',
        'updated_by' => 'setUpdatedBy',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'ean_code' => 'getEanCode',
        'cost_price' => 'getCostPrice',
        'selling_price' => 'getSellingPrice',
        'article_number' => 'getArticleNumber',
        'unit' => 'getUnit',
        'material' => 'getMaterial',
        'supplier' => 'getSupplier',
        'is_active' => 'getIsActive',
        'material_group' => 'getMaterialGroup',
        'delivery_time_in_days' => 'getDeliveryTimeInDays',
        'conversion_factor' => 'getConversionFactor',
        'vat_tariff' => 'getVatTariff',
        'visibility_flag' => 'getVisibilityFlag',
        'form_factor_type' => 'getFormFactorType',
        'form_factor_unit' => 'getFormFactorUnit',
        'form_factor_sizes' => 'getFormFactorSizes',
        'form_factor_weight' => 'getFormFactorWeight',
        'created_by' => 'getCreatedBy',
        'created_at' => 'getCreatedAt',
        'updated_by' => 'getUpdatedBy',
        'updated_at' => 'getUpdatedAt'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ean_code'] = isset($data['ean_code']) ? $data['ean_code'] : null;
        $this->container['cost_price'] = isset($data['cost_price']) ? $data['cost_price'] : null;
        $this->container['selling_price'] = isset($data['selling_price']) ? $data['selling_price'] : null;
        $this->container['article_number'] = isset($data['article_number']) ? $data['article_number'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['material'] = isset($data['material']) ? $data['material'] : null;
        $this->container['supplier'] = isset($data['supplier']) ? $data['supplier'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['material_group'] = isset($data['material_group']) ? $data['material_group'] : null;
        $this->container['delivery_time_in_days'] = isset($data['delivery_time_in_days']) ? $data['delivery_time_in_days'] : null;
        $this->container['conversion_factor'] = isset($data['conversion_factor']) ? $data['conversion_factor'] : null;
        $this->container['vat_tariff'] = isset($data['vat_tariff']) ? $data['vat_tariff'] : null;
        $this->container['visibility_flag'] = isset($data['visibility_flag']) ? $data['visibility_flag'] : null;
        $this->container['form_factor_type'] = isset($data['form_factor_type']) ? $data['form_factor_type'] : null;
        $this->container['form_factor_unit'] = isset($data['form_factor_unit']) ? $data['form_factor_unit'] : null;
        $this->container['form_factor_sizes'] = isset($data['form_factor_sizes']) ? $data['form_factor_sizes'] : null;
        $this->container['form_factor_weight'] = isset($data['form_factor_weight']) ? $data['form_factor_weight'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_by'] = isset($data['updated_by']) ? $data['updated_by'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The ID of this bookable unit.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ean_code
     *
     * @return string
     */
    public function getEanCode()
    {
        return $this->container['ean_code'];
    }

    /**
     * Sets ean_code
     *
     * @param string $ean_code Ean code of this bookable unit.
     *
     * @return $this
     */
    public function setEanCode($ean_code)
    {
        $this->container['ean_code'] = $ean_code;

        return $this;
    }

    /**
     * Gets cost_price
     *
     * @return string
     */
    public function getCostPrice()
    {
        return $this->container['cost_price'];
    }

    /**
     * Sets cost_price
     *
     * @param string $cost_price Cost price of this bookable unit.
     *
     * @return $this
     */
    public function setCostPrice($cost_price)
    {
        $this->container['cost_price'] = $cost_price;

        return $this;
    }

    /**
     * Gets selling_price
     *
     * @return string
     */
    public function getSellingPrice()
    {
        return $this->container['selling_price'];
    }

    /**
     * Sets selling_price
     *
     * @param string $selling_price Selling price of this bookable unit.
     *
     * @return $this
     */
    public function setSellingPrice($selling_price)
    {
        $this->container['selling_price'] = $selling_price;

        return $this;
    }

    /**
     * Gets article_number
     *
     * @return string
     */
    public function getArticleNumber()
    {
        return $this->container['article_number'];
    }

    /**
     * Sets article_number
     *
     * @param string $article_number The article number (usually EAN) of this bookable unit.
     *
     * @return $this
     */
    public function setArticleNumber($article_number)
    {
        $this->container['article_number'] = $article_number;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return \Swagger\Client\Model\NestedMaterialUnitListItem
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param \Swagger\Client\Model\NestedMaterialUnitListItem $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets material
     *
     * @return \Swagger\Client\Model\NestedMaterialListItem
     */
    public function getMaterial()
    {
        return $this->container['material'];
    }

    /**
     * Sets material
     *
     * @param \Swagger\Client\Model\NestedMaterialListItem $material material
     *
     * @return $this
     */
    public function setMaterial($material)
    {
        $this->container['material'] = $material;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return \Swagger\Client\Model\NestedContactListItem
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param \Swagger\Client\Model\NestedContactListItem $supplier supplier
     *
     * @return $this
     */
    public function setSupplier($supplier)
    {
        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active Whether this bookable unit is currently active.
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets material_group
     *
     * @return \Swagger\Client\Model\NestedMaterialGroupListItem
     */
    public function getMaterialGroup()
    {
        return $this->container['material_group'];
    }

    /**
     * Sets material_group
     *
     * @param \Swagger\Client\Model\NestedMaterialGroupListItem $material_group material_group
     *
     * @return $this
     */
    public function setMaterialGroup($material_group)
    {
        $this->container['material_group'] = $material_group;

        return $this;
    }

    /**
     * Gets delivery_time_in_days
     *
     * @return int
     */
    public function getDeliveryTimeInDays()
    {
        return $this->container['delivery_time_in_days'];
    }

    /**
     * Sets delivery_time_in_days
     *
     * @param int $delivery_time_in_days The delivery time in days of this material per unit.
     *
     * @return $this
     */
    public function setDeliveryTimeInDays($delivery_time_in_days)
    {
        $this->container['delivery_time_in_days'] = $delivery_time_in_days;

        return $this;
    }

    /**
     * Gets conversion_factor
     *
     * @return string
     */
    public function getConversionFactor()
    {
        return $this->container['conversion_factor'];
    }

    /**
     * Sets conversion_factor
     *
     * @param string $conversion_factor The conversion factor of this material per unit.
     *
     * @return $this
     */
    public function setConversionFactor($conversion_factor)
    {
        $this->container['conversion_factor'] = $conversion_factor;

        return $this;
    }

    /**
     * Gets vat_tariff
     *
     * @return \Swagger\Client\Model\NestedVatTariffListItem
     */
    public function getVatTariff()
    {
        return $this->container['vat_tariff'];
    }

    /**
     * Sets vat_tariff
     *
     * @param \Swagger\Client\Model\NestedVatTariffListItem $vat_tariff vat_tariff
     *
     * @return $this
     */
    public function setVatTariff($vat_tariff)
    {
        $this->container['vat_tariff'] = $vat_tariff;

        return $this;
    }

    /**
     * Gets visibility_flag
     *
     * @return int
     */
    public function getVisibilityFlag()
    {
        return $this->container['visibility_flag'];
    }

    /**
     * Sets visibility_flag
     *
     * @param int $visibility_flag The visibility flag of this material per unit.
     *
     * @return $this
     */
    public function setVisibilityFlag($visibility_flag)
    {
        $this->container['visibility_flag'] = $visibility_flag;

        return $this;
    }

    /**
     * Gets form_factor_type
     *
     * @return int
     */
    public function getFormFactorType()
    {
        return $this->container['form_factor_type'];
    }

    /**
     * Sets form_factor_type
     *
     * @param int $form_factor_type The type of the form factor associated with this material per unit.
     *
     * @return $this
     */
    public function setFormFactorType($form_factor_type)
    {
        $this->container['form_factor_type'] = $form_factor_type;

        return $this;
    }

    /**
     * Gets form_factor_unit
     *
     * @return int
     */
    public function getFormFactorUnit()
    {
        return $this->container['form_factor_unit'];
    }

    /**
     * Sets form_factor_unit
     *
     * @param int $form_factor_unit The unit of the form factor associated with this material per unit.
     *
     * @return $this
     */
    public function setFormFactorUnit($form_factor_unit)
    {
        $this->container['form_factor_unit'] = $form_factor_unit;

        return $this;
    }

    /**
     * Gets form_factor_sizes
     *
     * @return string
     */
    public function getFormFactorSizes()
    {
        return $this->container['form_factor_sizes'];
    }

    /**
     * Sets form_factor_sizes
     *
     * @param string $form_factor_sizes The sizes of the form factor associated with this material per unit.
     *
     * @return $this
     */
    public function setFormFactorSizes($form_factor_sizes)
    {
        $this->container['form_factor_sizes'] = $form_factor_sizes;

        return $this;
    }

    /**
     * Gets form_factor_weight
     *
     * @return string
     */
    public function getFormFactorWeight()
    {
        return $this->container['form_factor_weight'];
    }

    /**
     * Sets form_factor_weight
     *
     * @param string $form_factor_weight The weight of the form factor associated with this material per unit.
     *
     * @return $this
     */
    public function setFormFactorWeight($form_factor_weight)
    {
        $this->container['form_factor_weight'] = $form_factor_weight;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return \Swagger\Client\Model\BlameableUser
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param \Swagger\Client\Model\BlameableUser $created_by created_by
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at The creation date of the object in ATOM/ISO-8601 format
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_by
     *
     * @return \Swagger\Client\Model\BlameableUser
     */
    public function getUpdatedBy()
    {
        return $this->container['updated_by'];
    }

    /**
     * Sets updated_by
     *
     * @param \Swagger\Client\Model\BlameableUser $updated_by updated_by
     *
     * @return $this
     */
    public function setUpdatedBy($updated_by)
    {
        $this->container['updated_by'] = $updated_by;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at The creation date of the object in ATOM/ISO-8601 format
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


