<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1alpha/metastore.proto

namespace Google\Cloud\Metastore\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies how metastore metadata should be integrated with the Data Catalog
 * service.
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1alpha.DataCatalogConfig</code>
 */
class DataCatalogConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Defines whether the metastore metadata should be synced to Data Catalog.
     * The default value is to disable syncing metastore metadata to Data Catalog.
     *
     * Generated from protobuf field <code>bool enabled = 2;</code>
     */
    private $enabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enabled
     *           Defines whether the metastore metadata should be synced to Data Catalog.
     *           The default value is to disable syncing metastore metadata to Data Catalog.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1Alpha\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * Defines whether the metastore metadata should be synced to Data Catalog.
     * The default value is to disable syncing metastore metadata to Data Catalog.
     *
     * Generated from protobuf field <code>bool enabled = 2;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Defines whether the metastore metadata should be synced to Data Catalog.
     * The default value is to disable syncing metastore metadata to Data Catalog.
     *
     * Generated from protobuf field <code>bool enabled = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

}

