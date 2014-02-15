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
class CharitySellerStatusCodeType
{
    const CLOSED = 'Closed';
    const CREDIT_CARD_ABOUT_TO_EXPIRE = 'CreditCardAboutToExpire';
    const CREDIT_CARD_EXPIRED = 'CreditCardExpired';
    const CUSTOM_CODE = 'CustomCode';
    const DIRECT_DEBIT_REJECTED = 'DirectDebitRejected';
    const NOT_REGISTERED_LOST_DIRECT_SELLER_STATUS = 'NotRegisteredLostDirectSellerStatus';
    const REGISTERED = 'Registered';
    const REGISTERED_DIRECT_SELLER = 'RegisteredDirectSeller';
    const REGISTERED_NO_CREDIT_CARD = 'RegisteredNoCreditCard';
    const REGISTERED_NO_PAYMENT_METHOD = 'RegisteredNoPaymentMethod';
    const SUSPENDED = 'Suspended';
    const TOKEN_EXPIRED = 'TokenExpired';
}
