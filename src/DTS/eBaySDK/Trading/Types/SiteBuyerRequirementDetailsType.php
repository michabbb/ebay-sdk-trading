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
 * @property string $detailVersion
 * @property boolean $linkedPayPalAccount
 * @property DTS\eBaySDK\Trading\Types\MaximumBuyerPolicyViolationsDetailsType $maximumBuyerPolicyViolations
 * @property DTS\eBaySDK\Trading\Types\MaximumItemRequirementsDetailsType $maximumItemRequirements
 * @property DTS\eBaySDK\Trading\Types\MaximumUnpaidItemStrikesInfoDetailsType $maximumUnpaidItemStrikesInfo
 * @property DTS\eBaySDK\Trading\Types\MinimumFeedbackScoreDetailsType $minimumFeedbackScore
 * @property boolean $shipToRegistrationCountry
 * @property DateTime $updateTime
 * @property DTS\eBaySDK\Trading\Types\VerifiedUserRequirementsDetailsType $verifiedUserRequirements
 */
class SiteBuyerRequirementDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'detailVersion' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DetailVersion'
        ),
        'linkedPayPalAccount' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LinkedPayPalAccount'
        ),
        'maximumBuyerPolicyViolations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaximumBuyerPolicyViolationsDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaximumBuyerPolicyViolations'
        ),
        'maximumItemRequirements' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaximumItemRequirementsDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaximumItemRequirements'
        ),
        'maximumUnpaidItemStrikesInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaximumUnpaidItemStrikesInfoDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaximumUnpaidItemStrikesInfo'
        ),
        'minimumFeedbackScore' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MinimumFeedbackScoreDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinimumFeedbackScore'
        ),
        'shipToRegistrationCountry' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipToRegistrationCountry'
        ),
        'updateTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpdateTime'
        ),
        'verifiedUserRequirements' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VerifiedUserRequirementsDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VerifiedUserRequirements'
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
