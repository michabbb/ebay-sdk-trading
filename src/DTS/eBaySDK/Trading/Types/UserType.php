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
 * @property boolean $aboutMePage
 * @property DTS\eBaySDK\Trading\Types\BiddingSummaryType $biddingSummary
 * @property string $billingEmail
 * @property DTS\eBaySDK\Trading\Enums\BusinessRoleType(string) $businessRole
 * @property DTS\eBaySDK\Trading\Types\BuyerType $buyerInfo
 * @property DTS\eBaySDK\Trading\Types\CharityAffiliationsType $charityAffiliations
 * @property boolean $eBayGoodStanding
 * @property boolean $eBayWikiReadOnly
 * @property string $eiastOken
 * @property string $email
 * @property boolean $enterpriseSeller
 * @property boolean $feedbackPrivate
 * @property DTS\eBaySDK\Trading\Enums\FeedbackRatingStarCodeType(string) $feedbackRatingStar
 * @property integer $feedbackScore
 * @property boolean $idvErified
 * @property boolean $motorsDealer
 * @property boolean $newUser
 * @property DTS\eBaySDK\Trading\Enums\PayPalAccountLevelCodeType(string) $payPalAccountLevel
 * @property DTS\eBaySDK\Trading\Enums\PayPalAccountStatusCodeType(string) $payPalAccountStatus
 * @property DTS\eBaySDK\Trading\Enums\PayPalAccountTypeCodeType(string) $payPalAccountType
 * @property double $positiveFeedbackPercent
 * @property boolean $qualifiesForSelling
 * @property DTS\eBaySDK\Trading\Types\AddressType $registrationAddress
 * @property DateTime $registrationDate
 * @property DTS\eBaySDK\Trading\Types\SellerType $sellerInfo
 * @property DTS\eBaySDK\Trading\Types\AddressType $shippingAddress
 * @property DTS\eBaySDK\Trading\Enums\SiteCodeType(string) $site
 * @property boolean $siteVerified
 * @property string $skypeId
 * @property string $staticAlias
 * @property DTS\eBaySDK\Trading\Enums\UserStatusCodeType(string) $status
 * @property integer $tuvlEvel
 * @property integer $uniqueNegativeFeedbackCount
 * @property integer $uniqueNeutralFeedbackCount
 * @property integer $uniquePositiveFeedbackCount
 * @property boolean $userAnonymized
 * @property string $userId
 * @property boolean $userIdcHanged
 * @property DateTime $userIdlAstChanged
 * @property DTS\eBaySDK\Trading\Enums\EBaySubscriptionTypeCodeType(string) $userSubscription
 * @property string $vatid
 * @property DTS\eBaySDK\Trading\Enums\VATStatusCodeType(string) $vatsTatus
 */
class UserType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'aboutMePage' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AboutMePage'
        ),
        'biddingSummary' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BiddingSummaryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BiddingSummary'
        ),
        'billingEmail' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BillingEmail'
        ),
        'businessRole' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BusinessRole'
        ),
        'buyerInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerInfo'
        ),
        'charityAffiliations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CharityAffiliationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CharityAffiliations'
        ),
        'eBayGoodStanding' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayGoodStanding'
        ),
        'eBayWikiReadOnly' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayWikiReadOnly'
        ),
        'eiastOken' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EIASToken'
        ),
        'email' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Email'
        ),
        'enterpriseSeller' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EnterpriseSeller'
        ),
        'feedbackPrivate' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackPrivate'
        ),
        'feedbackRatingStar' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackRatingStar'
        ),
        'feedbackScore' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackScore'
        ),
        'idvErified' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IDVerified'
        ),
        'motorsDealer' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MotorsDealer'
        ),
        'newUser' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NewUser'
        ),
        'payPalAccountLevel' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalAccountLevel'
        ),
        'payPalAccountStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalAccountStatus'
        ),
        'payPalAccountType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalAccountType'
        ),
        'positiveFeedbackPercent' => array(
            'type' => 'double',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PositiveFeedbackPercent'
        ),
        'qualifiesForSelling' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QualifiesForSelling'
        ),
        'registrationAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegistrationAddress'
        ),
        'registrationDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegistrationDate'
        ),
        'sellerInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerInfo'
        ),
        'shippingAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ),
        'site' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Site'
        ),
        'siteVerified' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SiteVerified'
        ),
        'skypeId' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SkypeID'
        ),
        'staticAlias' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StaticAlias'
        ),
        'status' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ),
        'tuvlEvel' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TUVLevel'
        ),
        'uniqueNegativeFeedbackCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UniqueNegativeFeedbackCount'
        ),
        'uniqueNeutralFeedbackCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UniqueNeutralFeedbackCount'
        ),
        'uniquePositiveFeedbackCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UniquePositiveFeedbackCount'
        ),
        'userAnonymized' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserAnonymized'
        ),
        'userId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserID'
        ),
        'userIdcHanged' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserIDChanged'
        ),
        'userIdlAstChanged' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserIDLastChanged'
        ),
        'userSubscription' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'UserSubscription'
        ),
        'vatid' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATID'
        ),
        'vatsTatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATStatus'
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
