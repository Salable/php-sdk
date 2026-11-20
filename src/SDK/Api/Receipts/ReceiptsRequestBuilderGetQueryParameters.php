<?php

namespace Salable\SDK\Api\Receipts;

/**
 * List Receipts
*/
class ReceiptsRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $after 
    */
    public ?string $after = null;
    
    /**
     * @var string|null $before 
    */
    public ?string $before = null;
    
    /**
     * @var array<GetExpandQueryParameterType> $expand 
    */
    public array $expand;
    
    /**
     * @var int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public ?int $limit = null;
    
    /**
     * @var array<string>|null $lineItems Filter by line item ID. Accepts a comma-separated list of line item IDs.
    */
    public ?array $lineItems = null;
    
    /**
     * @var array<string>|null $owner Filter by owner ID. Accepts a comma-separated list of owner IDs.
    */
    public ?array $owner = null;
    
    /**
     * @var string|null $search Search by receipt ID, owner ID or value, receipt item ID, or line item ID or name.
    */
    public ?string $search = null;
    
    /**
     * @var string|null $sort 
    */
    public ?string $sort = null;
    
    /**
     * @var string|null $subscription Returns only receipts linked to this subscription ID.
    */
    public ?string $subscription = null;
    
    /**
     * @var string|null $subscriptionId Deprecated: use `subscription` instead.
    */
    public ?string $subscriptionId = null;
    
    /**
     * Instantiates a new ReceiptsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after 
     * @param string|null $before 
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param array<string>|null $lineItems Filter by line item ID. Accepts a comma-separated list of line item IDs.
     * @param array<string>|null $owner Filter by owner ID. Accepts a comma-separated list of owner IDs.
     * @param string|null $search Search by receipt ID, owner ID or value, receipt item ID, or line item ID or name.
     * @param string|null $sort 
     * @param string|null $subscription Returns only receipts linked to this subscription ID.
     * @param string|null $subscriptionId Deprecated: use `subscription` instead.
    */
    public function __construct(?string $after = null, ?string $before = null, ?array $expand = null, ?int $limit = null, ?array $lineItems = null, ?array $owner = null, ?string $search = null, ?string $sort = null, ?string $subscription = null, ?string $subscriptionId = null) {
        $this->after = $after;
        $this->before = $before;
        $this->expand = $expand?? [];
        $this->limit = $limit;
        $this->lineItems = $lineItems;
        $this->owner = $owner;
        $this->search = $search;
        $this->sort = $sort;
        $this->subscription = $subscription;
        $this->subscriptionId = $subscriptionId;
    }

}
