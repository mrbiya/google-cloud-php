<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START monitoring_v3_generated_NotificationChannelService_UpdateNotificationChannel_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Monitoring\V3\NotificationChannel;
use Google\Cloud\Monitoring\V3\NotificationChannelServiceClient;

/**
 * Updates a notification channel. Fields not specified in the field mask
 * remain unchanged.
 *
 * Design your application to single-thread API calls that modify the state of
 * notification channels in a single project. This includes calls to
 * CreateNotificationChannel, DeleteNotificationChannel and
 * UpdateNotificationChannel.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function update_notification_channel_sample(): void
{
    // Create a client.
    $notificationChannelServiceClient = new NotificationChannelServiceClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $notificationChannel = new NotificationChannel();

    // Call the API and handle any network failures.
    try {
        /** @var NotificationChannel $response */
        $response = $notificationChannelServiceClient->updateNotificationChannel($notificationChannel);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}
// [END monitoring_v3_generated_NotificationChannelService_UpdateNotificationChannel_sync]
