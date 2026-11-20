<?php

namespace Salable\SDK\Api\Grantees;

/**
 * List Grantees
*/
class GranteesRequestBuilderGetQueryParameters 
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
     * @var string|null $entitlement Returns grantees who have access to this entitlement.
    */
    public ?string $entitlement = null;
    
    /**
     * @var string|null $group Returns only grantees belonging to this group ID.
    */
    public ?string $group = null;
    
    /**
     * @var string|null $groupId Deprecated: use `group` instead.
    */
    public ?string $groupId = null;
    
    /**
     * @var int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public ?int $limit = null;
    
    /**
     * @var string|null $owner Returns only grantees with a membership belonging to this owner ID or value.
    */
    public ?string $owner = null;
    
    /**
     * @var string|null $search 
    */
    public ?string $search = null;
    
    /**
     * Instantiates a new GranteesRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after 
     * @param string|null $before 
     * @param string|null $entitlement Returns grantees who have access to this entitlement.
     * @param string|null $group Returns only grantees belonging to this group ID.
     * @param string|null $groupId Deprecated: use `group` instead.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $owner Returns only grantees with a membership belonging to this owner ID or value.
     * @param string|null $search 
    */
    public function __construct(?string $after = null, ?string $before = null, ?string $entitlement = null, ?string $group = null, ?string $groupId = null, ?int $limit = null, ?string $owner = null, ?string $search = null) {
        $this->after = $after;
        $this->before = $before;
        $this->entitlement = $entitlement;
        $this->group = $group;
        $this->groupId = $groupId;
        $this->limit = $limit;
        $this->owner = $owner;
        $this->search = $search;
    }

}
