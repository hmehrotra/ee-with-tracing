<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/bigtable.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for Bigtable.SampleRowKeys.
 *
 * Generated from protobuf message <code>google.bigtable.v2.SampleRowKeysRequest</code>
 */
class SampleRowKeysRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The unique name of the table from which to sample row keys.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string table_name = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    private $table_name = '';
    /**
     * Optional. The unique name of the AuthorizedView from which to sample row
     * keys.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>/authorizedViews/<authorized_view>`.
     *
     * Generated from protobuf field <code>string authorized_view_name = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    private $authorized_view_name = '';
    /**
     * This value specifies routing for replication. If not specified, the
     * "default" application profile will be used.
     *
     * Generated from protobuf field <code>string app_profile_id = 2;</code>
     */
    private $app_profile_id = '';

    /**
     * @param string $tableName Optional. The unique name of the table from which to sample row keys.
     *
     *                          Values are of the form
     *                          `projects/<project>/instances/<instance>/tables/<table>`. Please see
     *                          {@see BigtableClient::tableName()} for help formatting this field.
     *
     * @return \Google\Cloud\Bigtable\V2\SampleRowKeysRequest
     *
     * @experimental
     */
    public static function build(string $tableName): self
    {
        return (new self())
            ->setTableName($tableName);
    }

    /**
     * @param string $tableName    Optional. The unique name of the table from which to sample row keys.
     *
     *                             Values are of the form
     *                             `projects/<project>/instances/<instance>/tables/<table>`. Please see
     *                             {@see BigtableClient::tableName()} for help formatting this field.
     * @param string $appProfileId This value specifies routing for replication. If not specified, the
     *                             "default" application profile will be used.
     *
     * @return \Google\Cloud\Bigtable\V2\SampleRowKeysRequest
     *
     * @experimental
     */
    public static function buildFromTableNameAppProfileId(string $tableName, string $appProfileId): self
    {
        return (new self())
            ->setTableName($tableName)
            ->setAppProfileId($appProfileId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $table_name
     *           Optional. The unique name of the table from which to sample row keys.
     *           Values are of the form
     *           `projects/<project>/instances/<instance>/tables/<table>`.
     *     @type string $authorized_view_name
     *           Optional. The unique name of the AuthorizedView from which to sample row
     *           keys.
     *           Values are of the form
     *           `projects/<project>/instances/<instance>/tables/<table>/authorizedViews/<authorized_view>`.
     *     @type string $app_profile_id
     *           This value specifies routing for replication. If not specified, the
     *           "default" application profile will be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Bigtable::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The unique name of the table from which to sample row keys.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string table_name = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * Optional. The unique name of the table from which to sample row keys.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string table_name = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTableName($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_name = $var;

        return $this;
    }

    /**
     * Optional. The unique name of the AuthorizedView from which to sample row
     * keys.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>/authorizedViews/<authorized_view>`.
     *
     * Generated from protobuf field <code>string authorized_view_name = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAuthorizedViewName()
    {
        return $this->authorized_view_name;
    }

    /**
     * Optional. The unique name of the AuthorizedView from which to sample row
     * keys.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>/authorizedViews/<authorized_view>`.
     *
     * Generated from protobuf field <code>string authorized_view_name = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAuthorizedViewName($var)
    {
        GPBUtil::checkString($var, True);
        $this->authorized_view_name = $var;

        return $this;
    }

    /**
     * This value specifies routing for replication. If not specified, the
     * "default" application profile will be used.
     *
     * Generated from protobuf field <code>string app_profile_id = 2;</code>
     * @return string
     */
    public function getAppProfileId()
    {
        return $this->app_profile_id;
    }

    /**
     * This value specifies routing for replication. If not specified, the
     * "default" application profile will be used.
     *
     * Generated from protobuf field <code>string app_profile_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAppProfileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_profile_id = $var;

        return $this;
    }

}
