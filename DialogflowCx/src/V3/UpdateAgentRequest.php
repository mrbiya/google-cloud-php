<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/agent.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [Agents.UpdateAgent][google.cloud.dialogflow.cx.v3.Agents.UpdateAgent].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.UpdateAgentRequest</code>
 */
class UpdateAgentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The agent to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Agent agent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $agent = null;
    /**
     * The mask to control which fields get updated. If the mask is not present,
     * all fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\Cx\V3\Agent $agent
     *           Required. The agent to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The mask to control which fields get updated. If the mask is not present,
     *           all fields will be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Agent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The agent to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Agent agent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\Agent|null
     */
    public function getAgent()
    {
        return $this->agent;
    }

    public function hasAgent()
    {
        return isset($this->agent);
    }

    public function clearAgent()
    {
        unset($this->agent);
    }

    /**
     * Required. The agent to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Agent agent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\Agent $var
     * @return $this
     */
    public function setAgent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\Agent::class);
        $this->agent = $var;

        return $this;
    }

    /**
     * The mask to control which fields get updated. If the mask is not present,
     * all fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The mask to control which fields get updated. If the mask is not present,
     * all fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

