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
 * @property DateTime $deliveryDate
 * @property DTS\eBaySDK\Trading\Enums\ShipmentDeliveryStatusCodeType(string) $deliveryStatus
 * @property DateTime $estimatedDeliveryDate
 * @property DTS\eBaySDK\Trading\Types\AmountType $insuredValue
 * @property DTS\eBaySDK\Trading\Types\ItemTransactionIDType $itemTransactionId
 * @property string $notes
 * @property DTS\eBaySDK\Trading\Types\MeasureType $packageDepth
 * @property DTS\eBaySDK\Trading\Types\MeasureType $packageLength
 * @property DTS\eBaySDK\Trading\Types\MeasureType $packageWidth
 * @property string $payPalShipmentId
 * @property DTS\eBaySDK\Trading\Types\AmountType $postageTotal
 * @property DateTime $printedTime
 * @property DateTime $refundGrantedTime
 * @property DateTime $refundRequestedTime
 * @property DTS\eBaySDK\Trading\Types\AddressType $shipFromAddress
 * @property integer $shipmentId
 * @property DTS\eBaySDK\Trading\Types\ShipmentLineItemType $shipmentLineItem
 * @property DTS\eBaySDK\Trading\Types\ShipmentTrackingDetailsType $shipmentTrackingDetails
 * @property string $shipmentTrackingNumber
 * @property DateTime $shippedTime
 * @property DTS\eBaySDK\Trading\Types\AddressType $shippingAddress
 * @property string $shippingCarrierUsed
 * @property DTS\eBaySDK\Trading\Enums\ShippingFeatureCodeType(string) $shippingFeature
 * @property DTS\eBaySDK\Trading\Enums\ShippingPackageCodeType(string) $shippingPackage
 * @property string $shippingServiceUsed
 * @property DTS\eBaySDK\Trading\Enums\ShipmentStatusCodeType(string) $status
 * @property DTS\eBaySDK\Trading\Types\MeasureType $weightMajor
 * @property DTS\eBaySDK\Trading\Types\MeasureType $weightMinor
 */
class ShipmentType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'deliveryDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeliveryDate'
        ),
        'deliveryStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeliveryStatus'
        ),
        'estimatedDeliveryDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EstimatedDeliveryDate'
        ),
        'insuredValue' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuredValue'
        ),
        'itemTransactionId' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemTransactionIDType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ItemTransactionID'
        ),
        'notes' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Notes'
        ),
        'packageDepth' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PackageDepth'
        ),
        'packageLength' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PackageLength'
        ),
        'packageWidth' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PackageWidth'
        ),
        'payPalShipmentId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalShipmentID'
        ),
        'postageTotal' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PostageTotal'
        ),
        'printedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrintedTime'
        ),
        'refundGrantedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundGrantedTime'
        ),
        'refundRequestedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundRequestedTime'
        ),
        'shipFromAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipFromAddress'
        ),
        'shipmentId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipmentID'
        ),
        'shipmentLineItem' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShipmentLineItemType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipmentLineItem'
        ),
        'shipmentTrackingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShipmentTrackingDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShipmentTrackingDetails'
        ),
        'shipmentTrackingNumber' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipmentTrackingNumber'
        ),
        'shippedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
        ),
        'shippingAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ),
        'shippingCarrierUsed' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingCarrierUsed'
        ),
        'shippingFeature' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingFeature'
        ),
        'shippingPackage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingPackage'
        ),
        'shippingServiceUsed' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceUsed'
        ),
        'status' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ),
        'weightMajor' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WeightMajor'
        ),
        'weightMinor' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WeightMinor'
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
