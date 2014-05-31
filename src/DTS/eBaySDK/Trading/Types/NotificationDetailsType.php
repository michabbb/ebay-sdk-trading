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
 * @property DTS\eBaySDK\Trading\Enums\NotificationEventStateCodeType(string) $deliveryStatus
 * @property DateTime $deliveryTime
 * @property string $deliveryUrl
 * @property string $deliveryUrlnAme
 * @property string $errorMessage
 * @property DateTime $expirationTime
 * @property DateTime $nextRetryTime
 * @property string $referenceId
 * @property integer $retries
 * @property DTS\eBaySDK\Trading\Enums\NotificationEventTypeCodeType(string) $type
 */
class NotificationDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'deliveryStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeliveryStatus'
        ),
        'deliveryTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeliveryTime'
        ),
        'deliveryUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeliveryURL'
        ),
        'deliveryUrlnAme' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeliveryURLName'
        ),
        'errorMessage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ErrorMessage'
        ),
        'expirationTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpirationTime'
        ),
        'nextRetryTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NextRetryTime'
        ),
        'referenceId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReferenceID'
        ),
        'retries' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Retries'
        ),
        'type' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Type'
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
