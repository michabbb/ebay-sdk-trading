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
class DisputeStateCodeType
{
    const BUYER_FIRST_RESPONSE_NO_PAY_OPTION = 'BuyerFirstResponseNoPayOption';
    const BUYER_FIRST_RESPONSE_NO_PAY_OPTION_LATE_RESPONSE = 'BuyerFirstResponseNoPayOptionLateResponse';
    const BUYER_FIRST_RESPONSE_PAY_OPTION = 'BuyerFirstResponsePayOption';
    const BUYER_FIRST_RESPONSE_PAY_OPTION_LATE_RESPONSE = 'BuyerFirstResponsePayOptionLateResponse';
    const CLAIM_CLOSED = 'ClaimClosed';
    const CLAIM_DENIED = 'ClaimDenied';
    const CLAIM_OPENED = 'ClaimOpened';
    const CLAIM_PAID = 'ClaimPaid';
    const CLAIM_PAYMENT_PENDING = 'ClaimPaymentPending';
    const CLAIM_PENDING = 'ClaimPending';
    const CLAIM_RESOLVED = 'ClaimResolved';
    const CLAIM_SUBMITTED = 'ClaimSubmitted';
    const CLOSED = 'Closed';
    const CUSTOM_CODE = 'CustomCode';
    const LOCKED = 'Locked';
    const MUTUAL_AGREEMENT_OR_BUYER_RETURNING_ITEM = 'MutualAgreementOrBuyerReturningItem';
    const MUTUAL_COMMUNICATION_NO_PAY_OPTION = 'MutualCommunicationNoPayOption';
    const MUTUAL_COMMUNICATION_PAY_OPTION = 'MutualCommunicationPayOption';
    const MUTUAL_WITHDRAWAL_AGREEMENT = 'MutualWithdrawalAgreement';
    const MUTUAL_WITHDRAWAL_AGREEMENT_LATE = 'MutualWithdrawalAgreementLate';
    const NOT_AS_DESCRIBED_MUTUAL_COMMUNICATION = 'NotAsDescribedMutualCommunication';
    const NOT_AS_DESCRIBED_NO_SELLER_RESPONSE = 'NotAsDescribedNoSellerResponse';
    const NOT_RECEIVED_MUTUAL_COMMUNICATION = 'NotReceivedMutualCommunication';
    const NOT_RECEIVED_NO_SELLER_RESPONSE = 'NotReceivedNoSellerResponse';
    const NO_DOCUMENTATION = 'NoDocumentation';
    const PENDING_RESOLVE = 'PendingResolve';
    const UNPAID_ITEM_OPEN = 'UnpaidItemOpen';
    const UPI_ASSISTANCE_DISABLED_BYE_BAY = 'UPIAssistanceDisabledByeBay';
    const UPI_ASSISTANCE_DISABLED_BY_SELLER = 'UPIAssistanceDisabledBySeller';
}
