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
 * @property boolean $adult
 * @property DTS\eBaySDK\Trading\Types\AmountType $bestOfferAutoAcceptPrice
 * @property boolean $bindingAuction
 * @property boolean $buyItNowAvailable
 * @property boolean $checkoutEnabled
 * @property DTS\eBaySDK\Trading\Types\AmountType $convertedBuyItNowPrice
 * @property DTS\eBaySDK\Trading\Types\AmountType $convertedReservePrice
 * @property DTS\eBaySDK\Trading\Types\AmountType $convertedStartPrice
 * @property DateTime $endTime
 * @property DTS\eBaySDK\Trading\Enums\EndReasonCodeType(string) $endingReason
 * @property boolean $hasPublicMessages
 * @property boolean $hasReservePrice
 * @property boolean $hasUnansweredQuestions
 * @property string $localListingDistance
 * @property DTS\eBaySDK\Trading\Types\AmountType $minimumBestOfferPrice
 * @property string $relistedItemId
 * @property string $secondChanceOriginalItemId
 * @property DateTime $startTime
 * @property string $tcroRiginalItemId
 * @property string $viewItemUrl
 * @property string $viewItemUrlfOrNaturalSearch
 */
class ListingDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'adult' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Adult'
        ),
        'bestOfferAutoAcceptPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferAutoAcceptPrice'
        ),
        'bindingAuction' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BindingAuction'
        ),
        'buyItNowAvailable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowAvailable'
        ),
        'checkoutEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CheckoutEnabled'
        ),
        'convertedBuyItNowPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedBuyItNowPrice'
        ),
        'convertedReservePrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedReservePrice'
        ),
        'convertedStartPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedStartPrice'
        ),
        'endTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndTime'
        ),
        'endingReason' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndingReason'
        ),
        'hasPublicMessages' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HasPublicMessages'
        ),
        'hasReservePrice' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HasReservePrice'
        ),
        'hasUnansweredQuestions' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HasUnansweredQuestions'
        ),
        'localListingDistance' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalListingDistance'
        ),
        'minimumBestOfferPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinimumBestOfferPrice'
        ),
        'relistedItemId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RelistedItemID'
        ),
        'secondChanceOriginalItemId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondChanceOriginalItemID'
        ),
        'startTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StartTime'
        ),
        'tcroRiginalItemId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TCROriginalItemID'
        ),
        'viewItemUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ViewItemURL'
        ),
        'viewItemUrlfOrNaturalSearch' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ViewItemURLForNaturalSearch'
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
