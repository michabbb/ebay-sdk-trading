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
 * @property DTS\eBaySDK\Trading\Types\SiteBuyerRequirementDetailsType $buyerRequirementDetails
 * @property DTS\eBaySDK\Trading\Types\CountryDetailsType $countryDetails
 * @property DTS\eBaySDK\Trading\Types\CurrencyDetailsType $currencyDetails
 * @property DTS\eBaySDK\Trading\Types\DispatchTimeMaxDetailsType $dispatchTimeMaxDetails
 * @property DTS\eBaySDK\Trading\Types\ExcludeShippingLocationDetailsType $excludeShippingLocationDetails
 * @property DTS\eBaySDK\Trading\Types\ItemSpecificDetailsType $itemSpecificDetails
 * @property DTS\eBaySDK\Trading\Types\ListingFeatureDetailsType $listingFeatureDetails
 * @property DTS\eBaySDK\Trading\Types\ListingStartPriceDetailsType $listingStartPriceDetails
 * @property DTS\eBaySDK\Trading\Types\PaymentOptionDetailsType $paymentOptionDetails
 * @property DTS\eBaySDK\Trading\Types\RecoupmentPolicyDetailsType $recoupmentPolicyDetails
 * @property DTS\eBaySDK\Trading\Types\RegionDetailsType $regionDetails
 * @property DTS\eBaySDK\Trading\Types\RegionOfOriginDetailsType $regionOfOriginDetails
 * @property DTS\eBaySDK\Trading\Types\ReturnPolicyDetailsType $returnPolicyDetails
 * @property DTS\eBaySDK\Trading\Types\ShippingCarrierDetailsType $shippingCarrierDetails
 * @property DTS\eBaySDK\Trading\Types\ShippingCategoryDetailsType $shippingCategoryDetails
 * @property DTS\eBaySDK\Trading\Types\ShippingLocationDetailsType $shippingLocationDetails
 * @property DTS\eBaySDK\Trading\Types\ShippingPackageDetailsType $shippingPackageDetails
 * @property DTS\eBaySDK\Trading\Types\ShippingServiceDetailsType $shippingServiceDetails
 * @property DTS\eBaySDK\Trading\Types\SiteDetailsType $siteDetails
 * @property DTS\eBaySDK\Trading\Types\TaxJurisdictionType $taxJurisdiction
 * @property DTS\eBaySDK\Trading\Types\TimeZoneDetailsType $timeZoneDetails
 * @property DTS\eBaySDK\Trading\Types\UnitOfMeasurementDetailsType $unitOfMeasurementDetails
 * @property DateTime $updateTime
 * @property DTS\eBaySDK\Trading\Types\URLDetailsType $urldEtails
 * @property DTS\eBaySDK\Trading\Types\VariationDetailsType $variationDetails
 */
class GeteBayDetailsResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'buyerRequirementDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SiteBuyerRequirementDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'BuyerRequirementDetails'
        ),
        'countryDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CountryDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'CountryDetails'
        ),
        'currencyDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CurrencyDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'CurrencyDetails'
        ),
        'dispatchTimeMaxDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DispatchTimeMaxDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'DispatchTimeMaxDetails'
        ),
        'excludeShippingLocationDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ExcludeShippingLocationDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ExcludeShippingLocationDetails'
        ),
        'itemSpecificDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemSpecificDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ItemSpecificDetails'
        ),
        'listingFeatureDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingFeatureDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ListingFeatureDetails'
        ),
        'listingStartPriceDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingStartPriceDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ListingStartPriceDetails'
        ),
        'paymentOptionDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaymentOptionDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentOptionDetails'
        ),
        'recoupmentPolicyDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RecoupmentPolicyDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'RecoupmentPolicyDetails'
        ),
        'regionDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RegionDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'RegionDetails'
        ),
        'regionOfOriginDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RegionOfOriginDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'RegionOfOriginDetails'
        ),
        'returnPolicyDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ReturnPolicyDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicyDetails'
        ),
        'shippingCarrierDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingCarrierDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingCarrierDetails'
        ),
        'shippingCategoryDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingCategoryDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingCategoryDetails'
        ),
        'shippingLocationDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingLocationDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingLocationDetails'
        ),
        'shippingPackageDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingPackageDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingPackageDetails'
        ),
        'shippingServiceDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingServiceDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingServiceDetails'
        ),
        'siteDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SiteDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SiteDetails'
        ),
        'taxJurisdiction' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TaxJurisdictionType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'TaxJurisdiction'
        ),
        'timeZoneDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TimeZoneDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'TimeZoneDetails'
        ),
        'unitOfMeasurementDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UnitOfMeasurementDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'UnitOfMeasurementDetails'
        ),
        'updateTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpdateTime'
        ),
        'urldEtails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\URLDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'URLDetails'
        ),
        'variationDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VariationDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationDetails'
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
