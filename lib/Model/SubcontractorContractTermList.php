<?php
/**
 * SubcontractorContractTermList
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
 * SubcontractorContractTermList Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubcontractorContractTermList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubcontractorContractTermList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'items' => '\Swagger\Client\Model\SubcontractorContractTermListItem[]',
        'amount' => 'string',
        'amount_to_receive' => 'string',
        'sub_total' => 'string',
        'cost_to_receive' => 'string',
        'cost_received' => 'string',
        'count' => 'int',
        'limit' => 'int',
        'offset' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'items' => null,
        'amount' => null,
        'amount_to_receive' => null,
        'sub_total' => null,
        'cost_to_receive' => null,
        'cost_received' => null,
        'count' => null,
        'limit' => null,
        'offset' => null
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
        'items' => 'items',
        'amount' => 'amount',
        'amount_to_receive' => 'amountToReceive',
        'sub_total' => 'subTotal',
        'cost_to_receive' => 'costToReceive',
        'cost_received' => 'costReceived',
        'count' => 'count',
        'limit' => 'limit',
        'offset' => 'offset'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'items' => 'setItems',
        'amount' => 'setAmount',
        'amount_to_receive' => 'setAmountToReceive',
        'sub_total' => 'setSubTotal',
        'cost_to_receive' => 'setCostToReceive',
        'cost_received' => 'setCostReceived',
        'count' => 'setCount',
        'limit' => 'setLimit',
        'offset' => 'setOffset'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'items' => 'getItems',
        'amount' => 'getAmount',
        'amount_to_receive' => 'getAmountToReceive',
        'sub_total' => 'getSubTotal',
        'cost_to_receive' => 'getCostToReceive',
        'cost_received' => 'getCostReceived',
        'count' => 'getCount',
        'limit' => 'getLimit',
        'offset' => 'getOffset'
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
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['amount_to_receive'] = isset($data['amount_to_receive']) ? $data['amount_to_receive'] : null;
        $this->container['sub_total'] = isset($data['sub_total']) ? $data['sub_total'] : null;
        $this->container['cost_to_receive'] = isset($data['cost_to_receive']) ? $data['cost_to_receive'] : null;
        $this->container['cost_received'] = isset($data['cost_received']) ? $data['cost_received'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
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
     * Gets items
     *
     * @return \Swagger\Client\Model\SubcontractorContractTermListItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Swagger\Client\Model\SubcontractorContractTermListItem[] $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount The sum of all subcontractor contract term amounts.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amount_to_receive
     *
     * @return string
     */
    public function getAmountToReceive()
    {
        return $this->container['amount_to_receive'];
    }

    /**
     * Sets amount_to_receive
     *
     * @param string $amount_to_receive The sum of all subcontractor contract term amounts to receive.
     *
     * @return $this
     */
    public function setAmountToReceive($amount_to_receive)
    {
        $this->container['amount_to_receive'] = $amount_to_receive;

        return $this;
    }

    /**
     * Gets sub_total
     *
     * @return string
     */
    public function getSubTotal()
    {
        return $this->container['sub_total'];
    }

    /**
     * Sets sub_total
     *
     * @param string $sub_total The sum of all subcontractor contract term subtotals, excluding VAT.
     *
     * @return $this
     */
    public function setSubTotal($sub_total)
    {
        $this->container['sub_total'] = $sub_total;

        return $this;
    }

    /**
     * Gets cost_to_receive
     *
     * @return string
     */
    public function getCostToReceive()
    {
        return $this->container['cost_to_receive'];
    }

    /**
     * Sets cost_to_receive
     *
     * @param string $cost_to_receive The sum of all subcontractor contract term costs to receive.
     *
     * @return $this
     */
    public function setCostToReceive($cost_to_receive)
    {
        $this->container['cost_to_receive'] = $cost_to_receive;

        return $this;
    }

    /**
     * Gets cost_received
     *
     * @return string
     */
    public function getCostReceived()
    {
        return $this->container['cost_received'];
    }

    /**
     * Sets cost_received
     *
     * @param string $cost_received The sum of all subcontractor contract term received costs.
     *
     * @return $this
     */
    public function setCostReceived($cost_received)
    {
        $this->container['cost_received'] = $cost_received;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count The total amount of records in the entire collection.
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int $limit The amount of results, as requested.
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int $offset The starting index.
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

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


