<?php
/**
 * ProjectSecurityLink
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
 * ProjectSecurityLink Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectSecurityLink implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectSecurityLink';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'status' => 'int',
        'project_id' => 'int',
        'cost_type_id' => 'int',
        'security_code_id' => 'int',
        'budget_amount' => 'string',
        'prognosis_amount' => 'string',
        'prognosis_other_amount' => 'string',
        'prognosis_reserved_amount' => 'string',
        'additional_work_amount' => 'string',
        'progress' => 'string',
        'adjustment' => 'int',
        'hour_info' => '\Swagger\Client\Model\ProjectSecurityLinkHourInfo',
        'security_object' => '\Swagger\Client\Model\CondensedSecurityObject',
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
        'name' => null,
        'status' => null,
        'project_id' => null,
        'cost_type_id' => null,
        'security_code_id' => null,
        'budget_amount' => null,
        'prognosis_amount' => null,
        'prognosis_other_amount' => null,
        'prognosis_reserved_amount' => null,
        'additional_work_amount' => null,
        'progress' => null,
        'adjustment' => null,
        'hour_info' => null,
        'security_object' => null,
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
        'name' => 'name',
        'status' => 'status',
        'project_id' => 'projectId',
        'cost_type_id' => 'costTypeId',
        'security_code_id' => 'securityCodeId',
        'budget_amount' => 'budgetAmount',
        'prognosis_amount' => 'prognosisAmount',
        'prognosis_other_amount' => 'prognosisOtherAmount',
        'prognosis_reserved_amount' => 'prognosisReservedAmount',
        'additional_work_amount' => 'additionalWorkAmount',
        'progress' => 'progress',
        'adjustment' => 'adjustment',
        'hour_info' => 'hourInfo',
        'security_object' => 'securityObject',
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
        'name' => 'setName',
        'status' => 'setStatus',
        'project_id' => 'setProjectId',
        'cost_type_id' => 'setCostTypeId',
        'security_code_id' => 'setSecurityCodeId',
        'budget_amount' => 'setBudgetAmount',
        'prognosis_amount' => 'setPrognosisAmount',
        'prognosis_other_amount' => 'setPrognosisOtherAmount',
        'prognosis_reserved_amount' => 'setPrognosisReservedAmount',
        'additional_work_amount' => 'setAdditionalWorkAmount',
        'progress' => 'setProgress',
        'adjustment' => 'setAdjustment',
        'hour_info' => 'setHourInfo',
        'security_object' => 'setSecurityObject',
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
        'name' => 'getName',
        'status' => 'getStatus',
        'project_id' => 'getProjectId',
        'cost_type_id' => 'getCostTypeId',
        'security_code_id' => 'getSecurityCodeId',
        'budget_amount' => 'getBudgetAmount',
        'prognosis_amount' => 'getPrognosisAmount',
        'prognosis_other_amount' => 'getPrognosisOtherAmount',
        'prognosis_reserved_amount' => 'getPrognosisReservedAmount',
        'additional_work_amount' => 'getAdditionalWorkAmount',
        'progress' => 'getProgress',
        'adjustment' => 'getAdjustment',
        'hour_info' => 'getHourInfo',
        'security_object' => 'getSecurityObject',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['cost_type_id'] = isset($data['cost_type_id']) ? $data['cost_type_id'] : null;
        $this->container['security_code_id'] = isset($data['security_code_id']) ? $data['security_code_id'] : null;
        $this->container['budget_amount'] = isset($data['budget_amount']) ? $data['budget_amount'] : null;
        $this->container['prognosis_amount'] = isset($data['prognosis_amount']) ? $data['prognosis_amount'] : null;
        $this->container['prognosis_other_amount'] = isset($data['prognosis_other_amount']) ? $data['prognosis_other_amount'] : null;
        $this->container['prognosis_reserved_amount'] = isset($data['prognosis_reserved_amount']) ? $data['prognosis_reserved_amount'] : null;
        $this->container['additional_work_amount'] = isset($data['additional_work_amount']) ? $data['additional_work_amount'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['adjustment'] = isset($data['adjustment']) ? $data['adjustment'] : null;
        $this->container['hour_info'] = isset($data['hour_info']) ? $data['hour_info'] : null;
        $this->container['security_object'] = isset($data['security_object']) ? $data['security_object'] : null;
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

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['project_id'] === null) {
            $invalidProperties[] = "'project_id' can't be null";
        }
        if ($this->container['cost_type_id'] === null) {
            $invalidProperties[] = "'cost_type_id' can't be null";
        }
        if ($this->container['security_code_id'] === null) {
            $invalidProperties[] = "'security_code_id' can't be null";
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
     * @param int $id The unique identifier of the project security link.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $name The name of the project security link.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status The status of the project security link.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return int
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param int $project_id The project ID of the project security link.
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets cost_type_id
     *
     * @return int
     */
    public function getCostTypeId()
    {
        return $this->container['cost_type_id'];
    }

    /**
     * Sets cost_type_id
     *
     * @param int $cost_type_id The cost type ID of the project security link.
     *
     * @return $this
     */
    public function setCostTypeId($cost_type_id)
    {
        $this->container['cost_type_id'] = $cost_type_id;

        return $this;
    }

    /**
     * Gets security_code_id
     *
     * @return int
     */
    public function getSecurityCodeId()
    {
        return $this->container['security_code_id'];
    }

    /**
     * Sets security_code_id
     *
     * @param int $security_code_id The security code ID of the project security link.
     *
     * @return $this
     */
    public function setSecurityCodeId($security_code_id)
    {
        $this->container['security_code_id'] = $security_code_id;

        return $this;
    }

    /**
     * Gets budget_amount
     *
     * @return string
     */
    public function getBudgetAmount()
    {
        return $this->container['budget_amount'];
    }

    /**
     * Sets budget_amount
     *
     * @param string $budget_amount The budget amount of the project security link.
     *
     * @return $this
     */
    public function setBudgetAmount($budget_amount)
    {
        $this->container['budget_amount'] = $budget_amount;

        return $this;
    }

    /**
     * Gets prognosis_amount
     *
     * @return string
     */
    public function getPrognosisAmount()
    {
        return $this->container['prognosis_amount'];
    }

    /**
     * Sets prognosis_amount
     *
     * @param string $prognosis_amount The prognosis amount of the project security link.
     *
     * @return $this
     */
    public function setPrognosisAmount($prognosis_amount)
    {
        $this->container['prognosis_amount'] = $prognosis_amount;

        return $this;
    }

    /**
     * Gets prognosis_other_amount
     *
     * @return string
     */
    public function getPrognosisOtherAmount()
    {
        return $this->container['prognosis_other_amount'];
    }

    /**
     * Sets prognosis_other_amount
     *
     * @param string $prognosis_other_amount The prognosis other amount of the project security link.
     *
     * @return $this
     */
    public function setPrognosisOtherAmount($prognosis_other_amount)
    {
        $this->container['prognosis_other_amount'] = $prognosis_other_amount;

        return $this;
    }

    /**
     * Gets prognosis_reserved_amount
     *
     * @return string
     */
    public function getPrognosisReservedAmount()
    {
        return $this->container['prognosis_reserved_amount'];
    }

    /**
     * Sets prognosis_reserved_amount
     *
     * @param string $prognosis_reserved_amount The prognosis reserved amount of the project security link.
     *
     * @return $this
     */
    public function setPrognosisReservedAmount($prognosis_reserved_amount)
    {
        $this->container['prognosis_reserved_amount'] = $prognosis_reserved_amount;

        return $this;
    }

    /**
     * Gets additional_work_amount
     *
     * @return string
     */
    public function getAdditionalWorkAmount()
    {
        return $this->container['additional_work_amount'];
    }

    /**
     * Sets additional_work_amount
     *
     * @param string $additional_work_amount The additional work amount of the project security link.
     *
     * @return $this
     */
    public function setAdditionalWorkAmount($additional_work_amount)
    {
        $this->container['additional_work_amount'] = $additional_work_amount;

        return $this;
    }

    /**
     * Gets progress
     *
     * @return string
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     *
     * @param string $progress The total progress amount of the project security link.
     *
     * @return $this
     */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;

        return $this;
    }

    /**
     * Gets adjustment
     *
     * @return int
     */
    public function getAdjustment()
    {
        return $this->container['adjustment'];
    }

    /**
     * Sets adjustment
     *
     * @param int $adjustment The total adjustment amount of the project security link.
     *
     * @return $this
     */
    public function setAdjustment($adjustment)
    {
        $this->container['adjustment'] = $adjustment;

        return $this;
    }

    /**
     * Gets hour_info
     *
     * @return \Swagger\Client\Model\ProjectSecurityLinkHourInfo
     */
    public function getHourInfo()
    {
        return $this->container['hour_info'];
    }

    /**
     * Sets hour_info
     *
     * @param \Swagger\Client\Model\ProjectSecurityLinkHourInfo $hour_info hour_info
     *
     * @return $this
     */
    public function setHourInfo($hour_info)
    {
        $this->container['hour_info'] = $hour_info;

        return $this;
    }

    /**
     * Gets security_object
     *
     * @return \Swagger\Client\Model\CondensedSecurityObject
     */
    public function getSecurityObject()
    {
        return $this->container['security_object'];
    }

    /**
     * Sets security_object
     *
     * @param \Swagger\Client\Model\CondensedSecurityObject $security_object security_object
     *
     * @return $this
     */
    public function setSecurityObject($security_object)
    {
        $this->container['security_object'] = $security_object;

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


