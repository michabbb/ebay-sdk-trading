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
class PaidStatusCodeType
{
    const BUYER_HAS_NOT_COMPLETED_CHECKOUT = 'BuyerHasNotCompletedCheckout';
    const CUSTOM_CODE = 'CustomCode';
    const ESCROW_PAYMENT_CANCELLED = 'EscrowPaymentCancelled';
    const MARKED_AS_PAID = 'MarkedAsPaid';
    const NOT_PAID = 'NotPaid';
    const PAID = 'Paid';
    const PAIDCOD = 'PaidCOD';
    const PAID_WITH_ESCROW = 'PaidWithEscrow';
    const PAID_WITH_PAISA_PAY = 'PaidWithPaisaPay';
    const PAID_WITH_PAISA_PAY_ESCROW = 'PaidWithPaisaPayEscrow';
    const PAID_WITH_PAY_PAL = 'PaidWithPayPal';
    const PAISA_PAY_NOT_PAID = 'PaisaPayNotPaid';
    const PAYMENT_PENDING = 'PaymentPending';
    const PAYMENT_PENDING_WITH_ESCROW = 'PaymentPendingWithEscrow';
    const PAYMENT_PENDING_WITH_PAISA_PAY = 'PaymentPendingWithPaisaPay';
    const PAYMENT_PENDING_WITH_PAISA_PAY_ESCROW = 'PaymentPendingWithPaisaPayEscrow';
    const PAYMENT_PENDING_WITH_PAY_PAL = 'PaymentPendingWithPayPal';
    const REFUNDED = 'Refunded';
    const WAITING_FORCOD_PAYMENT = 'WaitingForCODPayment';
}
