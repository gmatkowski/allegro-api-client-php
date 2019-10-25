<?php
/**
 * UserCampaignEligibility
 *
 * PHP version 5
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about
 *
 * OpenAPI spec version: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Model;

use \ArrayAccess;
use \AllegroApi\ObjectSerializer;

/**
 * UserCampaignEligibility Class Doc Comment
 *
 * @category Class
 * @description Summary of user eligibility for participation in the campaign.
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UserCampaignEligibility implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserCampaignEligibility';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'eligible' => 'bool',
        'refusal_reasons' => '\AllegroApi\Model\CampaignRefusalReason[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'eligible' => null,
        'refusal_reasons' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'eligible' => 'eligible',
        'refusal_reasons' => 'refusalReasons'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eligible' => 'setEligible',
        'refusal_reasons' => 'setRefusalReasons'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eligible' => 'getEligible',
        'refusal_reasons' => 'getRefusalReasons'
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
        return self::$openAPIModelName;
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
        $this->container['eligible'] = isset($data['eligible']) ? $data['eligible'] : null;
        $this->container['refusal_reasons'] = isset($data['refusal_reasons']) ? $data['refusal_reasons'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['eligible'] === null) {
            $invalidProperties[] = "'eligible' can't be null";
        }
        if ($this->container['refusal_reasons'] === null) {
            $invalidProperties[] = "'refusal_reasons' can't be null";
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
     * Gets eligible
     *
     * @return bool
     */
    public function getEligible()
    {
        return $this->container['eligible'];
    }

    /**
     * Sets eligible
     *
     * @param bool $eligible Information whether user is eligible to participate in this campaign.
     *
     * @return $this
     */
    public function setEligible($eligible)
    {
        $this->container['eligible'] = $eligible;

        return $this;
    }

    /**
     * Gets refusal_reasons
     *
     * @return \AllegroApi\Model\CampaignRefusalReason[]
     */
    public function getRefusalReasons()
    {
        return $this->container['refusal_reasons'];
    }

    /**
     * Sets refusal_reasons
     *
     * @param \AllegroApi\Model\CampaignRefusalReason[] $refusal_reasons Information why user is not able to participate in the campaign.
     *
     * @return $this
     */
    public function setRefusalReasons($refusal_reasons)
    {
        $this->container['refusal_reasons'] = $refusal_reasons;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


