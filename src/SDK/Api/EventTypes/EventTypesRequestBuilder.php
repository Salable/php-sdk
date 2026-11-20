<?php

namespace Salable\SDK\Api\EventTypes;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Salable\SDK\Models\ErrorResponseBody;
use Salable\SDK\Models\GetEventTypeListSchema;

/**
 * Builds and executes requests for operations under /api/event-types
*/
class EventTypesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new EventTypesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/event-types{?after*,before*,limit*,webhook*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns a list of event types subscribed to by a webhook. They are sorted by `createdAt`, with the most recently created appearing first.
     * @param EventTypesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetEventTypeListSchema|null>
     * @throws Exception
    */
    public function get(?EventTypesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '401' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '403' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '404' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '405' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '429' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetEventTypeListSchema::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Returns a list of event types subscribed to by a webhook. They are sorted by `createdAt`, with the most recently created appearing first.
     * @param EventTypesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EventTypesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return EventTypesRequestBuilder
    */
    public function withUrl(string $rawUrl): EventTypesRequestBuilder {
        return new EventTypesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
