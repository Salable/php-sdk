<?php

namespace Salable\SDK\Api\Entitlements\Check;

/**
 * Unlock features in your product by checking what the grantee has access to. When an owner is provided, relevant meter and token slugs are included as typed entries.
*/
class CheckRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $granteeId 
    */
    public ?string $granteeId = null;
    
    /**
     * @var string|null $owner Owner value to scope the entitlement check to.
    */
    public ?string $owner = null;
    
    /**
     * Instantiates a new CheckRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $granteeId 
     * @param string|null $owner Owner value to scope the entitlement check to.
    */
    public function __construct(?string $granteeId = null, ?string $owner = null) {
        $this->granteeId = $granteeId;
        $this->owner = $owner;
    }

}
