<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/types.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `Type` represents the type of data that is written to, read from, or stored
 * in Bigtable. It is heavily based on the GoogleSQL standard to help maintain
 * familiarity and consistency across products and features.
 * For compatibility with Bigtable's existing untyped APIs, each `Type` includes
 * an `Encoding` which describes how to convert to/from the underlying data.
 * This might involve composing a series of steps into an "encoding chain," for
 * example to convert from INT64 -> STRING -> raw bytes. In most cases, a "link"
 * in the encoding chain will be based an on existing GoogleSQL conversion
 * function like `CAST`.
 * Each link in the encoding chain also defines the following properties:
 *  * Natural sort: Does the encoded value sort consistently with the original
 *    typed value? Note that Bigtable will always sort data based on the raw
 *    encoded value, *not* the decoded type.
 *     - Example: STRING values sort in the same order as their UTF-8 encodings.
 *     - Counterexample: Encoding INT64 to a fixed-width STRING does *not*
 *       preserve sort order when dealing with negative numbers.
 *       INT64(1) > INT64(-1), but STRING("-00001") > STRING("00001).
 *     - The overall encoding chain sorts naturally if *every* link does.
 *  * Self-delimiting: If we concatenate two encoded values, can we always tell
 *    where the first one ends and the second one begins?
 *     - Example: If we encode INT64s to fixed-width STRINGs, the first value
 *       will always contain exactly N digits, possibly preceded by a sign.
 *     - Counterexample: If we concatenate two UTF-8 encoded STRINGs, we have
 *       no way to tell where the first one ends.
 *     - The overall encoding chain is self-delimiting if *any* link is.
 *  * Compatibility: Which other systems have matching encoding schemes? For
 *    example, does this encoding have a GoogleSQL equivalent? HBase? Java?
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.Type</code>
 */
class Type extends \Google\Protobuf\Internal\Message
{
    protected $kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigtable\Admin\V2\Type\Bytes $bytes_type
     *           Bytes
     *     @type \Google\Cloud\Bigtable\Admin\V2\Type\Int64 $int64_type
     *           Int64
     *     @type \Google\Cloud\Bigtable\Admin\V2\Type\Aggregate $aggregate_type
     *           Aggregate
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Bytes
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Type.Bytes bytes_type = 1;</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\Type\Bytes|null
     */
    public function getBytesType()
    {
        return $this->readOneof(1);
    }

    public function hasBytesType()
    {
        return $this->hasOneof(1);
    }

    /**
     * Bytes
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Type.Bytes bytes_type = 1;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\Type\Bytes $var
     * @return $this
     */
    public function setBytesType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\Type\Bytes::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Int64
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Type.Int64 int64_type = 5;</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\Type\Int64|null
     */
    public function getInt64Type()
    {
        return $this->readOneof(5);
    }

    public function hasInt64Type()
    {
        return $this->hasOneof(5);
    }

    /**
     * Int64
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Type.Int64 int64_type = 5;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\Type\Int64 $var
     * @return $this
     */
    public function setInt64Type($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\Type\Int64::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Aggregate
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Type.Aggregate aggregate_type = 6;</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\Type\Aggregate|null
     */
    public function getAggregateType()
    {
        return $this->readOneof(6);
    }

    public function hasAggregateType()
    {
        return $this->hasOneof(6);
    }

    /**
     * Aggregate
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Type.Aggregate aggregate_type = 6;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\Type\Aggregate $var
     * @return $this
     */
    public function setAggregateType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\Type\Aggregate::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->whichOneof("kind");
    }

}

