<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/webhook.proto

namespace Google\Cloud\Dialogflow\Cx\V3\WebhookRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents fulfillment information communicated to the webhook.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.WebhookRequest.FulfillmentInfo</code>
 */
class FulfillmentInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Always present.
     * The value of the
     * [Fulfillment.tag][google.cloud.dialogflow.cx.v3.Fulfillment.tag] field
     * will be populated in this field by Dialogflow when the associated webhook
     * is called. The tag is typically used by the webhook service to identify
     * which fulfillment is being called, but it could be used for other
     * purposes.
     *
     * Generated from protobuf field <code>string tag = 1;</code>
     */
    protected $tag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tag
     *           Always present.
     *           The value of the
     *           [Fulfillment.tag][google.cloud.dialogflow.cx.v3.Fulfillment.tag] field
     *           will be populated in this field by Dialogflow when the associated webhook
     *           is called. The tag is typically used by the webhook service to identify
     *           which fulfillment is being called, but it could be used for other
     *           purposes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Webhook::initOnce();
        parent::__construct($data);
    }

    /**
     * Always present.
     * The value of the
     * [Fulfillment.tag][google.cloud.dialogflow.cx.v3.Fulfillment.tag] field
     * will be populated in this field by Dialogflow when the associated webhook
     * is called. The tag is typically used by the webhook service to identify
     * which fulfillment is being called, but it could be used for other
     * purposes.
     *
     * Generated from protobuf field <code>string tag = 1;</code>
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Always present.
     * The value of the
     * [Fulfillment.tag][google.cloud.dialogflow.cx.v3.Fulfillment.tag] field
     * will be populated in this field by Dialogflow when the associated webhook
     * is called. The tag is typically used by the webhook service to identify
     * which fulfillment is being called, but it could be used for other
     * purposes.
     *
     * Generated from protobuf field <code>string tag = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag = $var;

        return $this;
    }

}


