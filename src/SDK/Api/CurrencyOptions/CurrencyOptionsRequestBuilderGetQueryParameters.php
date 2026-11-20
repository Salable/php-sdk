<?php

namespace Salable\SDK\Api\CurrencyOptions;

/**
 * List Currency Options
*/
class CurrencyOptionsRequestBuilderGetQueryParameters 
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
     * @var string|null $price Returns only currency options linked to this price ID.
    */
    public ?string $price = null;
    
    /**
     * @var string|null $priceId Deprecated: use `price` instead.
    */
    public ?string $priceId = null;
    
    /**
     * Instantiates a new CurrencyOptionsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after 
     * @param string|null $before 
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $price Returns only currency options linked to this price ID.
     * @param string|null $priceId Deprecated: use `price` instead.
    */
    public function __construct(?string $after = null, ?string $before = null, ?array $expand = null, ?int $limit = null, ?string $price = null, ?string $priceId = null) {
        $this->after = $after;
        $this->before = $before;
        $this->expand = $expand?? [];
        $this->limit = $limit;
        $this->price = $price;
        $this->priceId = $priceId;
    }

}
