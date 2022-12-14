<?php
/**
 * Branch
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
 * Branch Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Branch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Branch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'use_organization_info' => 'bool',
        'name' => 'string',
        'code' => 'string',
        'company_name' => 'string',
        'address' => 'string',
        'zip_code' => 'string',
        'city' => 'string',
        'country_code' => 'string',
        'phone_number' => 'string',
        'email' => 'string',
        'website' => 'string',
        'coc_number' => 'string',
        'vat_number' => 'string',
        'account_number' => 'string',
        'afas_administration' => 'string',
        'afas_project_leader' => 'string',
        'wage_component_percentage' => 'string',
        'g_account_percentage' => 'string',
        'g_account_text' => 'string',
        'n_account_text' => 'string',
        'file' => '\Swagger\Client\Model\File',
        'division' => '\Swagger\Client\Model\DivisionBranchSettings',
        'invoice_footer' => 'string',
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
        'use_organization_info' => null,
        'name' => null,
        'code' => null,
        'company_name' => null,
        'address' => null,
        'zip_code' => null,
        'city' => null,
        'country_code' => null,
        'phone_number' => null,
        'email' => null,
        'website' => null,
        'coc_number' => null,
        'vat_number' => null,
        'account_number' => null,
        'afas_administration' => null,
        'afas_project_leader' => null,
        'wage_component_percentage' => null,
        'g_account_percentage' => null,
        'g_account_text' => null,
        'n_account_text' => null,
        'file' => null,
        'division' => null,
        'invoice_footer' => null,
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
        'use_organization_info' => 'useOrganizationInfo',
        'name' => 'name',
        'code' => 'code',
        'company_name' => 'companyName',
        'address' => 'address',
        'zip_code' => 'zipCode',
        'city' => 'city',
        'country_code' => 'countryCode',
        'phone_number' => 'phoneNumber',
        'email' => 'email',
        'website' => 'website',
        'coc_number' => 'cocNumber',
        'vat_number' => 'vatNumber',
        'account_number' => 'accountNumber',
        'afas_administration' => 'afasAdministration',
        'afas_project_leader' => 'afasProjectLeader',
        'wage_component_percentage' => 'wageComponentPercentage',
        'g_account_percentage' => 'gAccountPercentage',
        'g_account_text' => 'gAccountText',
        'n_account_text' => 'nAccountText',
        'file' => 'file',
        'division' => 'division',
        'invoice_footer' => 'invoiceFooter',
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
        'use_organization_info' => 'setUseOrganizationInfo',
        'name' => 'setName',
        'code' => 'setCode',
        'company_name' => 'setCompanyName',
        'address' => 'setAddress',
        'zip_code' => 'setZipCode',
        'city' => 'setCity',
        'country_code' => 'setCountryCode',
        'phone_number' => 'setPhoneNumber',
        'email' => 'setEmail',
        'website' => 'setWebsite',
        'coc_number' => 'setCocNumber',
        'vat_number' => 'setVatNumber',
        'account_number' => 'setAccountNumber',
        'afas_administration' => 'setAfasAdministration',
        'afas_project_leader' => 'setAfasProjectLeader',
        'wage_component_percentage' => 'setWageComponentPercentage',
        'g_account_percentage' => 'setGAccountPercentage',
        'g_account_text' => 'setGAccountText',
        'n_account_text' => 'setNAccountText',
        'file' => 'setFile',
        'division' => 'setDivision',
        'invoice_footer' => 'setInvoiceFooter',
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
        'use_organization_info' => 'getUseOrganizationInfo',
        'name' => 'getName',
        'code' => 'getCode',
        'company_name' => 'getCompanyName',
        'address' => 'getAddress',
        'zip_code' => 'getZipCode',
        'city' => 'getCity',
        'country_code' => 'getCountryCode',
        'phone_number' => 'getPhoneNumber',
        'email' => 'getEmail',
        'website' => 'getWebsite',
        'coc_number' => 'getCocNumber',
        'vat_number' => 'getVatNumber',
        'account_number' => 'getAccountNumber',
        'afas_administration' => 'getAfasAdministration',
        'afas_project_leader' => 'getAfasProjectLeader',
        'wage_component_percentage' => 'getWageComponentPercentage',
        'g_account_percentage' => 'getGAccountPercentage',
        'g_account_text' => 'getGAccountText',
        'n_account_text' => 'getNAccountText',
        'file' => 'getFile',
        'division' => 'getDivision',
        'invoice_footer' => 'getInvoiceFooter',
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
        $this->container['use_organization_info'] = isset($data['use_organization_info']) ? $data['use_organization_info'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['coc_number'] = isset($data['coc_number']) ? $data['coc_number'] : null;
        $this->container['vat_number'] = isset($data['vat_number']) ? $data['vat_number'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['afas_administration'] = isset($data['afas_administration']) ? $data['afas_administration'] : null;
        $this->container['afas_project_leader'] = isset($data['afas_project_leader']) ? $data['afas_project_leader'] : null;
        $this->container['wage_component_percentage'] = isset($data['wage_component_percentage']) ? $data['wage_component_percentage'] : null;
        $this->container['g_account_percentage'] = isset($data['g_account_percentage']) ? $data['g_account_percentage'] : null;
        $this->container['g_account_text'] = isset($data['g_account_text']) ? $data['g_account_text'] : null;
        $this->container['n_account_text'] = isset($data['n_account_text']) ? $data['n_account_text'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['division'] = isset($data['division']) ? $data['division'] : null;
        $this->container['invoice_footer'] = isset($data['invoice_footer']) ? $data['invoice_footer'] : null;
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

        if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 255)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['company_name']) && (mb_strlen($this->container['company_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'company_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) > 255)) {
            $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['zip_code']) && (mb_strlen($this->container['zip_code']) > 20)) {
            $invalidProperties[] = "invalid value for 'zip_code', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 255)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['country_code']) && (mb_strlen($this->container['country_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) > 255)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 255)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['website']) && (mb_strlen($this->container['website']) > 255)) {
            $invalidProperties[] = "invalid value for 'website', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['coc_number']) && (mb_strlen($this->container['coc_number']) > 255)) {
            $invalidProperties[] = "invalid value for 'coc_number', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['vat_number']) && (mb_strlen($this->container['vat_number']) > 255)) {
            $invalidProperties[] = "invalid value for 'vat_number', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['account_number']) && (mb_strlen($this->container['account_number']) > 255)) {
            $invalidProperties[] = "invalid value for 'account_number', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['afas_administration']) && (mb_strlen($this->container['afas_administration']) > 255)) {
            $invalidProperties[] = "invalid value for 'afas_administration', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['afas_project_leader']) && (mb_strlen($this->container['afas_project_leader']) > 255)) {
            $invalidProperties[] = "invalid value for 'afas_project_leader', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['g_account_text']) && (mb_strlen($this->container['g_account_text']) > 255)) {
            $invalidProperties[] = "invalid value for 'g_account_text', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['n_account_text']) && (mb_strlen($this->container['n_account_text']) > 255)) {
            $invalidProperties[] = "invalid value for 'n_account_text', the character length must be smaller than or equal to 255.";
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
     * @param int $id ID of the branch.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets use_organization_info
     *
     * @return bool
     */
    public function getUseOrganizationInfo()
    {
        return $this->container['use_organization_info'];
    }

    /**
     * Sets use_organization_info
     *
     * @param bool $use_organization_info If organization information should be used instead of branch information.
     *
     * @return $this
     */
    public function setUseOrganizationInfo($use_organization_info)
    {
        $this->container['use_organization_info'] = $use_organization_info;

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
     * @param string $name Name of the branch.
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Branch., must be smaller than or equal to 255.');
        }

        $this->container['name'] = $name;

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
     * @param string $code The code of the branch.
     *
     * @return $this
     */
    public function setCode($code)
    {
        if (!is_null($code) && (mb_strlen($code) > 255)) {
            throw new \InvalidArgumentException('invalid length for $code when calling Branch., must be smaller than or equal to 255.');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name The company name of the branch.
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        if (!is_null($company_name) && (mb_strlen($company_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $company_name when calling Branch., must be smaller than or equal to 255.');
        }

        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address Address of the branch.
     *
     * @return $this
     */
    public function setAddress($address)
    {
        if (!is_null($address) && (mb_strlen($address) > 255)) {
            throw new \InvalidArgumentException('invalid length for $address when calling Branch., must be smaller than or equal to 255.');
        }

        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string $zip_code ZIP code of the branch.
     *
     * @return $this
     */
    public function setZipCode($zip_code)
    {
        if (!is_null($zip_code) && (mb_strlen($zip_code) > 20)) {
            throw new \InvalidArgumentException('invalid length for $zip_code when calling Branch., must be smaller than or equal to 20.');
        }

        $this->container['zip_code'] = $zip_code;

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
     * @param string $city City of the branch.
     *
     * @return $this
     */
    public function setCity($city)
    {
        if (!is_null($city) && (mb_strlen($city) > 255)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Branch., must be smaller than or equal to 255.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code An ISO 3166-2 representation of the country.
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        if (!is_null($country_code) && (mb_strlen($country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling Branch., must be smaller than or equal to 2.');
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number Phone number of the branch.
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        if (!is_null($phone_number) && (mb_strlen($phone_number) > 255)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling Branch., must be smaller than or equal to 255.');
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email of the branch.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 255)) {
            throw new \InvalidArgumentException('invalid length for $email when calling Branch., must be smaller than or equal to 255.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string $website The website of the branch.
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        if (!is_null($website) && (mb_strlen($website) > 255)) {
            throw new \InvalidArgumentException('invalid length for $website when calling Branch., must be smaller than or equal to 255.');
        }

        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets coc_number
     *
     * @return string
     */
    public function getCocNumber()
    {
        return $this->container['coc_number'];
    }

    /**
     * Sets coc_number
     *
     * @param string $coc_number The COC number.
     *
     * @return $this
     */
    public function setCocNumber($coc_number)
    {
        if (!is_null($coc_number) && (mb_strlen($coc_number) > 255)) {
            throw new \InvalidArgumentException('invalid length for $coc_number when calling Branch., must be smaller than or equal to 255.');
        }

        $this->container['coc_number'] = $coc_number;

        return $this;
    }

    /**
     * Gets vat_number
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     *
     * @param string $vat_number VAT number of the branch.
     *
     * @return $this
     */
    public function setVatNumber($vat_number)
    {
        if (!is_null($vat_number) && (mb_strlen($vat_number) > 255)) {
            throw new \InvalidArgumentException('invalid length for $vat_number when calling Branch., must be smaller than or equal to 255.');
        }

        $this->container['vat_number'] = $vat_number;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string $account_number Account number of the branch.
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        if (!is_null($account_number) && (mb_strlen($account_number) > 255)) {
            throw new \InvalidArgumentException('invalid length for $account_number when calling Branch., must be smaller than or equal to 255.');
        }

        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets afas_administration
     *
     * @return string
     */
    public function getAfasAdministration()
    {
        return $this->container['afas_administration'];
    }

    /**
     * Sets afas_administration
     *
     * @param string $afas_administration Afas administration code of the branch.
     *
     * @return $this
     */
    public function setAfasAdministration($afas_administration)
    {
        if (!is_null($afas_administration) && (mb_strlen($afas_administration) > 255)) {
            throw new \InvalidArgumentException('invalid length for $afas_administration when calling Branch., must be smaller than or equal to 255.');
        }

        $this->container['afas_administration'] = $afas_administration;

        return $this;
    }

    /**
     * Gets afas_project_leader
     *
     * @return string
     */
    public function getAfasProjectLeader()
    {
        return $this->container['afas_project_leader'];
    }

    /**
     * Sets afas_project_leader
     *
     * @param string $afas_project_leader Afas project leader of the branch.
     *
     * @return $this
     */
    public function setAfasProjectLeader($afas_project_leader)
    {
        if (!is_null($afas_project_leader) && (mb_strlen($afas_project_leader) > 255)) {
            throw new \InvalidArgumentException('invalid length for $afas_project_leader when calling Branch., must be smaller than or equal to 255.');
        }

        $this->container['afas_project_leader'] = $afas_project_leader;

        return $this;
    }

    /**
     * Gets wage_component_percentage
     *
     * @return string
     */
    public function getWageComponentPercentage()
    {
        return $this->container['wage_component_percentage'];
    }

    /**
     * Sets wage_component_percentage
     *
     * @param string $wage_component_percentage The wage component percentage of the branch.
     *
     * @return $this
     */
    public function setWageComponentPercentage($wage_component_percentage)
    {
        $this->container['wage_component_percentage'] = $wage_component_percentage;

        return $this;
    }

    /**
     * Gets g_account_percentage
     *
     * @return string
     */
    public function getGAccountPercentage()
    {
        return $this->container['g_account_percentage'];
    }

    /**
     * Sets g_account_percentage
     *
     * @param string $g_account_percentage The g account percentage of the branch.
     *
     * @return $this
     */
    public function setGAccountPercentage($g_account_percentage)
    {
        $this->container['g_account_percentage'] = $g_account_percentage;

        return $this;
    }

    /**
     * Gets g_account_text
     *
     * @return string
     */
    public function getGAccountText()
    {
        return $this->container['g_account_text'];
    }

    /**
     * Sets g_account_text
     *
     * @param string $g_account_text The g account text of the branch.
     *
     * @return $this
     */
    public function setGAccountText($g_account_text)
    {
        if (!is_null($g_account_text) && (mb_strlen($g_account_text) > 255)) {
            throw new \InvalidArgumentException('invalid length for $g_account_text when calling Branch., must be smaller than or equal to 255.');
        }

        $this->container['g_account_text'] = $g_account_text;

        return $this;
    }

    /**
     * Gets n_account_text
     *
     * @return string
     */
    public function getNAccountText()
    {
        return $this->container['n_account_text'];
    }

    /**
     * Sets n_account_text
     *
     * @param string $n_account_text The n account text of the branch.
     *
     * @return $this
     */
    public function setNAccountText($n_account_text)
    {
        if (!is_null($n_account_text) && (mb_strlen($n_account_text) > 255)) {
            throw new \InvalidArgumentException('invalid length for $n_account_text when calling Branch., must be smaller than or equal to 255.');
        }

        $this->container['n_account_text'] = $n_account_text;

        return $this;
    }

    /**
     * Gets file
     *
     * @return \Swagger\Client\Model\File
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param \Swagger\Client\Model\File $file file
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets division
     *
     * @return \Swagger\Client\Model\DivisionBranchSettings
     */
    public function getDivision()
    {
        return $this->container['division'];
    }

    /**
     * Sets division
     *
     * @param \Swagger\Client\Model\DivisionBranchSettings $division division
     *
     * @return $this
     */
    public function setDivision($division)
    {
        $this->container['division'] = $division;

        return $this;
    }

    /**
     * Gets invoice_footer
     *
     * @return string
     */
    public function getInvoiceFooter()
    {
        return $this->container['invoice_footer'];
    }

    /**
     * Sets invoice_footer
     *
     * @param string $invoice_footer The invoice footer text.
     *
     * @return $this
     */
    public function setInvoiceFooter($invoice_footer)
    {
        $this->container['invoice_footer'] = $invoice_footer;

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


