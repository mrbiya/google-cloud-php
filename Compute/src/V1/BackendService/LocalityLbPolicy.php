<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\BackendService;

use UnexpectedValueException;

/**
 * The load balancing algorithm used within the scope of the locality. The possible values are: - ROUND_ROBIN: This is a simple policy in which each healthy backend is selected in round robin order. This is the default. - LEAST_REQUEST: An O(1) algorithm which selects two random healthy hosts and picks the host which has fewer active requests. - RING_HASH: The ring/modulo hash load balancer implements consistent hashing to backends. The algorithm has the property that the addition/removal of a host from a set of N hosts only affects 1/N of the requests. - RANDOM: The load balancer selects a random healthy host. - ORIGINAL_DESTINATION: Backend host is selected based on the client connection metadata, i.e., connections are opened to the same address as the destination address of the incoming connection before the connection was redirected to the load balancer. - MAGLEV: used as a drop in replacement for the ring hash load balancer. Maglev is not as stable as ring hash but has faster table lookup build times and host selection times. For more information about Maglev, see https://ai.google/research/pubs/pub44824 This field is applicable to either: - A regional backend service with the service_protocol set to HTTP, HTTPS, or HTTP2, and load_balancing_scheme set to INTERNAL_MANAGED. - A global backend service with the load_balancing_scheme set to INTERNAL_SELF_MANAGED. If sessionAffinity is not NONE, and this field is not set to MAGLEV or RING_HASH, session affinity settings will not take effect. Only the default ROUND_ROBIN policy is supported when the backend service is referenced by a URL map that is bound to target gRPC proxy that has validateForProxyless field set to true.
 *
 * Protobuf type <code>google.cloud.compute.v1.BackendService.LocalityLbPolicy</code>
 */
class LocalityLbPolicy
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_LOCALITY_LB_POLICY = 0;</code>
     */
    const UNDEFINED_LOCALITY_LB_POLICY = 0;
    /**
     * Generated from protobuf enum <code>INVALID_LB_POLICY = 323318707;</code>
     */
    const INVALID_LB_POLICY = 323318707;
    /**
     * An O(1) algorithm which selects two random healthy hosts and picks the host which has fewer active requests.
     *
     * Generated from protobuf enum <code>LEAST_REQUEST = 46604921;</code>
     */
    const LEAST_REQUEST = 46604921;
    /**
     * This algorithm implements consistent hashing to backends. Maglev can be used as a drop in replacement for the ring hash load balancer. Maglev is not as stable as ring hash but has faster table lookup build times and host selection times. For more information about Maglev, see https://ai.google/research/pubs/pub44824
     *
     * Generated from protobuf enum <code>MAGLEV = 119180266;</code>
     */
    const MAGLEV = 119180266;
    /**
     * Backend host is selected based on the client connection metadata, i.e., connections are opened to the same address as the destination address of the incoming connection before the connection was redirected to the load balancer.
     *
     * Generated from protobuf enum <code>ORIGINAL_DESTINATION = 166297216;</code>
     */
    const ORIGINAL_DESTINATION = 166297216;
    /**
     * The load balancer selects a random healthy host.
     *
     * Generated from protobuf enum <code>RANDOM = 262527171;</code>
     */
    const RANDOM = 262527171;
    /**
     * The ring/modulo hash load balancer implements consistent hashing to backends. The algorithm has the property that the addition/removal of a host from a set of N hosts only affects 1/N of the requests.
     *
     * Generated from protobuf enum <code>RING_HASH = 432795069;</code>
     */
    const RING_HASH = 432795069;
    /**
     * This is a simple policy in which each healthy backend is selected in round robin order. This is the default.
     *
     * Generated from protobuf enum <code>ROUND_ROBIN = 153895801;</code>
     */
    const ROUND_ROBIN = 153895801;

    private static $valueToName = [
        self::UNDEFINED_LOCALITY_LB_POLICY => 'UNDEFINED_LOCALITY_LB_POLICY',
        self::INVALID_LB_POLICY => 'INVALID_LB_POLICY',
        self::LEAST_REQUEST => 'LEAST_REQUEST',
        self::MAGLEV => 'MAGLEV',
        self::ORIGINAL_DESTINATION => 'ORIGINAL_DESTINATION',
        self::RANDOM => 'RANDOM',
        self::RING_HASH => 'RING_HASH',
        self::ROUND_ROBIN => 'ROUND_ROBIN',
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


