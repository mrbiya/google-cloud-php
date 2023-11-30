<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `QueryDirectoryContents` response message.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.QueryDirectoryContentsResponse</code>
 */
class QueryDirectoryContentsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of entries in the directory.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataform.v1beta1.DirectoryEntry directory_entries = 1;</code>
     */
    private $directory_entries;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dataform\V1beta1\DirectoryEntry>|\Google\Protobuf\Internal\RepeatedField $directory_entries
     *           List of entries in the directory.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * List of entries in the directory.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataform.v1beta1.DirectoryEntry directory_entries = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDirectoryEntries()
    {
        return $this->directory_entries;
    }

    /**
     * List of entries in the directory.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataform.v1beta1.DirectoryEntry directory_entries = 1;</code>
     * @param array<\Google\Cloud\Dataform\V1beta1\DirectoryEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDirectoryEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataform\V1beta1\DirectoryEntry::class);
        $this->directory_entries = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

