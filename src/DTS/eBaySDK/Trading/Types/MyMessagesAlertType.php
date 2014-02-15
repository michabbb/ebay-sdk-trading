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
 * @property string $actionUrl
 * @property DTS\eBaySDK\Trading\Types\MyMessagesAlertIDType(string) $alertId
 * @property string $contentType
 * @property DateTime $creationDate
 * @property DateTime $expirationDate
 * @property string $externalAlertId
 * @property DTS\eBaySDK\Trading\Types\MyMessagesFolderType $folder
 * @property DTS\eBaySDK\Trading\Types\MyMessagesForwardDetailsType $forwardDetails
 * @property boolean $isTimedResolution
 * @property DTS\eBaySDK\Trading\Types\ItemIDType(string) $itemId
 * @property DateTime $lastReadDate
 * @property string $priority
 * @property boolean $read
 * @property DateTime $receiveDate
 * @property string $recipientUserId
 * @property DateTime $resolutionDate
 * @property DTS\eBaySDK\Trading\Types\MyMessagesAlertResolutionStatusCode(string) $resolutionStatus
 * @property DTS\eBaySDK\Trading\Types\MyMessagesResponseDetailsType $responseDetails
 * @property string $sender
 * @property string $subject
 * @property string $text
 */
class MyMessagesAlertType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'actionUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ActionURL'
        ),
        'alertId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AlertID'
        ),
        'contentType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ContentType'
        ),
        'creationDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CreationDate'
        ),
        'expirationDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpirationDate'
        ),
        'externalAlertId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalAlertID'
        ),
        'folder' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MyMessagesFolderType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Folder'
        ),
        'forwardDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MyMessagesForwardDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ForwardDetails'
        ),
        'isTimedResolution' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IsTimedResolution'
        ),
        'itemId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ),
        'lastReadDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LastReadDate'
        ),
        'priority' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Priority'
        ),
        'read' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Read'
        ),
        'receiveDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReceiveDate'
        ),
        'recipientUserId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RecipientUserID'
        ),
        'resolutionDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ResolutionDate'
        ),
        'resolutionStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ResolutionStatus'
        ),
        'responseDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MyMessagesResponseDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ResponseDetails'
        ),
        'sender' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Sender'
        ),
        'subject' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Subject'
        ),
        'text' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Text'
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
