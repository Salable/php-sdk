<?php

namespace Salable;

use Microsoft\Kiota\Abstractions\Authentication\ApiKeyAuthenticationProvider;
use Microsoft\Kiota\Abstractions\Authentication\KeyLocation;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;
use Salable\SDK\SalableClient;

class Salable
{
    public readonly mixed $api;

    public function __construct(string $apiKey)
    {
        $authProvider = new ApiKeyAuthenticationProvider(
            'Bearer ' . $apiKey,
            'Authorization',
            KeyLocation::Header
        );
        $adapter = new GuzzleRequestAdapter($authProvider);
        $client = new SalableClient($adapter);
        $this->api = $client->getApi();
    }
}
