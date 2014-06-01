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
 * @property integer $declinedRterEquestCount
 * @property integer $docsForCcpRocessingToSendCount
 * @property integer $feedbackToReceiveCount
 * @property integer $feedbackToSendCount
 * @property integer $itemReceiptConfirmationToReceiveCount
 * @property integer $itemReceiptToConfirmCount
 * @property integer $outbidCount
 * @property integer $paymentToReceiveCount
 * @property integer $paymentToSendCount
 * @property integer $pendingRterEquestCount
 * @property integer $refundCancelledCount
 * @property integer $refundInitiatedCount
 * @property integer $refundOnHoldCount
 * @property integer $relistingNeededCount
 * @property integer $rtetOProcessCount
 * @property integer $secondChanceOfferCount
 * @property integer $shippingDetailsToBeProvidedCount
 * @property integer $shippingNeededCount
 * @property integer $totalNewLeadsCount
 */
class RemindersType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'declinedRterEquestCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeclinedRTERequestCount'
        ),
        'docsForCcpRocessingToSendCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DocsForCCProcessingToSendCount'
        ),
        'feedbackToReceiveCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackToReceiveCount'
        ),
        'feedbackToSendCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackToSendCount'
        ),
        'itemReceiptConfirmationToReceiveCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemReceiptConfirmationToReceiveCount'
        ),
        'itemReceiptToConfirmCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemReceiptToConfirmCount'
        ),
        'outbidCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OutbidCount'
        ),
        'paymentToReceiveCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentToReceiveCount'
        ),
        'paymentToSendCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentToSendCount'
        ),
        'pendingRterEquestCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PendingRTERequestCount'
        ),
        'refundCancelledCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundCancelledCount'
        ),
        'refundInitiatedCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundInitiatedCount'
        ),
        'refundOnHoldCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundOnHoldCount'
        ),
        'relistingNeededCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RelistingNeededCount'
        ),
        'rtetOProcessCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RTEToProcessCount'
        ),
        'secondChanceOfferCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondChanceOfferCount'
        ),
        'shippingDetailsToBeProvidedCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetailsToBeProvidedCount'
        ),
        'shippingNeededCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingNeededCount'
        ),
        'totalNewLeadsCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalNewLeadsCount'
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
