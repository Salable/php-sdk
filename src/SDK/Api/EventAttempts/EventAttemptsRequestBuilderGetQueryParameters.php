<?php

namespace Salable\SDK\Api\EventAttempts;

/**
 * List Event Attempts
*/
class EventAttemptsRequestBuilderGetQueryParameters 
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
     * @var string|null $destination Filter by destination ID.
    */
    public ?string $destination = null;
    
    /**
     * @var string|null $destinationId Deprecated: use `destination` instead.
    */
    public ?string $destinationId = null;
    
    /**
     * @var int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public ?int $limit = null;
    
    /**
     * Instantiates a new EventAttemptsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after 
     * @param string|null $before 
     * @param string|null $destination Filter by destination ID.
     * @param string|null $destinationId Deprecated: use `destination` instead.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public function __construct(?string $after = null, ?string $before = null, ?string $destination = null, ?string $destinationId = null, ?int $limit = null) {
        $this->after = $after;
        $this->before = $before;
        $this->destination = $destination;
        $this->destinationId = $destinationId;
        $this->limit = $limit;
    }

}
