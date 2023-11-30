<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/entity_type.proto

namespace Google\Cloud\Dialogflow\Cx\V3\EntityType;

use UnexpectedValueException;

/**
 * Represents different entity type expansion modes. Automated expansion
 * allows an agent to recognize values that have not been explicitly listed in
 * the entity (for example, new kinds of shopping list items).
 *
 * Protobuf type <code>google.cloud.dialogflow.cx.v3.EntityType.AutoExpansionMode</code>
 */
class AutoExpansionMode
{
    /**
     * Auto expansion disabled for the entity.
     *
     * Generated from protobuf enum <code>AUTO_EXPANSION_MODE_UNSPECIFIED = 0;</code>
     */
    const AUTO_EXPANSION_MODE_UNSPECIFIED = 0;
    /**
     * Allows an agent to recognize values that have not been explicitly
     * listed in the entity.
     *
     * Generated from protobuf enum <code>AUTO_EXPANSION_MODE_DEFAULT = 1;</code>
     */
    const AUTO_EXPANSION_MODE_DEFAULT = 1;

    private static $valueToName = [
        self::AUTO_EXPANSION_MODE_UNSPECIFIED => 'AUTO_EXPANSION_MODE_UNSPECIFIED',
        self::AUTO_EXPANSION_MODE_DEFAULT => 'AUTO_EXPANSION_MODE_DEFAULT',
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


