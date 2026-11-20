<?php

namespace Salable\SDK\Api\ReceiptItems;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReceiptItemsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ReceiptItemsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReceiptItemsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ReceiptItemsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReceiptItemsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReceiptItemsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ReceiptItemsRequestBuilderGetQueryParameters.
     * @param string|null $after Return records after this cursor for forward pagination. Use the `nextCursor` from a previous response.
     * @param string|null $before Return records before this cursor for backwards pagination. Use the `previousCursor` from a previous response.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $receipt Returns only receipt items linked to this receipt ID.
     * @return ReceiptItemsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?int $limit = null, ?string $receipt = null): ReceiptItemsRequestBuilderGetQueryParameters {
        return new ReceiptItemsRequestBuilderGetQueryParameters($after, $before, $limit, $receipt);
    }

}
