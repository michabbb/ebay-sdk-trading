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
 * @property DTS\eBaySDK\Trading\Types\BidderNoticePreferencesType $bidderNoticePreferences
 * @property DTS\eBaySDK\Trading\Types\CombinedPaymentPreferencesType $combinedPaymentPreferences
 * @property DTS\eBaySDK\Trading\Types\CrossPromotionPreferencesType $crossPromotionPreferences
 * @property DTS\eBaySDK\Trading\Types\DispatchCutoffTimePreferencesType $dispatchCutoffTimePreference
 * @property boolean $emailShipmentTrackingNumberPreference
 * @property DTS\eBaySDK\Trading\Types\EndOfAuctionEmailPreferencesType $endOfAuctionEmailPreferences
 * @property boolean $globalShippingProgramListingPreference
 * @property boolean $offerGlobalShippingProgramPreference
 * @property boolean $overrideGspsErviceWithIntlServicePreference
 * @property DTS\eBaySDK\Trading\Types\ProStoresCheckoutPreferenceType $proStoresPreference
 * @property DTS\eBaySDK\Trading\Types\PurchaseReminderEmailPreferencesType $purchaseReminderEmailPreferences
 * @property boolean $requiredShipPhoneNumberPreference
 * @property DTS\eBaySDK\Trading\Types\SellerExcludeShipToLocationPreferencesType $sellerExcludeShipToLocationPreferences
 * @property DTS\eBaySDK\Trading\Types\SellerFavoriteItemPreferencesType $sellerFavoriteItemPreferences
 * @property DTS\eBaySDK\Trading\Types\SellerPaymentPreferencesType $sellerPaymentPreferences
 * @property DTS\eBaySDK\Trading\Types\SellerProfilePreferencesType $sellerProfilePreferences
 * @property DTS\eBaySDK\Trading\Types\SellerReturnPreferencesType $sellerReturnPreferences
 * @property boolean $sellerThirdPartyCheckoutDisabled
 * @property DTS\eBaySDK\Trading\Types\UnpaidItemAssistancePreferencesType $unpaidItemAssistancePreferences
 */
class GetUserPreferencesResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'bidderNoticePreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BidderNoticePreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidderNoticePreferences'
        ),
        'combinedPaymentPreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CombinedPaymentPreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CombinedPaymentPreferences'
        ),
        'crossPromotionPreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CrossPromotionPreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossPromotionPreferences'
        ),
        'dispatchCutoffTimePreference' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DispatchCutoffTimePreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DispatchCutoffTimePreference'
        ),
        'emailShipmentTrackingNumberPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EmailShipmentTrackingNumberPreference'
        ),
        'endOfAuctionEmailPreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EndOfAuctionEmailPreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndOfAuctionEmailPreferences'
        ),
        'globalShippingProgramListingPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GlobalShippingProgramListingPreference'
        ),
        'offerGlobalShippingProgramPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OfferGlobalShippingProgramPreference'
        ),
        'overrideGspsErviceWithIntlServicePreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OverrideGSPServiceWithIntlServicePreference'
        ),
        'proStoresPreference' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProStoresCheckoutPreferenceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProStoresPreference'
        ),
        'purchaseReminderEmailPreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PurchaseReminderEmailPreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PurchaseReminderEmailPreferences'
        ),
        'requiredShipPhoneNumberPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RequiredShipPhoneNumberPreference'
        ),
        'sellerExcludeShipToLocationPreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerExcludeShipToLocationPreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerExcludeShipToLocationPreferences'
        ),
        'sellerFavoriteItemPreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerFavoriteItemPreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerFavoriteItemPreferences'
        ),
        'sellerPaymentPreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerPaymentPreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerPaymentPreferences'
        ),
        'sellerProfilePreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerProfilePreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerProfilePreferences'
        ),
        'sellerReturnPreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerReturnPreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerReturnPreferences'
        ),
        'sellerThirdPartyCheckoutDisabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerThirdPartyCheckoutDisabled'
        ),
        'unpaidItemAssistancePreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UnpaidItemAssistancePreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnpaidItemAssistancePreferences'
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
