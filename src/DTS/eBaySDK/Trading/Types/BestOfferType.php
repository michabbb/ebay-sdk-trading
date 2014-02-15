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
 * @property DTS\eBaySDK\Trading\Types\BestOfferTypeCodeType(string) $bestOfferCodeType
 * @property DTS\eBaySDK\Trading\Types\BestOfferIDType(string) $bestOfferId
 * @property DTS\eBaySDK\Trading\Types\UserType $buyer
 * @property string $buyerMessage
 * @property string $callStatus
 * @property DateTime $expirationTime
 * @property boolean $immediatePayEligible
 * @property boolean $newBestOffer
 * @property DTS\eBaySDK\Trading\Types\AmountType $price
 * @property integer $quantity
 * @property string $sellerMessage
 * @property DTS\eBaySDK\Trading\Types\BestOfferStatusCodeType(string) $status
 */
class BestOfferType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'bestOfferCodeType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferCodeType'
        ),
        'bestOfferId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferID'
        ),
        'buyer' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Buyer'
        ),
        'buyerMessage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerMessage'
        ),
        'callStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CallStatus'
        ),
        'expirationTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpirationTime'
        ),
        'immediatePayEligible' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ImmediatePayEligible'
        ),
        'newBestOffer' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NewBestOffer'
        ),
        'price' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Price'
        ),
        'quantity' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ),
        'sellerMessage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerMessage'
        ),
        'status' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Status'
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
