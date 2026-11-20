<?php

namespace Salable\SDK\Api\Memberships;

/**
 * List Memberships
*/
class MembershipsRequestBuilderGetQueryParameters 
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
     * @var string|null $grantee Returns only memberships linked to this grantee ID.
    */
    public ?string $grantee = null;
    
    /**
     * @var string|null $granteeId Deprecated: use `grantee` instead.
    */
    public ?string $granteeId = null;
    
    /**
     * @var int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public ?int $limit = null;
    
    /**
     * Instantiates a new MembershipsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after 
     * @param string|null $before 
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @param string|null $grantee Returns only memberships linked to this grantee ID.
     * @param string|null $granteeId Deprecated: use `grantee` instead.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public function __construct(?string $after = null, ?string $before = null, ?array $expand = null, ?string $grantee = null, ?string $granteeId = null, ?int $limit = null) {
        $this->after = $after;
        $this->before = $before;
        $this->expand = $expand?? [];
        $this->grantee = $grantee;
        $this->granteeId = $granteeId;
        $this->limit = $limit;
    }

}
