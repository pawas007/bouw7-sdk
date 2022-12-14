<?php
/**
 * MileageRegistration
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
 * MileageRegistration Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MileageRegistration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MileageRegistration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'week_number' => 'int',
        'year' => 'int',
        'week_start_date' => 'string',
        'license_plate' => 'string',
        'mileage' => 'int',
        'driver' => '\Swagger\Client\Model\CondensedEmployee',
        'passenger1' => '\Swagger\Client\Model\CondensedEmployee',
        'passenger2' => '\Swagger\Client\Model\CondensedEmployee',
        'passenger3' => '\Swagger\Client\Model\CondensedEmployee',
        'passenger4' => '\Swagger\Client\Model\CondensedEmployee',
        'passenger5' => '\Swagger\Client\Model\CondensedEmployee',
        'passenger6' => '\Swagger\Client\Model\CondensedEmployee',
        'processed' => 'bool',
        'created_at' => 'string',
        'created_by' => 'string',
        'updated_at' => 'string',
        'updated_by' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'week_number' => null,
        'year' => null,
        'week_start_date' => null,
        'license_plate' => null,
        'mileage' => null,
        'driver' => null,
        'passenger1' => null,
        'passenger2' => null,
        'passenger3' => null,
        'passenger4' => null,
        'passenger5' => null,
        'passenger6' => null,
        'processed' => null,
        'created_at' => null,
        'created_by' => null,
        'updated_at' => null,
        'updated_by' => null
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
        'week_number' => 'weekNumber',
        'year' => 'year',
        'week_start_date' => 'weekStartDate',
        'license_plate' => 'licensePlate',
        'mileage' => 'mileage',
        'driver' => 'driver',
        'passenger1' => 'passenger1',
        'passenger2' => 'passenger2',
        'passenger3' => 'passenger3',
        'passenger4' => 'passenger4',
        'passenger5' => 'passenger5',
        'passenger6' => 'passenger6',
        'processed' => 'processed',
        'created_at' => 'createdAt',
        'created_by' => 'createdBy',
        'updated_at' => 'updatedAt',
        'updated_by' => 'updatedBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'week_number' => 'setWeekNumber',
        'year' => 'setYear',
        'week_start_date' => 'setWeekStartDate',
        'license_plate' => 'setLicensePlate',
        'mileage' => 'setMileage',
        'driver' => 'setDriver',
        'passenger1' => 'setPassenger1',
        'passenger2' => 'setPassenger2',
        'passenger3' => 'setPassenger3',
        'passenger4' => 'setPassenger4',
        'passenger5' => 'setPassenger5',
        'passenger6' => 'setPassenger6',
        'processed' => 'setProcessed',
        'created_at' => 'setCreatedAt',
        'created_by' => 'setCreatedBy',
        'updated_at' => 'setUpdatedAt',
        'updated_by' => 'setUpdatedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'week_number' => 'getWeekNumber',
        'year' => 'getYear',
        'week_start_date' => 'getWeekStartDate',
        'license_plate' => 'getLicensePlate',
        'mileage' => 'getMileage',
        'driver' => 'getDriver',
        'passenger1' => 'getPassenger1',
        'passenger2' => 'getPassenger2',
        'passenger3' => 'getPassenger3',
        'passenger4' => 'getPassenger4',
        'passenger5' => 'getPassenger5',
        'passenger6' => 'getPassenger6',
        'processed' => 'getProcessed',
        'created_at' => 'getCreatedAt',
        'created_by' => 'getCreatedBy',
        'updated_at' => 'getUpdatedAt',
        'updated_by' => 'getUpdatedBy'
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
        $this->container['week_number'] = isset($data['week_number']) ? $data['week_number'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
        $this->container['week_start_date'] = isset($data['week_start_date']) ? $data['week_start_date'] : null;
        $this->container['license_plate'] = isset($data['license_plate']) ? $data['license_plate'] : null;
        $this->container['mileage'] = isset($data['mileage']) ? $data['mileage'] : null;
        $this->container['driver'] = isset($data['driver']) ? $data['driver'] : null;
        $this->container['passenger1'] = isset($data['passenger1']) ? $data['passenger1'] : null;
        $this->container['passenger2'] = isset($data['passenger2']) ? $data['passenger2'] : null;
        $this->container['passenger3'] = isset($data['passenger3']) ? $data['passenger3'] : null;
        $this->container['passenger4'] = isset($data['passenger4']) ? $data['passenger4'] : null;
        $this->container['passenger5'] = isset($data['passenger5']) ? $data['passenger5'] : null;
        $this->container['passenger6'] = isset($data['passenger6']) ? $data['passenger6'] : null;
        $this->container['processed'] = isset($data['processed']) ? $data['processed'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['updated_by'] = isset($data['updated_by']) ? $data['updated_by'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['week_number']) && ($this->container['week_number'] > 52)) {
            $invalidProperties[] = "invalid value for 'week_number', must be smaller than or equal to 52.";
        }

        if (!is_null($this->container['week_number']) && ($this->container['week_number'] < 1)) {
            $invalidProperties[] = "invalid value for 'week_number', must be bigger than or equal to 1.";
        }

        if ($this->container['license_plate'] === null) {
            $invalidProperties[] = "'license_plate' can't be null";
        }
        if ($this->container['mileage'] === null) {
            $invalidProperties[] = "'mileage' can't be null";
        }
        if ($this->container['driver'] === null) {
            $invalidProperties[] = "'driver' can't be null";
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
     * @param int $id ID of the mileage registration.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets week_number
     *
     * @return int
     */
    public function getWeekNumber()
    {
        return $this->container['week_number'];
    }

    /**
     * Sets week_number
     *
     * @param int $week_number (deprecated) The weeknumber the mileage registration applies to.
     *
     * @return $this
     */
    public function setWeekNumber($week_number)
    {

        if (!is_null($week_number) && ($week_number > 52)) {
            throw new \InvalidArgumentException('invalid value for $week_number when calling MileageRegistration., must be smaller than or equal to 52.');
        }
        if (!is_null($week_number) && ($week_number < 1)) {
            throw new \InvalidArgumentException('invalid value for $week_number when calling MileageRegistration., must be bigger than or equal to 1.');
        }

        $this->container['week_number'] = $week_number;

        return $this;
    }

    /**
     * Gets year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int $year (deprecated) The year the mileage registration applies to.
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets week_start_date
     *
     * @return string
     */
    public function getWeekStartDate()
    {
        return $this->container['week_start_date'];
    }

    /**
     * Sets week_start_date
     *
     * @param string $week_start_date The start date, in Y-m-d, of the week this entry is for.
     *
     * @return $this
     */
    public function setWeekStartDate($week_start_date)
    {
        $this->container['week_start_date'] = $week_start_date;

        return $this;
    }

    /**
     * Gets license_plate
     *
     * @return string
     */
    public function getLicensePlate()
    {
        return $this->container['license_plate'];
    }

    /**
     * Sets license_plate
     *
     * @param string $license_plate The licence plate that belongs to this milage registration.
     *
     * @return $this
     */
    public function setLicensePlate($license_plate)
    {
        $this->container['license_plate'] = $license_plate;

        return $this;
    }

    /**
     * Gets mileage
     *
     * @return int
     */
    public function getMileage()
    {
        return $this->container['mileage'];
    }

    /**
     * Sets mileage
     *
     * @param int $mileage The mileage associated with this mileage registration
     *
     * @return $this
     */
    public function setMileage($mileage)
    {
        $this->container['mileage'] = $mileage;

        return $this;
    }

    /**
     * Gets driver
     *
     * @return \Swagger\Client\Model\CondensedEmployee
     */
    public function getDriver()
    {
        return $this->container['driver'];
    }

    /**
     * Sets driver
     *
     * @param \Swagger\Client\Model\CondensedEmployee $driver driver
     *
     * @return $this
     */
    public function setDriver($driver)
    {
        $this->container['driver'] = $driver;

        return $this;
    }

    /**
     * Gets passenger1
     *
     * @return \Swagger\Client\Model\CondensedEmployee
     */
    public function getPassenger1()
    {
        return $this->container['passenger1'];
    }

    /**
     * Sets passenger1
     *
     * @param \Swagger\Client\Model\CondensedEmployee $passenger1 passenger1
     *
     * @return $this
     */
    public function setPassenger1($passenger1)
    {
        $this->container['passenger1'] = $passenger1;

        return $this;
    }

    /**
     * Gets passenger2
     *
     * @return \Swagger\Client\Model\CondensedEmployee
     */
    public function getPassenger2()
    {
        return $this->container['passenger2'];
    }

    /**
     * Sets passenger2
     *
     * @param \Swagger\Client\Model\CondensedEmployee $passenger2 passenger2
     *
     * @return $this
     */
    public function setPassenger2($passenger2)
    {
        $this->container['passenger2'] = $passenger2;

        return $this;
    }

    /**
     * Gets passenger3
     *
     * @return \Swagger\Client\Model\CondensedEmployee
     */
    public function getPassenger3()
    {
        return $this->container['passenger3'];
    }

    /**
     * Sets passenger3
     *
     * @param \Swagger\Client\Model\CondensedEmployee $passenger3 passenger3
     *
     * @return $this
     */
    public function setPassenger3($passenger3)
    {
        $this->container['passenger3'] = $passenger3;

        return $this;
    }

    /**
     * Gets passenger4
     *
     * @return \Swagger\Client\Model\CondensedEmployee
     */
    public function getPassenger4()
    {
        return $this->container['passenger4'];
    }

    /**
     * Sets passenger4
     *
     * @param \Swagger\Client\Model\CondensedEmployee $passenger4 passenger4
     *
     * @return $this
     */
    public function setPassenger4($passenger4)
    {
        $this->container['passenger4'] = $passenger4;

        return $this;
    }

    /**
     * Gets passenger5
     *
     * @return \Swagger\Client\Model\CondensedEmployee
     */
    public function getPassenger5()
    {
        return $this->container['passenger5'];
    }

    /**
     * Sets passenger5
     *
     * @param \Swagger\Client\Model\CondensedEmployee $passenger5 passenger5
     *
     * @return $this
     */
    public function setPassenger5($passenger5)
    {
        $this->container['passenger5'] = $passenger5;

        return $this;
    }

    /**
     * Gets passenger6
     *
     * @return \Swagger\Client\Model\CondensedEmployee
     */
    public function getPassenger6()
    {
        return $this->container['passenger6'];
    }

    /**
     * Sets passenger6
     *
     * @param \Swagger\Client\Model\CondensedEmployee $passenger6 passenger6
     *
     * @return $this
     */
    public function setPassenger6($passenger6)
    {
        $this->container['passenger6'] = $passenger6;

        return $this;
    }

    /**
     * Gets processed
     *
     * @return bool
     */
    public function getProcessed()
    {
        return $this->container['processed'];
    }

    /**
     * Sets processed
     *
     * @param bool $processed Whether or not the mileage registration is processed.
     *
     * @return $this
     */
    public function setProcessed($processed)
    {
        $this->container['processed'] = $processed;

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
     * @param string $created_at The creation time of the entity.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string $created_by The user that created the entity.
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

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
     * @param string $updated_at The last updated time of the entity.
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets updated_by
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->container['updated_by'];
    }

    /**
     * Sets updated_by
     *
     * @param string $updated_by The user that last updated the entity.
     *
     * @return $this
     */
    public function setUpdatedBy($updated_by)
    {
        $this->container['updated_by'] = $updated_by;

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


