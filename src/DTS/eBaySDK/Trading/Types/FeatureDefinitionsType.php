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
 * @property DTS\eBaySDK\Trading\Types\AdFormatEnabledDefinitionType $adFormatEnabled
 * @property DTS\eBaySDK\Trading\Types\AdditionalCompatibilityEnabledDefinitionType $additionalCompatibilityEnabled
 * @property DTS\eBaySDK\Trading\Types\AttributeConversionEnabledFeatureDefinitionType $attributeConversionEnabled
 * @property DTS\eBaySDK\Trading\Types\BasicUpgradePackEnabledDefinitionType $basicUpgradePackEnabled
 * @property DTS\eBaySDK\Trading\Types\BestOfferAutoAcceptEnabledDefinitionType $bestOfferAutoAcceptEnabled
 * @property DTS\eBaySDK\Trading\Types\BestOfferAutoDeclineEnabledDefinitionType $bestOfferAutoDeclineEnabled
 * @property DTS\eBaySDK\Trading\Types\BestOfferCounterEnabledDefinitionType $bestOfferCounterEnabled
 * @property DTS\eBaySDK\Trading\Types\BestOfferEnabledDefinitionType $bestOfferEnabled
 * @property DTS\eBaySDK\Trading\Types\BrandMPNIdentifierEnabledDefinitionType $brandMpniDentifierEnabled
 * @property DTS\eBaySDK\Trading\Types\BuyerGuaranteeEnabledDefinitionType $buyerGuaranteeEnabled
 * @property DTS\eBaySDK\Trading\Types\ClassifiedAdAutoAcceptEnabledDefinitionType $classifiedAdAutoAcceptEnabled
 * @property DTS\eBaySDK\Trading\Types\ClassifiedAdAutoDeclineEnabledDefinitionType $classifiedAdAutoDeclineEnabled
 * @property DTS\eBaySDK\Trading\Types\ClassifiedAdBestOfferEnabledDefinitionType $classifiedAdBestOfferEnabled
 * @property DTS\eBaySDK\Trading\Types\ClassifiedAdCompanyNameEnabledDefinitionType $classifiedAdCompanyNameEnabled
 * @property DTS\eBaySDK\Trading\Types\ClassifiedAdContactByAddressEnabledDefinitionType $classifiedAdContactByAddressEnabled
 * @property DTS\eBaySDK\Trading\Types\ClassifiedAdContactByEmailEnabledDefintionType $classifiedAdContactByEmailEnabled
 * @property DTS\eBaySDK\Trading\Types\ClassifiedAdContactByPhoneEnabledDefinitionType $classifiedAdContactByPhoneEnabled
 * @property DTS\eBaySDK\Trading\Types\ClassifiedAdCounterOfferEnabledDefinitionType $classifiedAdCounterOfferEnabled
 * @property DTS\eBaySDK\Trading\Types\ClassifiedAdPayPerLeadEnabledDefinitionType $classifiedAdPayPerLeadEnabled
 * @property DTS\eBaySDK\Trading\Types\ClassifiedAdPaymentMethodEnabledDefinitionType $classifiedAdPaymentMethodEnabled
 * @property DTS\eBaySDK\Trading\Types\ClassifiedAdPhoneCountDefinitionType $classifiedAdPhoneCount
 * @property DTS\eBaySDK\Trading\Types\ClassifiedAdShippingMethodEnabledDefinitionType $classifiedAdShippingMethodEnabled
 * @property DTS\eBaySDK\Trading\Types\ClassifiedAdStreetCountDefinitionType $classifiedAdStreetCount
 * @property DTS\eBaySDK\Trading\Types\CombinedFixedPriceTreatmentEnabledDefinitionType $combinedFixedPriceTreatmentEnabled
 * @property DTS\eBaySDK\Trading\Types\CompatibleVehicleTypeDefinitionType $compatibleVehicleType
 * @property DTS\eBaySDK\Trading\Types\ConditionEnabledDefinitionType $conditionEnabled
 * @property DTS\eBaySDK\Trading\Types\ConditionValuesDefinitionType $conditionValues
 * @property DTS\eBaySDK\Trading\Types\CrossBorderTradeAustraliaEnabledDefinitionType $crossBorderTradeAustraliaEnabled
 * @property DTS\eBaySDK\Trading\Types\CrossBorderTradeGBEnabledDefinitionType $crossBorderTradeGbeNabled
 * @property DTS\eBaySDK\Trading\Types\CrossBorderTradeNorthAmericaEnabledDefinitionType $crossBorderTradeNorthAmericaEnabled
 * @property DTS\eBaySDK\Trading\Types\DepositSupportedDefinitionType $depositSupported
 * @property DTS\eBaySDK\Trading\Types\DutchBINEnabledDefinitionType $dutchBineNabled
 * @property DTS\eBaySDK\Trading\Types\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled
 * @property DTS\eBaySDK\Trading\Types\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled
 * @property DTS\eBaySDK\Trading\Types\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled
 * @property DTS\eBaySDK\Trading\Types\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled
 * @property DTS\eBaySDK\Trading\Types\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled
 * @property DTS\eBaySDK\Trading\Types\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled
 * @property DTS\eBaySDK\Trading\Types\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled
 * @property DTS\eBaySDK\Trading\Types\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled
 * @property DTS\eBaySDK\Trading\Types\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled
 * @property DTS\eBaySDK\Trading\Types\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled
 * @property DTS\eBaySDK\Trading\Types\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount
 * @property DTS\eBaySDK\Trading\Types\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled
 * @property DTS\eBaySDK\Trading\Types\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled
 * @property DTS\eBaySDK\Trading\Types\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount
 * @property DTS\eBaySDK\Trading\Types\EANIdentifierEnabledDefinitionType $eaniDentifierEnabled
 * @property DTS\eBaySDK\Trading\Types\ExpressConditionRequiredDefinitionType $expressConditionRequired
 * @property DTS\eBaySDK\Trading\Types\ExpressEnabledDefinitionType $expressEnabled
 * @property DTS\eBaySDK\Trading\Types\ExpressPicturesRequiredDefinitionType $expressPicturesRequired
 * @property DTS\eBaySDK\Trading\Types\FreeGalleryPlusEnabledDefinitionType $freeGalleryPlusEnabled
 * @property DTS\eBaySDK\Trading\Types\FreePicturePackEnabledDefinitionType $freePicturePackEnabled
 * @property DTS\eBaySDK\Trading\Types\ListingEnhancementDurationDefinitionType $galleryFeaturedDurations
 * @property DTS\eBaySDK\Trading\Types\GlobalShippingEnabledDefinitionType $globalShippingEnabled
 * @property DTS\eBaySDK\Trading\Types\Group1MaxFlatShippingCostDefinitionType $group1MaxFlatShippingCost
 * @property DTS\eBaySDK\Trading\Types\Group2MaxFlatShippingCostDefinitionType $group2MaxFlatShippingCost
 * @property DTS\eBaySDK\Trading\Types\Group3MaxFlatShippingCostDefinitionType $group3MaxFlatShippingCost
 * @property DTS\eBaySDK\Trading\Types\HandlingTimeEnabledDefinitionType $handlingTimeEnabled
 * @property DTS\eBaySDK\Trading\Types\HomePageFeaturedEnabledDefinitionType $homePageFeaturedEnabled
 * @property DTS\eBaySDK\Trading\Types\INEscrowWorkflowTimelineDefinitionType $ineScrowWorkflowTimeline
 * @property DTS\eBaySDK\Trading\Types\ISBNIdentifierEnabledDefinitionType $isbniDentifierEnabled
 * @property DTS\eBaySDK\Trading\Types\ItemCompatibilityEnabledDefinitionType $itemCompatibilityEnabled
 * @property DTS\eBaySDK\Trading\Types\ItemSpecificsEnabledDefinitionType $itemSpecificsEnabled
 * @property DTS\eBaySDK\Trading\Types\ListingDurationDefinitionsType $listingDurations
 * @property DTS\eBaySDK\Trading\Types\LocalListingDistancesNonSubscriptionDefinitionType $localListingDistancesNonSubscription
 * @property DTS\eBaySDK\Trading\Types\LocalListingDistancesRegularDefinitionType $localListingDistancesRegular
 * @property DTS\eBaySDK\Trading\Types\LocalListingDistancesSpecialtyDefinitionType $localListingDistancesSpecialty
 * @property DTS\eBaySDK\Trading\Types\LocalMarketAdFormatEnabledDefinitionType $localMarketAdFormatEnabled
 * @property DTS\eBaySDK\Trading\Types\LocalMarketAutoAcceptEnabledDefinitionType $localMarketAutoAcceptEnabled
 * @property DTS\eBaySDK\Trading\Types\LocalMarketAutoDeclineEnabledDefinitionType $localMarketAutoDeclineEnabled
 * @property DTS\eBaySDK\Trading\Types\LocalMarketBestOfferEnabledDefinitionType $localMarketBestOfferEnabled
 * @property DTS\eBaySDK\Trading\Types\LocalMarketCompanyNameEnabledDefinitionType $localMarketCompanyNameEnabled
 * @property DTS\eBaySDK\Trading\Types\LocalMarketContactByAddressEnabledDefinitionType $localMarketContactByAddressEnabled
 * @property DTS\eBaySDK\Trading\Types\LocalMarketContactByEmailEnabledDefinitionType $localMarketContactByEmailEnabled
 * @property DTS\eBaySDK\Trading\Types\LocalMarketContactByPhoneEnabledDefinitionType $localMarketContactByPhoneEnabled
 * @property DTS\eBaySDK\Trading\Types\LocalMarketCounterOfferEnabledDefinitionType $localMarketCounterOfferEnabled
 * @property DTS\eBaySDK\Trading\Types\LocalMarketNonSubscriptionDefinitionType $localMarketNonSubscription
 * @property DTS\eBaySDK\Trading\Types\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $localMarketPaymentMethodCheckOutEnabled
 * @property DTS\eBaySDK\Trading\Types\LocalMarketPhoneCountDefinitionType $localMarketPhoneCount
 * @property DTS\eBaySDK\Trading\Types\LocalMarketPremiumSubscriptionDefinitionType $localMarketPremiumSubscription
 * @property DTS\eBaySDK\Trading\Types\LocalMarketRegularSubscriptionDefinitionType $localMarketRegularSubscription
 * @property DTS\eBaySDK\Trading\Types\LocalMarketSellerContactDetailsEnabledDefinitionType $localMarketSellerContactDetailsEnabled
 * @property DTS\eBaySDK\Trading\Types\LocalMarketShippingMethodEnabledDefinitionType $localMarketShippingMethodEnabled
 * @property DTS\eBaySDK\Trading\Types\LocalMarketSpecialitySubscriptionDefinitionType $localMarketSpecialitySubscription
 * @property DTS\eBaySDK\Trading\Types\LocalMarketStreetCountDefinitionType $localMarketStreetCount
 * @property DTS\eBaySDK\Trading\Types\MaxFlatShippingCostDefinitionType $maxFlatShippingCost
 * @property DTS\eBaySDK\Trading\Types\MaxFlatShippingCostCBTExemptDefinitionType $maxFlatShippingCostCbteXempt
 * @property DTS\eBaySDK\Trading\Types\MaxGranularFitmentCountDefinitionType $maxGranularFitmentCount
 * @property DTS\eBaySDK\Trading\Types\MaxItemCompatibilityDefinitionType $maxItemCompatibility
 * @property DTS\eBaySDK\Trading\Types\MinItemCompatibilityDefinitionType $minItemCompatibility
 * @property DTS\eBaySDK\Trading\Types\MinimumReservePriceDefinitionType $minimumReservePrice
 * @property DTS\eBaySDK\Trading\Types\NonSubscriptionDefinitionType $nonSubscription
 * @property DTS\eBaySDK\Trading\Types\PaisaPayFullEscrowEnabledDefinitionType $paisaPayFullEscrowEnabled
 * @property DTS\eBaySDK\Trading\Types\PayPalBuyerProtectionEnabledDefinitionType $payPalBuyerProtectionEnabled
 * @property DTS\eBaySDK\Trading\Types\PayPalRequiredDefinitionType $payPalRequired
 * @property DTS\eBaySDK\Trading\Types\PayPalRequiredForStoreOwnerDefinitionType $payPalRequiredForStoreOwner
 * @property DTS\eBaySDK\Trading\Types\PaymentMethodDefinitionType $paymentMethod
 * @property DTS\eBaySDK\Trading\Types\PaymentOptionsGroupEnabledDefinitionType $paymentOptionsGroup
 * @property DTS\eBaySDK\Trading\Types\ProfileCategoryGroupDefinitionType $paymentProfileCategoryGroup
 * @property DTS\eBaySDK\Trading\Types\PremiumSubscriptionDefinitionType $premiumSubscription
 * @property DTS\eBaySDK\Trading\Types\ProPackEnabledDefinitionType $proPackEnabled
 * @property DTS\eBaySDK\Trading\Types\ProPackPlusEnabledDefinitionType $proPackPlusEnabled
 * @property DTS\eBaySDK\Trading\Types\ProductCreationEnabledDefinitionType $productCreationEnabled
 * @property DTS\eBaySDK\Trading\Types\RegularSubscriptionDefinitionType $regularSubscription
 * @property DTS\eBaySDK\Trading\Types\ReturnPolicyEnabledDefinitionType $returnPolicyEnabled
 * @property DTS\eBaySDK\Trading\Types\ProfileCategoryGroupDefinitionType $returnPolicyProfileCategoryGroup
 * @property DTS\eBaySDK\Trading\Types\RevisePriceAllowedDefinitionType $revisePriceAllowed
 * @property DTS\eBaySDK\Trading\Types\ReviseQuantityAllowedDefinitionType $reviseQuantityAllowed
 * @property DTS\eBaySDK\Trading\Types\SafePaymentRequiredDefinitionType $safePaymentRequired
 * @property DTS\eBaySDK\Trading\Types\SellerContactDetailsEnabledDefinitionType $sellerContactDetailsEnabled
 * @property DTS\eBaySDK\Trading\Types\SellerProvidedTitleSupportedDefinitionType $sellerProvidedTitleSupported
 * @property DTS\eBaySDK\Trading\Types\ProfileCategoryGroupDefinitionType $shippingProfileCategoryGroup
 * @property DTS\eBaySDK\Trading\Types\ShippingTermRequiredDefinitionType $shippingTermsRequired
 * @property DTS\eBaySDK\Trading\Types\SkypeMeNonTransactionalEnabledDefinitionType $skypeMeNonTransactionalEnabled
 * @property DTS\eBaySDK\Trading\Types\SkypeMeTransactionalEnabledDefinitionType $skypeMeTransactionalEnabled
 * @property DTS\eBaySDK\Trading\Types\SpecialitySubscriptionDefinitionType $specialitySubscription
 * @property DTS\eBaySDK\Trading\Types\StoreInventoryEnabledDefinitionType $storeInventoryEnabled
 * @property DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsDefinitionType $storeOwnerExtendedListingDurations
 * @property DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsEnabledDefinitionType $storeOwnerExtendedListingDurationsEnabled
 * @property DTS\eBaySDK\Trading\Types\TCREnabledDefinitionType $transactionConfirmationRequestEnabled
 * @property DTS\eBaySDK\Trading\Types\UPCIdentifierEnabledDefinitionType $upciDentifierEnabled
 * @property DTS\eBaySDK\Trading\Types\UserConsentRequiredDefinitionType $userConsentRequired
 * @property DTS\eBaySDK\Trading\Types\ValueCategoryDefinitionType $valueCategory
 * @property DTS\eBaySDK\Trading\Types\ValuePackEnabledDefinitionType $valuePackEnabled
 * @property DTS\eBaySDK\Trading\Types\VariationsEnabledDefinitionType $variationsEnabled
 * @property DTS\eBaySDK\Trading\Types\VINSupportedDefinitionType $vinsUpported
 * @property DTS\eBaySDK\Trading\Types\VRMSupportedDefinitionType $vrmsUpported
 */
class FeatureDefinitionsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'adFormatEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AdFormatEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdFormatEnabled'
        ),
        'additionalCompatibilityEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AdditionalCompatibilityEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdditionalCompatibilityEnabled'
        ),
        'attributeConversionEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AttributeConversionEnabledFeatureDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AttributeConversionEnabled'
        ),
        'basicUpgradePackEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BasicUpgradePackEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BasicUpgradePackEnabled'
        ),
        'bestOfferAutoAcceptEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BestOfferAutoAcceptEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferAutoAcceptEnabled'
        ),
        'bestOfferAutoDeclineEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BestOfferAutoDeclineEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferAutoDeclineEnabled'
        ),
        'bestOfferCounterEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BestOfferCounterEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferCounterEnabled'
        ),
        'bestOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BestOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferEnabled'
        ),
        'brandMpniDentifierEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BrandMPNIdentifierEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BrandMPNIdentifierEnabled'
        ),
        'buyerGuaranteeEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerGuaranteeEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteeEnabled'
        ),
        'classifiedAdAutoAcceptEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdAutoAcceptEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdAutoAcceptEnabled'
        ),
        'classifiedAdAutoDeclineEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdAutoDeclineEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdAutoDeclineEnabled'
        ),
        'classifiedAdBestOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdBestOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdBestOfferEnabled'
        ),
        'classifiedAdCompanyNameEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdCompanyNameEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdCompanyNameEnabled'
        ),
        'classifiedAdContactByAddressEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdContactByAddressEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByAddressEnabled'
        ),
        'classifiedAdContactByEmailEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdContactByEmailEnabledDefintionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByEmailEnabled'
        ),
        'classifiedAdContactByPhoneEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdContactByPhoneEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdContactByPhoneEnabled'
        ),
        'classifiedAdCounterOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdCounterOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdCounterOfferEnabled'
        ),
        'classifiedAdPayPerLeadEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdPayPerLeadEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPayPerLeadEnabled'
        ),
        'classifiedAdPaymentMethodEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdPaymentMethodEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPaymentMethodEnabled'
        ),
        'classifiedAdPhoneCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdPhoneCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPhoneCount'
        ),
        'classifiedAdShippingMethodEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdShippingMethodEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdShippingMethodEnabled'
        ),
        'classifiedAdStreetCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ClassifiedAdStreetCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdStreetCount'
        ),
        'combinedFixedPriceTreatmentEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CombinedFixedPriceTreatmentEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CombinedFixedPriceTreatmentEnabled'
        ),
        'compatibleVehicleType' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CompatibleVehicleTypeDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CompatibleVehicleType'
        ),
        'conditionEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ConditionEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionEnabled'
        ),
        'conditionValues' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ConditionValuesDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionValues'
        ),
        'crossBorderTradeAustraliaEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CrossBorderTradeAustraliaEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeAustraliaEnabled'
        ),
        'crossBorderTradeGbeNabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CrossBorderTradeGBEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeGBEnabled'
        ),
        'crossBorderTradeNorthAmericaEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CrossBorderTradeNorthAmericaEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTradeNorthAmericaEnabled'
        ),
        'depositSupported' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DepositSupportedDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DepositSupported'
        ),
        'dutchBineNabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DutchBINEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DutchBINEnabled'
        ),
        'eBayMotorsProAdFormatEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProAdFormatEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProAdFormatEnabled'
        ),
        'eBayMotorsProAutoAcceptEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProAutoAcceptEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProAutoAcceptEnabled'
        ),
        'eBayMotorsProAutoDeclineEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProAutoDeclineEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProAutoDeclineEnabled'
        ),
        'eBayMotorsProBestOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProBestOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProBestOfferEnabled'
        ),
        'eBayMotorsProCompanyNameEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProCompanyNameEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProCompanyNameEnabled'
        ),
        'eBayMotorsProContactByAddressEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProContactByAddressEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByAddressEnabled'
        ),
        'eBayMotorsProContactByEmailEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProContactByEmailEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByEmailEnabled'
        ),
        'eBayMotorsProContactByPhoneEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProContactByPhoneEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProContactByPhoneEnabled'
        ),
        'eBayMotorsProCounterOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProCounterOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProCounterOfferEnabled'
        ),
        'eBayMotorsProPaymentMethodCheckOutEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProPaymentMethodCheckOutEnabled'
        ),
        'eBayMotorsProPhoneCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProPhoneCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProPhoneCount'
        ),
        'eBayMotorsProSellerContactDetailsEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProSellerContactDetailsEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProSellerContactDetailsEnabled'
        ),
        'eBayMotorsProShippingMethodEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProShippingMethodEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProShippingMethodEnabled'
        ),
        'eBayMotorsProStreetCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayMotorsProStreetCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayMotorsProStreetCount'
        ),
        'eaniDentifierEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EANIdentifierEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EANIdentifierEnabled'
        ),
        'expressConditionRequired' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ExpressConditionRequiredDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpressConditionRequired'
        ),
        'expressEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ExpressEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpressEnabled'
        ),
        'expressPicturesRequired' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ExpressPicturesRequiredDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpressPicturesRequired'
        ),
        'freeGalleryPlusEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FreeGalleryPlusEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FreeGalleryPlusEnabled'
        ),
        'freePicturePackEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FreePicturePackEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FreePicturePackEnabled'
        ),
        'galleryFeaturedDurations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingEnhancementDurationDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GalleryFeaturedDurations'
        ),
        'globalShippingEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\GlobalShippingEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GlobalShippingEnabled'
        ),
        'group1MaxFlatShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\Group1MaxFlatShippingCostDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Group1MaxFlatShippingCost'
        ),
        'group2MaxFlatShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\Group2MaxFlatShippingCostDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Group2MaxFlatShippingCost'
        ),
        'group3MaxFlatShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\Group3MaxFlatShippingCostDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Group3MaxFlatShippingCost'
        ),
        'handlingTimeEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\HandlingTimeEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HandlingTimeEnabled'
        ),
        'homePageFeaturedEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\HomePageFeaturedEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HomePageFeaturedEnabled'
        ),
        'ineScrowWorkflowTimeline' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\INEscrowWorkflowTimelineDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'INEscrowWorkflowTimeline'
        ),
        'isbniDentifierEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ISBNIdentifierEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ISBNIdentifierEnabled'
        ),
        'itemCompatibilityEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemCompatibilityEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityEnabled'
        ),
        'itemSpecificsEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemSpecificsEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecificsEnabled'
        ),
        'listingDurations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingDurationDefinitionsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingDurations'
        ),
        'localListingDistancesNonSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalListingDistancesNonSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalListingDistancesNonSubscription'
        ),
        'localListingDistancesRegular' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalListingDistancesRegularDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalListingDistancesRegular'
        ),
        'localListingDistancesSpecialty' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalListingDistancesSpecialtyDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalListingDistancesSpecialty'
        ),
        'localMarketAdFormatEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketAdFormatEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketAdFormatEnabled'
        ),
        'localMarketAutoAcceptEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketAutoAcceptEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketAutoAcceptEnabled'
        ),
        'localMarketAutoDeclineEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketAutoDeclineEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketAutoDeclineEnabled'
        ),
        'localMarketBestOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketBestOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketBestOfferEnabled'
        ),
        'localMarketCompanyNameEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketCompanyNameEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketCompanyNameEnabled'
        ),
        'localMarketContactByAddressEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketContactByAddressEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByAddressEnabled'
        ),
        'localMarketContactByEmailEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketContactByEmailEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByEmailEnabled'
        ),
        'localMarketContactByPhoneEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketContactByPhoneEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketContactByPhoneEnabled'
        ),
        'localMarketCounterOfferEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketCounterOfferEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketCounterOfferEnabled'
        ),
        'localMarketNonSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketNonSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketNonSubscription'
        ),
        'localMarketPaymentMethodCheckOutEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketPaymentMethodCheckOutEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPaymentMethodCheckOutEnabled'
        ),
        'localMarketPhoneCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketPhoneCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPhoneCount'
        ),
        'localMarketPremiumSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketPremiumSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketPremiumSubscription'
        ),
        'localMarketRegularSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketRegularSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketRegularSubscription'
        ),
        'localMarketSellerContactDetailsEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketSellerContactDetailsEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketSellerContactDetailsEnabled'
        ),
        'localMarketShippingMethodEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketShippingMethodEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketShippingMethodEnabled'
        ),
        'localMarketSpecialitySubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketSpecialitySubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketSpecialitySubscription'
        ),
        'localMarketStreetCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LocalMarketStreetCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalMarketStreetCount'
        ),
        'maxFlatShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaxFlatShippingCostDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxFlatShippingCost'
        ),
        'maxFlatShippingCostCbteXempt' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaxFlatShippingCostCBTExemptDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxFlatShippingCostCBTExempt'
        ),
        'maxGranularFitmentCount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaxGranularFitmentCountDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxGranularFitmentCount'
        ),
        'maxItemCompatibility' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaxItemCompatibilityDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxItemCompatibility'
        ),
        'minItemCompatibility' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MinItemCompatibilityDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinItemCompatibility'
        ),
        'minimumReservePrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MinimumReservePriceDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinimumReservePrice'
        ),
        'nonSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\NonSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NonSubscription'
        ),
        'paisaPayFullEscrowEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaisaPayFullEscrowEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayFullEscrowEnabled'
        ),
        'payPalBuyerProtectionEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PayPalBuyerProtectionEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalBuyerProtectionEnabled'
        ),
        'payPalRequired' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PayPalRequiredDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalRequired'
        ),
        'payPalRequiredForStoreOwner' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PayPalRequiredForStoreOwnerDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalRequiredForStoreOwner'
        ),
        'paymentMethod' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaymentMethodDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethod'
        ),
        'paymentOptionsGroup' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaymentOptionsGroupEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentOptionsGroup'
        ),
        'paymentProfileCategoryGroup' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProfileCategoryGroupDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentProfileCategoryGroup'
        ),
        'premiumSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PremiumSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PremiumSubscription'
        ),
        'proPackEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProPackEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProPackEnabled'
        ),
        'proPackPlusEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProPackPlusEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProPackPlusEnabled'
        ),
        'productCreationEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProductCreationEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductCreationEnabled'
        ),
        'regularSubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RegularSubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegularSubscription'
        ),
        'returnPolicyEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ReturnPolicyEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicyEnabled'
        ),
        'returnPolicyProfileCategoryGroup' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProfileCategoryGroupDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicyProfileCategoryGroup'
        ),
        'revisePriceAllowed' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RevisePriceAllowedDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RevisePriceAllowed'
        ),
        'reviseQuantityAllowed' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ReviseQuantityAllowedDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviseQuantityAllowed'
        ),
        'safePaymentRequired' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SafePaymentRequiredDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SafePaymentRequired'
        ),
        'sellerContactDetailsEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerContactDetailsEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerContactDetailsEnabled'
        ),
        'sellerProvidedTitleSupported' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerProvidedTitleSupportedDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerProvidedTitleSupported'
        ),
        'shippingProfileCategoryGroup' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProfileCategoryGroupDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingProfileCategoryGroup'
        ),
        'shippingTermsRequired' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingTermRequiredDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingTermsRequired'
        ),
        'skypeMeNonTransactionalEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SkypeMeNonTransactionalEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SkypeMeNonTransactionalEnabled'
        ),
        'skypeMeTransactionalEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SkypeMeTransactionalEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SkypeMeTransactionalEnabled'
        ),
        'specialitySubscription' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SpecialitySubscriptionDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SpecialitySubscription'
        ),
        'storeInventoryEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreInventoryEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreInventoryEnabled'
        ),
        'storeOwnerExtendedListingDurations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreOwnerExtendedListingDurations'
        ),
        'storeOwnerExtendedListingDurationsEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreOwnerExtendedListingDurationsEnabled'
        ),
        'transactionConfirmationRequestEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TCREnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionConfirmationRequestEnabled'
        ),
        'upciDentifierEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UPCIdentifierEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UPCIdentifierEnabled'
        ),
        'userConsentRequired' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UserConsentRequiredDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserConsentRequired'
        ),
        'valueCategory' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ValueCategoryDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ValueCategory'
        ),
        'valuePackEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ValuePackEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ValuePackEnabled'
        ),
        'variationsEnabled' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VariationsEnabledDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationsEnabled'
        ),
        'vinsUpported' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VINSupportedDefinitionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VINSupported'
        ),
        'vrmsUpported' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VRMSupportedDefinitionType',
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
