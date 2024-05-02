<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace Google\Cloud\Spanner\V1\BatchWriteRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A group of mutations to be committed together. Related mutations should be
 * placed in a group. For example, two mutations inserting rows with the same
 * primary key prefix in both parent and child tables are related.
 *
 * Generated from protobuf message <code>google.spanner.v1.BatchWriteRequest.MutationGroup</code>
 */
class MutationGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The mutations in this group.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.Mutation mutations = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $mutations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Spanner\V1\Mutation>|\Google\Protobuf\Internal\RepeatedField $mutations
     *           Required. The mutations in this group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\V1\Spanner::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The mutations in this group.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.Mutation mutations = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMutations()
    {
        return $this->mutations;
    }

    /**
     * Required. The mutations in this group.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.Mutation mutations = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\Spanner\V1\Mutation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMutations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Spanner\V1\Mutation::class);
        $this->mutations = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MutationGroup::class, \Google\Cloud\Spanner\V1\BatchWriteRequest_MutationGroup::class);
