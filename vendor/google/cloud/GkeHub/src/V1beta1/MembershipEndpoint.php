<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1beta1/membership.proto

namespace Google\Cloud\GkeHub\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MembershipEndpoint contains information needed to contact a Kubernetes API,
 * endpoint and any additional Kubernetes metadata.
 *
 * Generated from protobuf message <code>google.cloud.gkehub.v1beta1.MembershipEndpoint</code>
 */
class MembershipEndpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Useful Kubernetes-specific metadata.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.KubernetesMetadata kubernetes_metadata = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $kubernetes_metadata = null;
    /**
     * Optional. The in-cluster Kubernetes Resources that should be applied for a correctly
     * registered cluster, in the steady state. These resources:
     *   * Ensure that the cluster is exclusively registered to one and only one
     *     Hub Membership.
     *   * Propagate Workload Pool Information available in the Membership
     *     Authority field.
     *   * Ensure proper initial configuration of default Hub Features.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.KubernetesResource kubernetes_resource = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $kubernetes_resource = null;
    protected $type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\GkeHub\V1beta1\GkeCluster $gke_cluster
     *           Optional. Specific information for a GKE-on-GCP cluster.
     *     @type \Google\Cloud\GkeHub\V1beta1\OnPremCluster $on_prem_cluster
     *           Optional. Specific information for a GKE On-Prem cluster.
     *     @type \Google\Cloud\GkeHub\V1beta1\MultiCloudCluster $multi_cloud_cluster
     *           Optional. Specific information for a GKE Multi-Cloud cluster.
     *     @type \Google\Cloud\GkeHub\V1beta1\KubernetesMetadata $kubernetes_metadata
     *           Output only. Useful Kubernetes-specific metadata.
     *     @type \Google\Cloud\GkeHub\V1beta1\KubernetesResource $kubernetes_resource
     *           Optional. The in-cluster Kubernetes Resources that should be applied for a correctly
     *           registered cluster, in the steady state. These resources:
     *             * Ensure that the cluster is exclusively registered to one and only one
     *               Hub Membership.
     *             * Propagate Workload Pool Information available in the Membership
     *               Authority field.
     *             * Ensure proper initial configuration of default Hub Features.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1Beta1\Membership::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Specific information for a GKE-on-GCP cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.GkeCluster gke_cluster = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeHub\V1beta1\GkeCluster|null
     */
    public function getGkeCluster()
    {
        return $this->readOneof(4);
    }

    public function hasGkeCluster()
    {
        return $this->hasOneof(4);
    }

    /**
     * Optional. Specific information for a GKE-on-GCP cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.GkeCluster gke_cluster = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeHub\V1beta1\GkeCluster $var
     * @return $this
     */
    public function setGkeCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\V1beta1\GkeCluster::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Optional. Specific information for a GKE On-Prem cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.OnPremCluster on_prem_cluster = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeHub\V1beta1\OnPremCluster|null
     */
    public function getOnPremCluster()
    {
        return $this->readOneof(7);
    }

    public function hasOnPremCluster()
    {
        return $this->hasOneof(7);
    }

    /**
     * Optional. Specific information for a GKE On-Prem cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.OnPremCluster on_prem_cluster = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeHub\V1beta1\OnPremCluster $var
     * @return $this
     */
    public function setOnPremCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\V1beta1\OnPremCluster::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Optional. Specific information for a GKE Multi-Cloud cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.MultiCloudCluster multi_cloud_cluster = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeHub\V1beta1\MultiCloudCluster|null
     */
    public function getMultiCloudCluster()
    {
        return $this->readOneof(8);
    }

    public function hasMultiCloudCluster()
    {
        return $this->hasOneof(8);
    }

    /**
     * Optional. Specific information for a GKE Multi-Cloud cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.MultiCloudCluster multi_cloud_cluster = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeHub\V1beta1\MultiCloudCluster $var
     * @return $this
     */
    public function setMultiCloudCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\V1beta1\MultiCloudCluster::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Output only. Useful Kubernetes-specific metadata.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.KubernetesMetadata kubernetes_metadata = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\GkeHub\V1beta1\KubernetesMetadata|null
     */
    public function getKubernetesMetadata()
    {
        return isset($this->kubernetes_metadata) ? $this->kubernetes_metadata : null;
    }

    public function hasKubernetesMetadata()
    {
        return isset($this->kubernetes_metadata);
    }

    public function clearKubernetesMetadata()
    {
        unset($this->kubernetes_metadata);
    }

    /**
     * Output only. Useful Kubernetes-specific metadata.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.KubernetesMetadata kubernetes_metadata = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\GkeHub\V1beta1\KubernetesMetadata $var
     * @return $this
     */
    public function setKubernetesMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\V1beta1\KubernetesMetadata::class);
        $this->kubernetes_metadata = $var;

        return $this;
    }

    /**
     * Optional. The in-cluster Kubernetes Resources that should be applied for a correctly
     * registered cluster, in the steady state. These resources:
     *   * Ensure that the cluster is exclusively registered to one and only one
     *     Hub Membership.
     *   * Propagate Workload Pool Information available in the Membership
     *     Authority field.
     *   * Ensure proper initial configuration of default Hub Features.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.KubernetesResource kubernetes_resource = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeHub\V1beta1\KubernetesResource|null
     */
    public function getKubernetesResource()
    {
        return isset($this->kubernetes_resource) ? $this->kubernetes_resource : null;
    }

    public function hasKubernetesResource()
    {
        return isset($this->kubernetes_resource);
    }

    public function clearKubernetesResource()
    {
        unset($this->kubernetes_resource);
    }

    /**
     * Optional. The in-cluster Kubernetes Resources that should be applied for a correctly
     * registered cluster, in the steady state. These resources:
     *   * Ensure that the cluster is exclusively registered to one and only one
     *     Hub Membership.
     *   * Propagate Workload Pool Information available in the Membership
     *     Authority field.
     *   * Ensure proper initial configuration of default Hub Features.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.KubernetesResource kubernetes_resource = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeHub\V1beta1\KubernetesResource $var
     * @return $this
     */
    public function setKubernetesResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\V1beta1\KubernetesResource::class);
        $this->kubernetes_resource = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("type");
    }

}

