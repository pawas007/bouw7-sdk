<?php
/**
 * ContactFinancialListItem
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
 * ContactFinancialListItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactFinancialListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContactFinancialListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'division_id' => 'int',
        'contact_id' => 'int',
        'gl_account_code' => 'string',
        'gl_account_code_purchase' => 'string',
        'payment_condition_sales' => 'string',
        'payment_condition_purchase' => 'string',
        'code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'division_id' => null,
        'contact_id' => null,
        'gl_account_code' => null,
        'gl_account_code_purchase' => null,
        'payment_condition_sales' => null,
        'payment_condition_purchase' => null,
        'code' => null
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
        'division_id' => 'divisionId',
        'contact_id' => 'contactId',
        'gl_account_code' => 'glAccountCode',
        'gl_account_code_purchase' => 'glAccountCodePurchase',
        'payment_condition_sales' => 'paymentConditionSales',
        'payment_condition_purchase' => 'paymentConditionPurchase',
        'code' => 'code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'division_id' => 'setDivisionId',
        'contact_id' => 'setContactId',
        'gl_account_code' => 'setGlAccountCode',
        'gl_account_code_purchase' => 'setGlAccountCodePurchase',
        'payment_condition_sales' => 'setPaymentConditionSales',
        'payment_condition_purchase' => 'setPaymentConditionPurchase',
        'code' => 'setCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'division_id' => 'getDivisionId',
        'contact_id' => 'getContactId',
        'gl_account_code' => 'getGlAccountCode',
        'gl_account_code_purchase' => 'getGlAccountCodePurchase',
        'payment_condition_sales' => 'getPaymentConditionSales',
        'payment_condition_purchase' => 'getPaymentConditionPurchase',
        'code' => 'getCode'
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
        $this->container['division_id'] = isset($data['division_id']) ? $data['division_id'] : null;
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['gl_account_code'] = isset($data['gl_account_code']) ? $data['gl_account_code'] : null;
        $this->container['gl_account_code_purchase'] = isset($data['gl_account_code_purchase']) ? $data['gl_account_code_purchase'] : null;
        $this->container['payment_condition_sales'] = isset($data['payment_condition_sales']) ? $data['payment_condition_sales'] : null;
        $this->container['payment_condition_purchase'] = isset($data['payment_condition_purchase']) ? $data['payment_condition_purchase'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
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
     * @param int $id The ID of the financial contact details.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets division_id
     *
     * @return int
     */
    public function getDivisionId()
    {
        return $this->container['division_id'];
    }

    /**
     * Sets division_id
     *
     * @param int $division_id The division ID of the financial contact details.
     *
     * @return $this
     */
    public function setDivisionId($division_id)
    {
        $this->container['division_id'] = $division_id;

        return $this;
    }

    /**
     * Gets contact_id
     *
     * @return int
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param int $contact_id The contact ID of the financial contact details.
     *
     * @return $this
     */
    public function setContactId($contact_id)
    {
        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets gl_account_code
     *
     * @return string
     */
    public function getGlAccountCode()
    {
        return $this->container['gl_account_code'];
    }

    /**
     * Sets gl_account_code
     *
     * @param string $gl_account_code The general ledger account code of the financial contact details.
     *
     * @return $this
     */
    public function setGlAccountCode($gl_account_code)
    {
        $this->container['gl_account_code'] = $gl_account_code;

        return $this;
    }

    /**
     * Gets gl_account_code_purchase
     *
     * @return string
     */
    public function getGlAccountCodePurchase()
    {
        return $this->container['gl_account_code_purchase'];
    }

    /**
     * Sets gl_account_code_purchase
     *
     * @param string $gl_account_code_purchase The purchase general ledger account code of the financial contact details.
     *
     * @return $this
     */
    public function setGlAccountCodePurchase($gl_account_code_purchase)
    {
        $this->container['gl_account_code_purchase'] = $gl_account_code_purchase;

        return $this;
    }

    /**
     * Gets payment_condition_sales
     *
     * @return string
     */
    public function getPaymentConditionSales()
    {
        return $this->container['payment_condition_sales'];
    }

    /**
     * Sets payment_condition_sales
     *
     * @param string $payment_condition_sales The default payment condition to use for sales related items.
     *
     * @return $this
     */
    public function setPaymentConditionSales($payment_condition_sales)
    {
        $this->container['payment_condition_sales'] = $payment_condition_sales;

        return $this;
    }

    /**
     * Gets payment_condition_purchase
     *
     * @return string
     */
    public function getPaymentConditionPurchase()
    {
        return $this->container['payment_condition_purchase'];
    }

    /**
     * Sets payment_condition_purchase
     *
     * @param string $payment_condition_purchase The default payment condition to use for purchase related items.
     *
     * @return $this
     */
    public function setPaymentConditionPurchase($payment_condition_purchase)
    {
        $this->container['payment_condition_purchase'] = $payment_condition_purchase;

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
     * @param string $code The code of the financial contact details.
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

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

