<?php
/**
 * NestedMaterialPerUnitListItem
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
 * NestedMaterialPerUnitListItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NestedMaterialPerUnitListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NestedMaterialPerUnitListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'material_id' => 'string',
        'name' => 'string',
        'unit_id' => 'int',
        'unit' => 'string',
        'article_number' => 'string',
        'ean_code' => 'string',
        'group_id' => 'int',
        'group_name' => 'string',
        'cost_price' => 'string',
        'selling_price' => 'string',
        'visibility_flag' => 'int',
        'is_active' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'material_id' => null,
        'name' => null,
        'unit_id' => null,
        'unit' => null,
        'article_number' => null,
        'ean_code' => null,
        'group_id' => null,
        'group_name' => null,
        'cost_price' => null,
        'selling_price' => null,
        'visibility_flag' => null,
        'is_active' => null
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
        'material_id' => 'materialId',
        'name' => 'name',
        'unit_id' => 'unitId',
        'unit' => 'unit',
        'article_number' => 'articleNumber',
        'ean_code' => 'eanCode',
        'group_id' => 'groupId',
        'group_name' => 'groupName',
        'cost_price' => 'costPrice',
        'selling_price' => 'sellingPrice',
        'visibility_flag' => 'visibilityFlag',
        'is_active' => 'isActive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'material_id' => 'setMaterialId',
        'name' => 'setName',
        'unit_id' => 'setUnitId',
        'unit' => 'setUnit',
        'article_number' => 'setArticleNumber',
        'ean_code' => 'setEanCode',
        'group_id' => 'setGroupId',
        'group_name' => 'setGroupName',
        'cost_price' => 'setCostPrice',
        'selling_price' => 'setSellingPrice',
        'visibility_flag' => 'setVisibilityFlag',
        'is_active' => 'setIsActive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'material_id' => 'getMaterialId',
        'name' => 'getName',
        'unit_id' => 'getUnitId',
        'unit' => 'getUnit',
        'article_number' => 'getArticleNumber',
        'ean_code' => 'getEanCode',
        'group_id' => 'getGroupId',
        'group_name' => 'getGroupName',
        'cost_price' => 'getCostPrice',
        'selling_price' => 'getSellingPrice',
        'visibility_flag' => 'getVisibilityFlag',
        'is_active' => 'getIsActive'
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
        $this->container['material_id'] = isset($data['material_id']) ? $data['material_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['unit_id'] = isset($data['unit_id']) ? $data['unit_id'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['article_number'] = isset($data['article_number']) ? $data['article_number'] : null;
        $this->container['ean_code'] = isset($data['ean_code']) ? $data['ean_code'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['group_name'] = isset($data['group_name']) ? $data['group_name'] : null;
        $this->container['cost_price'] = isset($data['cost_price']) ? $data['cost_price'] : null;
        $this->container['selling_price'] = isset($data['selling_price']) ? $data['selling_price'] : null;
        $this->container['visibility_flag'] = isset($data['visibility_flag']) ? $data['visibility_flag'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
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
     * @param int $id The ID of the material-per-unit.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets material_id
     *
     * @return string
     */
    public function getMaterialId()
    {
        return $this->container['material_id'];
    }

    /**
     * Sets material_id
     *
     * @param string $material_id The ID of the material.
     *
     * @return $this
     */
    public function setMaterialId($material_id)
    {
        $this->container['material_id'] = $material_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the material.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets unit_id
     *
     * @return int
     */
    public function getUnitId()
    {
        return $this->container['unit_id'];
    }

    /**
     * Sets unit_id
     *
     * @param int $unit_id The id of the unit which quantifies the material.
     *
     * @return $this
     */
    public function setUnitId($unit_id)
    {
        $this->container['unit_id'] = $unit_id;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit The name of the unit which quantifies the material.
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

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
     * @param string $article_number The article number of this bookable unit.
     *
     * @return $this
     */
    public function setArticleNumber($article_number)
    {
        $this->container['article_number'] = $article_number;

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
     * @param string $ean_code The ean code of this bookable unit.
     *
     * @return $this
     */
    public function setEanCode($ean_code)
    {
        $this->container['ean_code'] = $ean_code;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param int $group_id The id of the group this bookable unit belongs to.
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets group_name
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->container['group_name'];
    }

    /**
     * Sets group_name
     *
     * @param string $group_name The name of the group this bookable unit belongs to.
     *
     * @return $this
     */
    public function setGroupName($group_name)
    {
        $this->container['group_name'] = $group_name;

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
     * @param string $cost_price The cost price of this bookable unit.
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
     * @param string $selling_price The selling price of this bookable unit.
     *
     * @return $this
     */
    public function setSellingPrice($selling_price)
    {
        $this->container['selling_price'] = $selling_price;

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
     * @param int $visibility_flag The visibility flag of this bookable unit (1=stock, 2=price book, 3=always visible).
     *
     * @return $this
     */
    public function setVisibilityFlag($visibility_flag)
    {
        $this->container['visibility_flag'] = $visibility_flag;

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
     * @param bool $is_active Whether this bookable unit is active.
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

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


