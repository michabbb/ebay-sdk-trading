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
 * @property DateTime $estimatedRefundCompletionTime
 * @property string $externalReferenceId
 * @property DTS\eBaySDK\Trading\Types\AmountType $refundAmount
 * @property DateTime $refundCompletionTime
 * @property DTS\eBaySDK\Trading\Types\RefundFailureReasonType $refundFailureReason
 * @property DTS\eBaySDK\Trading\Types\AmountType $refundFromSeller
 * @property DTS\eBaySDK\Trading\Types\RefundFundingSourceArrayType $refundFundingSourceArray
 * @property string $refundId
 * @property DateTime $refundRequestedTime
 * @property DTS\eBaySDK\Trading\Enums\RefundStatusCodeType(string) $refundStatus
 * @property DateTime $refundTime
 * @property DTS\eBaySDK\Trading\Types\RefundTransactionArrayType $refundTransactionArray
 * @property string $sellerNoteToBuyer
 * @property DTS\eBaySDK\Trading\Types\AmountType $totalRefundToBuyer
 */
class RefundType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'estimatedRefundCompletionTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EstimatedRefundCompletionTime'
        ),
        'externalReferenceId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalReferenceID'
        ),
        'refundAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundAmount'
        ),
        'refundCompletionTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundCompletionTime'
        ),
        'refundFailureReason' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RefundFailureReasonType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundFailureReason'
        ),
        'refundFromSeller' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundFromSeller'
        ),
        'refundFundingSourceArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RefundFundingSourceArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundFundingSourceArray'
        ),
        'refundId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundID'
        ),
        'refundRequestedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundRequestedTime'
        ),
        'refundStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundStatus'
        ),
        'refundTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundTime'
        ),
        'refundTransactionArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RefundTransactionArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundTransactionArray'
        ),
        'sellerNoteToBuyer' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerNoteToBuyer'
        ),
        'totalRefundToBuyer' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalRefundToBuyer'
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
