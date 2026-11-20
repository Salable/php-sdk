<?php

namespace Salable\SDK\Api\Grantees\Batch;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Salable\SDK\Models\BatchCreateGranteesRequestSchema2;
use Salable\SDK\Models\BatchCreateGranteesResponseSchema;
use Salable\SDK\Models\ErrorResponseBody;

/**
 * Builds and executes requests for operations under /api/grantees/batch
*/
class BatchRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new BatchRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/grantees/batch');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Creates up to 500 grantees in a single request. Duplicate granteeIds in the request, grantees that already exist in the organisation, and grantees created concurrently are skipped. For repeated request entries, the first occurrence is used for creation.
     * @param array<BatchCreateGranteesRequestSchema2> $body The request body
     * @param BatchRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BatchCreateGranteesResponseSchema|null>
     * @throws Exception
    */
    public function post(array $body, ?BatchRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '401' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '403' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '404' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '405' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '429' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BatchCreateGranteesResponseSchema::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Creates up to 500 grantees in a single request. Duplicate granteeIds in the request, grantees that already exist in the organisation, and grantees created concurrently are skipped. For repeated request entries, the first occurrence is used for creation.
     * @param array<BatchCreateGranteesRequestSchema2> $body The request body
     * @param BatchRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(array $body, ?BatchRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsableCollection($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return BatchRequestBuilder
    */
    public function withUrl(string $rawUrl): BatchRequestBuilder {
        return new BatchRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
