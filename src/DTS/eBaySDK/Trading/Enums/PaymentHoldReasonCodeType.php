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
class PaymentHoldReasonCodeType
{
    const BELOW_STANDARD_SELLER = 'BelowStandardSeller';
    const CASUAL_SELLER = 'CasualSeller';
    const CUSTOM_CODE = 'CustomCode';
    const EBP_CASE_OPEN = 'EbpCaseOpen';
    const NEW_PAYPAL_ACCOUNT_ADDED = 'NewPaypalAccountAdded';
    const NEW_SELLER = 'NewSeller';
    const NONE = 'None';
    const NOT_AVAILABLE = 'NotAvailable';
    const OTHER = 'Other';
    const REINSTATEMENT_AFTER_SUSPENSION = 'ReinstatementAfterSuspension';
    const SELLER_IS_ON_BLACK_LIST = 'SellerIsOnBlackList';
}
