<?php
/**
 * ApprovalTemplateCriteria
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
 * ApprovalTemplateCriteria Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApprovalTemplateCriteria implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApprovalTemplateCriteria';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'description' => 'string',
        'workflow' => '\Swagger\Client\Model\CondensedApprovalTemplateWorkflow',
        'type' => 'int',
        'suppliers' => '\Swagger\Client\Model\CondensedContact[]',
        'branch' => '\Swagger\Client\Model\CondensedBranch',
        'project_category' => '\Swagger\Client\Model\CondensedProjectCategory',
        'price_lower_bound' => 'string',
        'price_upper_bound' => 'string',
        'delivery_ticket_matches_invoice_amount' => 'bool',
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
        'description' => null,
        'workflow' => null,
        'type' => null,
        'suppliers' => null,
        'branch' => null,
        'project_category' => null,
        'price_lower_bound' => null,
        'price_upper_bound' => null,
        'delivery_ticket_matches_invoice_amount' => null,
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
        'description' => 'description',
        'workflow' => 'workflow',
        'type' => 'type',
        'suppliers' => 'suppliers',
        'branch' => 'branch',
        'project_category' => 'projectCategory',
        'price_lower_bound' => 'priceLowerBound',
        'price_upper_bound' => 'priceUpperBound',
        'delivery_ticket_matches_invoice_amount' => 'deliveryTicketMatchesInvoiceAmount',
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
        'description' => 'setDescription',
        'workflow' => 'setWorkflow',
        'type' => 'setType',
        'suppliers' => 'setSuppliers',
        'branch' => 'setBranch',
        'project_category' => 'setProjectCategory',
        'price_lower_bound' => 'setPriceLowerBound',
        'price_upper_bound' => 'setPriceUpperBound',
        'delivery_ticket_matches_invoice_amount' => 'setDeliveryTicketMatchesInvoiceAmount',
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
        'description' => 'getDescription',
        'workflow' => 'getWorkflow',
        'type' => 'getType',
        'suppliers' => 'getSuppliers',
        'branch' => 'getBranch',
        'project_category' => 'getProjectCategory',
        'price_lower_bound' => 'getPriceLowerBound',
        'price_upper_bound' => 'getPriceUpperBound',
        'delivery_ticket_matches_invoice_amount' => 'getDeliveryTicketMatchesInvoiceAmount',
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['workflow'] = isset($data['workflow']) ? $data['workflow'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['suppliers'] = isset($data['suppliers']) ? $data['suppliers'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['project_category'] = isset($data['project_category']) ? $data['project_category'] : null;
        $this->container['price_lower_bound'] = isset($data['price_lower_bound']) ? $data['price_lower_bound'] : null;
        $this->container['price_upper_bound'] = isset($data['price_upper_bound']) ? $data['price_upper_bound'] : null;
        $this->container['delivery_ticket_matches_invoice_amount'] = isset($data['delivery_ticket_matches_invoice_amount']) ? $data['delivery_ticket_matches_invoice_amount'] : null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['workflow'] === null) {
            $invalidProperties[] = "'workflow' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['suppliers'] === null) {
            $invalidProperties[] = "'suppliers' can't be null";
        }
        if ($this->container['delivery_ticket_matches_invoice_amount'] === null) {
            $invalidProperties[] = "'delivery_ticket_matches_invoice_amount' can't be null";
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
     * @param int $id ID of the criteria.
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
     * @param string $name Name of the criteria.
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ApprovalTemplateCriteria., must be smaller than or equal to 255.');
        }

        $this->container['name'] = $name;

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
     * @param string $description Description of the criteria.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling ApprovalTemplateCriteria., must be smaller than or equal to 255.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets workflow
     *
     * @return \Swagger\Client\Model\CondensedApprovalTemplateWorkflow
     */
    public function getWorkflow()
    {
        return $this->container['workflow'];
    }

    /**
     * Sets workflow
     *
     * @param \Swagger\Client\Model\CondensedApprovalTemplateWorkflow $workflow workflow
     *
     * @return $this
     */
    public function setWorkflow($workflow)
    {
        $this->container['workflow'] = $workflow;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type Criteria type.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets suppliers
     *
     * @return \Swagger\Client\Model\CondensedContact[]
     */
    public function getSuppliers()
    {
        return $this->container['suppliers'];
    }

    /**
     * Sets suppliers
     *
     * @param \Swagger\Client\Model\CondensedContact[] $suppliers When using the priceLowerBound and or priceUpperBound the criteria will only conflict with criteria with the same supplier(s).
     *
     * @return $this
     */
    public function setSuppliers($suppliers)
    {
        $this->container['suppliers'] = $suppliers;

        return $this;
    }

    /**
     * Gets branch
     *
     * @return \Swagger\Client\Model\CondensedBranch
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     *
     * @param \Swagger\Client\Model\CondensedBranch $branch branch
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets project_category
     *
     * @return \Swagger\Client\Model\CondensedProjectCategory
     */
    public function getProjectCategory()
    {
        return $this->container['project_category'];
    }

    /**
     * Sets project_category
     *
     * @param \Swagger\Client\Model\CondensedProjectCategory $project_category project_category
     *
     * @return $this
     */
    public function setProjectCategory($project_category)
    {
        $this->container['project_category'] = $project_category;

        return $this;
    }

    /**
     * Gets price_lower_bound
     *
     * @return string
     */
    public function getPriceLowerBound()
    {
        return $this->container['price_lower_bound'];
    }

    /**
     * Sets price_lower_bound
     *
     * @param string $price_lower_bound The lower bound price of the criteria. The following 'operators' are available:      *     cost < priceUpperBound in psuedo: priceLowerBound is NULL and priceUpperBound is not NULL.      *     cost > priceLowerBound in psuedo: priceLowerBound is NOT NULL and priceUpperBound is NULL.      *     cost = priceLowerBound in psuedo: priceLowerBound is NOT NULL and priceUpperBound is NOT NULL and EQUAL to each other.      *     cost > priceLowerBound and cost < priceUpperBound in psuedo: priceLowerBound is NOT NULL and priceUpperBound is NOT NULL and NOT EQUAL to each other.      *
     *
     * @return $this
     */
    public function setPriceLowerBound($price_lower_bound)
    {
        $this->container['price_lower_bound'] = $price_lower_bound;

        return $this;
    }

    /**
     * Gets price_upper_bound
     *
     * @return string
     */
    public function getPriceUpperBound()
    {
        return $this->container['price_upper_bound'];
    }

    /**
     * Sets price_upper_bound
     *
     * @param string $price_upper_bound The upper bound price of the criteria. The following 'operators' are available:      *     cost < priceUpperBound in psuedo: priceLowerBound is NULL and priceUpperBound is not NULL.      *     cost > priceLowerBound in psuedo: priceLowerBound is NOT NULL and priceUpperBound is NULL.      *     cost = priceLowerBound in psuedo: priceLowerBound is NOT NULL and priceUpperBound is NOT NULL and EQUAL to each other.      *     cost > priceLowerBound and cost < priceUpperBound in psuedo: priceLowerBound is NOT NULL and priceUpperBound is NOT NULL and NOT EQUAL to each other.      *
     *
     * @return $this
     */
    public function setPriceUpperBound($price_upper_bound)
    {
        $this->container['price_upper_bound'] = $price_upper_bound;

        return $this;
    }

    /**
     * Gets delivery_ticket_matches_invoice_amount
     *
     * @return bool
     */
    public function getDeliveryTicketMatchesInvoiceAmount()
    {
        return $this->container['delivery_ticket_matches_invoice_amount'];
    }

    /**
     * Sets delivery_ticket_matches_invoice_amount
     *
     * @param bool $delivery_ticket_matches_invoice_amount Whether or not the delivery ticket price has to match the invoice amount. Only used in combination with type 0 (Purchase invoice).
     *
     * @return $this
     */
    public function setDeliveryTicketMatchesInvoiceAmount($delivery_ticket_matches_invoice_amount)
    {
        $this->container['delivery_ticket_matches_invoice_amount'] = $delivery_ticket_matches_invoice_amount;

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


