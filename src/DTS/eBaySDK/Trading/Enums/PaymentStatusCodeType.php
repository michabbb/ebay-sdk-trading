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
class PaymentStatusCodeType
{
    const BUYERE_CHECK_BOUNCED = 'BuyerECheckBounced';
    const BUYER_CREDIT_CARD_FAILED = 'BuyerCreditCardFailed';
    const BUYER_FAILED_PAYMENT_REPORTED_BY_SELLER = 'BuyerFailedPaymentReportedBySeller';
    const CUSTOM_CODE = 'CustomCode';
    const NO_PAYMENT_FAILURE = 'NoPaymentFailure';
    const PAYMENT_IN_PROCESS = 'PaymentInProcess';
    const PAY_PAL_PAYMENT_IN_PROCESS = 'PayPalPaymentInProcess';
}
