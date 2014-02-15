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
class DisputeFilterTypeCodeType
{
    const ALL_INVOLVED_CLOSED_DISPUTES = 'AllInvolvedClosedDisputes';
    const ALL_INVOLVED_DISPUTES = 'AllInvolvedDisputes';
    const CUSTOM_CODE = 'CustomCode';
    const DISPUTES_AWAITING_MY_RESPONSE = 'DisputesAwaitingMyResponse';
    const DISPUTES_AWAITING_OTHER_PARTY_RESPONSE = 'DisputesAwaitingOtherPartyResponse';
    const ELIGIBLE_FOR_CREDIT = 'EligibleForCredit';
    const ITEM_NOT_RECEIVED_DISPUTES = 'ItemNotReceivedDisputes';
    const UNPAID_ITEM_DISPUTES = 'UnpaidItemDisputes';
}
