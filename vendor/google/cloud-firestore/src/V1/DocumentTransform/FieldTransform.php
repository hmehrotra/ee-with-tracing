<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/write.proto

namespace Google\Cloud\Firestore\V1\DocumentTransform;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A transformation of a field of the document.
 *
 * Generated from protobuf message <code>google.firestore.v1.DocumentTransform.FieldTransform</code>
 */
class FieldTransform extends \Google\Protobuf\Internal\Message
{
    /**
     * The path of the field. See
     * [Document.fields][google.firestore.v1.Document.fields] for the field path
     * syntax reference.
     *
     * Generated from protobuf field <code>string field_path = 1;</code>
     */
    private $field_path = '';
    protected $transform_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field_path
     *           The path of the field. See
     *           [Document.fields][google.firestore.v1.Document.fields] for the field path
     *           syntax reference.
     *     @type int $set_to_server_value
     *           Sets the field to the given server value.
     *     @type \Google\Cloud\Firestore\V1\Value $increment
     *           Adds the given value to the field's current value.
     *           This must be an integer or a double value.
     *           If the field is not an integer or double, or if the field does not yet
     *           exist, the transformation will set the field to the given value.
     *           If either of the given value or the current field value are doubles,
     *           both values will be interpreted as doubles. Double arithmetic and
     *           representation of double values follow IEEE 754 semantics.
     *           If there is positive/negative integer overflow, the field is resolved
     *           to the largest magnitude positive/negative integer.
     *     @type \Google\Cloud\Firestore\V1\Value $maximum
     *           Sets the field to the maximum of its current value and the given value.
     *           This must be an integer or a double value.
     *           If the field is not an integer or double, or if the field does not yet
     *           exist, the transformation will set the field to the given value.
     *           If a maximum operation is applied where the field and the input value
     *           are of mixed types (that is - one is an integer and one is a double)
     *           the field takes on the type of the larger operand. If the operands are
     *           equivalent (e.g. 3 and 3.0), the field does not change.
     *           0, 0.0, and -0.0 are all zero. The maximum of a zero stored value and
     *           zero input value is always the stored value.
     *           The maximum of any numeric value x and NaN is NaN.
     *     @type \Google\Cloud\Firestore\V1\Value $minimum
     *           Sets the field to the minimum of its current value and the given value.
     *           This must be an integer or a double value.
     *           If the field is not an integer or double, or if the field does not yet
     *           exist, the transformation will set the field to the input value.
     *           If a minimum operation is applied where the field and the input value
     *           are of mixed types (that is - one is an integer and one is a double)
     *           the field takes on the type of the smaller operand. If the operands are
     *           equivalent (e.g. 3 and 3.0), the field does not change.
     *           0, 0.0, and -0.0 are all zero. The minimum of a zero stored value and
     *           zero input value is always the stored value.
     *           The minimum of any numeric value x and NaN is NaN.
     *     @type \Google\Cloud\Firestore\V1\ArrayValue $append_missing_elements
     *           Append the given elements in order if they are not already present in
     *           the current field value.
     *           If the field is not an array, or if the field does not yet exist, it is
     *           first set to the empty array.
     *           Equivalent numbers of different types (e.g. 3L and 3.0) are
     *           considered equal when checking if a value is missing.
     *           NaN is equal to NaN, and Null is equal to Null.
     *           If the input contains multiple equivalent values, only the first will
     *           be considered.
     *           The corresponding transform_result will be the null value.
     *     @type \Google\Cloud\Firestore\V1\ArrayValue $remove_all_from_array
     *           Remove all of the given elements from the array in the field.
     *           If the field is not an array, or if the field does not yet exist, it is
     *           set to the empty array.
     *           Equivalent numbers of the different types (e.g. 3L and 3.0) are
     *           considered equal when deciding whether an element should be removed.
     *           NaN is equal to NaN, and Null is equal to Null.
     *           This will remove all equivalent values if there are duplicates.
     *           The corresponding transform_result will be the null value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Write::initOnce();
        parent::__construct($data);
    }

    /**
     * The path of the field. See
     * [Document.fields][google.firestore.v1.Document.fields] for the field path
     * syntax reference.
     *
     * Generated from protobuf field <code>string field_path = 1;</code>
     * @return string
     */
    public function getFieldPath()
    {
        return $this->field_path;
    }

    /**
     * The path of the field. See
     * [Document.fields][google.firestore.v1.Document.fields] for the field path
     * syntax reference.
     *
     * Generated from protobuf field <code>string field_path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_path = $var;

        return $this;
    }

    /**
     * Sets the field to the given server value.
     *
     * Generated from protobuf field <code>.google.firestore.v1.DocumentTransform.FieldTransform.ServerValue set_to_server_value = 2;</code>
     * @return int
     */
    public function getSetToServerValue()
    {
        return $this->readOneof(2);
    }

    public function hasSetToServerValue()
    {
        return $this->hasOneof(2);
    }

    /**
     * Sets the field to the given server value.
     *
     * Generated from protobuf field <code>.google.firestore.v1.DocumentTransform.FieldTransform.ServerValue set_to_server_value = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSetToServerValue($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Firestore\V1\DocumentTransform\FieldTransform\ServerValue::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Adds the given value to the field's current value.
     * This must be an integer or a double value.
     * If the field is not an integer or double, or if the field does not yet
     * exist, the transformation will set the field to the given value.
     * If either of the given value or the current field value are doubles,
     * both values will be interpreted as doubles. Double arithmetic and
     * representation of double values follow IEEE 754 semantics.
     * If there is positive/negative integer overflow, the field is resolved
     * to the largest magnitude positive/negative integer.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Value increment = 3;</code>
     * @return \Google\Cloud\Firestore\V1\Value|null
     */
    public function getIncrement()
    {
        return $this->readOneof(3);
    }

    public function hasIncrement()
    {
        return $this->hasOneof(3);
    }

    /**
     * Adds the given value to the field's current value.
     * This must be an integer or a double value.
     * If the field is not an integer or double, or if the field does not yet
     * exist, the transformation will set the field to the given value.
     * If either of the given value or the current field value are doubles,
     * both values will be interpreted as doubles. Double arithmetic and
     * representation of double values follow IEEE 754 semantics.
     * If there is positive/negative integer overflow, the field is resolved
     * to the largest magnitude positive/negative integer.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Value increment = 3;</code>
     * @param \Google\Cloud\Firestore\V1\Value $var
     * @return $this
     */
    public function setIncrement($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\Value::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Sets the field to the maximum of its current value and the given value.
     * This must be an integer or a double value.
     * If the field is not an integer or double, or if the field does not yet
     * exist, the transformation will set the field to the given value.
     * If a maximum operation is applied where the field and the input value
     * are of mixed types (that is - one is an integer and one is a double)
     * the field takes on the type of the larger operand. If the operands are
     * equivalent (e.g. 3 and 3.0), the field does not change.
     * 0, 0.0, and -0.0 are all zero. The maximum of a zero stored value and
     * zero input value is always the stored value.
     * The maximum of any numeric value x and NaN is NaN.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Value maximum = 4;</code>
     * @return \Google\Cloud\Firestore\V1\Value|null
     */
    public function getMaximum()
    {
        return $this->readOneof(4);
    }

    public function hasMaximum()
    {
        return $this->hasOneof(4);
    }

    /**
     * Sets the field to the maximum of its current value and the given value.
     * This must be an integer or a double value.
     * If the field is not an integer or double, or if the field does not yet
     * exist, the transformation will set the field to the given value.
     * If a maximum operation is applied where the field and the input value
     * are of mixed types (that is - one is an integer and one is a double)
     * the field takes on the type of the larger operand. If the operands are
     * equivalent (e.g. 3 and 3.0), the field does not change.
     * 0, 0.0, and -0.0 are all zero. The maximum of a zero stored value and
     * zero input value is always the stored value.
     * The maximum of any numeric value x and NaN is NaN.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Value maximum = 4;</code>
     * @param \Google\Cloud\Firestore\V1\Value $var
     * @return $this
     */
    public function setMaximum($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\Value::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Sets the field to the minimum of its current value and the given value.
     * This must be an integer or a double value.
     * If the field is not an integer or double, or if the field does not yet
     * exist, the transformation will set the field to the input value.
     * If a minimum operation is applied where the field and the input value
     * are of mixed types (that is - one is an integer and one is a double)
     * the field takes on the type of the smaller operand. If the operands are
     * equivalent (e.g. 3 and 3.0), the field does not change.
     * 0, 0.0, and -0.0 are all zero. The minimum of a zero stored value and
     * zero input value is always the stored value.
     * The minimum of any numeric value x and NaN is NaN.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Value minimum = 5;</code>
     * @return \Google\Cloud\Firestore\V1\Value|null
     */
    public function getMinimum()
    {
        return $this->readOneof(5);
    }

    public function hasMinimum()
    {
        return $this->hasOneof(5);
    }

    /**
     * Sets the field to the minimum of its current value and the given value.
     * This must be an integer or a double value.
     * If the field is not an integer or double, or if the field does not yet
     * exist, the transformation will set the field to the input value.
     * If a minimum operation is applied where the field and the input value
     * are of mixed types (that is - one is an integer and one is a double)
     * the field takes on the type of the smaller operand. If the operands are
     * equivalent (e.g. 3 and 3.0), the field does not change.
     * 0, 0.0, and -0.0 are all zero. The minimum of a zero stored value and
     * zero input value is always the stored value.
     * The minimum of any numeric value x and NaN is NaN.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Value minimum = 5;</code>
     * @param \Google\Cloud\Firestore\V1\Value $var
     * @return $this
     */
    public function setMinimum($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\Value::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Append the given elements in order if they are not already present in
     * the current field value.
     * If the field is not an array, or if the field does not yet exist, it is
     * first set to the empty array.
     * Equivalent numbers of different types (e.g. 3L and 3.0) are
     * considered equal when checking if a value is missing.
     * NaN is equal to NaN, and Null is equal to Null.
     * If the input contains multiple equivalent values, only the first will
     * be considered.
     * The corresponding transform_result will be the null value.
     *
     * Generated from protobuf field <code>.google.firestore.v1.ArrayValue append_missing_elements = 6;</code>
     * @return \Google\Cloud\Firestore\V1\ArrayValue|null
     */
    public function getAppendMissingElements()
    {
        return $this->readOneof(6);
    }

    public function hasAppendMissingElements()
    {
        return $this->hasOneof(6);
    }

    /**
     * Append the given elements in order if they are not already present in
     * the current field value.
     * If the field is not an array, or if the field does not yet exist, it is
     * first set to the empty array.
     * Equivalent numbers of different types (e.g. 3L and 3.0) are
     * considered equal when checking if a value is missing.
     * NaN is equal to NaN, and Null is equal to Null.
     * If the input contains multiple equivalent values, only the first will
     * be considered.
     * The corresponding transform_result will be the null value.
     *
     * Generated from protobuf field <code>.google.firestore.v1.ArrayValue append_missing_elements = 6;</code>
     * @param \Google\Cloud\Firestore\V1\ArrayValue $var
     * @return $this
     */
    public function setAppendMissingElements($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\ArrayValue::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Remove all of the given elements from the array in the field.
     * If the field is not an array, or if the field does not yet exist, it is
     * set to the empty array.
     * Equivalent numbers of the different types (e.g. 3L and 3.0) are
     * considered equal when deciding whether an element should be removed.
     * NaN is equal to NaN, and Null is equal to Null.
     * This will remove all equivalent values if there are duplicates.
     * The corresponding transform_result will be the null value.
     *
     * Generated from protobuf field <code>.google.firestore.v1.ArrayValue remove_all_from_array = 7;</code>
     * @return \Google\Cloud\Firestore\V1\ArrayValue|null
     */
    public function getRemoveAllFromArray()
    {
        return $this->readOneof(7);
    }

    public function hasRemoveAllFromArray()
    {
        return $this->hasOneof(7);
    }

    /**
     * Remove all of the given elements from the array in the field.
     * If the field is not an array, or if the field does not yet exist, it is
     * set to the empty array.
     * Equivalent numbers of the different types (e.g. 3L and 3.0) are
     * considered equal when deciding whether an element should be removed.
     * NaN is equal to NaN, and Null is equal to Null.
     * This will remove all equivalent values if there are duplicates.
     * The corresponding transform_result will be the null value.
     *
     * Generated from protobuf field <code>.google.firestore.v1.ArrayValue remove_all_from_array = 7;</code>
     * @param \Google\Cloud\Firestore\V1\ArrayValue $var
     * @return $this
     */
    public function setRemoveAllFromArray($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\ArrayValue::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTransformType()
    {
        return $this->whichOneof("transform_type");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FieldTransform::class, \Google\Cloud\Firestore\V1\DocumentTransform_FieldTransform::class);

