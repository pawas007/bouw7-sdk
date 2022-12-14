<?php
/**
 * Division
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
 * Division Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Division implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Division';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'description' => 'string',
        'exact_division_id' => 'string',
        'gl_account_code' => 'string',
        'gl_account_code_purchase' => 'string',
        'journal_code' => 'string',
        'journal_code_purchase' => 'string',
        'journal_code_work_in_progress' => 'string',
        'exact_payment_condition_sales' => 'string',
        'exact_payment_condition_purchase' => 'string',
        'sales_invoice_number_prefix' => 'string',
        'purchase_invoice_import_branch' => '\Swagger\Client\Model\CondensedBranch',
        'work_in_progress_settings' => '\Swagger\Client\Model\DivisionWipSettings'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'description' => null,
        'exact_division_id' => null,
        'gl_account_code' => null,
        'gl_account_code_purchase' => null,
        'journal_code' => null,
        'journal_code_purchase' => null,
        'journal_code_work_in_progress' => null,
        'exact_payment_condition_sales' => null,
        'exact_payment_condition_purchase' => null,
        'sales_invoice_number_prefix' => null,
        'purchase_invoice_import_branch' => null,
        'work_in_progress_settings' => null
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
        'description' => 'description',
        'exact_division_id' => 'exactDivisionId',
        'gl_account_code' => 'glAccountCode',
        'gl_account_code_purchase' => 'glAccountCodePurchase',
        'journal_code' => 'journalCode',
        'journal_code_purchase' => 'journalCodePurchase',
        'journal_code_work_in_progress' => 'journalCodeWorkInProgress',
        'exact_payment_condition_sales' => 'exactPaymentConditionSales',
        'exact_payment_condition_purchase' => 'exactPaymentConditionPurchase',
        'sales_invoice_number_prefix' => 'salesInvoiceNumberPrefix',
        'purchase_invoice_import_branch' => 'purchaseInvoiceImportBranch',
        'work_in_progress_settings' => 'workInProgressSettings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'description' => 'setDescription',
        'exact_division_id' => 'setExactDivisionId',
        'gl_account_code' => 'setGlAccountCode',
        'gl_account_code_purchase' => 'setGlAccountCodePurchase',
        'journal_code' => 'setJournalCode',
        'journal_code_purchase' => 'setJournalCodePurchase',
        'journal_code_work_in_progress' => 'setJournalCodeWorkInProgress',
        'exact_payment_condition_sales' => 'setExactPaymentConditionSales',
        'exact_payment_condition_purchase' => 'setExactPaymentConditionPurchase',
        'sales_invoice_number_prefix' => 'setSalesInvoiceNumberPrefix',
        'purchase_invoice_import_branch' => 'setPurchaseInvoiceImportBranch',
        'work_in_progress_settings' => 'setWorkInProgressSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'description' => 'getDescription',
        'exact_division_id' => 'getExactDivisionId',
        'gl_account_code' => 'getGlAccountCode',
        'gl_account_code_purchase' => 'getGlAccountCodePurchase',
        'journal_code' => 'getJournalCode',
        'journal_code_purchase' => 'getJournalCodePurchase',
        'journal_code_work_in_progress' => 'getJournalCodeWorkInProgress',
        'exact_payment_condition_sales' => 'getExactPaymentConditionSales',
        'exact_payment_condition_purchase' => 'getExactPaymentConditionPurchase',
        'sales_invoice_number_prefix' => 'getSalesInvoiceNumberPrefix',
        'purchase_invoice_import_branch' => 'getPurchaseInvoiceImportBranch',
        'work_in_progress_settings' => 'getWorkInProgressSettings'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['exact_division_id'] = isset($data['exact_division_id']) ? $data['exact_division_id'] : null;
        $this->container['gl_account_code'] = isset($data['gl_account_code']) ? $data['gl_account_code'] : null;
        $this->container['gl_account_code_purchase'] = isset($data['gl_account_code_purchase']) ? $data['gl_account_code_purchase'] : null;
        $this->container['journal_code'] = isset($data['journal_code']) ? $data['journal_code'] : null;
        $this->container['journal_code_purchase'] = isset($data['journal_code_purchase']) ? $data['journal_code_purchase'] : null;
        $this->container['journal_code_work_in_progress'] = isset($data['journal_code_work_in_progress']) ? $data['journal_code_work_in_progress'] : null;
        $this->container['exact_payment_condition_sales'] = isset($data['exact_payment_condition_sales']) ? $data['exact_payment_condition_sales'] : null;
        $this->container['exact_payment_condition_purchase'] = isset($data['exact_payment_condition_purchase']) ? $data['exact_payment_condition_purchase'] : null;
        $this->container['sales_invoice_number_prefix'] = isset($data['sales_invoice_number_prefix']) ? $data['sales_invoice_number_prefix'] : null;
        $this->container['purchase_invoice_import_branch'] = isset($data['purchase_invoice_import_branch']) ? $data['purchase_invoice_import_branch'] : null;
        $this->container['work_in_progress_settings'] = isset($data['work_in_progress_settings']) ? $data['work_in_progress_settings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if (!is_null($this->container['exact_payment_condition_sales']) && (mb_strlen($this->container['exact_payment_condition_sales']) > 255)) {
            $invalidProperties[] = "invalid value for 'exact_payment_condition_sales', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['exact_payment_condition_purchase']) && (mb_strlen($this->container['exact_payment_condition_purchase']) > 255)) {
            $invalidProperties[] = "invalid value for 'exact_payment_condition_purchase', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['sales_invoice_number_prefix'] === null) {
            $invalidProperties[] = "'sales_invoice_number_prefix' can't be null";
        }
        if ((mb_strlen($this->container['sales_invoice_number_prefix']) > 3)) {
            $invalidProperties[] = "invalid value for 'sales_invoice_number_prefix', the character length must be smaller than or equal to 3.";
        }

        if (!preg_match("/[0-9]*/", $this->container['sales_invoice_number_prefix'])) {
            $invalidProperties[] = "invalid value for 'sales_invoice_number_prefix', must be conform to the pattern /[0-9]*/.";
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
     * @param int $id The ID of the division.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $description The description of the division.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets exact_division_id
     *
     * @return string
     */
    public function getExactDivisionId()
    {
        return $this->container['exact_division_id'];
    }

    /**
     * Sets exact_division_id
     *
     * @param string $exact_division_id The division ID of an Exact Online environment.
     *
     * @return $this
     */
    public function setExactDivisionId($exact_division_id)
    {
        $this->container['exact_division_id'] = $exact_division_id;

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
     * @param string $gl_account_code A default general ledger account code to use for sales related items.
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
     * @param string $gl_account_code_purchase A default general ledger account code to use for purchase related items.
     *
     * @return $this
     */
    public function setGlAccountCodePurchase($gl_account_code_purchase)
    {
        $this->container['gl_account_code_purchase'] = $gl_account_code_purchase;

        return $this;
    }

    /**
     * Gets journal_code
     *
     * @return string
     */
    public function getJournalCode()
    {
        return $this->container['journal_code'];
    }

    /**
     * Sets journal_code
     *
     * @param string $journal_code A default journal code to use for sales related items.
     *
     * @return $this
     */
    public function setJournalCode($journal_code)
    {
        $this->container['journal_code'] = $journal_code;

        return $this;
    }

    /**
     * Gets journal_code_purchase
     *
     * @return string
     */
    public function getJournalCodePurchase()
    {
        return $this->container['journal_code_purchase'];
    }

    /**
     * Sets journal_code_purchase
     *
     * @param string $journal_code_purchase A default journal code to use for purchase related items.
     *
     * @return $this
     */
    public function setJournalCodePurchase($journal_code_purchase)
    {
        $this->container['journal_code_purchase'] = $journal_code_purchase;

        return $this;
    }

    /**
     * Gets journal_code_work_in_progress
     *
     * @return string
     */
    public function getJournalCodeWorkInProgress()
    {
        return $this->container['journal_code_work_in_progress'];
    }

    /**
     * Sets journal_code_work_in_progress
     *
     * @param string $journal_code_work_in_progress A default journal code to use for work in progress related items.
     *
     * @return $this
     */
    public function setJournalCodeWorkInProgress($journal_code_work_in_progress)
    {
        $this->container['journal_code_work_in_progress'] = $journal_code_work_in_progress;

        return $this;
    }

    /**
     * Gets exact_payment_condition_sales
     *
     * @return string
     */
    public function getExactPaymentConditionSales()
    {
        return $this->container['exact_payment_condition_sales'];
    }

    /**
     * Sets exact_payment_condition_sales
     *
     * @param string $exact_payment_condition_sales A default payment condition to use for sales related items.
     *
     * @return $this
     */
    public function setExactPaymentConditionSales($exact_payment_condition_sales)
    {
        if (!is_null($exact_payment_condition_sales) && (mb_strlen($exact_payment_condition_sales) > 255)) {
            throw new \InvalidArgumentException('invalid length for $exact_payment_condition_sales when calling Division., must be smaller than or equal to 255.');
        }

        $this->container['exact_payment_condition_sales'] = $exact_payment_condition_sales;

        return $this;
    }

    /**
     * Gets exact_payment_condition_purchase
     *
     * @return string
     */
    public function getExactPaymentConditionPurchase()
    {
        return $this->container['exact_payment_condition_purchase'];
    }

    /**
     * Sets exact_payment_condition_purchase
     *
     * @param string $exact_payment_condition_purchase A default payment condition to use for purchase related items.
     *
     * @return $this
     */
    public function setExactPaymentConditionPurchase($exact_payment_condition_purchase)
    {
        if (!is_null($exact_payment_condition_purchase) && (mb_strlen($exact_payment_condition_purchase) > 255)) {
            throw new \InvalidArgumentException('invalid length for $exact_payment_condition_purchase when calling Division., must be smaller than or equal to 255.');
        }

        $this->container['exact_payment_condition_purchase'] = $exact_payment_condition_purchase;

        return $this;
    }

    /**
     * Gets sales_invoice_number_prefix
     *
     * @return string
     */
    public function getSalesInvoiceNumberPrefix()
    {
        return $this->container['sales_invoice_number_prefix'];
    }

    /**
     * Sets sales_invoice_number_prefix
     *
     * @param string $sales_invoice_number_prefix The prefix (3 digits) used to generate invoice number range per division.
     *
     * @return $this
     */
    public function setSalesInvoiceNumberPrefix($sales_invoice_number_prefix)
    {
        if ((mb_strlen($sales_invoice_number_prefix) > 3)) {
            throw new \InvalidArgumentException('invalid length for $sales_invoice_number_prefix when calling Division., must be smaller than or equal to 3.');
        }
        if ((!preg_match("/[0-9]*/", $sales_invoice_number_prefix))) {
            throw new \InvalidArgumentException("invalid value for $sales_invoice_number_prefix when calling Division., must conform to the pattern /[0-9]*/.");
        }

        $this->container['sales_invoice_number_prefix'] = $sales_invoice_number_prefix;

        return $this;
    }

    /**
     * Gets purchase_invoice_import_branch
     *
     * @return \Swagger\Client\Model\CondensedBranch
     */
    public function getPurchaseInvoiceImportBranch()
    {
        return $this->container['purchase_invoice_import_branch'];
    }

    /**
     * Sets purchase_invoice_import_branch
     *
     * @param \Swagger\Client\Model\CondensedBranch $purchase_invoice_import_branch purchase_invoice_import_branch
     *
     * @return $this
     */
    public function setPurchaseInvoiceImportBranch($purchase_invoice_import_branch)
    {
        $this->container['purchase_invoice_import_branch'] = $purchase_invoice_import_branch;

        return $this;
    }

    /**
     * Gets work_in_progress_settings
     *
     * @return \Swagger\Client\Model\DivisionWipSettings
     */
    public function getWorkInProgressSettings()
    {
        return $this->container['work_in_progress_settings'];
    }

    /**
     * Sets work_in_progress_settings
     *
     * @param \Swagger\Client\Model\DivisionWipSettings $work_in_progress_settings work_in_progress_settings
     *
     * @return $this
     */
    public function setWorkInProgressSettings($work_in_progress_settings)
    {
        $this->container['work_in_progress_settings'] = $work_in_progress_settings;

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


