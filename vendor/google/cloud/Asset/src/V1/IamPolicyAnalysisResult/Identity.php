<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/assets.proto

namespace Google\Cloud\Asset\V1\IamPolicyAnalysisResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An identity under analysis.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.IamPolicyAnalysisResult.Identity</code>
 */
class Identity extends \Google\Protobuf\Internal\Message
{
    /**
     * The identity name in any form of members appear in
     * [IAM policy
     * binding](https://cloud.google.com/iam/reference/rest/v1/Binding), such
     * as:
     * - user:foo&#64;google.com
     * - group:group1&#64;google.com
     * - serviceAccount:s1&#64;prj1.iam.gserviceaccount.com
     * - projectOwner:some_project_id
     * - domain:google.com
     * - allUsers
     * - etc.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The analysis state of this identity.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisState analysis_state = 2;</code>
     */
    private $analysis_state = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The identity name in any form of members appear in
     *           [IAM policy
     *           binding](https://cloud.google.com/iam/reference/rest/v1/Binding), such
     *           as:
     *           - user:foo&#64;google.com
     *           - group:group1&#64;google.com
     *           - serviceAccount:s1&#64;prj1.iam.gserviceaccount.com
     *           - projectOwner:some_project_id
     *           - domain:google.com
     *           - allUsers
     *           - etc.
     *     @type \Google\Cloud\Asset\V1\IamPolicyAnalysisState $analysis_state
     *           The analysis state of this identity.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\Assets::initOnce();
        parent::__construct($data);
    }

    /**
     * The identity name in any form of members appear in
     * [IAM policy
     * binding](https://cloud.google.com/iam/reference/rest/v1/Binding), such
     * as:
     * - user:foo&#64;google.com
     * - group:group1&#64;google.com
     * - serviceAccount:s1&#64;prj1.iam.gserviceaccount.com
     * - projectOwner:some_project_id
     * - domain:google.com
     * - allUsers
     * - etc.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The identity name in any form of members appear in
     * [IAM policy
     * binding](https://cloud.google.com/iam/reference/rest/v1/Binding), such
     * as:
     * - user:foo&#64;google.com
     * - group:group1&#64;google.com
     * - serviceAccount:s1&#64;prj1.iam.gserviceaccount.com
     * - projectOwner:some_project_id
     * - domain:google.com
     * - allUsers
     * - etc.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The analysis state of this identity.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisState analysis_state = 2;</code>
     * @return \Google\Cloud\Asset\V1\IamPolicyAnalysisState|null
     */
    public function getAnalysisState()
    {
        return isset($this->analysis_state) ? $this->analysis_state : null;
    }

    public function hasAnalysisState()
    {
        return isset($this->analysis_state);
    }

    public function clearAnalysisState()
    {
        unset($this->analysis_state);
    }

    /**
     * The analysis state of this identity.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisState analysis_state = 2;</code>
     * @param \Google\Cloud\Asset\V1\IamPolicyAnalysisState $var
     * @return $this
     */
    public function setAnalysisState($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\IamPolicyAnalysisState::class);
        $this->analysis_state = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Identity::class, \Google\Cloud\Asset\V1\IamPolicyAnalysisResult_Identity::class);

