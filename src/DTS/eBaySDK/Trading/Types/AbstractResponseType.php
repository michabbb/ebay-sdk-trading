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
 * @property \DTS\eBaySDK\Trading\Enums\AckCodeType(string) $Ack
 * @property \DTS\eBaySDK\Trading\Types\BotBlockResponseType $BotBlock
 * @property string $Build
 * @property string $CorrelationID
 * @property \DTS\eBaySDK\Trading\Types\DuplicateInvocationDetailsType $DuplicateInvocationDetails
 * @property string $EIASToken
 * @property \DTS\eBaySDK\Trading\Types\ErrorType $Errors
 * @property string $ExternalUserData
 * @property string $HardExpirationWarning
 * @property string $Message
 * @property string $NotificationEventName
 * @property string $NotificationSignature
 * @property string $RecipientUserID
 * @property \DateTime $Timestamp
 * @property string $Version
 */
class AbstractResponseType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'Ack' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Ack'
        ),
        'BotBlock' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BotBlockResponseType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BotBlock'
        ),
        'Build' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Build'
        ),
        'CorrelationID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CorrelationID'
        ),
        'DuplicateInvocationDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DuplicateInvocationDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DuplicateInvocationDetails'
        ),
        'EIASToken' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EIASToken'
        ),
        'Errors' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ErrorType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'Errors'
        ),
        'ExternalUserData' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalUserData'
        ),
        'HardExpirationWarning' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HardExpirationWarning'
        ),
        'Message' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Message'
        ),
        'NotificationEventName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NotificationEventName'
        ),
        'NotificationSignature' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NotificationSignature'
        ),
        'RecipientUserID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RecipientUserID'
        ),
        'Timestamp' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Timestamp'
        ),
        'Version' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Version'
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
