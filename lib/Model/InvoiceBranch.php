<?php
/**
 * InvoiceBranch
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
 * InvoiceBranch Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceBranch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceBranch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'use_organization_info' => 'bool',
        'name' => 'string',
        'code' => 'string',
        'wage_component_percentage' => 'string',
        'g_account_percentage' => 'string',
        'g_account_text' => 'string',
        'n_account_text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'use_organization_info' => null,
        'name' => null,
        'code' => null,
        'wage_component_percentage' => null,
        'g_account_percentage' => null,
        'g_account_text' => null,
        'n_account_text' => null
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
        'use_organization_info' => 'useOrganizationInfo',
        'name' => 'name',
        'code' => 'code',
        'wage_component_percentage' => 'wageComponentPercentage',
        'g_account_percentage' => 'gAccountPercentage',
        'g_account_text' => 'gAccountText',
        'n_account_text' => 'nAccountText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'use_organization_info' => 'setUseOrganizationInfo',
        'name' => 'setName',
        'code' => 'setCode',
        'wage_component_percentage' => 'setWageComponentPercentage',
        'g_account_percentage' => 'setGAccountPercentage',
        'g_account_text' => 'setGAccountText',
        'n_account_text' => 'setNAccountText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'use_organization_info' => 'getUseOrganizationInfo',
        'name' => 'getName',
        'code' => 'getCode',
        'wage_component_percentage' => 'getWageComponentPercentage',
        'g_account_percentage' => 'getGAccountPercentage',
        'g_account_text' => 'getGAccountText',
        'n_account_text' => 'getNAccountText'
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
        $this->container['use_organization_info'] = isset($data['use_organization_info']) ? $data['use_organization_info'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['wage_component_percentage'] = isset($data['wage_component_percentage']) ? $data['wage_component_percentage'] : null;
        $this->container['g_account_percentage'] = isset($data['g_account_percentage']) ? $data['g_account_percentage'] : null;
        $this->container['g_account_text'] = isset($data['g_account_text']) ? $data['g_account_text'] : null;
        $this->container['n_account_text'] = isset($data['n_account_text']) ? $data['n_account_text'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 255)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['g_account_text']) && (mb_strlen($this->container['g_account_text']) > 255)) {
            $invalidProperties[] = "invalid value for 'g_account_text', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['n_account_text']) && (mb_strlen($this->container['n_account_text']) > 255)) {
            $invalidProperties[] = "invalid value for 'n_account_text', the character length must be smaller than or equal to 255.";
        }

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
     * @param int $id The ID of the branch.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets use_organization_info
     *
     * @return bool
     */
    public function getUseOrganizationInfo()
    {
        return $this->container['use_organization_info'];
    }

    /**
     * Sets use_organization_info
     *
     * @param bool $use_organization_info If organization information should be used instead of branch information.
     *
     * @return $this
     */
    public function setUseOrganizationInfo($use_organization_info)
    {
        $this->container['use_organization_info'] = $use_organization_info;

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
     * @param string $name The name of the branch.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code The code of the branch.
     *
     * @return $this
     */
    public function setCode($code)
    {
        if (!is_null($code) && (mb_strlen($code) > 255)) {
            throw new \InvalidArgumentException('invalid length for $code when calling InvoiceBranch., must be smaller than or equal to 255.');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets wage_component_percentage
     *
     * @return string
     */
    public function getWageComponentPercentage()
    {
        return $this->container['wage_component_percentage'];
    }

    /**
     * Sets wage_component_percentage
     *
     * @param string $wage_component_percentage The wage component percentage of the branch.
     *
     * @return $this
     */
    public function setWageComponentPercentage($wage_component_percentage)
    {
        $this->container['wage_component_percentage'] = $wage_component_percentage;

        return $this;
    }

    /**
     * Gets g_account_percentage
     *
     * @return string
     */
    public function getGAccountPercentage()
    {
        return $this->container['g_account_percentage'];
    }

    /**
     * Sets g_account_percentage
     *
     * @param string $g_account_percentage The g account percentage of the branch.
     *
     * @return $this
     */
    public function setGAccountPercentage($g_account_percentage)
    {
        $this->container['g_account_percentage'] = $g_account_percentage;

        return $this;
    }

    /**
     * Gets g_account_text
     *
     * @return string
     */
    public function getGAccountText()
    {
        return $this->container['g_account_text'];
    }

    /**
     * Sets g_account_text
     *
     * @param string $g_account_text The g account text of the branch.
     *
     * @return $this
     */
    public function setGAccountText($g_account_text)
    {
        if (!is_null($g_account_text) && (mb_strlen($g_account_text) > 255)) {
            throw new \InvalidArgumentException('invalid length for $g_account_text when calling InvoiceBranch., must be smaller than or equal to 255.');
        }

        $this->container['g_account_text'] = $g_account_text;

        return $this;
    }

    /**
     * Gets n_account_text
     *
     * @return string
     */
    public function getNAccountText()
    {
        return $this->container['n_account_text'];
    }

    /**
     * Sets n_account_text
     *
     * @param string $n_account_text The n account text of the branch.
     *
     * @return $this
     */
    public function setNAccountText($n_account_text)
    {
        if (!is_null($n_account_text) && (mb_strlen($n_account_text) > 255)) {
            throw new \InvalidArgumentException('invalid length for $n_account_text when calling InvoiceBranch., must be smaller than or equal to 255.');
        }

        $this->container['n_account_text'] = $n_account_text;

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

