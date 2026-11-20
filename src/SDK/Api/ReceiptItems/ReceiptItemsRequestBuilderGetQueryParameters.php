<?php

namespace Salable\SDK\Api\ReceiptItems;

/**
 * Returns a list of your receipt items. They are sorted by `createdAt`, with the most recently created appearing first.
*/
class ReceiptItemsRequestBuilderGetQueryParameters 
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
     * @var string|null $receipt Returns only receipt items linked to this receipt ID.
    */
    public ?string $receipt = null;
    
    /**
     * Instantiates a new ReceiptItemsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after Return records after this cursor for forward pagination. Use the `nextCursor` from a previous response.
     * @param string|null $before Return records before this cursor for backwards pagination. Use the `previousCursor` from a previous response.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $receipt Returns only receipt items linked to this receipt ID.
    */
    public function __construct(?string $after = null, ?string $before = null, ?int $limit = null, ?string $receipt = null) {
        $this->after = $after;
        $this->before = $before;
        $this->limit = $limit;
        $this->receipt = $receipt;
    }

}
