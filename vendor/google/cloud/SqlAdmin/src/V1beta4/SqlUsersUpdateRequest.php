<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_users.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.SqlUsersUpdateRequest</code>
 */
class SqlUsersUpdateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Host of the user in the instance.
     *
     * Generated from protobuf field <code>string host = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $host = '';
    /**
     * Database instance ID. This does not include the project ID.
     *
     * Generated from protobuf field <code>string instance = 2;</code>
     */
    private $instance = '';
    /**
     * Name of the user in the instance.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    private $name = '';
    /**
     * Project ID of the project that contains the instance.
     *
     * Generated from protobuf field <code>string project = 4;</code>
     */
    private $project = '';
    /**
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.User body = 100;</code>
     */
    private $body = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $host
     *           Optional. Host of the user in the instance.
     *     @type string $instance
     *           Database instance ID. This does not include the project ID.
     *     @type string $name
     *           Name of the user in the instance.
     *     @type string $project
     *           Project ID of the project that contains the instance.
     *     @type \Google\Cloud\Sql\V1beta4\User $body
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlUsers::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Host of the user in the instance.
     *
     * Generated from protobuf field <code>string host = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Optional. Host of the user in the instance.
     *
     * Generated from protobuf field <code>string host = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->host = $var;

        return $this;
    }

    /**
     * Database instance ID. This does not include the project ID.
     *
     * Generated from protobuf field <code>string instance = 2;</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Database instance ID. This does not include the project ID.
     *
     * Generated from protobuf field <code>string instance = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * Name of the user in the instance.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the user in the instance.
     *
     * Generated from protobuf field <code>string name = 3;</code>
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
     * Project ID of the project that contains the instance.
     *
     * Generated from protobuf field <code>string project = 4;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID of the project that contains the instance.
     *
     * Generated from protobuf field <code>string project = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.User body = 100;</code>
     * @return \Google\Cloud\Sql\V1beta4\User|null
     */
    public function getBody()
    {
        return isset($this->body) ? $this->body : null;
    }

    public function hasBody()
    {
        return isset($this->body);
    }

    public function clearBody()
    {
        unset($this->body);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.User body = 100;</code>
     * @param \Google\Cloud\Sql\V1beta4\User $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1beta4\User::class);
        $this->body = $var;

        return $this;
    }

}

