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
class PickupStatusCodeType
{
    const CUSTOM_CODE = 'CustomCode';
    const INVALID = 'Invalid';
    const NOT_APPLICABLE = 'NotApplicable';
    const PENDING_MERCHANT_CONFIRMATION = 'PendingMerchantConfirmation';
    const PICKEDUP = 'Pickedup';
    const PICKUP_CANCELLED = 'PickupCancelled';
    const PICKUP_CANCELLED_BUYER_NO_SHOW = 'PickupCancelledBuyerNoShow';
    const PICKUP_CANCELLED_BUYER_REJECTED = 'PickupCancelledBuyerRejected';
    const PICKUP_CANCELLED_OUT_OF_STOCK = 'PickupCancelledOutOfStock';
    const READY_TO_PICKUP = 'ReadyToPickup';
}
