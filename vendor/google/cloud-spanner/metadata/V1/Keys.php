<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/keys.proto

namespace GPBMetadata\Google\Spanner\V1;

class Keys
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
google/spanner/v1/keys.protogoogle.spanner.v1"�
KeyRange2
start_closed (2.google.protobuf.ListValueH 0

start_open (2.google.protobuf.ListValueH 0

end_closed (2.google.protobuf.ListValueH.
end_open (2.google.protobuf.ListValueHB
start_key_typeB
end_key_type"l
KeySet(
keys (2.google.protobuf.ListValue+
ranges (2.google.spanner.v1.KeyRange
all (B�
com.google.spanner.v1B	KeysProtoPZ5cloud.google.com/go/spanner/apiv1/spannerpb;spannerpb�Google.Cloud.Spanner.V1�Google\\Cloud\\Spanner\\V1�Google::Cloud::Spanner::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

