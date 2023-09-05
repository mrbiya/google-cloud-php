<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SKAdNetwork conversion value schema of an iOS stream.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.SKAdNetworkConversionValueSchema</code>
 */
class SKAdNetworkConversionValueSchema extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of the schema. This will be child of ONLY an iOS
     * stream, and there can be at most one such child under an iOS stream.
     * Format:
     * properties/{property}/dataStreams/{dataStream}/sKAdNetworkConversionValueSchema
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Required. The conversion value settings for the first postback window.
     * These differ from values for postback window two and three in that they
     * contain a "Fine" grained conversion value (a numeric value).
     * Conversion values for this postback window must be set.  The other windows
     * are optional and may inherit this window's settings if unset or disabled.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.PostbackWindow postback_window_one = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $postback_window_one = null;
    /**
     * The conversion value settings for the second postback window.
     * This field should only be configured if there is a need to define different
     * conversion values for this postback window.
     * If enable_postback_window_settings is set to false for this postback
     * window, the values from postback_window_one will be used.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.PostbackWindow postback_window_two = 3;</code>
     */
    private $postback_window_two = null;
    /**
     * The conversion value settings for the third postback window.
     * This field should only be set if the user chose to define different
     * conversion values for this postback window. It is allowed to configure
     * window 3 without setting window 2. In case window 1 & 2 settings are set
     * and enable_postback_window_settings for this postback window is set to
     * false, the schema will inherit settings from postback_window_two.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.PostbackWindow postback_window_three = 4;</code>
     */
    private $postback_window_three = null;
    /**
     * If enabled, the GA SDK will set conversion values using this schema
     * definition, and schema will be exported to any Google Ads accounts linked
     * to this property. If disabled, the GA SDK will not automatically set
     * conversion values, and also the schema will not be exported to Ads.
     *
     * Generated from protobuf field <code>bool apply_conversion_values = 5;</code>
     */
    private $apply_conversion_values = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of the schema. This will be child of ONLY an iOS
     *           stream, and there can be at most one such child under an iOS stream.
     *           Format:
     *           properties/{property}/dataStreams/{dataStream}/sKAdNetworkConversionValueSchema
     *     @type \Google\Analytics\Admin\V1alpha\PostbackWindow $postback_window_one
     *           Required. The conversion value settings for the first postback window.
     *           These differ from values for postback window two and three in that they
     *           contain a "Fine" grained conversion value (a numeric value).
     *           Conversion values for this postback window must be set.  The other windows
     *           are optional and may inherit this window's settings if unset or disabled.
     *     @type \Google\Analytics\Admin\V1alpha\PostbackWindow $postback_window_two
     *           The conversion value settings for the second postback window.
     *           This field should only be configured if there is a need to define different
     *           conversion values for this postback window.
     *           If enable_postback_window_settings is set to false for this postback
     *           window, the values from postback_window_one will be used.
     *     @type \Google\Analytics\Admin\V1alpha\PostbackWindow $postback_window_three
     *           The conversion value settings for the third postback window.
     *           This field should only be set if the user chose to define different
     *           conversion values for this postback window. It is allowed to configure
     *           window 3 without setting window 2. In case window 1 & 2 settings are set
     *           and enable_postback_window_settings for this postback window is set to
     *           false, the schema will inherit settings from postback_window_two.
     *     @type bool $apply_conversion_values
     *           If enabled, the GA SDK will set conversion values using this schema
     *           definition, and schema will be exported to any Google Ads accounts linked
     *           to this property. If disabled, the GA SDK will not automatically set
     *           conversion values, and also the schema will not be exported to Ads.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of the schema. This will be child of ONLY an iOS
     * stream, and there can be at most one such child under an iOS stream.
     * Format:
     * properties/{property}/dataStreams/{dataStream}/sKAdNetworkConversionValueSchema
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of the schema. This will be child of ONLY an iOS
     * stream, and there can be at most one such child under an iOS stream.
     * Format:
     * properties/{property}/dataStreams/{dataStream}/sKAdNetworkConversionValueSchema
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Required. The conversion value settings for the first postback window.
     * These differ from values for postback window two and three in that they
     * contain a "Fine" grained conversion value (a numeric value).
     * Conversion values for this postback window must be set.  The other windows
     * are optional and may inherit this window's settings if unset or disabled.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.PostbackWindow postback_window_one = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1alpha\PostbackWindow|null
     */
    public function getPostbackWindowOne()
    {
        return $this->postback_window_one;
    }

    public function hasPostbackWindowOne()
    {
        return isset($this->postback_window_one);
    }

    public function clearPostbackWindowOne()
    {
        unset($this->postback_window_one);
    }

    /**
     * Required. The conversion value settings for the first postback window.
     * These differ from values for postback window two and three in that they
     * contain a "Fine" grained conversion value (a numeric value).
     * Conversion values for this postback window must be set.  The other windows
     * are optional and may inherit this window's settings if unset or disabled.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.PostbackWindow postback_window_one = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\PostbackWindow $var
     * @return $this
     */
    public function setPostbackWindowOne($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\PostbackWindow::class);
        $this->postback_window_one = $var;

        return $this;
    }

    /**
     * The conversion value settings for the second postback window.
     * This field should only be configured if there is a need to define different
     * conversion values for this postback window.
     * If enable_postback_window_settings is set to false for this postback
     * window, the values from postback_window_one will be used.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.PostbackWindow postback_window_two = 3;</code>
     * @return \Google\Analytics\Admin\V1alpha\PostbackWindow|null
     */
    public function getPostbackWindowTwo()
    {
        return $this->postback_window_two;
    }

    public function hasPostbackWindowTwo()
    {
        return isset($this->postback_window_two);
    }

    public function clearPostbackWindowTwo()
    {
        unset($this->postback_window_two);
    }

    /**
     * The conversion value settings for the second postback window.
     * This field should only be configured if there is a need to define different
     * conversion values for this postback window.
     * If enable_postback_window_settings is set to false for this postback
     * window, the values from postback_window_one will be used.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.PostbackWindow postback_window_two = 3;</code>
     * @param \Google\Analytics\Admin\V1alpha\PostbackWindow $var
     * @return $this
     */
    public function setPostbackWindowTwo($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\PostbackWindow::class);
        $this->postback_window_two = $var;

        return $this;
    }

    /**
     * The conversion value settings for the third postback window.
     * This field should only be set if the user chose to define different
     * conversion values for this postback window. It is allowed to configure
     * window 3 without setting window 2. In case window 1 & 2 settings are set
     * and enable_postback_window_settings for this postback window is set to
     * false, the schema will inherit settings from postback_window_two.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.PostbackWindow postback_window_three = 4;</code>
     * @return \Google\Analytics\Admin\V1alpha\PostbackWindow|null
     */
    public function getPostbackWindowThree()
    {
        return $this->postback_window_three;
    }

    public function hasPostbackWindowThree()
    {
        return isset($this->postback_window_three);
    }

    public function clearPostbackWindowThree()
    {
        unset($this->postback_window_three);
    }

    /**
     * The conversion value settings for the third postback window.
     * This field should only be set if the user chose to define different
     * conversion values for this postback window. It is allowed to configure
     * window 3 without setting window 2. In case window 1 & 2 settings are set
     * and enable_postback_window_settings for this postback window is set to
     * false, the schema will inherit settings from postback_window_two.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.PostbackWindow postback_window_three = 4;</code>
     * @param \Google\Analytics\Admin\V1alpha\PostbackWindow $var
     * @return $this
     */
    public function setPostbackWindowThree($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\PostbackWindow::class);
        $this->postback_window_three = $var;

        return $this;
    }

    /**
     * If enabled, the GA SDK will set conversion values using this schema
     * definition, and schema will be exported to any Google Ads accounts linked
     * to this property. If disabled, the GA SDK will not automatically set
     * conversion values, and also the schema will not be exported to Ads.
     *
     * Generated from protobuf field <code>bool apply_conversion_values = 5;</code>
     * @return bool
     */
    public function getApplyConversionValues()
    {
        return $this->apply_conversion_values;
    }

    /**
     * If enabled, the GA SDK will set conversion values using this schema
     * definition, and schema will be exported to any Google Ads accounts linked
     * to this property. If disabled, the GA SDK will not automatically set
     * conversion values, and also the schema will not be exported to Ads.
     *
     * Generated from protobuf field <code>bool apply_conversion_values = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setApplyConversionValues($var)
    {
        GPBUtil::checkBool($var);
        $this->apply_conversion_values = $var;

        return $this;
    }

}

