<?php
/**
 * PropertyAsset
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
 * PropertyAsset Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertyAsset implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PropertyAsset';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'number' => 'string',
        'name' => 'string',
        'project' => '\Swagger\Client\Model\CondensedProject',
        'projects' => '\Swagger\Client\Model\CondensedProject[]',
        'invoice_contact' => '\Swagger\Client\Model\CondensedContact',
        'resident_contact' => '\Swagger\Client\Model\CondensedContact',
        'description' => 'string',
        'street_name' => 'string',
        'house_number' => 'string',
        'postcode' => 'string',
        'city' => 'string',
        'country' => 'string',
        'first_delivery_date' => 'string',
        'second_delivery_date' => 'string',
        'created_at' => 'string',
        'created_by' => 'string',
        'updated_at' => 'string',
        'updated_by' => 'string',
        'custom_attribute_values' => '\Swagger\Client\Model\CondensedCustomAttributeValue[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'number' => null,
        'name' => null,
        'project' => null,
        'projects' => null,
        'invoice_contact' => null,
        'resident_contact' => null,
        'description' => null,
        'street_name' => null,
        'house_number' => null,
        'postcode' => null,
        'city' => null,
        'country' => null,
        'first_delivery_date' => null,
        'second_delivery_date' => null,
        'created_at' => null,
        'created_by' => null,
        'updated_at' => null,
        'updated_by' => null,
        'custom_attribute_values' => null
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
        'number' => 'number',
        'name' => 'name',
        'project' => 'project',
        'projects' => 'projects',
        'invoice_contact' => 'invoiceContact',
        'resident_contact' => 'residentContact',
        'description' => 'description',
        'street_name' => 'streetName',
        'house_number' => 'houseNumber',
        'postcode' => 'postcode',
        'city' => 'city',
        'country' => 'country',
        'first_delivery_date' => 'firstDeliveryDate',
        'second_delivery_date' => 'secondDeliveryDate',
        'created_at' => 'createdAt',
        'created_by' => 'createdBy',
        'updated_at' => 'updatedAt',
        'updated_by' => 'updatedBy',
        'custom_attribute_values' => 'customAttributeValues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'number' => 'setNumber',
        'name' => 'setName',
        'project' => 'setProject',
        'projects' => 'setProjects',
        'invoice_contact' => 'setInvoiceContact',
        'resident_contact' => 'setResidentContact',
        'description' => 'setDescription',
        'street_name' => 'setStreetName',
        'house_number' => 'setHouseNumber',
        'postcode' => 'setPostcode',
        'city' => 'setCity',
        'country' => 'setCountry',
        'first_delivery_date' => 'setFirstDeliveryDate',
        'second_delivery_date' => 'setSecondDeliveryDate',
        'created_at' => 'setCreatedAt',
        'created_by' => 'setCreatedBy',
        'updated_at' => 'setUpdatedAt',
        'updated_by' => 'setUpdatedBy',
        'custom_attribute_values' => 'setCustomAttributeValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'number' => 'getNumber',
        'name' => 'getName',
        'project' => 'getProject',
        'projects' => 'getProjects',
        'invoice_contact' => 'getInvoiceContact',
        'resident_contact' => 'getResidentContact',
        'description' => 'getDescription',
        'street_name' => 'getStreetName',
        'house_number' => 'getHouseNumber',
        'postcode' => 'getPostcode',
        'city' => 'getCity',
        'country' => 'getCountry',
        'first_delivery_date' => 'getFirstDeliveryDate',
        'second_delivery_date' => 'getSecondDeliveryDate',
        'created_at' => 'getCreatedAt',
        'created_by' => 'getCreatedBy',
        'updated_at' => 'getUpdatedAt',
        'updated_by' => 'getUpdatedBy',
        'custom_attribute_values' => 'getCustomAttributeValues'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['projects'] = isset($data['projects']) ? $data['projects'] : null;
        $this->container['invoice_contact'] = isset($data['invoice_contact']) ? $data['invoice_contact'] : null;
        $this->container['resident_contact'] = isset($data['resident_contact']) ? $data['resident_contact'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['street_name'] = isset($data['street_name']) ? $data['street_name'] : null;
        $this->container['house_number'] = isset($data['house_number']) ? $data['house_number'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['first_delivery_date'] = isset($data['first_delivery_date']) ? $data['first_delivery_date'] : null;
        $this->container['second_delivery_date'] = isset($data['second_delivery_date']) ? $data['second_delivery_date'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['updated_by'] = isset($data['updated_by']) ? $data['updated_by'] : null;
        $this->container['custom_attribute_values'] = isset($data['custom_attribute_values']) ? $data['custom_attribute_values'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ((mb_strlen($this->container['number']) > 255)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['invoice_contact'] === null) {
            $invalidProperties[] = "'invoice_contact' can't be null";
        }
        if (!is_null($this->container['street_name']) && (mb_strlen($this->container['street_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'street_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['house_number']) && (mb_strlen($this->container['house_number']) > 50)) {
            $invalidProperties[] = "invalid value for 'house_number', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['postcode']) && (mb_strlen($this->container['postcode']) > 20)) {
            $invalidProperties[] = "invalid value for 'postcode', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 255)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
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
     * @param int $id ID of the PropertyAsset.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $number Number for the PropertyAsset.
     *
     * @return $this
     */
    public function setNumber($number)
    {
        if ((mb_strlen($number) > 255)) {
            throw new \InvalidArgumentException('invalid length for $number when calling PropertyAsset., must be smaller than or equal to 255.');
        }

        $this->container['number'] = $number;

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
     * @param string $name Name of the PropertyAsset.
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PropertyAsset., must be smaller than or equal to 255.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \Swagger\Client\Model\CondensedProject
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \Swagger\Client\Model\CondensedProject $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets projects
     *
     * @return \Swagger\Client\Model\CondensedProject[]
     */
    public function getProjects()
    {
        return $this->container['projects'];
    }

    /**
     * Sets projects
     *
     * @param \Swagger\Client\Model\CondensedProject[] $projects The projects beloning to this PropertyAsset.
     *
     * @return $this
     */
    public function setProjects($projects)
    {
        $this->container['projects'] = $projects;

        return $this;
    }

    /**
     * Gets invoice_contact
     *
     * @return \Swagger\Client\Model\CondensedContact
     */
    public function getInvoiceContact()
    {
        return $this->container['invoice_contact'];
    }

    /**
     * Sets invoice_contact
     *
     * @param \Swagger\Client\Model\CondensedContact $invoice_contact invoice_contact
     *
     * @return $this
     */
    public function setInvoiceContact($invoice_contact)
    {
        $this->container['invoice_contact'] = $invoice_contact;

        return $this;
    }

    /**
     * Gets resident_contact
     *
     * @return \Swagger\Client\Model\CondensedContact
     */
    public function getResidentContact()
    {
        return $this->container['resident_contact'];
    }

    /**
     * Sets resident_contact
     *
     * @param \Swagger\Client\Model\CondensedContact $resident_contact resident_contact
     *
     * @return $this
     */
    public function setResidentContact($resident_contact)
    {
        $this->container['resident_contact'] = $resident_contact;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description for the PropertyAsset.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets street_name
     *
     * @return string
     */
    public function getStreetName()
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name
     *
     * @param string $street_name Street name of the PropertyAsset.
     *
     * @return $this
     */
    public function setStreetName($street_name)
    {
        if (!is_null($street_name) && (mb_strlen($street_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $street_name when calling PropertyAsset., must be smaller than or equal to 255.');
        }

        $this->container['street_name'] = $street_name;

        return $this;
    }

    /**
     * Gets house_number
     *
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param string $house_number House number (incl. addition) of the PropertyAsset.
     *
     * @return $this
     */
    public function setHouseNumber($house_number)
    {
        if (!is_null($house_number) && (mb_strlen($house_number) > 50)) {
            throw new \InvalidArgumentException('invalid length for $house_number when calling PropertyAsset., must be smaller than or equal to 50.');
        }

        $this->container['house_number'] = $house_number;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode Postcode of the PropertyAsset.
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        if (!is_null($postcode) && (mb_strlen($postcode) > 20)) {
            throw new \InvalidArgumentException('invalid length for $postcode when calling PropertyAsset., must be smaller than or equal to 20.');
        }

        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city City of the PropertyAsset.
     *
     * @return $this
     */
    public function setCity($city)
    {
        if (!is_null($city) && (mb_strlen($city) > 255)) {
            throw new \InvalidArgumentException('invalid length for $city when calling PropertyAsset., must be smaller than or equal to 255.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country ISO 3166-1[alpha2] country code of the PropertyAsset.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        if (!is_null($country) && (mb_strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling PropertyAsset., must be smaller than or equal to 2.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets first_delivery_date
     *
     * @return string
     */
    public function getFirstDeliveryDate()
    {
        return $this->container['first_delivery_date'];
    }

    /**
     * Sets first_delivery_date
     *
     * @param string $first_delivery_date First delivery date of the PropertyAsset.
     *
     * @return $this
     */
    public function setFirstDeliveryDate($first_delivery_date)
    {
        $this->container['first_delivery_date'] = $first_delivery_date;

        return $this;
    }

    /**
     * Gets second_delivery_date
     *
     * @return string
     */
    public function getSecondDeliveryDate()
    {
        return $this->container['second_delivery_date'];
    }

    /**
     * Sets second_delivery_date
     *
     * @param string $second_delivery_date Second delivery date of the PropertyAsset.
     *
     * @return $this
     */
    public function setSecondDeliveryDate($second_delivery_date)
    {
        $this->container['second_delivery_date'] = $second_delivery_date;

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
     * Gets custom_attribute_values
     *
     * @return \Swagger\Client\Model\CondensedCustomAttributeValue[]
     */
    public function getCustomAttributeValues()
    {
        return $this->container['custom_attribute_values'];
    }

    /**
     * Sets custom_attribute_values
     *
     * @param \Swagger\Client\Model\CondensedCustomAttributeValue[] $custom_attribute_values A list of CustomAttributeValues belonging to the instance.
     *
     * @return $this
     */
    public function setCustomAttributeValues($custom_attribute_values)
    {
        $this->container['custom_attribute_values'] = $custom_attribute_values;

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

