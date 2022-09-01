<?php
/**
 * NestedHourLogProjectListItem
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
 * NestedHourLogProjectListItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NestedHourLogProjectListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NestedHourLogProjectListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'status_id' => 'int',
        'name' => 'string',
        'number' => 'string',
        'status' => 'string',
        'branch_id' => 'int',
        'category_id' => 'int',
        'contact_name' => 'string',
        'project_leader_name' => 'string',
        'work_planner_name' => 'string',
        'executor_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'status_id' => null,
        'name' => null,
        'number' => null,
        'status' => null,
        'branch_id' => null,
        'category_id' => null,
        'contact_name' => null,
        'project_leader_name' => null,
        'work_planner_name' => null,
        'executor_name' => null
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
        'status_id' => 'statusId',
        'name' => 'name',
        'number' => 'number',
        'status' => 'status',
        'branch_id' => 'branchId',
        'category_id' => 'categoryId',
        'contact_name' => 'contactName',
        'project_leader_name' => 'projectLeaderName',
        'work_planner_name' => 'workPlannerName',
        'executor_name' => 'executorName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status_id' => 'setStatusId',
        'name' => 'setName',
        'number' => 'setNumber',
        'status' => 'setStatus',
        'branch_id' => 'setBranchId',
        'category_id' => 'setCategoryId',
        'contact_name' => 'setContactName',
        'project_leader_name' => 'setProjectLeaderName',
        'work_planner_name' => 'setWorkPlannerName',
        'executor_name' => 'setExecutorName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status_id' => 'getStatusId',
        'name' => 'getName',
        'number' => 'getNumber',
        'status' => 'getStatus',
        'branch_id' => 'getBranchId',
        'category_id' => 'getCategoryId',
        'contact_name' => 'getContactName',
        'project_leader_name' => 'getProjectLeaderName',
        'work_planner_name' => 'getWorkPlannerName',
        'executor_name' => 'getExecutorName'
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
        $this->container['status_id'] = isset($data['status_id']) ? $data['status_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['branch_id'] = isset($data['branch_id']) ? $data['branch_id'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null;
        $this->container['project_leader_name'] = isset($data['project_leader_name']) ? $data['project_leader_name'] : null;
        $this->container['work_planner_name'] = isset($data['work_planner_name']) ? $data['work_planner_name'] : null;
        $this->container['executor_name'] = isset($data['executor_name']) ? $data['executor_name'] : null;
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
     * @param int $id The ID of the project.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status_id
     *
     * @return int
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     *
     * @param int $status_id The ID of the status of this project.
     *
     * @return $this
     */
    public function setStatusId($status_id)
    {
        $this->container['status_id'] = $status_id;

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
     * @param string $name The name of the project.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number The number of the project.
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The name of the current status of this project.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets branch_id
     *
     * @return int
     */
    public function getBranchId()
    {
        return $this->container['branch_id'];
    }

    /**
     * Sets branch_id
     *
     * @param int $branch_id The ID of the branch of this project.
     *
     * @return $this
     */
    public function setBranchId($branch_id)
    {
        $this->container['branch_id'] = $branch_id;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int $category_id The ID of the category of this project.
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets contact_name
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->container['contact_name'];
    }

    /**
     * Sets contact_name
     *
     * @param string $contact_name The name of the contact associated with this project.
     *
     * @return $this
     */
    public function setContactName($contact_name)
    {
        $this->container['contact_name'] = $contact_name;

        return $this;
    }

    /**
     * Gets project_leader_name
     *
     * @return string
     */
    public function getProjectLeaderName()
    {
        return $this->container['project_leader_name'];
    }

    /**
     * Sets project_leader_name
     *
     * @param string $project_leader_name The full name of the project leader associated with this project.
     *
     * @return $this
     */
    public function setProjectLeaderName($project_leader_name)
    {
        $this->container['project_leader_name'] = $project_leader_name;

        return $this;
    }

    /**
     * Gets work_planner_name
     *
     * @return string
     */
    public function getWorkPlannerName()
    {
        return $this->container['work_planner_name'];
    }

    /**
     * Sets work_planner_name
     *
     * @param string $work_planner_name The full name of the work planner associated with this project.
     *
     * @return $this
     */
    public function setWorkPlannerName($work_planner_name)
    {
        $this->container['work_planner_name'] = $work_planner_name;

        return $this;
    }

    /**
     * Gets executor_name
     *
     * @return string
     */
    public function getExecutorName()
    {
        return $this->container['executor_name'];
    }

    /**
     * Sets executor_name
     *
     * @param string $executor_name The full name of the executor associated with this project.
     *
     * @return $this
     */
    public function setExecutorName($executor_name)
    {
        $this->container['executor_name'] = $executor_name;

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

