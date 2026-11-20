<?php

namespace Salable\SDK\Api\EventTypes;

/**
 * Returns a list of event types subscribed to by a webhook. They are sorted by `createdAt`, with the most recently created appearing first.
*/
class EventTypesRequestBuilderGetQueryParameters 
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
     * @var string|null $webhook Returns only event types linked to this webhook ID.
    */
    public ?string $webhook = null;
    
    /**
     * Instantiates a new EventTypesRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after Return records after this cursor for forward pagination. Use the `nextCursor` from a previous response.
     * @param string|null $before Return records before this cursor for backwards pagination. Use the `previousCursor` from a previous response.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $webhook Returns only event types linked to this webhook ID.
    */
    public function __construct(?string $after = null, ?string $before = null, ?int $limit = null, ?string $webhook = null) {
        $this->after = $after;
        $this->before = $before;
        $this->limit = $limit;
        $this->webhook = $webhook;
    }

}
