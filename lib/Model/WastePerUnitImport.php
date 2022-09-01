<?php
/**
 * WastePerUnitImport
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
 * WastePerUnitImport Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WastePerUnitImport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WastePerUnitImport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include' => 'bool',
        'article_number' => 'string',
        'waste_name' => 'string',
        'waste_unit_name' => 'string',
        'cost_price' => 'string',
        'selling_price' => 'string',
        'is_active' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include' => null,
        'article_number' => null,
        'waste_name' => null,
        'waste_unit_name' => null,
        'cost_price' => null,
        'selling_price' => null,
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
        'include' => 'include',
        'article_number' => 'articleNumber',
        'waste_name' => 'wasteName',
        'waste_unit_name' => 'wasteUnitName',
        'cost_price' => 'costPrice',
        'selling_price' => 'sellingPrice',
        'is_active' => 'isActive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'include' => 'setInclude',
        'article_number' => 'setArticleNumber',
        'waste_name' => 'setWasteName',
        'waste_unit_name' => 'setWasteUnitName',
        'cost_price' => 'setCostPrice',
        'selling_price' => 'setSellingPrice',
        'is_active' => 'setIsActive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'include' => 'getInclude',
        'article_number' => 'getArticleNumber',
        'waste_name' => 'getWasteName',
        'waste_unit_name' => 'getWasteUnitName',
        'cost_price' => 'getCostPrice',
        'selling_price' => 'getSellingPrice',
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
        $this->container['include'] = isset($data['include']) ? $data['include'] : null;
        $this->container['article_number'] = isset($data['article_number']) ? $data['article_number'] : null;
        $this->container['waste_name'] = isset($data['waste_name']) ? $data['waste_name'] : null;
        $this->container['waste_unit_name'] = isset($data['waste_unit_name']) ? $data['waste_unit_name'] : null;
        $this->container['cost_price'] = isset($data['cost_price']) ? $data['cost_price'] : null;
        $this->container['selling_price'] = isset($data['selling_price']) ? $data['selling_price'] : null;
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
     * Gets include
     *
     * @return bool
     */
    public function getInclude()
    {
        return $this->container['include'];
    }

    /**
     * Sets include
     *
     * @param bool $include Whether this record will be included in the import.
     *
     * @return $this
     */
    public function setInclude($include)
    {
        $this->container['include'] = $include;

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
     * @param string $article_number The article number.
     *
     * @return $this
     */
    public function setArticleNumber($article_number)
    {
        $this->container['article_number'] = $article_number;

        return $this;
    }

    /**
     * Gets waste_name
     *
     * @return string
     */
    public function getWasteName()
    {
        return $this->container['waste_name'];
    }

    /**
     * Sets waste_name
     *
     * @param string $waste_name The name of the associated waste.
     *
     * @return $this
     */
    public function setWasteName($waste_name)
    {
        $this->container['waste_name'] = $waste_name;

        return $this;
    }

    /**
     * Gets waste_unit_name
     *
     * @return string
     */
    public function getWasteUnitName()
    {
        return $this->container['waste_unit_name'];
    }

    /**
     * Sets waste_unit_name
     *
     * @param string $waste_unit_name The name of the associated waste unit.
     *
     * @return $this
     */
    public function setWasteUnitName($waste_unit_name)
    {
        $this->container['waste_unit_name'] = $waste_unit_name;

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
     * @param string $cost_price The cost price.
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
     * @param string $selling_price The selling price.
     *
     * @return $this
     */
    public function setSellingPrice($selling_price)
    {
        $this->container['selling_price'] = $selling_price;

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
     * @param bool $is_active Whether the waste is active.
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

