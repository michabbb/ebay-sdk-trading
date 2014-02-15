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
 * @property boolean $allowPaymentEdit
 * @property boolean $applyShippingDiscount
 * @property DTS\eBaySDK\Trading\Types\CalculatedShippingDiscountType $calculatedShippingDiscount
 * @property DTS\eBaySDK\Trading\Types\CalculatedShippingRateType $calculatedShippingRate
 * @property boolean $changePaymentInstructions
 * @property DTS\eBaySDK\Trading\Types\AmountType $codcOst
 * @property DTS\eBaySDK\Trading\Types\AmountType $defaultShippingCost
 * @property string $excludeShipToLocation
 * @property DTS\eBaySDK\Trading\Types\FlatShippingDiscountType $flatShippingDiscount
 * @property boolean $getItFast
 * @property boolean $globalShipping
 * @property DTS\eBaySDK\Trading\Types\InsuranceDetailsType $insuranceDetails
 * @property DTS\eBaySDK\Trading\Types\AmountType $insuranceFee
 * @property DTS\eBaySDK\Trading\Types\InsuranceOptionCodeType(string) $insuranceOption
 * @property boolean $insuranceWanted
 * @property DTS\eBaySDK\Trading\Types\CalculatedShippingDiscountType $internationalCalculatedShippingDiscount
 * @property DTS\eBaySDK\Trading\Types\FlatShippingDiscountType $internationalFlatShippingDiscount
 * @property DTS\eBaySDK\Trading\Types\InsuranceDetailsType $internationalInsuranceDetails
 * @property boolean $internationalPromotionalShippingDiscount
 * @property string $internationalShippingDiscountProfileId
 * @property DTS\eBaySDK\Trading\Types\InternationalShippingServiceOptionsType $internationalShippingServiceOption
 * @property boolean $paymentEdited
 * @property string $paymentInstructions
 * @property boolean $promotionalShippingDiscount
 * @property DTS\eBaySDK\Trading\Types\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails
 * @property DTS\eBaySDK\Trading\Types\RateTableDetailsType $rateTableDetails
 * @property DTS\eBaySDK\Trading\Types\SalesTaxType $salesTax
 * @property boolean $sellerExcludeShipToLocationsPreference
 * @property integer $sellingManagerSalesRecordNumber
 * @property DTS\eBaySDK\Trading\Types\ShipmentTrackingDetailsType $shipmentTrackingDetails
 * @property string $shippingDiscountProfileId
 * @property string $shippingRateErrorMessage
 * @property DTS\eBaySDK\Trading\Types\ShippingRateTypeCodeType(string) $shippingRateType
 * @property DTS\eBaySDK\Trading\Types\ShippingServiceOptionsType $shippingServiceOptions
 * @property string $shippingServiceUsed
 * @property DTS\eBaySDK\Trading\Types\ShippingTypeCodeType(string) $shippingType
 * @property DTS\eBaySDK\Trading\Types\TaxTableType $taxTable
 * @property boolean $thirdPartyCheckout
 */
class ShippingDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'allowPaymentEdit' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AllowPaymentEdit'
        ),
        'applyShippingDiscount' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ApplyShippingDiscount'
        ),
        'calculatedShippingDiscount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CalculatedShippingDiscountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CalculatedShippingDiscount'
        ),
        'calculatedShippingRate' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CalculatedShippingRateType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CalculatedShippingRate'
        ),
        'changePaymentInstructions' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ChangePaymentInstructions'
        ),
        'codcOst' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CODCost'
        ),
        'defaultShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DefaultShippingCost'
        ),
        'excludeShipToLocation' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ExcludeShipToLocation'
        ),
        'flatShippingDiscount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FlatShippingDiscountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FlatShippingDiscount'
        ),
        'getItFast' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GetItFast'
        ),
        'globalShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GlobalShipping'
        ),
        'insuranceDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\InsuranceDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuranceDetails'
        ),
        'insuranceFee' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuranceFee'
        ),
        'insuranceOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuranceOption'
        ),
        'insuranceWanted' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuranceWanted'
        ),
        'internationalCalculatedShippingDiscount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CalculatedShippingDiscountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalCalculatedShippingDiscount'
        ),
        'internationalFlatShippingDiscount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FlatShippingDiscountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalFlatShippingDiscount'
        ),
        'internationalInsuranceDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\InsuranceDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalInsuranceDetails'
        ),
        'internationalPromotionalShippingDiscount' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalPromotionalShippingDiscount'
        ),
        'internationalShippingDiscountProfileId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalShippingDiscountProfileID'
        ),
        'internationalShippingServiceOption' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\InternationalShippingServiceOptionsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'InternationalShippingServiceOption'
        ),
        'paymentEdited' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentEdited'
        ),
        'paymentInstructions' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentInstructions'
        ),
        'promotionalShippingDiscount' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PromotionalShippingDiscount'
        ),
        'promotionalShippingDiscountDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PromotionalShippingDiscountDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PromotionalShippingDiscountDetails'
        ),
        'rateTableDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RateTableDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RateTableDetails'
        ),
        'salesTax' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SalesTaxType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SalesTax'
        ),
        'sellerExcludeShipToLocationsPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerExcludeShipToLocationsPreference'
        ),
        'sellingManagerSalesRecordNumber' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerSalesRecordNumber'
        ),
        'shipmentTrackingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShipmentTrackingDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShipmentTrackingDetails'
        ),
        'shippingDiscountProfileId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingDiscountProfileID'
        ),
        'shippingRateErrorMessage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingRateErrorMessage'
        ),
        'shippingRateType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingRateType'
        ),
        'shippingServiceOptions' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingServiceOptionsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingServiceOptions'
        ),
        'shippingServiceUsed' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceUsed'
        ),
        'shippingType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingType'
        ),
        'taxTable' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TaxTableType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TaxTable'
        ),
        'thirdPartyCheckout' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ThirdPartyCheckout'
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
