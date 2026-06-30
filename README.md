# Salable PHP SDK

The official PHP SDK for the [Salable](https://salable.app) API. An easy, type-safe wrapper that makes it simple to manage products, plans, subscriptions, and more.

## Getting Started

### Installation

```bash
composer require salable/sdk
```

### Initialisation

```php
use Salable\Salable;

$salable = new Salable('your-api-key');
```

> Your API key is sent as a `Bearer` token on every request. Keep it secure and out of version control.

## CRUD Pattern

| Operation | Method | Example |
|-----------|--------|---------|
| List all  | `->get()` | `$salable->api->products()->get()` |
| Get one   | `->byId($id)->get()` | `$salable->api->products()->byId($id)->get()` |
| Create    | `->post($body)` | `$salable->api->products()->post($body)` |
| Update    | `->byId($id)->put($body)` | `$salable->api->products()->byId($id)->put($body)` |
| Delete    | `->byId($id)->delete()` | `$salable->api->products()->byId($id)->delete()` |

## Error Handling

All methods throw an exception for non-2xx responses:

```php
try {
    $product = $salable->api->products()->byId('product-id')->get();
} catch (\Exception $e) {
    error_log('API error: ' . $e->getMessage());
}
```

## Query Parameters

```php
$products = $salable->api->products()->get(
    new ProductsRequestBuilderGetRequestConfiguration(
        queryParameters: new ProductsRequestBuilderGetQueryParameters(
            limit: '20',
            after: 'cursor-from-previous-page',
        )
    )
);
```
