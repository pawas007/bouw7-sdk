<?php
/**
 * QuotationLine
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
 * QuotationLine Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QuotationLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QuotationLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'description' => 'string',
        'quantity' => 'string',
        'unit' => 'string',
        'price' => 'string',
        'subtotal' => 'string',
        'vat_tariff_percentage' => 'string',
        'vat_tariff_object' => '\Swagger\Client\Model\CondensedVatTariff',
        'option' => 'bool',
        'should_add_page_break' => 'bool',
        'sort_index' => 'int',
        'description_long' => 'string',
        'labour_days' => 'string',
        'labor_quantity' => 'string',
        'labor_total' => 'string',
        'material_description' => 'string',
        'material_unit_price' => 'string',
        'material_quantity' => 'string',
        'material_total' => 'string',
        'equipment_total' => 'string',
        'subcontracting_total' => 'string',
        'purchase_order_total' => 'string',
        'garbage_total' => 'string',
        'calculation_total' => 'string',
        'security_code' => '\Swagger\Client\Model\CondensedSecurityCode',
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
        'description' => null,
        'quantity' => null,
        'unit' => null,
        'price' => null,
        'subtotal' => null,
        'vat_tariff_percentage' => null,
        'vat_tariff_object' => null,
        'option' => null,
        'should_add_page_break' => null,
        'sort_index' => null,
        'description_long' => null,
        'labour_days' => null,
        'labor_quantity' => null,
        'labor_total' => null,
        'material_description' => null,
        'material_unit_price' => null,
        'material_quantity' => null,
        'material_total' => null,
        'equipment_total' => null,
        'subcontracting_total' => null,
        'purchase_order_total' => null,
        'garbage_total' => null,
        'calculation_total' => null,
        'security_code' => null,
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
        'description' => 'description',
        'quantity' => 'quantity',
        'unit' => 'unit',
        'price' => 'price',
        'subtotal' => 'subtotal',
        'vat_tariff_percentage' => 'vatTariffPercentage',
        'vat_tariff_object' => 'vatTariffObject',
        'option' => 'option',
        'should_add_page_break' => 'shouldAddPageBreak',
        'sort_index' => 'sortIndex',
        'description_long' => 'descriptionLong',
        'labour_days' => 'labourDays',
        'labor_quantity' => 'laborQuantity',
        'labor_total' => 'laborTotal',
        'material_description' => 'materialDescription',
        'material_unit_price' => 'materialUnitPrice',
        'material_quantity' => 'materialQuantity',
        'material_total' => 'materialTotal',
        'equipment_total' => 'equipmentTotal',
        'subcontracting_total' => 'subcontractingTotal',
        'purchase_order_total' => 'purchaseOrderTotal',
        'garbage_total' => 'garbageTotal',
        'calculation_total' => 'calculationTotal',
        'security_code' => 'securityCode',
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
        'description' => 'setDescription',
        'quantity' => 'setQuantity',
        'unit' => 'setUnit',
        'price' => 'setPrice',
        'subtotal' => 'setSubtotal',
        'vat_tariff_percentage' => 'setVatTariffPercentage',
        'vat_tariff_object' => 'setVatTariffObject',
        'option' => 'setOption',
        'should_add_page_break' => 'setShouldAddPageBreak',
        'sort_index' => 'setSortIndex',
        'description_long' => 'setDescriptionLong',
        'labour_days' => 'setLabourDays',
        'labor_quantity' => 'setLaborQuantity',
        'labor_total' => 'setLaborTotal',
        'material_description' => 'setMaterialDescription',
        'material_unit_price' => 'setMaterialUnitPrice',
        'material_quantity' => 'setMaterialQuantity',
        'material_total' => 'setMaterialTotal',
        'equipment_total' => 'setEquipmentTotal',
        'subcontracting_total' => 'setSubcontractingTotal',
        'purchase_order_total' => 'setPurchaseOrderTotal',
        'garbage_total' => 'setGarbageTotal',
        'calculation_total' => 'setCalculationTotal',
        'security_code' => 'setSecurityCode',
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
        'description' => 'getDescription',
        'quantity' => 'getQuantity',
        'unit' => 'getUnit',
        'price' => 'getPrice',
        'subtotal' => 'getSubtotal',
        'vat_tariff_percentage' => 'getVatTariffPercentage',
        'vat_tariff_object' => 'getVatTariffObject',
        'option' => 'getOption',
        'should_add_page_break' => 'getShouldAddPageBreak',
        'sort_index' => 'getSortIndex',
        'description_long' => 'getDescriptionLong',
        'labour_days' => 'getLabourDays',
        'labor_quantity' => 'getLaborQuantity',
        'labor_total' => 'getLaborTotal',
        'material_description' => 'getMaterialDescription',
        'material_unit_price' => 'getMaterialUnitPrice',
        'material_quantity' => 'getMaterialQuantity',
        'material_total' => 'getMaterialTotal',
        'equipment_total' => 'getEquipmentTotal',
        'subcontracting_total' => 'getSubcontractingTotal',
        'purchase_order_total' => 'getPurchaseOrderTotal',
        'garbage_total' => 'getGarbageTotal',
        'calculation_total' => 'getCalculationTotal',
        'security_code' => 'getSecurityCode',
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['subtotal'] = isset($data['subtotal']) ? $data['subtotal'] : null;
        $this->container['vat_tariff_percentage'] = isset($data['vat_tariff_percentage']) ? $data['vat_tariff_percentage'] : null;
        $this->container['vat_tariff_object'] = isset($data['vat_tariff_object']) ? $data['vat_tariff_object'] : null;
        $this->container['option'] = isset($data['option']) ? $data['option'] : null;
        $this->container['should_add_page_break'] = isset($data['should_add_page_break']) ? $data['should_add_page_break'] : null;
        $this->container['sort_index'] = isset($data['sort_index']) ? $data['sort_index'] : null;
        $this->container['description_long'] = isset($data['description_long']) ? $data['description_long'] : null;
        $this->container['labour_days'] = isset($data['labour_days']) ? $data['labour_days'] : null;
        $this->container['labor_quantity'] = isset($data['labor_quantity']) ? $data['labor_quantity'] : null;
        $this->container['labor_total'] = isset($data['labor_total']) ? $data['labor_total'] : null;
        $this->container['material_description'] = isset($data['material_description']) ? $data['material_description'] : null;
        $this->container['material_unit_price'] = isset($data['material_unit_price']) ? $data['material_unit_price'] : null;
        $this->container['material_quantity'] = isset($data['material_quantity']) ? $data['material_quantity'] : null;
        $this->container['material_total'] = isset($data['material_total']) ? $data['material_total'] : null;
        $this->container['equipment_total'] = isset($data['equipment_total']) ? $data['equipment_total'] : null;
        $this->container['subcontracting_total'] = isset($data['subcontracting_total']) ? $data['subcontracting_total'] : null;
        $this->container['purchase_order_total'] = isset($data['purchase_order_total']) ? $data['purchase_order_total'] : null;
        $this->container['garbage_total'] = isset($data['garbage_total']) ? $data['garbage_total'] : null;
        $this->container['calculation_total'] = isset($data['calculation_total']) ? $data['calculation_total'] : null;
        $this->container['security_code'] = isset($data['security_code']) ? $data['security_code'] : null;
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

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['subtotal'] === null) {
            $invalidProperties[] = "'subtotal' can't be null";
        }
        if ($this->container['vat_tariff_percentage'] === null) {
            $invalidProperties[] = "'vat_tariff_percentage' can't be null";
        }
        if ($this->container['vat_tariff_object'] === null) {
            $invalidProperties[] = "'vat_tariff_object' can't be null";
        }
        if ($this->container['sort_index'] === null) {
            $invalidProperties[] = "'sort_index' can't be null";
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
     * @param int $id ID of the quotation line.
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
     * @param string $description The description of the quotation line.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling QuotationLine., must be smaller than or equal to 255.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param string $quantity The quantity of this quotation line.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit The unit of the quotation line.
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string $price The price of this quotation line.
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets subtotal
     *
     * @return string
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param string $subtotal The price of this quotation line.
     *
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets vat_tariff_percentage
     *
     * @return string
     */
    public function getVatTariffPercentage()
    {
        return $this->container['vat_tariff_percentage'];
    }

    /**
     * Sets vat_tariff_percentage
     *
     * @param string $vat_tariff_percentage The vat tariff of this quotation line.
     *
     * @return $this
     */
    public function setVatTariffPercentage($vat_tariff_percentage)
    {
        $this->container['vat_tariff_percentage'] = $vat_tariff_percentage;

        return $this;
    }

    /**
     * Gets vat_tariff_object
     *
     * @return \Swagger\Client\Model\CondensedVatTariff
     */
    public function getVatTariffObject()
    {
        return $this->container['vat_tariff_object'];
    }

    /**
     * Sets vat_tariff_object
     *
     * @param \Swagger\Client\Model\CondensedVatTariff $vat_tariff_object vat_tariff_object
     *
     * @return $this
     */
    public function setVatTariffObject($vat_tariff_object)
    {
        $this->container['vat_tariff_object'] = $vat_tariff_object;

        return $this;
    }

    /**
     * Gets option
     *
     * @return bool
     */
    public function getOption()
    {
        return $this->container['option'];
    }

    /**
     * Sets option
     *
     * @param bool $option Whether the quotation line has an option.
     *
     * @return $this
     */
    public function setOption($option)
    {
        $this->container['option'] = $option;

        return $this;
    }

    /**
     * Gets should_add_page_break
     *
     * @return bool
     */
    public function getShouldAddPageBreak()
    {
        return $this->container['should_add_page_break'];
    }

    /**
     * Sets should_add_page_break
     *
     * @param bool $should_add_page_break Whether the quotation line should add a page break to the PDF.
     *
     * @return $this
     */
    public function setShouldAddPageBreak($should_add_page_break)
    {
        $this->container['should_add_page_break'] = $should_add_page_break;

        return $this;
    }

    /**
     * Gets sort_index
     *
     * @return int
     */
    public function getSortIndex()
    {
        return $this->container['sort_index'];
    }

    /**
     * Sets sort_index
     *
     * @param int $sort_index The sort index of the quotation line.
     *
     * @return $this
     */
    public function setSortIndex($sort_index)
    {
        $this->container['sort_index'] = $sort_index;

        return $this;
    }

    /**
     * Gets description_long
     *
     * @return string
     */
    public function getDescriptionLong()
    {
        return $this->container['description_long'];
    }

    /**
     * Sets description_long
     *
     * @param string $description_long The long description of the quotation line.
     *
     * @return $this
     */
    public function setDescriptionLong($description_long)
    {
        $this->container['description_long'] = $description_long;

        return $this;
    }

    /**
     * Gets labour_days
     *
     * @return string
     */
    public function getLabourDays()
    {
        return $this->container['labour_days'];
    }

    /**
     * Sets labour_days
     *
     * @param string $labour_days The labour days of the quotation line.
     *
     * @return $this
     */
    public function setLabourDays($labour_days)
    {
        $this->container['labour_days'] = $labour_days;

        return $this;
    }

    /**
     * Gets labor_quantity
     *
     * @return string
     */
    public function getLaborQuantity()
    {
        return $this->container['labor_quantity'];
    }

    /**
     * Sets labor_quantity
     *
     * @param string $labor_quantity The labour quantity of the quotation line.
     *
     * @return $this
     */
    public function setLaborQuantity($labor_quantity)
    {
        $this->container['labor_quantity'] = $labor_quantity;

        return $this;
    }

    /**
     * Gets labor_total
     *
     * @return string
     */
    public function getLaborTotal()
    {
        return $this->container['labor_total'];
    }

    /**
     * Sets labor_total
     *
     * @param string $labor_total The labour total of the quotation line.
     *
     * @return $this
     */
    public function setLaborTotal($labor_total)
    {
        $this->container['labor_total'] = $labor_total;

        return $this;
    }

    /**
     * Gets material_description
     *
     * @return string
     */
    public function getMaterialDescription()
    {
        return $this->container['material_description'];
    }

    /**
     * Sets material_description
     *
     * @param string $material_description The material description of the quotation line.
     *
     * @return $this
     */
    public function setMaterialDescription($material_description)
    {
        $this->container['material_description'] = $material_description;

        return $this;
    }

    /**
     * Gets material_unit_price
     *
     * @return string
     */
    public function getMaterialUnitPrice()
    {
        return $this->container['material_unit_price'];
    }

    /**
     * Sets material_unit_price
     *
     * @param string $material_unit_price The material per unit price of the quotation line.
     *
     * @return $this
     */
    public function setMaterialUnitPrice($material_unit_price)
    {
        $this->container['material_unit_price'] = $material_unit_price;

        return $this;
    }

    /**
     * Gets material_quantity
     *
     * @return string
     */
    public function getMaterialQuantity()
    {
        return $this->container['material_quantity'];
    }

    /**
     * Sets material_quantity
     *
     * @param string $material_quantity The material quantity of the quotation line.
     *
     * @return $this
     */
    public function setMaterialQuantity($material_quantity)
    {
        $this->container['material_quantity'] = $material_quantity;

        return $this;
    }

    /**
     * Gets material_total
     *
     * @return string
     */
    public function getMaterialTotal()
    {
        return $this->container['material_total'];
    }

    /**
     * Sets material_total
     *
     * @param string $material_total The material total of the quotation line.
     *
     * @return $this
     */
    public function setMaterialTotal($material_total)
    {
        $this->container['material_total'] = $material_total;

        return $this;
    }

    /**
     * Gets equipment_total
     *
     * @return string
     */
    public function getEquipmentTotal()
    {
        return $this->container['equipment_total'];
    }

    /**
     * Sets equipment_total
     *
     * @param string $equipment_total The equipment total of the quotation line.
     *
     * @return $this
     */
    public function setEquipmentTotal($equipment_total)
    {
        $this->container['equipment_total'] = $equipment_total;

        return $this;
    }

    /**
     * Gets subcontracting_total
     *
     * @return string
     */
    public function getSubcontractingTotal()
    {
        return $this->container['subcontracting_total'];
    }

    /**
     * Sets subcontracting_total
     *
     * @param string $subcontracting_total The subcontracting total of the quotation line.
     *
     * @return $this
     */
    public function setSubcontractingTotal($subcontracting_total)
    {
        $this->container['subcontracting_total'] = $subcontracting_total;

        return $this;
    }

    /**
     * Gets purchase_order_total
     *
     * @return string
     */
    public function getPurchaseOrderTotal()
    {
        return $this->container['purchase_order_total'];
    }

    /**
     * Sets purchase_order_total
     *
     * @param string $purchase_order_total The purchase order total of the quotation line.
     *
     * @return $this
     */
    public function setPurchaseOrderTotal($purchase_order_total)
    {
        $this->container['purchase_order_total'] = $purchase_order_total;

        return $this;
    }

    /**
     * Gets garbage_total
     *
     * @return string
     */
    public function getGarbageTotal()
    {
        return $this->container['garbage_total'];
    }

    /**
     * Sets garbage_total
     *
     * @param string $garbage_total The waste total of the quotation line.
     *
     * @return $this
     */
    public function setGarbageTotal($garbage_total)
    {
        $this->container['garbage_total'] = $garbage_total;

        return $this;
    }

    /**
     * Gets calculation_total
     *
     * @return string
     */
    public function getCalculationTotal()
    {
        return $this->container['calculation_total'];
    }

    /**
     * Sets calculation_total
     *
     * @param string $calculation_total The calculation total of the quotation line.
     *
     * @return $this
     */
    public function setCalculationTotal($calculation_total)
    {
        $this->container['calculation_total'] = $calculation_total;

        return $this;
    }

    /**
     * Gets security_code
     *
     * @return \Swagger\Client\Model\CondensedSecurityCode
     */
    public function getSecurityCode()
    {
        return $this->container['security_code'];
    }

    /**
     * Sets security_code
     *
     * @param \Swagger\Client\Model\CondensedSecurityCode $security_code security_code
     *
     * @return $this
     */
    public function setSecurityCode($security_code)
    {
        $this->container['security_code'] = $security_code;

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

