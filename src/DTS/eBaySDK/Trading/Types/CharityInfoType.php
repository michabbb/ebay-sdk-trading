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
 * @property integer $charityDomain
 * @property string $charityId
 * @property integer $charityRegion
 * @property string $description
 * @property boolean $displayLogoSelling
 * @property boolean $displayNameInCheckout
 * @property string $ein
 * @property string $externalId
 * @property string $id
 * @property string $listingNpcOntactName
 * @property string $listingNpeMail
 * @property boolean $listingNpeMailNotifPref
 * @property string $logoUrl
 * @property string $logoUrlsElling
 * @property string $mission
 * @property string $name
 * @property DTS\eBaySDK\Trading\Types\NonProfitAddressType $nonProfitAddress
 * @property string $nonProfitSecondName
 * @property DTS\eBaySDK\Trading\Types\NonProfitSocialAddressType $nonProfitSocialAddress
 * @property integer $popularityIndex
 * @property string $searchableString
 * @property boolean $showMultipleDonationAmountInCheckout
 * @property DTS\eBaySDK\Trading\Types\CharityStatusCodeType(string) $status
 */
class CharityInfoType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'charityDomain' => array(
            'type' => 'integer',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'CharityDomain'
        ),
        'charityId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CharityID'
        ),
        'charityRegion' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CharityRegion'
        ),
        'description' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ),
        'displayLogoSelling' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisplayLogoSelling'
        ),
        'displayNameInCheckout' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisplayNameInCheckout'
        ),
        'ein' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EIN'
        ),
        'externalId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalID'
        ),
        'id' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => true,
            'attributeName' => 'id'
        ),
        'listingNpcOntactName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingNPContactName'
        ),
        'listingNpeMail' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingNPEmail'
        ),
        'listingNpeMailNotifPref' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingNPEmailNotifPref'
        ),
        'logoUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LogoURL'
        ),
        'logoUrlsElling' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LogoURLSelling'
        ),
        'mission' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Mission'
        ),
        'name' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Name'
        ),
        'nonProfitAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\NonProfitAddressType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'NonProfitAddress'
        ),
        'nonProfitSecondName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NonProfitSecondName'
        ),
        'nonProfitSocialAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\NonProfitSocialAddressType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'NonProfitSocialAddress'
        ),
        'popularityIndex' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PopularityIndex'
        ),
        'searchableString' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SearchableString'
        ),
        'showMultipleDonationAmountInCheckout' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowMultipleDonationAmountInCheckout'
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
