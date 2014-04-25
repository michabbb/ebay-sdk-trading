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
 * @property string $applicationData
 * @property DTS\eBaySDK\Trading\Types\BuyerProtectionDetailsType $applyBuyerProtection
 * @property DTS\eBaySDK\Trading\Types\AttributeArrayType $attributeArray
 * @property DTS\eBaySDK\Trading\Types\AttributeSetArrayType $attributeSetArray
 * @property boolean $autoPay
 * @property DTS\eBaySDK\Trading\Types\BestOfferDetailsType $bestOfferDetails
 * @property DTS\eBaySDK\Trading\Types\BiddingDetailsType $biddingDetails
 * @property DTS\eBaySDK\Trading\Types\BusinessSellerDetailsType $businessSellerDetails
 * @property DTS\eBaySDK\Trading\Types\AmountType $buyItNowPrice
 * @property DTS\eBaySDK\Trading\Types\AmountType $buyerGuaranteePrice
 * @property DTS\eBaySDK\Trading\Types\BuyerProtectionCodeType(string) $buyerProtection
 * @property DTS\eBaySDK\Trading\Types\BuyerRequirementDetailsType $buyerRequirementDetails
 * @property boolean $buyerResponsibleForShipping
 * @property boolean $categoryBasedAttributesPrefill
 * @property boolean $categoryMappingAllowed
 * @property DTS\eBaySDK\Trading\Types\AmountType $ceilingPrice
 * @property DTS\eBaySDK\Trading\Types\CharityType $charity
 * @property string $conditionDescription
 * @property string $conditionDisplayName
 * @property integer $conditionId
 * @property DTS\eBaySDK\Trading\Types\CountryCodeType(string) $country
 * @property string $crossBorderTrade
 * @property DTS\eBaySDK\Trading\Types\CrossPromotionsType $crossPromotion
 * @property DTS\eBaySDK\Trading\Types\CurrencyCodeType(string) $currency
 * @property string $description
 * @property DTS\eBaySDK\Trading\Types\DescriptionReviseModeCodeType(string) $descriptionReviseMode
 * @property boolean $disableBuyerRequirements
 * @property DTS\eBaySDK\Trading\Types\DiscountPriceInfoType $discountPriceInfo
 * @property integer $dispatchTimeMax
 * @property string $eBayNotes
 * @property boolean $eBayNowEligible
 * @property DTS\eBaySDK\Trading\Types\ExtendedContactDetailsType $extendedSellerContactDetails
 * @property DTS\eBaySDK\Trading\Types\ExternalProductIDType $externalProductId
 * @property DTS\eBaySDK\Trading\Types\AmountType $floorPrice
 * @property DTS\eBaySDK\Trading\Types\CategoryType $freeAddedCategory
 * @property boolean $getItFast
 * @property integer $giftIcon
 * @property DTS\eBaySDK\Trading\Types\GiftServicesCodeType(string) $giftServices
 * @property boolean $hideFromSearch
 * @property integer $hitCount
 * @property DTS\eBaySDK\Trading\Types\HitCounterCodeType(string) $hitCounter
 * @property boolean $includeRecommendations
 * @property boolean $integratedMerchantCreditCardEnabled
 * @property DTS\eBaySDK\Trading\Types\InventoryTrackingMethodCodeType(string) $inventoryTrackingMethod
 * @property boolean $isIntermediatedShippingEligible
 * @property integer $itemCompatibilityCount
 * @property DTS\eBaySDK\Trading\Types\ItemCompatibilityListType $itemCompatibilityList
 * @property DTS\eBaySDK\Trading\Types\ItemIDType(string) $itemId
 * @property DTS\eBaySDK\Trading\Types\ItemPolicyViolationType $itemPolicyViolation
 * @property DTS\eBaySDK\Trading\Types\NameValueListArrayType $itemSpecifics
 * @property integer $leadCount
 * @property DTS\eBaySDK\Trading\Types\ListingCheckoutRedirectPreferenceType $listingCheckoutRedirectPreference
 * @property DTS\eBaySDK\Trading\Types\ListingDesignerType $listingDesigner
 * @property DTS\eBaySDK\Trading\Types\ListingDetailsType $listingDetails
 * @property string $listingDuration
 * @property DTS\eBaySDK\Trading\Types\ListingEnhancementsCodeType(string) $listingEnhancement
 * @property DTS\eBaySDK\Trading\Types\ListingSubtypeCodeType(string) $listingSubtype2
 * @property DTS\eBaySDK\Trading\Types\ListingTypeCodeType(string) $listingType
 * @property string $location
 * @property boolean $locationDefaulted
 * @property DTS\eBaySDK\Trading\Types\LookupAttributeArrayType $lookupAttributeArray
 * @property integer $lotSize
 * @property boolean $mechanicalCheckAccepted
 * @property boolean $motorsGermanySearchable
 * @property integer $newLeadCount
 * @property boolean $outOfStockControl
 * @property string $partnerCode
 * @property string $partnerName
 * @property string $payPalEmailAddress
 * @property DTS\eBaySDK\Trading\Types\SiteCodeType(string) $paymentAllowedSite
 * @property DTS\eBaySDK\Trading\Types\PaymentDetailsType $paymentDetails
 * @property DTS\eBaySDK\Trading\Types\BuyerPaymentMethodCodeType(string) $paymentMethods
 * @property DTS\eBaySDK\Trading\Types\PickupInStoreDetailsType $pickupInStoreDetails
 * @property DTS\eBaySDK\Trading\Types\PictureDetailsType $pictureDetails
 * @property boolean $postCheckoutExperienceEnabled
 * @property string $postalCode
 * @property DTS\eBaySDK\Trading\Types\CategoryType $primaryCategory
 * @property boolean $privateListing
 * @property string $privateNotes
 * @property DTS\eBaySDK\Trading\Types\ProductListingDetailsType $productListingDetails
 * @property boolean $proxyItem
 * @property integer $quantity
 * @property integer $quantityAvailable
 * @property DTS\eBaySDK\Trading\Types\QuantityAvailableHintCodeType(string) $quantityAvailableHint
 * @property DTS\eBaySDK\Trading\Types\QuantityInfoType $quantityInfo
 * @property DTS\eBaySDK\Trading\Types\QuantityRestrictionPerBuyerInfoType $quantityRestrictionPerBuyer
 * @property integer $quantityThreshold
 * @property integer $questionCount
 * @property DTS\eBaySDK\Trading\Types\ReasonHideFromSearchCodeType(string) $reasonHideFromSearch
 * @property string $regionId
 * @property boolean $relistLink
 * @property integer $relistParentId
 * @property boolean $relisted
 * @property DTS\eBaySDK\Trading\Types\AmountType $reservePrice
 * @property DTS\eBaySDK\Trading\Types\ReturnPolicyType $returnPolicy
 * @property DTS\eBaySDK\Trading\Types\ReviseStatusType $reviseStatus
 * @property DateTime $scheduleTime
 * @property DTS\eBaySDK\Trading\Types\SearchDetailsType $searchDetails
 * @property DTS\eBaySDK\Trading\Types\CategoryType $secondaryCategory
 * @property DTS\eBaySDK\Trading\Types\UserType $seller
 * @property DTS\eBaySDK\Trading\Types\AddressType $sellerContactDetails
 * @property string $sellerInventoryId
 * @property DTS\eBaySDK\Trading\Types\SellerProfilesType $sellerProfiles
 * @property string $sellerProvidedTitle
 * @property string $sellerVacationNote
 * @property DTS\eBaySDK\Trading\Types\SellingStatusType $sellingStatus
 * @property string $shipToLocations
 * @property DTS\eBaySDK\Trading\Types\ShippingDetailsType $shippingDetails
 * @property DTS\eBaySDK\Trading\Types\ShipPackageDetailsType $shippingPackageDetails
 * @property DTS\eBaySDK\Trading\Types\ShippingServiceCostOverrideListType $shippingServiceCostOverrideList
 * @property boolean $shippingTermsInDescription
 * @property DTS\eBaySDK\Trading\Types\SiteCodeType(string) $site
 * @property DTS\eBaySDK\Trading\Types\SKUType(string) $sku
 * @property DTS\eBaySDK\Trading\Types\SkypeContactOptionCodeType(string) $skypeContactOption
 * @property boolean $skypeEnabled
 * @property string $skypeId
 * @property DTS\eBaySDK\Trading\Types\AmountType $startPrice
 * @property DTS\eBaySDK\Trading\Types\StorefrontType $storefront
 * @property string $subTitle
 * @property string $taxCategory
 * @property string $timeLeft
 * @property string $title
 * @property boolean $topRatedListing
 * @property integer $totalQuestionCount
 * @property DTS\eBaySDK\Trading\Types\UnitInfoType $unitInfo
 * @property boolean $updateReturnPolicy
 * @property boolean $updateSellerInfo
 * @property boolean $useRecommendedProduct
 * @property boolean $useTaxTable
 * @property DTS\eBaySDK\Trading\Types\UUIDType(string) $uuid
 * @property DTS\eBaySDK\Trading\Types\VariationsType $variations
 * @property DTS\eBaySDK\Trading\Types\VATDetailsType $vatdEtails
 * @property string $vin
 * @property string $vinlInk
 * @property string $vrm
 * @property string $vrmlInk
 * @property integer $watchCount
 */
class ItemType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'applicationData' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ApplicationData'
        ),
        'applyBuyerProtection' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerProtectionDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ApplyBuyerProtection'
        ),
        'attributeArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AttributeArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AttributeArray'
        ),
        'attributeSetArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AttributeSetArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AttributeSetArray'
        ),
        'autoPay' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AutoPay'
        ),
        'bestOfferDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BestOfferDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferDetails'
        ),
        'biddingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BiddingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BiddingDetails'
        ),
        'businessSellerDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BusinessSellerDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BusinessSellerDetails'
        ),
        'buyItNowPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowPrice'
        ),
        'buyerGuaranteePrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteePrice'
        ),
        'buyerProtection' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerProtection'
        ),
        'buyerRequirementDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerRequirementDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerRequirementDetails'
        ),
        'buyerResponsibleForShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerResponsibleForShipping'
        ),
        'categoryBasedAttributesPrefill' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryBasedAttributesPrefill'
        ),
        'categoryMappingAllowed' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryMappingAllowed'
        ),
        'ceilingPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CeilingPrice'
        ),
        'charity' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CharityType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Charity'
        ),
        'conditionDescription' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionDescription'
        ),
        'conditionDisplayName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionDisplayName'
        ),
        'conditionId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionID'
        ),
        'country' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Country'
        ),
        'crossBorderTrade' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'CrossBorderTrade'
        ),
        'crossPromotion' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CrossPromotionsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossPromotion'
        ),
        'currency' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Currency'
        ),
        'description' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ),
        'descriptionReviseMode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DescriptionReviseMode'
        ),
        'disableBuyerRequirements' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisableBuyerRequirements'
        ),
        'discountPriceInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DiscountPriceInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DiscountPriceInfo'
        ),
        'dispatchTimeMax' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DispatchTimeMax'
        ),
        'eBayNotes' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayNotes'
        ),
        'eBayNowEligible' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayNowEligible'
        ),
        'extendedSellerContactDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ExtendedContactDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExtendedSellerContactDetails'
        ),
        'externalProductId' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ExternalProductIDType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalProductID'
        ),
        'floorPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FloorPrice'
        ),
        'freeAddedCategory' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CategoryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FreeAddedCategory'
        ),
        'getItFast' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GetItFast'
        ),
        'giftIcon' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GiftIcon'
        ),
        'giftServices' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'GiftServices'
        ),
        'hideFromSearch' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HideFromSearch'
        ),
        'hitCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HitCount'
        ),
        'hitCounter' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HitCounter'
        ),
        'includeRecommendations' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeRecommendations'
        ),
        'integratedMerchantCreditCardEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ),
        'inventoryTrackingMethod' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InventoryTrackingMethod'
        ),
        'isIntermediatedShippingEligible' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IsIntermediatedShippingEligible'
        ),
        'itemCompatibilityCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityCount'
        ),
        'itemCompatibilityList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemCompatibilityListType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityList'
        ),
        'itemId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ),
        'itemPolicyViolation' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemPolicyViolationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemPolicyViolation'
        ),
        'itemSpecifics' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\NameValueListArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecifics'
        ),
        'leadCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LeadCount'
        ),
        'listingCheckoutRedirectPreference' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingCheckoutRedirectPreferenceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingCheckoutRedirectPreference'
        ),
        'listingDesigner' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingDesignerType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingDesigner'
        ),
        'listingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingDetails'
        ),
        'listingDuration' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingDuration'
        ),
        'listingEnhancement' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ListingEnhancement'
        ),
        'listingSubtype2' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingSubtype2'
        ),
        'listingType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingType'
        ),
        'location' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Location'
        ),
        'locationDefaulted' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocationDefaulted'
        ),
        'lookupAttributeArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\LookupAttributeArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LookupAttributeArray'
        ),
        'lotSize' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LotSize'
        ),
        'mechanicalCheckAccepted' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MechanicalCheckAccepted'
        ),
        'motorsGermanySearchable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MotorsGermanySearchable'
        ),
        'newLeadCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NewLeadCount'
        ),
        'outOfStockControl' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OutOfStockControl'
        ),
        'partnerCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PartnerCode'
        ),
        'partnerName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PartnerName'
        ),
        'payPalEmailAddress' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalEmailAddress'
        ),
        'paymentAllowedSite' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentAllowedSite'
        ),
        'paymentDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaymentDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentDetails'
        ),
        'paymentMethods' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
        ),
        'pickupInStoreDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PickupInStoreDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PickupInStoreDetails'
        ),
        'pictureDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PictureDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PictureDetails'
        ),
        'postCheckoutExperienceEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PostCheckoutExperienceEnabled'
        ),
        'postalCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PostalCode'
        ),
        'primaryCategory' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CategoryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategory'
        ),
        'privateListing' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrivateListing'
        ),
        'privateNotes' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrivateNotes'
        ),
        'productListingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProductListingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductListingDetails'
        ),
        'proxyItem' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProxyItem'
        ),
        'quantity' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ),
        'quantityAvailable' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityAvailable'
        ),
        'quantityAvailableHint' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityAvailableHint'
        ),
        'quantityInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\QuantityInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityInfo'
        ),
        'quantityRestrictionPerBuyer' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\QuantityRestrictionPerBuyerInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityRestrictionPerBuyer'
        ),
        'quantityThreshold' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityThreshold'
        ),
        'questionCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuestionCount'
        ),
        'reasonHideFromSearch' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReasonHideFromSearch'
        ),
        'regionId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegionID'
        ),
        'relistLink' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RelistLink'
        ),
        'relistParentId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RelistParentID'
        ),
        'relisted' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Relisted'
        ),
        'reservePrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReservePrice'
        ),
        'returnPolicy' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ReturnPolicyType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicy'
        ),
        'reviseStatus' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ReviseStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviseStatus'
        ),
        'scheduleTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ScheduleTime'
        ),
        'searchDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SearchDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SearchDetails'
        ),
        'secondaryCategory' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CategoryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategory'
        ),
        'seller' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Seller'
        ),
        'sellerContactDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerContactDetails'
        ),
        'sellerInventoryId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerInventoryID'
        ),
        'sellerProfiles' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerProfilesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerProfiles'
        ),
        'sellerProvidedTitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerProvidedTitle'
        ),
        'sellerVacationNote' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerVacationNote'
        ),
        'sellingStatus' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellingStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingStatus'
        ),
        'shipToLocations' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShipToLocations'
        ),
        'shippingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ),
        'shippingPackageDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShipPackageDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingPackageDetails'
        ),
        'shippingServiceCostOverrideList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingServiceCostOverrideListType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCostOverrideList'
        ),
        'shippingTermsInDescription' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingTermsInDescription'
        ),
        'site' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Site'
        ),
        'sku' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ),
        'skypeContactOption' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SkypeContactOption'
        ),
        'skypeEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SkypeEnabled'
        ),
        'skypeId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SkypeID'
        ),
        'startPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StartPrice'
        ),
        'storefront' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StorefrontType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Storefront'
        ),
        'subTitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SubTitle'
        ),
        'taxCategory' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TaxCategory'
        ),
        'timeLeft' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TimeLeft'
        ),
        'title' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Title'
        ),
        'topRatedListing' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TopRatedListing'
        ),
        'totalQuestionCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalQuestionCount'
        ),
        'unitInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UnitInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnitInfo'
        ),
        'updateReturnPolicy' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpdateReturnPolicy'
        ),
        'updateSellerInfo' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpdateSellerInfo'
        ),
        'useRecommendedProduct' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UseRecommendedProduct'
        ),
        'useTaxTable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UseTaxTable'
        ),
        'uuid' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UUID'
        ),
        'variations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VariationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Variations'
        ),
        'vatdEtails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VATDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATDetails'
        ),
        'vin' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VIN'
        ),
        'vinlInk' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VINLink'
        ),
        'vrm' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VRM'
        ),
        'vrmlInk' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VRMLink'
        ),
        'watchCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WatchCount'
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
