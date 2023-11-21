<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1beta/scan_run_error_trace.proto

namespace Google\Cloud\WebSecurityScanner\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Output only.
 * Defines an error trace message for a ScanRun.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1beta.ScanRunErrorTrace</code>
 */
class ScanRunErrorTrace extends \Google\Protobuf\Internal\Message
{
    /**
     * Indicates the error reason code.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanRunErrorTrace.Code code = 1;</code>
     */
    private $code = 0;
    /**
     * If the scan encounters SCAN_CONFIG_ISSUE error, this field has the error
     * message encountered during scan configuration validation that is performed
     * before each scan run.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfigError scan_config_error = 2;</code>
     */
    private $scan_config_error = null;
    /**
     * If the scan encounters TOO_MANY_HTTP_ERRORS, this field indicates the most
     * common HTTP error code, if such is available. For example, if this code is
     * 404, the scan has encountered too many NOT_FOUND responses.
     *
     * Generated from protobuf field <code>int32 most_common_http_error_code = 3;</code>
     */
    private $most_common_http_error_code = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *           Indicates the error reason code.
     *     @type \Google\Cloud\WebSecurityScanner\V1beta\ScanConfigError $scan_config_error
     *           If the scan encounters SCAN_CONFIG_ISSUE error, this field has the error
     *           message encountered during scan configuration validation that is performed
     *           before each scan run.
     *     @type int $most_common_http_error_code
     *           If the scan encounters TOO_MANY_HTTP_ERRORS, this field indicates the most
     *           common HTTP error code, if such is available. For example, if this code is
     *           404, the scan has encountered too many NOT_FOUND responses.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\ScanRunErrorTrace::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates the error reason code.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanRunErrorTrace.Code code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Indicates the error reason code.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanRunErrorTrace.Code code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\WebSecurityScanner\V1beta\ScanRunErrorTrace\Code::class);
        $this->code = $var;

        return $this;
    }

    /**
     * If the scan encounters SCAN_CONFIG_ISSUE error, this field has the error
     * message encountered during scan configuration validation that is performed
     * before each scan run.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfigError scan_config_error = 2;</code>
     * @return \Google\Cloud\WebSecurityScanner\V1beta\ScanConfigError|null
     */
    public function getScanConfigError()
    {
        return isset($this->scan_config_error) ? $this->scan_config_error : null;
    }

    public function hasScanConfigError()
    {
        return isset($this->scan_config_error);
    }

    public function clearScanConfigError()
    {
        unset($this->scan_config_error);
    }

    /**
     * If the scan encounters SCAN_CONFIG_ISSUE error, this field has the error
     * message encountered during scan configuration validation that is performed
     * before each scan run.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfigError scan_config_error = 2;</code>
     * @param \Google\Cloud\WebSecurityScanner\V1beta\ScanConfigError $var
     * @return $this
     */
    public function setScanConfigError($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\WebSecurityScanner\V1beta\ScanConfigError::class);
        $this->scan_config_error = $var;

        return $this;
    }

    /**
     * If the scan encounters TOO_MANY_HTTP_ERRORS, this field indicates the most
     * common HTTP error code, if such is available. For example, if this code is
     * 404, the scan has encountered too many NOT_FOUND responses.
     *
     * Generated from protobuf field <code>int32 most_common_http_error_code = 3;</code>
     * @return int
     */
    public function getMostCommonHttpErrorCode()
    {
        return $this->most_common_http_error_code;
    }

    /**
     * If the scan encounters TOO_MANY_HTTP_ERRORS, this field indicates the most
     * common HTTP error code, if such is available. For example, if this code is
     * 404, the scan has encountered too many NOT_FOUND responses.
     *
     * Generated from protobuf field <code>int32 most_common_http_error_code = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMostCommonHttpErrorCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->most_common_http_error_code = $var;

        return $this;
    }

}

