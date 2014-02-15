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
class GalleryStatusCodeType
{
    const CUSTOM_CODE = 'CustomCode';
    const IMAGE_NON_EXISTENT = 'ImageNonExistent';
    const IMAGE_PROCESSING_ERROR = 'ImageProcessingError';
    const IMAGE_READ_TIME_OUT = 'ImageReadTimeOut';
    const INVALID_FILE = 'InvalidFile';
    const INVALID_FILE_FORMAT = 'InvalidFileFormat';
    const INVALID_PROTOCOL = 'InvalidProtocol';
    const INVALID_URL = 'InvalidUrl';
    const PENDING = 'Pending';
    const SERVER_DOWN = 'ServerDown';
    const SUCCESS = 'Success';
}
