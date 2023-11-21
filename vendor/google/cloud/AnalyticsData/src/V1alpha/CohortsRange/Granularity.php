<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto

namespace Google\Analytics\Data\V1alpha\CohortsRange;

use UnexpectedValueException;

/**
 * The granularity used to interpret the `startOffset` and `endOffset` for the
 * extended reporting date range for a cohort report.
 *
 * Protobuf type <code>google.analytics.data.v1alpha.CohortsRange.Granularity</code>
 */
class Granularity
{
    /**
     * Should never be specified.
     *
     * Generated from protobuf enum <code>GRANULARITY_UNSPECIFIED = 0;</code>
     */
    const GRANULARITY_UNSPECIFIED = 0;
    /**
     * Daily granularity. Commonly used if the cohort's `dateRange` is a single
     * day and the request contains `cohortNthDay`.
     *
     * Generated from protobuf enum <code>DAILY = 1;</code>
     */
    const DAILY = 1;
    /**
     * Weekly granularity. Commonly used if the cohort's `dateRange` is a week
     * in duration (starting on Sunday and ending on Saturday) and the request
     * contains `cohortNthWeek`.
     *
     * Generated from protobuf enum <code>WEEKLY = 2;</code>
     */
    const WEEKLY = 2;
    /**
     * Monthly granularity. Commonly used if the cohort's `dateRange` is a month
     * in duration and the request contains `cohortNthMonth`.
     *
     * Generated from protobuf enum <code>MONTHLY = 3;</code>
     */
    const MONTHLY = 3;

    private static $valueToName = [
        self::GRANULARITY_UNSPECIFIED => 'GRANULARITY_UNSPECIFIED',
        self::DAILY => 'DAILY',
        self::WEEKLY => 'WEEKLY',
        self::MONTHLY => 'MONTHLY',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Granularity::class, \Google\Analytics\Data\V1alpha\CohortsRange_Granularity::class);

