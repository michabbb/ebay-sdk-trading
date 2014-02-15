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
 * @property boolean $combinedShippingDiscount
 * @property boolean $domesticShippingCost
 * @property boolean $eligibleCheckout
 * @property boolean $eligibleItemCondition
 * @property boolean $eligiblePayPalAccount
 * @property boolean $eligibleReturnPolicy
 * @property boolean $expressApproved
 * @property boolean $expressEligibleListingType
 * @property boolean $expressEnabledCategory
 * @property boolean $expressOptOut
 * @property boolean $noCharity
 * @property boolean $noPreapprovedBidderList
 * @property boolean $payPalAccountAcceptsUnconfirmedAddress
 * @property boolean $picture
 * @property boolean $priceAboveMinimum
 * @property boolean $priceBelowMaximum
 * @property boolean $sellerExpressEligible
 * @property boolean $shipFromEligibleCountry
 */
class ExpressItemRequirementsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'combinedShippingDiscount' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CombinedShippingDiscount'
        ),
        'domesticShippingCost' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DomesticShippingCost'
        ),
        'eligibleCheckout' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EligibleCheckout'
        ),
        'eligibleItemCondition' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EligibleItemCondition'
        ),
        'eligiblePayPalAccount' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EligiblePayPalAccount'
        ),
        'eligibleReturnPolicy' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EligibleReturnPolicy'
        ),
        'expressApproved' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpressApproved'
        ),
        'expressEligibleListingType' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpressEligibleListingType'
        ),
        'expressEnabledCategory' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpressEnabledCategory'
        ),
        'expressOptOut' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpressOptOut'
        ),
        'noCharity' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NoCharity'
        ),
        'noPreapprovedBidderList' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NoPreapprovedBidderList'
        ),
        'payPalAccountAcceptsUnconfirmedAddress' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalAccountAcceptsUnconfirmedAddress'
        ),
        'picture' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Picture'
        ),
        'priceAboveMinimum' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PriceAboveMinimum'
        ),
        'priceBelowMaximum' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PriceBelowMaximum'
        ),
        'sellerExpressEligible' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerExpressEligible'
        ),
        'shipFromEligibleCountry' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipFromEligibleCountry'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'urn:ebay:apis:eBLBaseComponents';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
