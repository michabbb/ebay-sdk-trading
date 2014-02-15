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
 * @property string $addressId
 * @property DTS\eBaySDK\Trading\Types\AddressOwnerCodeType(string) $addressOwner
 * @property DTS\eBaySDK\Trading\Types\AddressRecordTypeCodeType(string) $addressRecordType
 * @property DTS\eBaySDK\Trading\Types\AddressStatusCodeType(string) $addressStatus
 * @property DTS\eBaySDK\Trading\Types\AddressUsageCodeType(string) $addressUsage
 * @property string $cityName
 * @property string $companyName
 * @property DTS\eBaySDK\Trading\Types\CountryCodeType(string) $country
 * @property string $countryName
 * @property string $county
 * @property string $externalAddressId
 * @property string $firstName
 * @property string $internationalName
 * @property string $internationalStateAndCity
 * @property string $internationalStreet
 * @property string $lastName
 * @property string $name
 * @property string $phone
 * @property string $phone2
 * @property string $phone2AreaOrCityCode
 * @property DTS\eBaySDK\Trading\Types\CountryCodeType(string) $phone2CountryCode
 * @property string $phone2CountryPrefix
 * @property string $phone2LocalNumber
 * @property string $phoneAreaOrCityCode
 * @property DTS\eBaySDK\Trading\Types\CountryCodeType(string) $phoneCountryCode
 * @property string $phoneCountryPrefix
 * @property string $phoneLocalNumber
 * @property string $postalCode
 * @property string $referenceId
 * @property string $stateOrProvince
 * @property string $street
 * @property string $street1
 * @property string $street2
 */
class AddressType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'addressId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AddressID'
        ),
        'addressOwner' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AddressOwner'
        ),
        'addressRecordType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AddressRecordType'
        ),
        'addressStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AddressStatus'
        ),
        'addressUsage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AddressUsage'
        ),
        'cityName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CityName'
        ),
        'companyName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CompanyName'
        ),
        'country' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Country'
        ),
        'countryName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CountryName'
        ),
        'county' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'County'
        ),
        'externalAddressId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalAddressID'
        ),
        'firstName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FirstName'
        ),
        'internationalName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalName'
        ),
        'internationalStateAndCity' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalStateAndCity'
        ),
        'internationalStreet' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalStreet'
        ),
        'lastName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LastName'
        ),
        'name' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Name'
        ),
        'phone' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Phone'
        ),
        'phone2' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Phone2'
        ),
        'phone2AreaOrCityCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Phone2AreaOrCityCode'
        ),
        'phone2CountryCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Phone2CountryCode'
        ),
        'phone2CountryPrefix' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Phone2CountryPrefix'
        ),
        'phone2LocalNumber' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Phone2LocalNumber'
        ),
        'phoneAreaOrCityCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PhoneAreaOrCityCode'
        ),
        'phoneCountryCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PhoneCountryCode'
        ),
        'phoneCountryPrefix' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PhoneCountryPrefix'
        ),
        'phoneLocalNumber' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PhoneLocalNumber'
        ),
        'postalCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PostalCode'
        ),
        'referenceId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReferenceID'
        ),
        'stateOrProvince' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StateOrProvince'
        ),
        'street' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Street'
        ),
        'street1' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Street1'
        ),
        'street2' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Street2'
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
