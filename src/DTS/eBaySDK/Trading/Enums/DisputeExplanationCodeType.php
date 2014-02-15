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
class DisputeExplanationCodeType
{
    const BUYER_HAS_NOT_RESPONDED = 'BuyerHasNotResponded';
    const BUYER_NOT_CLEARED_TO_PAY = 'BuyerNotClearedToPay';
    const BUYER_NOT_PAID = 'BuyerNotPaid';
    const BUYER_NO_LONGER_REGISTERED = 'BuyerNoLongerRegistered';
    const BUYER_NO_LONGER_WANTS_ITEM = 'BuyerNoLongerWantsItem';
    const BUYER_PAYMENT_NOT_RECEIVED_OR_CLEARED = 'BuyerPaymentNotReceivedOrCleared';
    const BUYER_PURCHASING_MISTAKE = 'BuyerPurchasingMistake';
    const BUYER_REFUSED_TO_PAY = 'BuyerRefusedToPay';
    const BUYER_RETURNED_ITEM_FOR_REFUND = 'BuyerReturnedItemForRefund';
    const CUSTOM_CODE = 'CustomCode';
    const OTHER_EXPLANATION = 'OtherExplanation';
    const PAYMENT_METHOD_NOT_SUPPORTED = 'PaymentMethodNotSupported';
    const SELLER_DOESNT_SHIP_TO_COUNTRY = 'SellerDoesntShipToCountry';
    const SELLER_RAN_OUT_OF_STOCK = 'SellerRanOutOfStock';
    const SHIPPING_ADDRESS_NOT_CONFIRMED = 'ShippingAddressNotConfirmed';
    const SHIP_COUNTRY_NOT_SUPPORTED = 'ShipCountryNotSupported';
    const UNABLE_TO_RESOLVE_TERMS = 'UnableToResolveTerms';
    const UNSPECIFIED = 'Unspecified';
    const UPI_ASSISTANCE = 'UPIAssistance';
    const UPI_ASSISTANCE_DISABLED = 'UPIAssistanceDisabled';
}
