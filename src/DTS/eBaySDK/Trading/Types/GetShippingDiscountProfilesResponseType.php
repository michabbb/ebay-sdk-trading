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
 * @property DTS\eBaySDK\Trading\Types\CalculatedHandlingDiscountType $calculatedHandlingDiscount
 * @property DTS\eBaySDK\Trading\Types\CalculatedShippingDiscountType $calculatedShippingDiscount
 * @property DTS\eBaySDK\Trading\Enums\CombinedPaymentPeriodCodeType(string) $combinedDuration
 * @property DTS\eBaySDK\Trading\Enums\CurrencyCodeType(string) $currencyId
 * @property DTS\eBaySDK\Trading\Types\FlatShippingDiscountType $flatShippingDiscount
 * @property DTS\eBaySDK\Trading\Types\ShippingInsuranceType $internationalShippingInsurance
 * @property boolean $promotionalShippingDiscount
 * @property DTS\eBaySDK\Trading\Types\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails
 * @property DTS\eBaySDK\Trading\Types\ShippingInsuranceType $shippingInsurance
 */
class GetShippingDiscountProfilesResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'calculatedHandlingDiscount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CalculatedHandlingDiscountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CalculatedHandlingDiscount'
        ),
        'calculatedShippingDiscount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CalculatedShippingDiscountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CalculatedShippingDiscount'
        ),
        'combinedDuration' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CombinedDuration'
        ),
        'currencyId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CurrencyID'
        ),
        'flatShippingDiscount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FlatShippingDiscountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FlatShippingDiscount'
        ),
        'internationalShippingInsurance' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingInsuranceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalShippingInsurance'
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
        'shippingInsurance' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingInsuranceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingInsurance'
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
