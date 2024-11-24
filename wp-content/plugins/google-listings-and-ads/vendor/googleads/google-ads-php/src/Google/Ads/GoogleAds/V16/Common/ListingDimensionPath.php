<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/common/criteria.proto

namespace Google\Ads\GoogleAds\V16\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The path of dimensions defining a listing group.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.common.ListingDimensionPath</code>
 */
class ListingDimensionPath extends \Google\Protobuf\Internal\Message
{
    /**
     * The complete path of dimensions through the listing group hierarchy, from
     * the root (excluding the root itself) to this listing group.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.common.ListingDimensionInfo dimensions = 1;</code>
     */
    private $dimensions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V16\Common\ListingDimensionInfo>|\Google\Protobuf\Internal\RepeatedField $dimensions
     *           The complete path of dimensions through the listing group hierarchy, from
     *           the root (excluding the root itself) to this listing group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The complete path of dimensions through the listing group hierarchy, from
     * the root (excluding the root itself) to this listing group.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.common.ListingDimensionInfo dimensions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * The complete path of dimensions through the listing group hierarchy, from
     * the root (excluding the root itself) to this listing group.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.common.ListingDimensionInfo dimensions = 1;</code>
     * @param array<\Google\Ads\GoogleAds\V16\Common\ListingDimensionInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V16\Common\ListingDimensionInfo::class);
        $this->dimensions = $arr;

        return $this;
    }

}

