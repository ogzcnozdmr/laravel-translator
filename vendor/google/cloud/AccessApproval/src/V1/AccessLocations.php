<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/accessapproval/v1/accessapproval.proto

namespace Google\Cloud\AccessApproval\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Home office and physical location of the principal.
 *
 * Generated from protobuf message <code>google.cloud.accessapproval.v1.AccessLocations</code>
 */
class AccessLocations extends \Google\Protobuf\Internal\Message
{
    /**
     * The "home office" location of the principal. A two-letter country code
     * (ISO 3166-1 alpha-2), such as "US", "DE" or "GB" or a region code. In some
     * limited situations Google systems may refer refer to a region code instead
     * of a country code.
     * Possible Region Codes:
     * - ASI: Asia
     * - EUR: Europe
     * - OCE: Oceania
     * - AFR: Africa
     * - NAM: North America
     * - SAM: South America
     * - ANT: Antarctica
     * - ANY: Any location
     *
     * Generated from protobuf field <code>string principal_office_country = 1;</code>
     */
    private $principal_office_country = '';
    /**
     * Physical location of the principal at the time of the access. A
     * two-letter country code (ISO 3166-1 alpha-2), such as "US", "DE" or "GB" or
     * a region code. In some limited situations Google systems may refer refer to
     * a region code instead of a country code.
     * Possible Region Codes:
     * - ASI: Asia
     * - EUR: Europe
     * - OCE: Oceania
     * - AFR: Africa
     * - NAM: North America
     * - SAM: South America
     * - ANT: Antarctica
     * - ANY: Any location
     *
     * Generated from protobuf field <code>string principal_physical_location_country = 2;</code>
     */
    private $principal_physical_location_country = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $principal_office_country
     *           The "home office" location of the principal. A two-letter country code
     *           (ISO 3166-1 alpha-2), such as "US", "DE" or "GB" or a region code. In some
     *           limited situations Google systems may refer refer to a region code instead
     *           of a country code.
     *           Possible Region Codes:
     *           - ASI: Asia
     *           - EUR: Europe
     *           - OCE: Oceania
     *           - AFR: Africa
     *           - NAM: North America
     *           - SAM: South America
     *           - ANT: Antarctica
     *           - ANY: Any location
     *     @type string $principal_physical_location_country
     *           Physical location of the principal at the time of the access. A
     *           two-letter country code (ISO 3166-1 alpha-2), such as "US", "DE" or "GB" or
     *           a region code. In some limited situations Google systems may refer refer to
     *           a region code instead of a country code.
     *           Possible Region Codes:
     *           - ASI: Asia
     *           - EUR: Europe
     *           - OCE: Oceania
     *           - AFR: Africa
     *           - NAM: North America
     *           - SAM: South America
     *           - ANT: Antarctica
     *           - ANY: Any location
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Accessapproval\V1\Accessapproval::initOnce();
        parent::__construct($data);
    }

    /**
     * The "home office" location of the principal. A two-letter country code
     * (ISO 3166-1 alpha-2), such as "US", "DE" or "GB" or a region code. In some
     * limited situations Google systems may refer refer to a region code instead
     * of a country code.
     * Possible Region Codes:
     * - ASI: Asia
     * - EUR: Europe
     * - OCE: Oceania
     * - AFR: Africa
     * - NAM: North America
     * - SAM: South America
     * - ANT: Antarctica
     * - ANY: Any location
     *
     * Generated from protobuf field <code>string principal_office_country = 1;</code>
     * @return string
     */
    public function getPrincipalOfficeCountry()
    {
        return $this->principal_office_country;
    }

    /**
     * The "home office" location of the principal. A two-letter country code
     * (ISO 3166-1 alpha-2), such as "US", "DE" or "GB" or a region code. In some
     * limited situations Google systems may refer refer to a region code instead
     * of a country code.
     * Possible Region Codes:
     * - ASI: Asia
     * - EUR: Europe
     * - OCE: Oceania
     * - AFR: Africa
     * - NAM: North America
     * - SAM: South America
     * - ANT: Antarctica
     * - ANY: Any location
     *
     * Generated from protobuf field <code>string principal_office_country = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPrincipalOfficeCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->principal_office_country = $var;

        return $this;
    }

    /**
     * Physical location of the principal at the time of the access. A
     * two-letter country code (ISO 3166-1 alpha-2), such as "US", "DE" or "GB" or
     * a region code. In some limited situations Google systems may refer refer to
     * a region code instead of a country code.
     * Possible Region Codes:
     * - ASI: Asia
     * - EUR: Europe
     * - OCE: Oceania
     * - AFR: Africa
     * - NAM: North America
     * - SAM: South America
     * - ANT: Antarctica
     * - ANY: Any location
     *
     * Generated from protobuf field <code>string principal_physical_location_country = 2;</code>
     * @return string
     */
    public function getPrincipalPhysicalLocationCountry()
    {
        return $this->principal_physical_location_country;
    }

    /**
     * Physical location of the principal at the time of the access. A
     * two-letter country code (ISO 3166-1 alpha-2), such as "US", "DE" or "GB" or
     * a region code. In some limited situations Google systems may refer refer to
     * a region code instead of a country code.
     * Possible Region Codes:
     * - ASI: Asia
     * - EUR: Europe
     * - OCE: Oceania
     * - AFR: Africa
     * - NAM: North America
     * - SAM: South America
     * - ANT: Antarctica
     * - ANY: Any location
     *
     * Generated from protobuf field <code>string principal_physical_location_country = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPrincipalPhysicalLocationCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->principal_physical_location_country = $var;

        return $this;
    }

}

