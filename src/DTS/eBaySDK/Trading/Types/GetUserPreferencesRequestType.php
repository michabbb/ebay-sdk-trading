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
 * @property boolean $showBidderNoticePreferences
 * @property boolean $showCombinedPaymentPreferences
 * @property boolean $showCrossPromotionPreferences
 * @property boolean $showDispatchCutoffTimePreferences
 * @property boolean $showEmailShipmentTrackingNumberPreference
 * @property boolean $showEndOfAuctionEmailPreferences
 * @property boolean $showGlobalShippingProgramListingPreference
 * @property boolean $showGlobalShippingProgramPreference
 * @property boolean $showOverrideGspsErviceWithIntlServicePreference
 * @property boolean $showProStoresPreferences
 * @property boolean $showPurchaseReminderEmailPreferences
 * @property boolean $showRequiredShipPhoneNumberPreference
 * @property boolean $showSellerExcludeShipToLocationPreference
 * @property boolean $showSellerFavoriteItemPreferences
 * @property boolean $showSellerPaymentPreferences
 * @property boolean $showSellerProfilePreferences
 * @property boolean $showSellerReturnPreferences
 * @property boolean $showUnpaidItemAssistanceExclusionList
 * @property boolean $showUnpaidItemAssistancePreference
 */
class GetUserPreferencesRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'showBidderNoticePreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowBidderNoticePreferences'
        ),
        'showCombinedPaymentPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowCombinedPaymentPreferences'
        ),
        'showCrossPromotionPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowCrossPromotionPreferences'
        ),
        'showDispatchCutoffTimePreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowDispatchCutoffTimePreferences'
        ),
        'showEmailShipmentTrackingNumberPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowEmailShipmentTrackingNumberPreference'
        ),
        'showEndOfAuctionEmailPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowEndOfAuctionEmailPreferences'
        ),
        'showGlobalShippingProgramListingPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowGlobalShippingProgramListingPreference'
        ),
        'showGlobalShippingProgramPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowGlobalShippingProgramPreference'
        ),
        'showOverrideGspsErviceWithIntlServicePreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowOverrideGSPServiceWithIntlServicePreference'
        ),
        'showProStoresPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowProStoresPreferences'
        ),
        'showPurchaseReminderEmailPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowPurchaseReminderEmailPreferences'
        ),
        'showRequiredShipPhoneNumberPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowRequiredShipPhoneNumberPreference'
        ),
        'showSellerExcludeShipToLocationPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowSellerExcludeShipToLocationPreference'
        ),
        'showSellerFavoriteItemPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowSellerFavoriteItemPreferences'
        ),
        'showSellerPaymentPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowSellerPaymentPreferences'
        ),
        'showSellerProfilePreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowSellerProfilePreferences'
        ),
        'showSellerReturnPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowSellerReturnPreferences'
        ),
        'showUnpaidItemAssistanceExclusionList' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowUnpaidItemAssistanceExclusionList'
        ),
        'showUnpaidItemAssistancePreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowUnpaidItemAssistancePreference'
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
