<?php

namespace Salable\SDK\Api\EventTypes;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EventTypesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EventTypesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EventTypesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EventTypesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EventTypesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EventTypesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EventTypesRequestBuilderGetQueryParameters.
     * @param string|null $after Return records after this cursor for forward pagination. Use the `nextCursor` from a previous response.
     * @param string|null $before Return records before this cursor for backwards pagination. Use the `previousCursor` from a previous response.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $webhook Returns only event types linked to this webhook ID.
     * @return EventTypesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?int $limit = null, ?string $webhook = null): EventTypesRequestBuilderGetQueryParameters {
        return new EventTypesRequestBuilderGetQueryParameters($after, $before, $limit, $webhook);
    }

}
