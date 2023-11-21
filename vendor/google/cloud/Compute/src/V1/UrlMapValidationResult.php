<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message representing the validation result for a UrlMap.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.UrlMapValidationResult</code>
 */
class UrlMapValidationResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string load_errors = 310147300;</code>
     */
    private $load_errors;
    /**
     * Whether the given UrlMap can be successfully loaded. If false, 'loadErrors' indicates the reasons.
     *
     * Generated from protobuf field <code>bool load_succeeded = 128326216;</code>
     */
    private $load_succeeded = null;
    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.TestFailure test_failures = 505934134;</code>
     */
    private $test_failures;
    /**
     * If successfully loaded, this field indicates whether the test passed. If false, 'testFailures's indicate the reason of failure.
     *
     * Generated from protobuf field <code>bool test_passed = 192708797;</code>
     */
    private $test_passed = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $load_errors
     *     @type bool $load_succeeded
     *           Whether the given UrlMap can be successfully loaded. If false, 'loadErrors' indicates the reasons.
     *     @type \Google\Cloud\Compute\V1\TestFailure[]|\Google\Protobuf\Internal\RepeatedField $test_failures
     *     @type bool $test_passed
     *           If successfully loaded, this field indicates whether the test passed. If false, 'testFailures's indicate the reason of failure.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string load_errors = 310147300;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLoadErrors()
    {
        return $this->load_errors;
    }

    /**
     * Generated from protobuf field <code>repeated string load_errors = 310147300;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLoadErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->load_errors = $arr;

        return $this;
    }

    /**
     * Whether the given UrlMap can be successfully loaded. If false, 'loadErrors' indicates the reasons.
     *
     * Generated from protobuf field <code>bool load_succeeded = 128326216;</code>
     * @return bool
     */
    public function getLoadSucceeded()
    {
        return isset($this->load_succeeded) ? $this->load_succeeded : false;
    }

    public function hasLoadSucceeded()
    {
        return isset($this->load_succeeded);
    }

    public function clearLoadSucceeded()
    {
        unset($this->load_succeeded);
    }

    /**
     * Whether the given UrlMap can be successfully loaded. If false, 'loadErrors' indicates the reasons.
     *
     * Generated from protobuf field <code>bool load_succeeded = 128326216;</code>
     * @param bool $var
     * @return $this
     */
    public function setLoadSucceeded($var)
    {
        GPBUtil::checkBool($var);
        $this->load_succeeded = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.TestFailure test_failures = 505934134;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTestFailures()
    {
        return $this->test_failures;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.TestFailure test_failures = 505934134;</code>
     * @param \Google\Cloud\Compute\V1\TestFailure[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTestFailures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\TestFailure::class);
        $this->test_failures = $arr;

        return $this;
    }

    /**
     * If successfully loaded, this field indicates whether the test passed. If false, 'testFailures's indicate the reason of failure.
     *
     * Generated from protobuf field <code>bool test_passed = 192708797;</code>
     * @return bool
     */
    public function getTestPassed()
    {
        return isset($this->test_passed) ? $this->test_passed : false;
    }

    public function hasTestPassed()
    {
        return isset($this->test_passed);
    }

    public function clearTestPassed()
    {
        unset($this->test_passed);
    }

    /**
     * If successfully loaded, this field indicates whether the test passed. If false, 'testFailures's indicate the reason of failure.
     *
     * Generated from protobuf field <code>bool test_passed = 192708797;</code>
     * @param bool $var
     * @return $this
     */
    public function setTestPassed($var)
    {
        GPBUtil::checkBool($var);
        $this->test_passed = $var;

        return $this;
    }

}

