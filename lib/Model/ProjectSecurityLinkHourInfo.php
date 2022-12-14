<?php
/**
 * ProjectSecurityLinkHourInfo
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
 * ProjectSecurityLinkHourInfo Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectSecurityLinkHourInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectSecurityLinkHourInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'budget_hours' => 'string',
        'prognosis_hours' => 'string',
        'prognosis_other_hours' => 'string',
        'prognosis_reserved_hours' => 'string',
        'hourly_rate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'budget_hours' => null,
        'prognosis_hours' => null,
        'prognosis_other_hours' => null,
        'prognosis_reserved_hours' => null,
        'hourly_rate' => null
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
        'budget_hours' => 'budgetHours',
        'prognosis_hours' => 'prognosisHours',
        'prognosis_other_hours' => 'prognosisOtherHours',
        'prognosis_reserved_hours' => 'prognosisReservedHours',
        'hourly_rate' => 'hourlyRate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'budget_hours' => 'setBudgetHours',
        'prognosis_hours' => 'setPrognosisHours',
        'prognosis_other_hours' => 'setPrognosisOtherHours',
        'prognosis_reserved_hours' => 'setPrognosisReservedHours',
        'hourly_rate' => 'setHourlyRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'budget_hours' => 'getBudgetHours',
        'prognosis_hours' => 'getPrognosisHours',
        'prognosis_other_hours' => 'getPrognosisOtherHours',
        'prognosis_reserved_hours' => 'getPrognosisReservedHours',
        'hourly_rate' => 'getHourlyRate'
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
        $this->container['budget_hours'] = isset($data['budget_hours']) ? $data['budget_hours'] : null;
        $this->container['prognosis_hours'] = isset($data['prognosis_hours']) ? $data['prognosis_hours'] : null;
        $this->container['prognosis_other_hours'] = isset($data['prognosis_other_hours']) ? $data['prognosis_other_hours'] : null;
        $this->container['prognosis_reserved_hours'] = isset($data['prognosis_reserved_hours']) ? $data['prognosis_reserved_hours'] : null;
        $this->container['hourly_rate'] = isset($data['hourly_rate']) ? $data['hourly_rate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['budget_hours'] === null) {
            $invalidProperties[] = "'budget_hours' can't be null";
        }
        if ($this->container['prognosis_hours'] === null) {
            $invalidProperties[] = "'prognosis_hours' can't be null";
        }
        if ($this->container['hourly_rate'] === null) {
            $invalidProperties[] = "'hourly_rate' can't be null";
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
     * Gets budget_hours
     *
     * @return string
     */
    public function getBudgetHours()
    {
        return $this->container['budget_hours'];
    }

    /**
     * Sets budget_hours
     *
     * @param string $budget_hours Only filled for cost type labor and equipment! The budget hours of the ProjectSecurityLink.
     *
     * @return $this
     */
    public function setBudgetHours($budget_hours)
    {
        $this->container['budget_hours'] = $budget_hours;

        return $this;
    }

    /**
     * Gets prognosis_hours
     *
     * @return string
     */
    public function getPrognosisHours()
    {
        return $this->container['prognosis_hours'];
    }

    /**
     * Sets prognosis_hours
     *
     * @param string $prognosis_hours Only filled for cost type labor and equipment! The prognosis hours of the ProjectSecurityLink.
     *
     * @return $this
     */
    public function setPrognosisHours($prognosis_hours)
    {
        $this->container['prognosis_hours'] = $prognosis_hours;

        return $this;
    }

    /**
     * Gets prognosis_other_hours
     *
     * @return string
     */
    public function getPrognosisOtherHours()
    {
        return $this->container['prognosis_other_hours'];
    }

    /**
     * Sets prognosis_other_hours
     *
     * @param string $prognosis_other_hours Only filled for cost type labor and equipment! The prognosis other hours of the ProjectSecurityLink.
     *
     * @return $this
     */
    public function setPrognosisOtherHours($prognosis_other_hours)
    {
        $this->container['prognosis_other_hours'] = $prognosis_other_hours;

        return $this;
    }

    /**
     * Gets prognosis_reserved_hours
     *
     * @return string
     */
    public function getPrognosisReservedHours()
    {
        return $this->container['prognosis_reserved_hours'];
    }

    /**
     * Sets prognosis_reserved_hours
     *
     * @param string $prognosis_reserved_hours Only filled for cost type labor and equipment! The prognosis reserved hours of the ProjectSecurityLink.
     *
     * @return $this
     */
    public function setPrognosisReservedHours($prognosis_reserved_hours)
    {
        $this->container['prognosis_reserved_hours'] = $prognosis_reserved_hours;

        return $this;
    }

    /**
     * Gets hourly_rate
     *
     * @return string
     */
    public function getHourlyRate()
    {
        return $this->container['hourly_rate'];
    }

    /**
     * Sets hourly_rate
     *
     * @param string $hourly_rate The hourly rate.
     *
     * @return $this
     */
    public function setHourlyRate($hourly_rate)
    {
        $this->container['hourly_rate'] = $hourly_rate;

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


