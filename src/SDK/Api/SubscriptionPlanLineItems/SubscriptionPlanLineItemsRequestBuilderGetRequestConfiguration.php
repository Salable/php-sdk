<?php

namespace Salable\SDK\Api\SubscriptionPlanLineItems;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubscriptionPlanLineItemsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SubscriptionPlanLineItemsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubscriptionPlanLineItemsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SubscriptionPlanLineItemsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubscriptionPlanLineItemsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubscriptionPlanLineItemsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SubscriptionPlanLineItemsRequestBuilderGetQueryParameters.
     * @param string|null $after Return records after this cursor for forward pagination. Use the `nextCursor` from a previous response.
     * @param string|null $before Return records before this cursor for backwards pagination. Use the `previousCursor` from a previous response.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param array<string>|null $subscriptionPlans Accepts a comma-separated list of up to 100 subscription plan IDs. Returns line items linked to any of the specified subscription plans.
     * @return SubscriptionPlanLineItemsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?int $limit = null, ?array $subscriptionPlans = null): SubscriptionPlanLineItemsRequestBuilderGetQueryParameters {
        return new SubscriptionPlanLineItemsRequestBuilderGetQueryParameters($after, $before, $limit, $subscriptionPlans);
    }

}
