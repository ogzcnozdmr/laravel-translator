<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.SqlDatabasesUpdateRequest</code>
 */
class SqlDatabasesUpdateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the database to be updated in the instance.
     *
     * Generated from protobuf field <code>string database = 1;</code>
     */
    private $database = '';
    /**
     * Database instance ID. This does not include the project ID.
     *
     * Generated from protobuf field <code>string instance = 2;</code>
     */
    private $instance = '';
    /**
     * Project ID of the project that contains the instance.
     *
     * Generated from protobuf field <code>string project = 3;</code>
     */
    private $project = '';
    /**
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.Database body = 100;</code>
     */
    private $body = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $database
     *           Name of the database to be updated in the instance.
     *     @type string $instance
     *           Database instance ID. This does not include the project ID.
     *     @type string $project
     *           Project ID of the project that contains the instance.
     *     @type \Google\Cloud\Sql\V1beta4\Database $body
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSql::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the database to be updated in the instance.
     *
     * Generated from protobuf field <code>string database = 1;</code>
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Name of the database to be updated in the instance.
     *
     * Generated from protobuf field <code>string database = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->database = $var;

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
     * Project ID of the project that contains the instance.
     *
     * Generated from protobuf field <code>string project = 3;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID of the project that contains the instance.
     *
     * Generated from protobuf field <code>string project = 3;</code>
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
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.Database body = 100;</code>
     * @return \Google\Cloud\Sql\V1beta4\Database|null
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
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.Database body = 100;</code>
     * @param \Google\Cloud\Sql\V1beta4\Database $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1beta4\Database::class);
        $this->body = $var;

        return $this;
    }

}

