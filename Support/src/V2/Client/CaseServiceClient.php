<?php
/*
 * Copyright 2023 Google LLC
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
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/support/v2/case_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Support\V2\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Support\V2\CloseCaseRequest;
use Google\Cloud\Support\V2\CreateCaseRequest;
use Google\Cloud\Support\V2\EscalateCaseRequest;
use Google\Cloud\Support\V2\GetCaseRequest;
use Google\Cloud\Support\V2\ListCasesRequest;
use Google\Cloud\Support\V2\PBCase;
use Google\Cloud\Support\V2\SearchCaseClassificationsRequest;
use Google\Cloud\Support\V2\SearchCasesRequest;
use Google\Cloud\Support\V2\UpdateCaseRequest;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: A service to manage Google Cloud support cases.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This class is currently experimental and may be subject to changes.
 *
 * @experimental
 *
 * @method PromiseInterface closeCaseAsync(CloseCaseRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createCaseAsync(CreateCaseRequest $request, array $optionalArgs = [])
 * @method PromiseInterface escalateCaseAsync(EscalateCaseRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getCaseAsync(GetCaseRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listCasesAsync(ListCasesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface searchCaseClassificationsAsync(SearchCaseClassificationsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface searchCasesAsync(SearchCasesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateCaseAsync(UpdateCaseRequest $request, array $optionalArgs = [])
 */
final class CaseServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.support.v2.CaseService';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'cloudsupport.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/case_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/case_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/case_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/case_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a case
     * resource.
     *
     * @param string $organization
     * @param string $case
     *
     * @return string The formatted case resource.
     */
    public static function caseName(string $organization, string $case): string
    {
        return self::getPathTemplate('case')->render([
            'organization' => $organization,
            'case' => $case,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a organization
     * resource.
     *
     * @param string $organization
     *
     * @return string The formatted organization resource.
     */
    public static function organizationName(string $organization): string
    {
        return self::getPathTemplate('organization')->render([
            'organization' => $organization,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_case resource.
     *
     * @param string $organization
     * @param string $case
     *
     * @return string The formatted organization_case resource.
     */
    public static function organizationCaseName(string $organization, string $case): string
    {
        return self::getPathTemplate('organizationCase')->render([
            'organization' => $organization,
            'case' => $case,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     */
    public static function projectName(string $project): string
    {
        return self::getPathTemplate('project')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project_case
     * resource.
     *
     * @param string $project
     * @param string $case
     *
     * @return string The formatted project_case resource.
     */
    public static function projectCaseName(string $project, string $case): string
    {
        return self::getPathTemplate('projectCase')->render([
            'project' => $project,
            'case' => $case,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - case: organizations/{organization}/cases/{case}
     * - organization: organizations/{organization}
     * - organizationCase: organizations/{organization}/cases/{case}
     * - project: projects/{project}
     * - projectCase: projects/{project}/cases/{case}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'cloudsupport.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Close the specified case.
     *
     * The async variant is {@see CaseServiceClient::closeCaseAsync()} .
     *
     * @example samples/V2/CaseServiceClient/close_case.php
     *
     * @param CloseCaseRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PBCase
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function closeCase(CloseCaseRequest $request, array $callOptions = []): PBCase
    {
        return $this->startApiCall('CloseCase', $request, $callOptions)->wait();
    }

    /**
     * Create a new case and associate it with the given Google Cloud Resource.
     * The case object must have the following fields set: `display_name`,
     * `description`, `classification`, and `priority`.
     *
     * The async variant is {@see CaseServiceClient::createCaseAsync()} .
     *
     * @example samples/V2/CaseServiceClient/create_case.php
     *
     * @param CreateCaseRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PBCase
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createCase(CreateCaseRequest $request, array $callOptions = []): PBCase
    {
        return $this->startApiCall('CreateCase', $request, $callOptions)->wait();
    }

    /**
     * Escalate a case. Escalating a case will initiate the Google Cloud Support
     * escalation management process.
     *
     * This operation is only available to certain Customer Care tiers. Go to
     * https://cloud.google.com/support and look for 'Technical support
     * escalations' in the feature list to find out which tiers are able to
     * perform escalations.
     *
     * The async variant is {@see CaseServiceClient::escalateCaseAsync()} .
     *
     * @example samples/V2/CaseServiceClient/escalate_case.php
     *
     * @param EscalateCaseRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PBCase
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function escalateCase(EscalateCaseRequest $request, array $callOptions = []): PBCase
    {
        return $this->startApiCall('EscalateCase', $request, $callOptions)->wait();
    }

    /**
     * Retrieve the specified case.
     *
     * The async variant is {@see CaseServiceClient::getCaseAsync()} .
     *
     * @example samples/V2/CaseServiceClient/get_case.php
     *
     * @param GetCaseRequest $request     A request to house fields associated with the call.
     * @param array          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PBCase
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getCase(GetCaseRequest $request, array $callOptions = []): PBCase
    {
        return $this->startApiCall('GetCase', $request, $callOptions)->wait();
    }

    /**
     * Retrieve all cases under the specified parent.
     *
     * Note: Listing cases under an Organization returns only the cases directly
     * parented by that organization. To retrieve all cases under an organization,
     * including cases parented by projects under that organization, use
     * `cases.search`.
     *
     * The async variant is {@see CaseServiceClient::listCasesAsync()} .
     *
     * @example samples/V2/CaseServiceClient/list_cases.php
     *
     * @param ListCasesRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listCases(ListCasesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListCases', $request, $callOptions);
    }

    /**
     * Retrieve valid classifications to be used when creating a support case.
     * The classications are hierarchical, with each classification containing
     * all levels of the hierarchy, separated by " > ". For example "Technical
     * Issue > Compute > Compute Engine".
     *
     * The async variant is {@see CaseServiceClient::searchCaseClassificationsAsync()}
     * .
     *
     * @example samples/V2/CaseServiceClient/search_case_classifications.php
     *
     * @param SearchCaseClassificationsRequest $request     A request to house fields associated with the call.
     * @param array                            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function searchCaseClassifications(SearchCaseClassificationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('SearchCaseClassifications', $request, $callOptions);
    }

    /**
     * Search cases using the specified query.
     *
     * The async variant is {@see CaseServiceClient::searchCasesAsync()} .
     *
     * @example samples/V2/CaseServiceClient/search_cases.php
     *
     * @param SearchCasesRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function searchCases(SearchCasesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('SearchCases', $request, $callOptions);
    }

    /**
     * Update the specified case. Only a subset of fields can be updated.
     *
     * The async variant is {@see CaseServiceClient::updateCaseAsync()} .
     *
     * @example samples/V2/CaseServiceClient/update_case.php
     *
     * @param UpdateCaseRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PBCase
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateCase(UpdateCaseRequest $request, array $callOptions = []): PBCase
    {
        return $this->startApiCall('UpdateCase', $request, $callOptions)->wait();
    }
}
