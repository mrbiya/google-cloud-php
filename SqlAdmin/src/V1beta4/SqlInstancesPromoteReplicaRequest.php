<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.SqlInstancesPromoteReplicaRequest</code>
 */
class SqlInstancesPromoteReplicaRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Cloud SQL read replica instance name.
     *
     * Generated from protobuf field <code>string instance = 1;</code>
     */
    private $instance = '';
    /**
     * ID of the project that contains the read replica.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     */
    private $project = '';
    /**
     * Set to true if the promote operation should attempt to re-add the original
     * primary as a replica when it comes back online. Otherwise, if this value is
     * false or not set, the original primary will be a standalone instance.
     *
     * Generated from protobuf field <code>bool failover = 3;</code>
     */
    private $failover = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance
     *           Cloud SQL read replica instance name.
     *     @type string $project
     *           ID of the project that contains the read replica.
     *     @type bool $failover
     *           Set to true if the promote operation should attempt to re-add the original
     *           primary as a replica when it comes back online. Otherwise, if this value is
     *           false or not set, the original primary will be a standalone instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSql::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud SQL read replica instance name.
     *
     * Generated from protobuf field <code>string instance = 1;</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Cloud SQL read replica instance name.
     *
     * Generated from protobuf field <code>string instance = 1;</code>
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
     * ID of the project that contains the read replica.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * ID of the project that contains the read replica.
     *
     * Generated from protobuf field <code>string project = 2;</code>
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
     * Set to true if the promote operation should attempt to re-add the original
     * primary as a replica when it comes back online. Otherwise, if this value is
     * false or not set, the original primary will be a standalone instance.
     *
     * Generated from protobuf field <code>bool failover = 3;</code>
     * @return bool
     */
    public function getFailover()
    {
        return $this->failover;
    }

    /**
     * Set to true if the promote operation should attempt to re-add the original
     * primary as a replica when it comes back online. Otherwise, if this value is
     * false or not set, the original primary will be a standalone instance.
     *
     * Generated from protobuf field <code>bool failover = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setFailover($var)
    {
        GPBUtil::checkBool($var);
        $this->failover = $var;

        return $this;
    }

}

