<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/cluster/v1/cloud_redis_cluster.proto

namespace Google\Cloud\Redis\Cluster\V1;

use UnexpectedValueException;

/**
 * Available mode of in-transit encryption.
 *
 * Protobuf type <code>google.cloud.redis.cluster.v1.TransitEncryptionMode</code>
 */
class TransitEncryptionMode
{
    /**
     * In-transit encryption not set.
     *
     * Generated from protobuf enum <code>TRANSIT_ENCRYPTION_MODE_UNSPECIFIED = 0;</code>
     */
    const TRANSIT_ENCRYPTION_MODE_UNSPECIFIED = 0;
    /**
     * In-transit encryption disabled.
     *
     * Generated from protobuf enum <code>TRANSIT_ENCRYPTION_MODE_DISABLED = 1;</code>
     */
    const TRANSIT_ENCRYPTION_MODE_DISABLED = 1;
    /**
     * Use server managed encryption for in-transit encryption.
     *
     * Generated from protobuf enum <code>TRANSIT_ENCRYPTION_MODE_SERVER_AUTHENTICATION = 2;</code>
     */
    const TRANSIT_ENCRYPTION_MODE_SERVER_AUTHENTICATION = 2;

    private static $valueToName = [
        self::TRANSIT_ENCRYPTION_MODE_UNSPECIFIED => 'TRANSIT_ENCRYPTION_MODE_UNSPECIFIED',
        self::TRANSIT_ENCRYPTION_MODE_DISABLED => 'TRANSIT_ENCRYPTION_MODE_DISABLED',
        self::TRANSIT_ENCRYPTION_MODE_SERVER_AUTHENTICATION => 'TRANSIT_ENCRYPTION_MODE_SERVER_AUTHENTICATION',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

