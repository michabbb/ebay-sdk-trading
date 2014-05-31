<?php
/**
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType $bidRetractionFeedbackPeriodArray
 * @property DTS\eBaySDK\Trading\Types\BuyerRoleMetricsType $buyerRoleMetrics
 * @property DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType $negativeFeedbackPeriodArray
 * @property integer $neutralCommentCountFromSuspendedUsers
 * @property DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType $neutralFeedbackPeriodArray
 * @property DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType $positiveFeedbackPeriodArray
 * @property DTS\eBaySDK\Trading\Types\SellerRatingSummaryArrayType $sellerRatingSummaryArray
 * @property DTS\eBaySDK\Trading\Types\SellerRoleMetricsType $sellerRoleMetrics
 * @property DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType $totalFeedbackPeriodArray
 * @property integer $uniqueNegativeFeedbackCount
 * @property integer $uniqueNeutralFeedbackCount
 * @property integer $uniquePositiveFeedbackCount
 */
class FeedbackSummaryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'bidRetractionFeedbackPeriodArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidRetractionFeedbackPeriodArray'
        ),
        'buyerRoleMetrics' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerRoleMetricsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerRoleMetrics'
        ),
        'negativeFeedbackPeriodArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NegativeFeedbackPeriodArray'
        ),
        'neutralCommentCountFromSuspendedUsers' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NeutralCommentCountFromSuspendedUsers'
        ),
        'neutralFeedbackPeriodArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NeutralFeedbackPeriodArray'
        ),
        'positiveFeedbackPeriodArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PositiveFeedbackPeriodArray'
        ),
        'sellerRatingSummaryArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerRatingSummaryArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerRatingSummaryArray'
        ),
        'sellerRoleMetrics' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerRoleMetricsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerRoleMetrics'
        ),
        'totalFeedbackPeriodArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalFeedbackPeriodArray'
        ),
        'uniqueNegativeFeedbackCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UniqueNegativeFeedbackCount'
        ),
        'uniqueNeutralFeedbackCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UniqueNeutralFeedbackCount'
        ),
        'uniquePositiveFeedbackCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UniquePositiveFeedbackCount'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
    {
        $elementNamesMap = self::buildElementNamesMap(self::$propertyTypes);

        list($parentValues, $childValues) = self::getParentValues($elementNamesMap, self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$elementNames)) {
            self::$elementNames[__CLASS__] = array_merge(self::$elementNames[get_parent_class()], $elementNamesMap);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'urn:ebay:apis:eBLBaseComponents';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
