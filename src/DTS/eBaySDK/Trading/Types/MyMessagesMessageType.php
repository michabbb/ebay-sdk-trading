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
 * @property string $content
 * @property string $contentType
 * @property DateTime $creationDate
 * @property DateTime $expirationDate
 * @property string $externalMessageId
 * @property boolean $flagged
 * @property DTS\eBaySDK\Trading\Types\MyMessagesFolderType $folder
 * @property DTS\eBaySDK\Trading\Types\MyMessagesForwardDetailsType $forwardDetails
 * @property boolean $highPriority
 * @property DateTime $itemEndTime
 * @property string $itemId
 * @property string $itemTitle
 * @property DTS\eBaySDK\Trading\Enums\ListingStatusCodeType(string) $listingStatus
 * @property string $messageId
 * @property DTS\eBaySDK\Trading\Types\MessageMediaType $messageMedia
 * @property DTS\eBaySDK\Trading\Enums\MessageTypeCodeType(string) $messageType
 * @property DTS\eBaySDK\Trading\Enums\QuestionTypeCodeType(string) $questionType
 * @property boolean $read
 * @property DateTime $receiveDate
 * @property string $recipientUserId
 * @property boolean $replied
 * @property DTS\eBaySDK\Trading\Types\MyMessagesResponseDetailsType $responseDetails
 * @property string $sendToName
 * @property string $sender
 * @property string $subject
 * @property string $text
 */
class MyMessagesMessageType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'content' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Content'
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
        'externalMessageId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalMessageID'
        ),
        'flagged' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Flagged'
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
        'highPriority' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HighPriority'
        ),
        'itemEndTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemEndTime'
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
        'listingStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingStatus'
        ),
        'messageId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MessageID'
        ),
        'messageMedia' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MessageMediaType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'MessageMedia'
        ),
        'messageType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MessageType'
        ),
        'questionType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuestionType'
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
        'replied' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Replied'
        ),
        'responseDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MyMessagesResponseDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ResponseDetails'
        ),
        'sendToName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SendToName'
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
