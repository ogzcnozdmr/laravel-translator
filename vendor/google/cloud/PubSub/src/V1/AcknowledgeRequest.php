<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the Acknowledge method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.AcknowledgeRequest</code>
 */
class AcknowledgeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The subscription whose message is being acknowledged.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $subscription = '';
    /**
     * Required. The acknowledgment ID for the messages being acknowledged that
     * was returned by the Pub/Sub system in the `Pull` response. Must not be
     * empty.
     *
     * Generated from protobuf field <code>repeated string ack_ids = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $ack_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subscription
     *           Required. The subscription whose message is being acknowledged.
     *           Format is `projects/{project}/subscriptions/{sub}`.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $ack_ids
     *           Required. The acknowledgment ID for the messages being acknowledged that
     *           was returned by the Pub/Sub system in the `Pull` response. Must not be
     *           empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The subscription whose message is being acknowledged.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Required. The subscription whose message is being acknowledged.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;

        return $this;
    }

    /**
     * Required. The acknowledgment ID for the messages being acknowledged that
     * was returned by the Pub/Sub system in the `Pull` response. Must not be
     * empty.
     *
     * Generated from protobuf field <code>repeated string ack_ids = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAckIds()
    {
        return $this->ack_ids;
    }

    /**
     * Required. The acknowledgment ID for the messages being acknowledged that
     * was returned by the Pub/Sub system in the `Pull` response. Must not be
     * empty.
     *
     * Generated from protobuf field <code>repeated string ack_ids = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAckIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ack_ids = $arr;

        return $this;
    }

}

