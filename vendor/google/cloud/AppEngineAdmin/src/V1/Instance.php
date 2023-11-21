<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/instance.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An Instance resource is the computing unit that App Engine uses to
 * automatically scale an application.
 *
 * Generated from protobuf message <code>google.appengine.v1.Instance</code>
 */
class Instance extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Full path to the Instance resource in the API.
     * Example: `apps/myapp/services/default/versions/v1/instances/instance-1`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. Relative name of the instance within the version.
     * Example: `instance-1`.
     *
     * Generated from protobuf field <code>string id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $id = '';
    /**
     * Output only. App Engine release this instance is running on.
     *
     * Generated from protobuf field <code>string app_engine_release = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $app_engine_release = '';
    /**
     * Output only. Availability of the instance.
     *
     * Generated from protobuf field <code>.google.appengine.v1.Instance.Availability availability = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $availability = 0;
    /**
     * Output only. Name of the virtual machine where this instance lives. Only applicable
     * for instances in App Engine flexible environment.
     *
     * Generated from protobuf field <code>string vm_name = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $vm_name = '';
    /**
     * Output only. Zone where the virtual machine is located. Only applicable for instances
     * in App Engine flexible environment.
     *
     * Generated from protobuf field <code>string vm_zone_name = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $vm_zone_name = '';
    /**
     * Output only. Virtual machine ID of this instance. Only applicable for instances in
     * App Engine flexible environment.
     *
     * Generated from protobuf field <code>string vm_id = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $vm_id = '';
    /**
     * Output only. Time that this instance was started.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $start_time = null;
    /**
     * Output only. Number of requests since this instance was started.
     *
     * Generated from protobuf field <code>int32 requests = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $requests = 0;
    /**
     * Output only. Number of errors since this instance was started.
     *
     * Generated from protobuf field <code>int32 errors = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $errors = 0;
    /**
     * Output only. Average queries per second (QPS) over the last minute.
     *
     * Generated from protobuf field <code>float qps = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $qps = 0.0;
    /**
     * Output only. Average latency (ms) over the last minute.
     *
     * Generated from protobuf field <code>int32 average_latency = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $average_latency = 0;
    /**
     * Output only. Total memory in use (bytes).
     *
     * Generated from protobuf field <code>int64 memory_usage = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $memory_usage = 0;
    /**
     * Output only. Status of the virtual machine where this instance lives. Only applicable
     * for instances in App Engine flexible environment.
     *
     * Generated from protobuf field <code>string vm_status = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $vm_status = '';
    /**
     * Output only. Whether this instance is in debug mode. Only applicable for instances in
     * App Engine flexible environment.
     *
     * Generated from protobuf field <code>bool vm_debug_enabled = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $vm_debug_enabled = false;
    /**
     * Output only. The IP address of this instance. Only applicable for instances in App
     * Engine flexible environment.
     *
     * Generated from protobuf field <code>string vm_ip = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $vm_ip = '';
    /**
     * Output only. The liveness health check of this instance. Only applicable for instances
     * in App Engine flexible environment.
     *
     * Generated from protobuf field <code>.google.appengine.v1.Instance.Liveness.LivenessState vm_liveness = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $vm_liveness = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Full path to the Instance resource in the API.
     *           Example: `apps/myapp/services/default/versions/v1/instances/instance-1`.
     *     @type string $id
     *           Output only. Relative name of the instance within the version.
     *           Example: `instance-1`.
     *     @type string $app_engine_release
     *           Output only. App Engine release this instance is running on.
     *     @type int $availability
     *           Output only. Availability of the instance.
     *     @type string $vm_name
     *           Output only. Name of the virtual machine where this instance lives. Only applicable
     *           for instances in App Engine flexible environment.
     *     @type string $vm_zone_name
     *           Output only. Zone where the virtual machine is located. Only applicable for instances
     *           in App Engine flexible environment.
     *     @type string $vm_id
     *           Output only. Virtual machine ID of this instance. Only applicable for instances in
     *           App Engine flexible environment.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. Time that this instance was started.
     *           &#64;OutputOnly
     *     @type int $requests
     *           Output only. Number of requests since this instance was started.
     *     @type int $errors
     *           Output only. Number of errors since this instance was started.
     *     @type float $qps
     *           Output only. Average queries per second (QPS) over the last minute.
     *     @type int $average_latency
     *           Output only. Average latency (ms) over the last minute.
     *     @type int|string $memory_usage
     *           Output only. Total memory in use (bytes).
     *     @type string $vm_status
     *           Output only. Status of the virtual machine where this instance lives. Only applicable
     *           for instances in App Engine flexible environment.
     *     @type bool $vm_debug_enabled
     *           Output only. Whether this instance is in debug mode. Only applicable for instances in
     *           App Engine flexible environment.
     *     @type string $vm_ip
     *           Output only. The IP address of this instance. Only applicable for instances in App
     *           Engine flexible environment.
     *     @type int $vm_liveness
     *           Output only. The liveness health check of this instance. Only applicable for instances
     *           in App Engine flexible environment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Instance::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Full path to the Instance resource in the API.
     * Example: `apps/myapp/services/default/versions/v1/instances/instance-1`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Full path to the Instance resource in the API.
     * Example: `apps/myapp/services/default/versions/v1/instances/instance-1`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Relative name of the instance within the version.
     * Example: `instance-1`.
     *
     * Generated from protobuf field <code>string id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Output only. Relative name of the instance within the version.
     * Example: `instance-1`.
     *
     * Generated from protobuf field <code>string id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Output only. App Engine release this instance is running on.
     *
     * Generated from protobuf field <code>string app_engine_release = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getAppEngineRelease()
    {
        return $this->app_engine_release;
    }

    /**
     * Output only. App Engine release this instance is running on.
     *
     * Generated from protobuf field <code>string app_engine_release = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setAppEngineRelease($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_engine_release = $var;

        return $this;
    }

    /**
     * Output only. Availability of the instance.
     *
     * Generated from protobuf field <code>.google.appengine.v1.Instance.Availability availability = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Output only. Availability of the instance.
     *
     * Generated from protobuf field <code>.google.appengine.v1.Instance.Availability availability = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setAvailability($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AppEngine\V1\Instance\Availability::class);
        $this->availability = $var;

        return $this;
    }

    /**
     * Output only. Name of the virtual machine where this instance lives. Only applicable
     * for instances in App Engine flexible environment.
     *
     * Generated from protobuf field <code>string vm_name = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getVmName()
    {
        return $this->vm_name;
    }

    /**
     * Output only. Name of the virtual machine where this instance lives. Only applicable
     * for instances in App Engine flexible environment.
     *
     * Generated from protobuf field <code>string vm_name = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setVmName($var)
    {
        GPBUtil::checkString($var, True);
        $this->vm_name = $var;

        return $this;
    }

    /**
     * Output only. Zone where the virtual machine is located. Only applicable for instances
     * in App Engine flexible environment.
     *
     * Generated from protobuf field <code>string vm_zone_name = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getVmZoneName()
    {
        return $this->vm_zone_name;
    }

    /**
     * Output only. Zone where the virtual machine is located. Only applicable for instances
     * in App Engine flexible environment.
     *
     * Generated from protobuf field <code>string vm_zone_name = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setVmZoneName($var)
    {
        GPBUtil::checkString($var, True);
        $this->vm_zone_name = $var;

        return $this;
    }

    /**
     * Output only. Virtual machine ID of this instance. Only applicable for instances in
     * App Engine flexible environment.
     *
     * Generated from protobuf field <code>string vm_id = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getVmId()
    {
        return $this->vm_id;
    }

    /**
     * Output only. Virtual machine ID of this instance. Only applicable for instances in
     * App Engine flexible environment.
     *
     * Generated from protobuf field <code>string vm_id = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setVmId($var)
    {
        GPBUtil::checkString($var, True);
        $this->vm_id = $var;

        return $this;
    }

    /**
     * Output only. Time that this instance was started.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return isset($this->start_time) ? $this->start_time : null;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Output only. Time that this instance was started.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. Number of requests since this instance was started.
     *
     * Generated from protobuf field <code>int32 requests = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * Output only. Number of requests since this instance was started.
     *
     * Generated from protobuf field <code>int32 requests = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setRequests($var)
    {
        GPBUtil::checkInt32($var);
        $this->requests = $var;

        return $this;
    }

    /**
     * Output only. Number of errors since this instance was started.
     *
     * Generated from protobuf field <code>int32 errors = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Output only. Number of errors since this instance was started.
     *
     * Generated from protobuf field <code>int32 errors = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setErrors($var)
    {
        GPBUtil::checkInt32($var);
        $this->errors = $var;

        return $this;
    }

    /**
     * Output only. Average queries per second (QPS) over the last minute.
     *
     * Generated from protobuf field <code>float qps = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getQps()
    {
        return $this->qps;
    }

    /**
     * Output only. Average queries per second (QPS) over the last minute.
     *
     * Generated from protobuf field <code>float qps = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setQps($var)
    {
        GPBUtil::checkFloat($var);
        $this->qps = $var;

        return $this;
    }

    /**
     * Output only. Average latency (ms) over the last minute.
     *
     * Generated from protobuf field <code>int32 average_latency = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getAverageLatency()
    {
        return $this->average_latency;
    }

    /**
     * Output only. Average latency (ms) over the last minute.
     *
     * Generated from protobuf field <code>int32 average_latency = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setAverageLatency($var)
    {
        GPBUtil::checkInt32($var);
        $this->average_latency = $var;

        return $this;
    }

    /**
     * Output only. Total memory in use (bytes).
     *
     * Generated from protobuf field <code>int64 memory_usage = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getMemoryUsage()
    {
        return $this->memory_usage;
    }

    /**
     * Output only. Total memory in use (bytes).
     *
     * Generated from protobuf field <code>int64 memory_usage = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMemoryUsage($var)
    {
        GPBUtil::checkInt64($var);
        $this->memory_usage = $var;

        return $this;
    }

    /**
     * Output only. Status of the virtual machine where this instance lives. Only applicable
     * for instances in App Engine flexible environment.
     *
     * Generated from protobuf field <code>string vm_status = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getVmStatus()
    {
        return $this->vm_status;
    }

    /**
     * Output only. Status of the virtual machine where this instance lives. Only applicable
     * for instances in App Engine flexible environment.
     *
     * Generated from protobuf field <code>string vm_status = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setVmStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->vm_status = $var;

        return $this;
    }

    /**
     * Output only. Whether this instance is in debug mode. Only applicable for instances in
     * App Engine flexible environment.
     *
     * Generated from protobuf field <code>bool vm_debug_enabled = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getVmDebugEnabled()
    {
        return $this->vm_debug_enabled;
    }

    /**
     * Output only. Whether this instance is in debug mode. Only applicable for instances in
     * App Engine flexible environment.
     *
     * Generated from protobuf field <code>bool vm_debug_enabled = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setVmDebugEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->vm_debug_enabled = $var;

        return $this;
    }

    /**
     * Output only. The IP address of this instance. Only applicable for instances in App
     * Engine flexible environment.
     *
     * Generated from protobuf field <code>string vm_ip = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getVmIp()
    {
        return $this->vm_ip;
    }

    /**
     * Output only. The IP address of this instance. Only applicable for instances in App
     * Engine flexible environment.
     *
     * Generated from protobuf field <code>string vm_ip = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setVmIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->vm_ip = $var;

        return $this;
    }

    /**
     * Output only. The liveness health check of this instance. Only applicable for instances
     * in App Engine flexible environment.
     *
     * Generated from protobuf field <code>.google.appengine.v1.Instance.Liveness.LivenessState vm_liveness = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getVmLiveness()
    {
        return $this->vm_liveness;
    }

    /**
     * Output only. The liveness health check of this instance. Only applicable for instances
     * in App Engine flexible environment.
     *
     * Generated from protobuf field <code>.google.appengine.v1.Instance.Liveness.LivenessState vm_liveness = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setVmLiveness($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AppEngine\V1\Instance\Liveness\LivenessState::class);
        $this->vm_liveness = $var;

        return $this;
    }

}

