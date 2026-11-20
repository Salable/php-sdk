<?php

namespace Salable\SDK\Api\SubscriptionPlanLineItems;

/**
 * Returns a list of subscription plan line items sorted by creation date, with the most recently created appearing first.
*/
class SubscriptionPlanLineItemsRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $after Return records after this cursor for forward pagination. Use the `nextCursor` from a previous response.
    */
    public ?string $after = null;
    
    /**
     * @var string|null $before Return records before this cursor for backwards pagination. Use the `previousCursor` from a previous response.
    */
    public ?string $before = null;
    
    /**
     * @var int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public ?int $limit = null;
    
    /**
     * @var array<string>|null $subscriptionPlans Accepts a comma-separated list of up to 100 subscription plan IDs. Returns line items linked to any of the specified subscription plans.
    */
    public ?array $subscriptionPlans = null;
    
    /**
     * Instantiates a new SubscriptionPlanLineItemsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after Return records after this cursor for forward pagination. Use the `nextCursor` from a previous response.
     * @param string|null $before Return records before this cursor for backwards pagination. Use the `previousCursor` from a previous response.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param array<string>|null $subscriptionPlans Accepts a comma-separated list of up to 100 subscription plan IDs. Returns line items linked to any of the specified subscription plans.
    */
    public function __construct(?string $after = null, ?string $before = null, ?int $limit = null, ?array $subscriptionPlans = null) {
        $this->after = $after;
        $this->before = $before;
        $this->limit = $limit;
        $this->subscriptionPlans = $subscriptionPlans;
    }

}
