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
class DisputeResolutionRecordTypeCodeType
{
    const APPEAL_BUYER_STRIKE = 'AppealBuyerStrike';
    const CUSTOM_CODE = 'CustomCode';
    const FEATURE_FEE_CREDIT = 'FeatureFeeCredit';
    const FEATURE_FEE_NOT_CREDIT = 'FeatureFeeNotCredit';
    const FVF_CREDIT = 'FVFCredit';
    const FVF_CREDIT_NOT_GRANTED = 'FVFCreditNotGranted';
    const FVF_ON_SHIPPING_CREDIT = 'FVFOnShippingCredit';
    const FVF_ON_SHIPPING_CREDIT_NOT_GRANTED = 'FVFOnShippingCreditNotGranted';
    const GENERATECS_TICKET_FOR_SUSPEND = 'GenerateCSTicketForSuspend';
    const INSERTION_FEE_CREDIT = 'InsertionFeeCredit';
    const ITEM_NOT_RECEIVED_CLAIM_FILED = 'ItemNotReceivedClaimFiled';
    const RESTRICT_BUYER = 'RestrictBuyer';
    const REVERSEFVF_CREDIT = 'ReverseFVFCredit';
    const REVERSEFVF_ON_SHIPPING_CREDIT = 'ReverseFVFOnShippingCredit';
    const REVERSE_FEATURE_FEE_CREDIT = 'ReverseFeatureFeeCredit';
    const REVERSE_INSERTION_FEE_CREDIT = 'ReverseInsertionFeeCredit';
    const STRIKE_BUYER = 'StrikeBuyer';
    const SUSPEND_BUYER = 'SuspendBuyer';
    const UNPAID_ITEM_RELISTED = 'UnpaidItemRelisted';
    const UNPAID_ITEM_REVISED = 'UnpaidItemRevised';
    const UNRESTRICT_BUYER = 'UnrestrictBuyer';
    const UNSUSPEND_BUYER = 'UnsuspendBuyer';
}
