<?php
/**
 * EmployeeHourLogListItem
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
 * EmployeeHourLogListItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmployeeHourLogListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmployeeHourLogListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'employee' => '\Swagger\Client\Model\NestedEmployeeListItem',
        'is_external' => 'bool',
        'start_time' => 'string',
        'end_time' => 'string',
        'is_paid_off' => 'bool',
        'is_scab_paid_off' => 'bool',
        'id' => 'int',
        'booking_status' => 'int',
        'type' => '\Swagger\Client\Model\NestedHourTypeListItem',
        'project' => '\Swagger\Client\Model\NestedHourLogProjectListItem',
        'project_security_link' => '\Swagger\Client\Model\NestedProjectSecurityCodeLinkListItem',
        'hours' => 'string',
        'log_date' => 'string',
        'comment' => 'string',
        'hourly_rate' => 'string',
        'invoiced_amount' => 'string',
        'is_approved' => 'bool',
        'approved_by' => '\Swagger\Client\Model\NestedUserListItem',
        'approved_at' => 'string',
        'invoice_line' => '\Swagger\Client\Model\NestedInvoiceLineListItem',
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
        'employee' => null,
        'is_external' => null,
        'start_time' => null,
        'end_time' => null,
        'is_paid_off' => null,
        'is_scab_paid_off' => null,
        'id' => null,
        'booking_status' => null,
        'type' => null,
        'project' => null,
        'project_security_link' => null,
        'hours' => null,
        'log_date' => null,
        'comment' => null,
        'hourly_rate' => null,
        'invoiced_amount' => null,
        'is_approved' => null,
        'approved_by' => null,
        'approved_at' => 'datetime',
        'invoice_line' => null,
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
        'employee' => 'employee',
        'is_external' => 'isExternal',
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'is_paid_off' => 'isPaidOff',
        'is_scab_paid_off' => 'isScabPaidOff',
        'id' => 'id',
        'booking_status' => 'bookingStatus',
        'type' => 'type',
        'project' => 'project',
        'project_security_link' => 'projectSecurityLink',
        'hours' => 'hours',
        'log_date' => 'logDate',
        'comment' => 'comment',
        'hourly_rate' => 'hourlyRate',
        'invoiced_amount' => 'invoicedAmount',
        'is_approved' => 'isApproved',
        'approved_by' => 'approvedBy',
        'approved_at' => 'approvedAt',
        'invoice_line' => 'invoiceLine',
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
        'employee' => 'setEmployee',
        'is_external' => 'setIsExternal',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'is_paid_off' => 'setIsPaidOff',
        'is_scab_paid_off' => 'setIsScabPaidOff',
        'id' => 'setId',
        'booking_status' => 'setBookingStatus',
        'type' => 'setType',
        'project' => 'setProject',
        'project_security_link' => 'setProjectSecurityLink',
        'hours' => 'setHours',
        'log_date' => 'setLogDate',
        'comment' => 'setComment',
        'hourly_rate' => 'setHourlyRate',
        'invoiced_amount' => 'setInvoicedAmount',
        'is_approved' => 'setIsApproved',
        'approved_by' => 'setApprovedBy',
        'approved_at' => 'setApprovedAt',
        'invoice_line' => 'setInvoiceLine',
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
        'employee' => 'getEmployee',
        'is_external' => 'getIsExternal',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'is_paid_off' => 'getIsPaidOff',
        'is_scab_paid_off' => 'getIsScabPaidOff',
        'id' => 'getId',
        'booking_status' => 'getBookingStatus',
        'type' => 'getType',
        'project' => 'getProject',
        'project_security_link' => 'getProjectSecurityLink',
        'hours' => 'getHours',
        'log_date' => 'getLogDate',
        'comment' => 'getComment',
        'hourly_rate' => 'getHourlyRate',
        'invoiced_amount' => 'getInvoicedAmount',
        'is_approved' => 'getIsApproved',
        'approved_by' => 'getApprovedBy',
        'approved_at' => 'getApprovedAt',
        'invoice_line' => 'getInvoiceLine',
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
        $this->container['employee'] = isset($data['employee']) ? $data['employee'] : null;
        $this->container['is_external'] = isset($data['is_external']) ? $data['is_external'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['is_paid_off'] = isset($data['is_paid_off']) ? $data['is_paid_off'] : null;
        $this->container['is_scab_paid_off'] = isset($data['is_scab_paid_off']) ? $data['is_scab_paid_off'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['booking_status'] = isset($data['booking_status']) ? $data['booking_status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['project_security_link'] = isset($data['project_security_link']) ? $data['project_security_link'] : null;
        $this->container['hours'] = isset($data['hours']) ? $data['hours'] : null;
        $this->container['log_date'] = isset($data['log_date']) ? $data['log_date'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['hourly_rate'] = isset($data['hourly_rate']) ? $data['hourly_rate'] : null;
        $this->container['invoiced_amount'] = isset($data['invoiced_amount']) ? $data['invoiced_amount'] : null;
        $this->container['is_approved'] = isset($data['is_approved']) ? $data['is_approved'] : null;
        $this->container['approved_by'] = isset($data['approved_by']) ? $data['approved_by'] : null;
        $this->container['approved_at'] = isset($data['approved_at']) ? $data['approved_at'] : null;
        $this->container['invoice_line'] = isset($data['invoice_line']) ? $data['invoice_line'] : null;
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
     * Gets employee
     *
     * @return \Swagger\Client\Model\NestedEmployeeListItem
     */
    public function getEmployee()
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     *
     * @param \Swagger\Client\Model\NestedEmployeeListItem $employee employee
     *
     * @return $this
     */
    public function setEmployee($employee)
    {
        $this->container['employee'] = $employee;

        return $this;
    }

    /**
     * Gets is_external
     *
     * @return bool
     */
    public function getIsExternal()
    {
        return $this->container['is_external'];
    }

    /**
     * Sets is_external
     *
     * @param bool $is_external Whether the employee associated with this hour log entry is external.
     *
     * @return $this
     */
    public function setIsExternal($is_external)
    {
        $this->container['is_external'] = $is_external;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param string $start_time The start time of the workday. Only available if enabled for your organization.
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return string
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param string $end_time The end time of the workday. Only available if enabled for your organization.
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets is_paid_off
     *
     * @return bool
     */
    public function getIsPaidOff()
    {
        return $this->container['is_paid_off'];
    }

    /**
     * Sets is_paid_off
     *
     * @param bool $is_paid_off Whether this price of this hour log entry has been paid off.
     *
     * @return $this
     */
    public function setIsPaidOff($is_paid_off)
    {
        $this->container['is_paid_off'] = $is_paid_off;

        return $this;
    }

    /**
     * Gets is_scab_paid_off
     *
     * @return bool
     */
    public function getIsScabPaidOff()
    {
        return $this->container['is_scab_paid_off'];
    }

    /**
     * Sets is_scab_paid_off
     *
     * @param bool $is_scab_paid_off Whether this price of this hour log entry has been paid off for scab users.
     *
     * @return $this
     */
    public function setIsScabPaidOff($is_scab_paid_off)
    {
        $this->container['is_scab_paid_off'] = $is_scab_paid_off;

        return $this;
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
     * @param int $id The ID of the hour log.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets booking_status
     *
     * @return int
     */
    public function getBookingStatus()
    {
        return $this->container['booking_status'];
    }

    /**
     * Sets booking_status
     *
     * @param int $booking_status The booking status of this entry. 0 = Registered, 1 = Invoiced, 2 = Not billable, 3 = Credited.
     *
     * @return $this
     */
    public function setBookingStatus($booking_status)
    {
        $this->container['booking_status'] = $booking_status;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Swagger\Client\Model\NestedHourTypeListItem
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Swagger\Client\Model\NestedHourTypeListItem $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \Swagger\Client\Model\NestedHourLogProjectListItem
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \Swagger\Client\Model\NestedHourLogProjectListItem $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets project_security_link
     *
     * @return \Swagger\Client\Model\NestedProjectSecurityCodeLinkListItem
     */
    public function getProjectSecurityLink()
    {
        return $this->container['project_security_link'];
    }

    /**
     * Sets project_security_link
     *
     * @param \Swagger\Client\Model\NestedProjectSecurityCodeLinkListItem $project_security_link project_security_link
     *
     * @return $this
     */
    public function setProjectSecurityLink($project_security_link)
    {
        $this->container['project_security_link'] = $project_security_link;

        return $this;
    }

    /**
     * Gets hours
     *
     * @return string
     */
    public function getHours()
    {
        return $this->container['hours'];
    }

    /**
     * Sets hours
     *
     * @param string $hours The amount of hours logged to this entry.
     *
     * @return $this
     */
    public function setHours($hours)
    {
        $this->container['hours'] = $hours;

        return $this;
    }

    /**
     * Gets log_date
     *
     * @return string
     */
    public function getLogDate()
    {
        return $this->container['log_date'];
    }

    /**
     * Sets log_date
     *
     * @param string $log_date The log date of this entry. ATOM format.
     *
     * @return $this
     */
    public function setLogDate($log_date)
    {
        $this->container['log_date'] = $log_date;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment The remark added to this entry.
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

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
     * Gets invoiced_amount
     *
     * @return string
     */
    public function getInvoicedAmount()
    {
        return $this->container['invoiced_amount'];
    }

    /**
     * Sets invoiced_amount
     *
     * @param string $invoiced_amount The amount to invoice for this hour log entry.
     *
     * @return $this
     */
    public function setInvoicedAmount($invoiced_amount)
    {
        $this->container['invoiced_amount'] = $invoiced_amount;

        return $this;
    }

    /**
     * Gets is_approved
     *
     * @return bool
     */
    public function getIsApproved()
    {
        return $this->container['is_approved'];
    }

    /**
     * Sets is_approved
     *
     * @param bool $is_approved Whether this hour log entry has been approved for processing.
     *
     * @return $this
     */
    public function setIsApproved($is_approved)
    {
        $this->container['is_approved'] = $is_approved;

        return $this;
    }

    /**
     * Gets approved_by
     *
     * @return \Swagger\Client\Model\NestedUserListItem
     */
    public function getApprovedBy()
    {
        return $this->container['approved_by'];
    }

    /**
     * Sets approved_by
     *
     * @param \Swagger\Client\Model\NestedUserListItem $approved_by approved_by
     *
     * @return $this
     */
    public function setApprovedBy($approved_by)
    {
        $this->container['approved_by'] = $approved_by;

        return $this;
    }

    /**
     * Gets approved_at
     *
     * @return string
     */
    public function getApprovedAt()
    {
        return $this->container['approved_at'];
    }

    /**
     * Sets approved_at
     *
     * @param string $approved_at The time this hour log entry was approved at.
     *
     * @return $this
     */
    public function setApprovedAt($approved_at)
    {
        $this->container['approved_at'] = $approved_at;

        return $this;
    }

    /**
     * Gets invoice_line
     *
     * @return \Swagger\Client\Model\NestedInvoiceLineListItem
     */
    public function getInvoiceLine()
    {
        return $this->container['invoice_line'];
    }

    /**
     * Sets invoice_line
     *
     * @param \Swagger\Client\Model\NestedInvoiceLineListItem $invoice_line invoice_line
     *
     * @return $this
     */
    public function setInvoiceLine($invoice_line)
    {
        $this->container['invoice_line'] = $invoice_line;

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


