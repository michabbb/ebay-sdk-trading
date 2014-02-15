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
 * @property string $additionalInformation
 * @property DTS\eBaySDK\Trading\Types\AddressType $address
 * @property boolean $answer1
 * @property boolean $answer2
 * @property string $bestTimeToCall
 * @property string $email
 * @property string $externalEmail
 * @property boolean $financingAnswer
 * @property DTS\eBaySDK\Trading\Types\ItemIDType(string) $itemId
 * @property string $itemTitle
 * @property DTS\eBaySDK\Trading\Types\AmountType $leadFee
 * @property DTS\eBaySDK\Trading\Types\MemberMessageExchangeArrayType $memberMessage
 * @property string $purchaseTimeFrame
 * @property DTS\eBaySDK\Trading\Types\AdFormatLeadStatusCodeType(string) $status
 * @property DateTime $submittedTime
 * @property string $tradeInMake
 * @property string $tradeInModel
 * @property string $tradeInYear
 * @property DTS\eBaySDK\Trading\Types\UserIDType(string) $userId
 */
class AdFormatLeadType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'additionalInformation' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdditionalInformation'
        ),
        'address' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Address'
        ),
        'answer1' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Answer1'
        ),
        'answer2' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Answer2'
        ),
        'bestTimeToCall' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestTimeToCall'
        ),
        'email' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Email'
        ),
        'externalEmail' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalEmail'
        ),
        'financingAnswer' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FinancingAnswer'
        ),
        'itemId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ),
        'itemTitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemTitle'
        ),
        'leadFee' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LeadFee'
        ),
        'memberMessage' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MemberMessageExchangeArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MemberMessage'
        ),
        'purchaseTimeFrame' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PurchaseTimeFrame'
        ),
        'status' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ),
        'submittedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SubmittedTime'
        ),
        'tradeInMake' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TradeInMake'
        ),
        'tradeInModel' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TradeInModel'
        ),
        'tradeInYear' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TradeInYear'
        ),
        'userId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserID'
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
