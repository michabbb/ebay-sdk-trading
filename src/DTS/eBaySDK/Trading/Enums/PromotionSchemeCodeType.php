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
class PromotionSchemeCodeType
{
    const CATEGORY_PROXIMITY = 'CategoryProximity';
    const CUSTOM_CODE = 'CustomCode';
    const DEFAULT_CROSS_SELL_LOGIC = 'DefaultCrossSellLogic';
    const DEFAULT_RULE = 'DefaultRule';
    const DEFAULT_UP_SELL_LOGIC = 'DefaultUpSellLogic';
    const ITEM_TO_DEFAULT_RULE = 'ItemToDefaultRule';
    const ITEM_TO_ITEM = 'ItemToItem';
    const ITEM_TO_STORE_CAT = 'ItemToStoreCat';
    const RELATED_CATEGORY_RULE = 'RelatedCategoryRule';
    const STORE_TO_STORE_CAT = 'StoreToStoreCat';
}
