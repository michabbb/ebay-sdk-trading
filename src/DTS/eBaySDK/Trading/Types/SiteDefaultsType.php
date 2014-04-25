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
 * @property DTS\eBaySDK\Trading\Types\AdFormatEnabledCodeType(string) $adFormatEnabled
 * @property boolean $additionalCompatibilityEnabled
 * @property boolean $basicUpgradePackEnabled
 * @property boolean $bestOfferAutoAcceptEnabled
 * @property boolean $bestOfferAutoDeclineEnabled
 * @property boolean $bestOfferCounterEnabled
 * @property boolean $bestOfferEnabled
 * @property boolean $brandMpniDentifierEnabled
 * @property boolean $buyerGuaranteeEnabled
 * @property boolean $classifiedAdAutoAcceptEnabled
 * @property boolean $classifiedAdAutoDeclineEnabled
 * @property DTS\eBaySDK\Trading\Types\ClassifiedAdBestOfferEnabledCodeType(string) $classifiedAdBestOfferEnabled
 * @property boolean $classifiedAdCompanyNameEnabled
 * @property boolean $classifiedAdContactByAddressEnabled
 * @property boolean $classifiedAdContactByEmailEnabled
 * @property boolean $classifiedAdContactByPhoneEnabled
 * @property boolean $classifiedAdCounterOfferEnabled
 * @property boolean $classifiedAdPayPerLeadEnabled
 * @property DTS\eBaySDK\Trading\Types\ClassifiedAdPaymentMethodEnabledCodeType(string) $classifiedAdPaymentMethodEnabled
 * @property integer $classifiedAdPhoneCount
 * @property boolean $classifiedAdShippingMethodEnabled
 * @property integer $classifiedAdStreetCount
 * @property boolean $combinedFixedPriceTreatmentEnabled
 * @property string $compatibleVehicleType
 * @property DTS\eBaySDK\Trading\Types\ConditionEnabledCodeType(string) $conditionEnabled
 * @property DTS\eBaySDK\Trading\Types\ConditionValuesType $conditionValues
 * @property boolean $crossBorderTradeAustraliaEnabled
 * @property boolean $crossBorderTradeGbeNabled
 * @property boolean $crossBorderTradeNorthAmericaEnabled
 * @property boolean $depositSupported
 * @property boolean $dutchBineNabled
 * @property DTS\eBaySDK\Trading\Types\AdFormatEnabledCodeType(string) $eBayMotorsProAdFormatEnabled
 * @property boolean $eBayMotorsProAutoAcceptEnabled
 * @property boolean $eBayMotorsProAutoDeclineEnabled
 * @property DTS\eBaySDK\Trading\Types\ClassifiedAdBestOfferEnabledCodeType(string) $eBayMotorsProBestOfferEnabled
 * @property boolean $eBayMotorsProCompanyNameEnabled
 * @property boolean $eBayMotorsProContactByAddressEnabled
 * @property boolean $eBayMotorsProContactByEmailEnabled
 * @property boolean $eBayMotorsProContactByPhoneEnabled
 * @property boolean $eBayMotorsProCounterOfferEnabled
 * @property DTS\eBaySDK\Trading\Types\ClassifiedAdPaymentMethodEnabledCodeType(string) $eBayMotorsProPaymentMethodCheckOutEnabled
 * @property integer $eBayMotorsProPhoneCount
 * @property boolean $eBayMotorsProSellerContactDetailsEnabled
 * @property boolean $eBayMotorsProShippingMethodEnabled
 * @property integer $eBayMotorsProStreetCount
 * @property boolean $eaniDentifierEnabled
 * @property boolean $expressConditionRequired
 * @property boolean $expressEnabled
 * @property boolean $expressPicturesRequired
 * @property boolean $freeGalleryPlusEnabled
 * @property boolean $freePicturePackEnabled
 * @property DTS\eBaySDK\Trading\Types\ListingEnhancementDurationReferenceType $galleryFeaturedDurations
 * @property boolean $globalShippingEnabled
 * @property DTS\eBaySDK\Trading\Types\AmountType $group1MaxFlatShippingCost
 * @property DTS\eBaySDK\Trading\Types\AmountType $group2MaxFlatShippingCost
 * @property DTS\eBaySDK\Trading\Types\AmountType $group3MaxFlatShippingCost
 * @property boolean $handlingTimeEnabled
 * @property boolean $homePageFeaturedEnabled
 * @property DTS\eBaySDK\Trading\Types\INEscrowWorkflowTimelineCodeType(string) $ineScrowWorkflowTimeline
 * @property boolean $isbniDentifierEnabled
 * @property DTS\eBaySDK\Trading\Types\ItemCompatibilityEnabledCodeType(string) $itemCompatibilityEnabled
 * @property DTS\eBaySDK\Trading\Types\ItemSpecificsEnabledCodeType(string) $itemSpecificsEnabled
 * @property DTS\eBaySDK\Trading\Types\ListingDurationReferenceType $listingDuration
 * @property string $localListingDistancesNonSubscription
 * @property string $localListingDistancesRegular
 * @property string $localListingDistancesSpecialty
 * @property DTS\eBaySDK\Trading\Types\AdFormatEnabledCodeType(string) $localMarketAdFormatEnabled
 * @property boolean $localMarketAutoAcceptEnabled
 * @property boolean $localMarketAutoDeclineEnabled
 * @property DTS\eBaySDK\Trading\Types\ClassifiedAdBestOfferEnabledCodeType(string) $localMarketBestOfferEnabled
 * @property boolean $localMarketCompanyNameEnabled
 * @property boolean $localMarketContactByAddressEnabled
 * @property boolean $localMarketContactByEmailEnabled
 * @property boolean $localMarketContactByPhoneEnabled
 * @property boolean $localMarketCounterOfferEnabled
 * @property boolean $localMarketNonSubscription
 * @property DTS\eBaySDK\Trading\Types\ClassifiedAdPaymentMethodEnabledCodeType(string) $localMarketPaymentMethodCheckOutEnabled
 * @property integer $localMarketPhoneCount
 * @property boolean $localMarketPremiumSubscription
 * @property boolean $localMarketRegularSubscription
 * @property boolean $localMarketSellerContactDetailsEnabled
 * @property boolean $localMarketShippingMethodEnabled
 * @property boolean $localMarketSpecialitySubscription
 * @property integer $localMarketStreetCount
 * @property DTS\eBaySDK\Trading\Types\AmountType $maxFlatShippingCost
 * @property boolean $maxFlatShippingCostCbteXempt
 * @property integer $maxGranularFitmentCount
 * @property integer $maxItemCompatibility
 * @property integer $minItemCompatibility
 * @property double $minimumReservePrice
 * @property DTS\eBaySDK\Trading\Types\GeographicExposureCodeType(string) $nonSubscription
 * @property boolean $paisaPayFullEscrowEnabled
 * @property boolean $payPalBuyerProtectionEnabled
 * @property boolean $payPalRequired
 * @property boolean $payPalRequiredForStoreOwner
 * @property DTS\eBaySDK\Trading\Types\BuyerPaymentMethodCodeType(string) $paymentMethod
 * @property DTS\eBaySDK\Trading\Types\PaymentOptionsGroupEnabledCodeType(string) $paymentOptionsGroup
 * @property DTS\eBaySDK\Trading\Types\ProfileCategoryGroupCodeType(string) $paymentProfileCategoryGroup
 * @property DTS\eBaySDK\Trading\Types\GeographicExposureCodeType(string) $premiumSubscription
 * @property boolean $proPackEnabled
 * @property boolean $proPackPlusEnabled
 * @property DTS\eBaySDK\Trading\Types\ProductCreationEnabledCodeType(string) $productCreationEnabled
 * @property DTS\eBaySDK\Trading\Types\GeographicExposureCodeType(string) $regularSubscription
 * @property boolean $returnPolicyEnabled
 * @property DTS\eBaySDK\Trading\Types\ProfileCategoryGroupCodeType(string) $returnPolicyProfileCategoryGroup
 * @property boolean $revisePriceAllowed
 * @property boolean $reviseQuantityAllowed
 * @property boolean $safePaymentRequired
 * @property boolean $sellerContactDetailsEnabled
 * @property boolean $sellerProvidedTitleSupported
 * @property DTS\eBaySDK\Trading\Types\ProfileCategoryGroupCodeType(string) $shippingProfileCategoryGroup
 * @property boolean $shippingTermsRequired
 * @property boolean $skypeMeNonTransactionalEnabled
 * @property boolean $skypeMeTransactionalEnabled
 * @property DTS\eBaySDK\Trading\Types\GeographicExposureCodeType(string) $specialitySubscription
 * @property boolean $storeInventoryEnabled
 * @property DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsType $storeOwnerExtendedListingDurations
 * @property boolean $storeOwnerExtendedListingDurationsEnabled
 * @property boolean $transactionConfirmationRequestEnabled
 * @property boolean $upciDentifierEnabled
 * @property boolean $userConsentRequired
 * @property boolean $valueCategory
 * @property boolean $valuePackEnabled
 * @property boolean $variationsEnabled
 * @property boolean $vinsUpported
 * @property boolean $vrmsUpported
 */
class SiteDefaultsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'adFormatEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdFormatEnabled'
        ),
        'additionalCompatibilityEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdditionalCompatibilityEnabled'
        ),
        'basicUpgradePackEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BasicUpgradePackEnabled'
        ),
        'bestOfferAutoAcceptEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferAutoAcceptEnabled'
        ),
        'bestOfferAutoDeclineEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferAutoDeclineEnabled'
        ),
        'bestOfferCounterEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferCounterEnabled'
        ),
        'bestOfferEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferEnabled'
        ),
        'brandMpniDentifierEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BrandMPNIdentifierEnabled'
        ),
        'buyerGuaranteeEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteeEnabled'
        ),
        'classifiedAdAutoAcceptEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdAutoAcceptEnabled'
        ),
        'classifiedAdAutoDeclineEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdAutoDeclineEnabled'
        ),
        'classifiedAdBestOfferEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdBestOfferEnabled'
        ),
        'classifiedAdCompanyNameEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdCompanyNameEnabled'
        ),
        'classifiedAdContactByAddressEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByAddressEnabled'
        ),
        'classifiedAdContactByEmailEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByEmailEnabled'
        ),
        'classifiedAdContactByPhoneEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByPhoneEnabled'
        ),
        'classifiedAdCounterOfferEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdCounterOfferEnabled'
        ),
        'classifiedAdPayPerLeadEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPayPerLeadEnabled'
        ),
        'classifiedAdPaymentMethodEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPaymentMethodEnabled'
        ),
        'classifiedAdPhoneCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPhoneCount'
        ),
        'classifiedAdShippingMethodEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdShippingMethodEnabled'
        ),
        'classifiedAdStreetCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdStreetCount'
        ),
        'combinedFixedPriceTreatmentEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CombinedFixedPriceTreatmentEnabled'
        ),
        'compatibleVehicleType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CompatibleVehicleType'
        ),
        'conditionEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionEnabled'
        ),
        'conditionValues' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ConditionValuesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionValues'
        ),
        'crossBorderTradeAustraliaEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeAustraliaEnabled'
        ),
        'crossBorderTradeGbeNabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeGBEnabled'
        ),
        'crossBorderTradeNorthAmericaEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeNorthAmericaEnabled'
        ),
        'depositSupported' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DepositSupported'
        ),
        'dutchBineNabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DutchBINEnabled'
        ),
        'eBayMotorsProAdFormatEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProAdFormatEnabled'
        ),
        'eBayMotorsProAutoAcceptEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProAutoAcceptEnabled'
        ),
        'eBayMotorsProAutoDeclineEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProAutoDeclineEnabled'
        ),
        'eBayMotorsProBestOfferEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProBestOfferEnabled'
        ),
        'eBayMotorsProCompanyNameEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProCompanyNameEnabled'
        ),
        'eBayMotorsProContactByAddressEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByAddressEnabled'
        ),
        'eBayMotorsProContactByEmailEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByEmailEnabled'
        ),
        'eBayMotorsProContactByPhoneEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByPhoneEnabled'
        ),
        'eBayMotorsProCounterOfferEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProCounterOfferEnabled'
        ),
        'eBayMotorsProPaymentMethodCheckOutEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProPaymentMethodCheckOutEnabled'
        ),
        'eBayMotorsProPhoneCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProPhoneCount'
        ),
        'eBayMotorsProSellerContactDetailsEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProSellerContactDetailsEnabled'
        ),
        'eBayMotorsProShippingMethodEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProShippingMethodEnabled'
        ),
        'eBayMotorsProStreetCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProStreetCount'
        ),
        'eaniDentifierEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EANIdentifierEnabled'
        ),
        'expressConditionRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpressConditionRequired'
        ),
        'expressEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpressEnabled'
        ),
        'expressPicturesRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpressPicturesRequired'
        ),
        'freeGalleryPlusEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FreeGalleryPlusEnabled'
        ),
        'freePicturePackEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FreePicturePackEnabled'
        ),
        'galleryFeaturedDurations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingEnhancementDurationReferenceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GalleryFeaturedDurations'
        ),
        'globalShippingEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GlobalShippingEnabled'
        ),
        'group1MaxFlatShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Group1MaxFlatShippingCost'
        ),
        'group2MaxFlatShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Group2MaxFlatShippingCost'
        ),
        'group3MaxFlatShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Group3MaxFlatShippingCost'
        ),
        'handlingTimeEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HandlingTimeEnabled'
        ),
        'homePageFeaturedEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HomePageFeaturedEnabled'
        ),
        'ineScrowWorkflowTimeline' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'INEscrowWorkflowTimeline'
        ),
        'isbniDentifierEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ISBNIdentifierEnabled'
        ),
        'itemCompatibilityEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityEnabled'
        ),
        'itemSpecificsEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecificsEnabled'
        ),
        'listingDuration' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingDurationReferenceType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ListingDuration'
        ),
        'localListingDistancesNonSubscription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalListingDistancesNonSubscription'
        ),
        'localListingDistancesRegular' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalListingDistancesRegular'
        ),
        'localListingDistancesSpecialty' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalListingDistancesSpecialty'
        ),
        'localMarketAdFormatEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketAdFormatEnabled'
        ),
        'localMarketAutoAcceptEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketAutoAcceptEnabled'
        ),
        'localMarketAutoDeclineEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketAutoDeclineEnabled'
        ),
        'localMarketBestOfferEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketBestOfferEnabled'
        ),
        'localMarketCompanyNameEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketCompanyNameEnabled'
        ),
        'localMarketContactByAddressEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByAddressEnabled'
        ),
        'localMarketContactByEmailEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByEmailEnabled'
        ),
        'localMarketContactByPhoneEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByPhoneEnabled'
        ),
        'localMarketCounterOfferEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketCounterOfferEnabled'
        ),
        'localMarketNonSubscription' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketNonSubscription'
        ),
        'localMarketPaymentMethodCheckOutEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPaymentMethodCheckOutEnabled'
        ),
        'localMarketPhoneCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPhoneCount'
        ),
        'localMarketPremiumSubscription' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPremiumSubscription'
        ),
        'localMarketRegularSubscription' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketRegularSubscription'
        ),
        'localMarketSellerContactDetailsEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketSellerContactDetailsEnabled'
        ),
        'localMarketShippingMethodEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketShippingMethodEnabled'
        ),
        'localMarketSpecialitySubscription' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketSpecialitySubscription'
        ),
        'localMarketStreetCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketStreetCount'
        ),
        'maxFlatShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxFlatShippingCost'
        ),
        'maxFlatShippingCostCbteXempt' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxFlatShippingCostCBTExempt'
        ),
        'maxGranularFitmentCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxGranularFitmentCount'
        ),
        'maxItemCompatibility' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxItemCompatibility'
        ),
        'minItemCompatibility' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinItemCompatibility'
        ),
        'minimumReservePrice' => array(
            'type' => 'double',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinimumReservePrice'
        ),
        'nonSubscription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NonSubscription'
        ),
        'paisaPayFullEscrowEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayFullEscrowEnabled'
        ),
        'payPalBuyerProtectionEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalBuyerProtectionEnabled'
        ),
        'payPalRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalRequired'
        ),
        'payPalRequiredForStoreOwner' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalRequiredForStoreOwner'
        ),
        'paymentMethod' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethod'
        ),
        'paymentOptionsGroup' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentOptionsGroup'
        ),
        'paymentProfileCategoryGroup' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentProfileCategoryGroup'
        ),
        'premiumSubscription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PremiumSubscription'
        ),
        'proPackEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProPackEnabled'
        ),
        'proPackPlusEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProPackPlusEnabled'
        ),
        'productCreationEnabled' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductCreationEnabled'
        ),
        'regularSubscription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegularSubscription'
        ),
        'returnPolicyEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicyEnabled'
        ),
        'returnPolicyProfileCategoryGroup' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicyProfileCategoryGroup'
        ),
        'revisePriceAllowed' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RevisePriceAllowed'
        ),
        'reviseQuantityAllowed' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviseQuantityAllowed'
        ),
        'safePaymentRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SafePaymentRequired'
        ),
        'sellerContactDetailsEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerContactDetailsEnabled'
        ),
        'sellerProvidedTitleSupported' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerProvidedTitleSupported'
        ),
        'shippingProfileCategoryGroup' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingProfileCategoryGroup'
        ),
        'shippingTermsRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingTermsRequired'
        ),
        'skypeMeNonTransactionalEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SkypeMeNonTransactionalEnabled'
        ),
        'skypeMeTransactionalEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SkypeMeTransactionalEnabled'
        ),
        'specialitySubscription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SpecialitySubscription'
        ),
        'storeInventoryEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreInventoryEnabled'
        ),
        'storeOwnerExtendedListingDurations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreOwnerExtendedListingDurations'
        ),
        'storeOwnerExtendedListingDurationsEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreOwnerExtendedListingDurationsEnabled'
        ),
        'transactionConfirmationRequestEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionConfirmationRequestEnabled'
        ),
        'upciDentifierEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UPCIdentifierEnabled'
        ),
        'userConsentRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserConsentRequired'
        ),
        'valueCategory' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ValueCategory'
        ),
        'valuePackEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ValuePackEnabled'
        ),
        'variationsEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationsEnabled'
        ),
        'vinsUpported' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VINSupported'
        ),
        'vrmsUpported' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VRMSupported'
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
