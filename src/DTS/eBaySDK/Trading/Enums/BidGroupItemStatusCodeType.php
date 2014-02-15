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
class BidGroupItemStatusCodeType
{
    const CANCELLED = 'Cancelled';
    const CURRENT_BID = 'CurrentBid';
    const CUSTOM_CODE = 'CustomCode';
    const ENDED = 'Ended';
    const GROUP_CLOSED = 'GroupClosed';
    const PENDING = 'Pending';
    const SKIPPED = 'Skipped';
    const WON = 'Won';
}
