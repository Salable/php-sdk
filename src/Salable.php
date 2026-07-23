<?php

namespace Salable;

use Http\Promise\FulfilledPromise;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\Authentication\AccessTokenProvider;
use Microsoft\Kiota\Abstractions\Authentication\AllowedHostsValidator;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;
use Salable\SDK\Salable as SalableClient;

class Salable
{
    public readonly mixed $api;

    public function __construct(string $apiKey)
    {
        $tokenProvider = new class ($apiKey) implements AccessTokenProvider {
            public function __construct(private readonly string $apiKey)
            {
            }

            public function getAuthorizationTokenAsync(string $url, array $additionalAuthenticationContext = []): Promise
            {
                return new FulfilledPromise($this->apiKey);
            }

            public function getAllowedHostsValidator(): AllowedHostsValidator
            {
                return new AllowedHostsValidator(['salable.app']);
            }
        };

        $authProvider = new BaseBearerTokenAuthenticationProvider($tokenProvider);
        $adapter = new GuzzleRequestAdapter($authProvider);
        $client = new SalableClient($adapter);
        $this->api = $client->api();
    }
}
