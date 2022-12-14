<?php
/**
 * BookingList
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
 * BookingList Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BookingList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BookingList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'employee_hours' => '\Swagger\Client\Model\EmployeeHourLogBooking[]',
        'contact_hours' => '\Swagger\Client\Model\ContactHourLogBooking[]',
        'material' => '\Swagger\Client\Model\MaterialBooking[]',
        'equipment' => '\Swagger\Client\Model\EquipmentBooking2[]',
        'garbage' => '\Swagger\Client\Model\WasteBooking2[]',
        'delivery_tickets' => '\Swagger\Client\Model\DeliveryTicketBooking[]',
        'purchase_invoice_lines' => '\Swagger\Client\Model\PurchaseInvoiceLineBooking[]',
        'summary' => '\Swagger\Client\Model\BookingSummary'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'employee_hours' => null,
        'contact_hours' => null,
        'material' => null,
        'equipment' => null,
        'garbage' => null,
        'delivery_tickets' => null,
        'purchase_invoice_lines' => null,
        'summary' => null
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
        'employee_hours' => 'employeeHours',
        'contact_hours' => 'contactHours',
        'material' => 'material',
        'equipment' => 'equipment',
        'garbage' => 'garbage',
        'delivery_tickets' => 'deliveryTickets',
        'purchase_invoice_lines' => 'purchaseInvoiceLines',
        'summary' => 'summary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_hours' => 'setEmployeeHours',
        'contact_hours' => 'setContactHours',
        'material' => 'setMaterial',
        'equipment' => 'setEquipment',
        'garbage' => 'setGarbage',
        'delivery_tickets' => 'setDeliveryTickets',
        'purchase_invoice_lines' => 'setPurchaseInvoiceLines',
        'summary' => 'setSummary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_hours' => 'getEmployeeHours',
        'contact_hours' => 'getContactHours',
        'material' => 'getMaterial',
        'equipment' => 'getEquipment',
        'garbage' => 'getGarbage',
        'delivery_tickets' => 'getDeliveryTickets',
        'purchase_invoice_lines' => 'getPurchaseInvoiceLines',
        'summary' => 'getSummary'
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
        $this->container['employee_hours'] = isset($data['employee_hours']) ? $data['employee_hours'] : null;
        $this->container['contact_hours'] = isset($data['contact_hours']) ? $data['contact_hours'] : null;
        $this->container['material'] = isset($data['material']) ? $data['material'] : null;
        $this->container['equipment'] = isset($data['equipment']) ? $data['equipment'] : null;
        $this->container['garbage'] = isset($data['garbage']) ? $data['garbage'] : null;
        $this->container['delivery_tickets'] = isset($data['delivery_tickets']) ? $data['delivery_tickets'] : null;
        $this->container['purchase_invoice_lines'] = isset($data['purchase_invoice_lines']) ? $data['purchase_invoice_lines'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
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
     * Gets employee_hours
     *
     * @return \Swagger\Client\Model\EmployeeHourLogBooking[]
     */
    public function getEmployeeHours()
    {
        return $this->container['employee_hours'];
    }

    /**
     * Sets employee_hours
     *
     * @param \Swagger\Client\Model\EmployeeHourLogBooking[] $employee_hours The employee hours list.
     *
     * @return $this
     */
    public function setEmployeeHours($employee_hours)
    {
        $this->container['employee_hours'] = $employee_hours;

        return $this;
    }

    /**
     * Gets contact_hours
     *
     * @return \Swagger\Client\Model\ContactHourLogBooking[]
     */
    public function getContactHours()
    {
        return $this->container['contact_hours'];
    }

    /**
     * Sets contact_hours
     *
     * @param \Swagger\Client\Model\ContactHourLogBooking[] $contact_hours The contact hourlog booking list.
     *
     * @return $this
     */
    public function setContactHours($contact_hours)
    {
        $this->container['contact_hours'] = $contact_hours;

        return $this;
    }

    /**
     * Gets material
     *
     * @return \Swagger\Client\Model\MaterialBooking[]
     */
    public function getMaterial()
    {
        return $this->container['material'];
    }

    /**
     * Sets material
     *
     * @param \Swagger\Client\Model\MaterialBooking[] $material The material booking list.
     *
     * @return $this
     */
    public function setMaterial($material)
    {
        $this->container['material'] = $material;

        return $this;
    }

    /**
     * Gets equipment
     *
     * @return \Swagger\Client\Model\EquipmentBooking2[]
     */
    public function getEquipment()
    {
        return $this->container['equipment'];
    }

    /**
     * Sets equipment
     *
     * @param \Swagger\Client\Model\EquipmentBooking2[] $equipment The equipment booking list.
     *
     * @return $this
     */
    public function setEquipment($equipment)
    {
        $this->container['equipment'] = $equipment;

        return $this;
    }

    /**
     * Gets garbage
     *
     * @return \Swagger\Client\Model\WasteBooking2[]
     */
    public function getGarbage()
    {
        return $this->container['garbage'];
    }

    /**
     * Sets garbage
     *
     * @param \Swagger\Client\Model\WasteBooking2[] $garbage The waste booking list.
     *
     * @return $this
     */
    public function setGarbage($garbage)
    {
        $this->container['garbage'] = $garbage;

        return $this;
    }

    /**
     * Gets delivery_tickets
     *
     * @return \Swagger\Client\Model\DeliveryTicketBooking[]
     */
    public function getDeliveryTickets()
    {
        return $this->container['delivery_tickets'];
    }

    /**
     * Sets delivery_tickets
     *
     * @param \Swagger\Client\Model\DeliveryTicketBooking[] $delivery_tickets The delivery ticket list.
     *
     * @return $this
     */
    public function setDeliveryTickets($delivery_tickets)
    {
        $this->container['delivery_tickets'] = $delivery_tickets;

        return $this;
    }

    /**
     * Gets purchase_invoice_lines
     *
     * @return \Swagger\Client\Model\PurchaseInvoiceLineBooking[]
     */
    public function getPurchaseInvoiceLines()
    {
        return $this->container['purchase_invoice_lines'];
    }

    /**
     * Sets purchase_invoice_lines
     *
     * @param \Swagger\Client\Model\PurchaseInvoiceLineBooking[] $purchase_invoice_lines The purchase invoice line list.
     *
     * @return $this
     */
    public function setPurchaseInvoiceLines($purchase_invoice_lines)
    {
        $this->container['purchase_invoice_lines'] = $purchase_invoice_lines;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return \Swagger\Client\Model\BookingSummary
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param \Swagger\Client\Model\BookingSummary $summary summary
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

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


