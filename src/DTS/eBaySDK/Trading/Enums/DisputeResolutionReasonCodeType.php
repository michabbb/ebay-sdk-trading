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

namespace DTS\eBaySDK\Trading\Enums;

/**
 *
 */
class DisputeResolutionReasonCodeType
{
    const BUYER_PAID_AUCTION_FEES = 'BuyerPaidAuctionFees';
    const CAME_TO_AGREEMENT = 'CameToAgreement';
    const CLAIM_PAID = 'ClaimPaid';
    const COMPUTER_TECHNICAL_PROBLEM = 'ComputerTechnicalProblem';
    const CUSTOM_CODE = 'CustomCode';
    const FAMILY_EMERGENCY = 'FamilyEmergency';
    const FIRST_INFRACTION = 'FirstInfraction';
    const ITEM_RETURNED = 'ItemReturned';
    const NO_CONTACT = 'NoContact';
    const OTHER_RESOLUTION = 'OtherResolution';
    const PROOF_GIVEN_IN_FEEDBACK = 'ProofGivenInFeedback';
    const PROOF_OF_PAYMENT = 'ProofOfPayment';
    const SELLER_RECEIVED_PAYMENT = 'SellerReceivedPayment';
    const UNRESOLVED = 'Unresolved';
}
