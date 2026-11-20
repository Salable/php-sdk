<?php

namespace Salable\SDK\Api\Memberships;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MembershipsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MembershipsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MembershipsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MembershipsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MembershipsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MembershipsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MembershipsRequestBuilderGetQueryParameters.
     * @param string|null $after 
     * @param string|null $before 
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @param string|null $grantee Returns only memberships linked to this grantee ID.
     * @param string|null $granteeId Deprecated: use `grantee` instead.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @return MembershipsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?array $expand = null, ?string $grantee = null, ?string $granteeId = null, ?int $limit = null): MembershipsRequestBuilderGetQueryParameters {
        return new MembershipsRequestBuilderGetQueryParameters($after, $before, $expand, $grantee, $granteeId, $limit);
    }

}
