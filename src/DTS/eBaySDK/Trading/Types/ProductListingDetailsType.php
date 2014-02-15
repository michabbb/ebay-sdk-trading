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
 * @property DTS\eBaySDK\Trading\Types\BrandMPNType $brandMpn
 * @property string $copyright
 * @property string $detailsUrl
 * @property string $ean
 * @property string $gtin
 * @property boolean $includePrefilledItemInformation
 * @property boolean $includeStockPhotoUrl
 * @property string $isbn
 * @property boolean $listIfNoProduct
 * @property string $productDetailsUrl
 * @property string $productId
 * @property string $productReferenceId
 * @property boolean $returnSearchResultOnDuplicates
 * @property string $stockPhotoUrl
 * @property DTS\eBaySDK\Trading\Types\TicketListingDetailsType $ticketListingDetails
 * @property string $upc
 * @property boolean $useFirstProduct
 * @property boolean $useStockPhotoUrlaSGallery
 */
class ProductListingDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'brandMpn' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BrandMPNType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BrandMPN'
        ),
        'copyright' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'Copyright'
        ),
        'detailsUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DetailsURL'
        ),
        'ean' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EAN'
        ),
        'gtin' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GTIN'
        ),
        'includePrefilledItemInformation' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludePrefilledItemInformation'
        ),
        'includeStockPhotoUrl' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeStockPhotoURL'
        ),
        'isbn' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ISBN'
        ),
        'listIfNoProduct' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListIfNoProduct'
        ),
        'productDetailsUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductDetailsURL'
        ),
        'productId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductID'
        ),
        'productReferenceId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductReferenceID'
        ),
        'returnSearchResultOnDuplicates' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnSearchResultOnDuplicates'
        ),
        'stockPhotoUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StockPhotoURL'
        ),
        'ticketListingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TicketListingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TicketListingDetails'
        ),
        'upc' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UPC'
        ),
        'useFirstProduct' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UseFirstProduct'
        ),
        'useStockPhotoUrlaSGallery' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UseStockPhotoURLAsGallery'
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
