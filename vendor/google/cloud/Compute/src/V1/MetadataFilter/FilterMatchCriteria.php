<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\MetadataFilter;

use UnexpectedValueException;

/**
 * Specifies how individual filterLabel matches within the list of filterLabels contribute towards the overall metadataFilter match.
 * Supported values are:
 * - MATCH_ANY: At least one of the filterLabels must have a matching label in the provided metadata.
 * - MATCH_ALL: All filterLabels must have matching labels in the provided metadata.
 *
 * Protobuf type <code>google.cloud.compute.v1.MetadataFilter.FilterMatchCriteria</code>
 */
class FilterMatchCriteria
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_FILTER_MATCH_CRITERIA = 0;</code>
     */
    const UNDEFINED_FILTER_MATCH_CRITERIA = 0;
    /**
     * Generated from protobuf enum <code>MATCH_ALL = 180663271;</code>
     */
    const MATCH_ALL = 180663271;
    /**
     * Generated from protobuf enum <code>MATCH_ANY = 180663346;</code>
     */
    const MATCH_ANY = 180663346;
    /**
     * Generated from protobuf enum <code>NOT_SET = 163646646;</code>
     */
    const NOT_SET = 163646646;

    private static $valueToName = [
        self::UNDEFINED_FILTER_MATCH_CRITERIA => 'UNDEFINED_FILTER_MATCH_CRITERIA',
        self::MATCH_ALL => 'MATCH_ALL',
        self::MATCH_ANY => 'MATCH_ANY',
        self::NOT_SET => 'NOT_SET',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

