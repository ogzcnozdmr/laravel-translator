<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/result_set.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata about a [ResultSet][google.spanner.v1.ResultSet] or [PartialResultSet][google.spanner.v1.PartialResultSet].
 *
 * Generated from protobuf message <code>google.spanner.v1.ResultSetMetadata</code>
 */
class ResultSetMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Indicates the field names and types for the rows in the result
     * set.  For example, a SQL query like `"SELECT UserId, UserName FROM
     * Users"` could return a `row_type` value like:
     *     "fields": [
     *       { "name": "UserId", "type": { "code": "INT64" } },
     *       { "name": "UserName", "type": { "code": "STRING" } },
     *     ]
     *
     * Generated from protobuf field <code>.google.spanner.v1.StructType row_type = 1;</code>
     */
    private $row_type = null;
    /**
     * If the read or SQL query began a transaction as a side-effect, the
     * information about the new transaction is yielded here.
     *
     * Generated from protobuf field <code>.google.spanner.v1.Transaction transaction = 2;</code>
     */
    private $transaction = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Spanner\V1\StructType $row_type
     *           Indicates the field names and types for the rows in the result
     *           set.  For example, a SQL query like `"SELECT UserId, UserName FROM
     *           Users"` could return a `row_type` value like:
     *               "fields": [
     *                 { "name": "UserId", "type": { "code": "INT64" } },
     *                 { "name": "UserName", "type": { "code": "STRING" } },
     *               ]
     *     @type \Google\Cloud\Spanner\V1\Transaction $transaction
     *           If the read or SQL query began a transaction as a side-effect, the
     *           information about the new transaction is yielded here.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\V1\ResultSet::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates the field names and types for the rows in the result
     * set.  For example, a SQL query like `"SELECT UserId, UserName FROM
     * Users"` could return a `row_type` value like:
     *     "fields": [
     *       { "name": "UserId", "type": { "code": "INT64" } },
     *       { "name": "UserName", "type": { "code": "STRING" } },
     *     ]
     *
     * Generated from protobuf field <code>.google.spanner.v1.StructType row_type = 1;</code>
     * @return \Google\Cloud\Spanner\V1\StructType|null
     */
    public function getRowType()
    {
        return isset($this->row_type) ? $this->row_type : null;
    }

    public function hasRowType()
    {
        return isset($this->row_type);
    }

    public function clearRowType()
    {
        unset($this->row_type);
    }

    /**
     * Indicates the field names and types for the rows in the result
     * set.  For example, a SQL query like `"SELECT UserId, UserName FROM
     * Users"` could return a `row_type` value like:
     *     "fields": [
     *       { "name": "UserId", "type": { "code": "INT64" } },
     *       { "name": "UserName", "type": { "code": "STRING" } },
     *     ]
     *
     * Generated from protobuf field <code>.google.spanner.v1.StructType row_type = 1;</code>
     * @param \Google\Cloud\Spanner\V1\StructType $var
     * @return $this
     */
    public function setRowType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\V1\StructType::class);
        $this->row_type = $var;

        return $this;
    }

    /**
     * If the read or SQL query began a transaction as a side-effect, the
     * information about the new transaction is yielded here.
     *
     * Generated from protobuf field <code>.google.spanner.v1.Transaction transaction = 2;</code>
     * @return \Google\Cloud\Spanner\V1\Transaction|null
     */
    public function getTransaction()
    {
        return isset($this->transaction) ? $this->transaction : null;
    }

    public function hasTransaction()
    {
        return isset($this->transaction);
    }

    public function clearTransaction()
    {
        unset($this->transaction);
    }

    /**
     * If the read or SQL query began a transaction as a side-effect, the
     * information about the new transaction is yielded here.
     *
     * Generated from protobuf field <code>.google.spanner.v1.Transaction transaction = 2;</code>
     * @param \Google\Cloud\Spanner\V1\Transaction $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\V1\Transaction::class);
        $this->transaction = $var;

        return $this;
    }

}

