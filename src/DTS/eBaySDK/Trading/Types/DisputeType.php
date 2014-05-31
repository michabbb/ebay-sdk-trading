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
 * @property string $buyerUserId
 * @property DateTime $disputeCreatedTime
 * @property DTS\eBaySDK\Trading\Enums\DisputeCreditEligibilityCodeType(string) $disputeCreditEligibility
 * @property DTS\eBaySDK\Trading\Enums\DisputeExplanationCodeType(string) $disputeExplanation
 * @property string $disputeId
 * @property DTS\eBaySDK\Trading\Types\DisputeMessageType $disputeMessage
 * @property DateTime $disputeModifiedTime
 * @property DTS\eBaySDK\Trading\Enums\DisputeReasonCodeType(string) $disputeReason
 * @property DTS\eBaySDK\Trading\Enums\DisputeRecordTypeCodeType(string) $disputeRecordType
 * @property DTS\eBaySDK\Trading\Types\DisputeResolutionType $disputeResolution
 * @property DTS\eBaySDK\Trading\Enums\DisputeStateCodeType(string) $disputeState
 * @property DTS\eBaySDK\Trading\Enums\DisputeStatusCodeType(string) $disputeStatus
 * @property boolean $escalation
 * @property DTS\eBaySDK\Trading\Types\ItemType $item
 * @property string $orderLineItemId
 * @property string $otherPartyName
 * @property DTS\eBaySDK\Trading\Enums\TradingRoleCodeType(string) $otherPartyRole
 * @property boolean $purchaseProtection
 * @property string $sellerUserId
 * @property string $transactionId
 * @property DTS\eBaySDK\Trading\Enums\TradingRoleCodeType(string) $userRole
 */
class DisputeType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'buyerUserId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerUserID'
        ),
        'disputeCreatedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisputeCreatedTime'
        ),
        'disputeCreditEligibility' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisputeCreditEligibility'
        ),
        'disputeExplanation' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisputeExplanation'
        ),
        'disputeId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisputeID'
        ),
        'disputeMessage' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DisputeMessageType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'DisputeMessage'
        ),
        'disputeModifiedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisputeModifiedTime'
        ),
        'disputeReason' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisputeReason'
        ),
        'disputeRecordType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisputeRecordType'
        ),
        'disputeResolution' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DisputeResolutionType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'DisputeResolution'
        ),
        'disputeState' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisputeState'
        ),
        'disputeStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisputeStatus'
        ),
        'escalation' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Escalation'
        ),
        'item' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Item'
        ),
        'orderLineItemId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
        ),
        'otherPartyName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OtherPartyName'
        ),
        'otherPartyRole' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OtherPartyRole'
        ),
        'purchaseProtection' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PurchaseProtection'
        ),
        'sellerUserId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerUserID'
        ),
        'transactionId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionID'
        ),
        'userRole' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserRole'
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
