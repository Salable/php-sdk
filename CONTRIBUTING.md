# Contributing

The supported PHP versions are 8.2, 8.3, 8.4, and 8.5.

## Generated client

Do not edit files under `src/SDK/`. Kiota overwrites that tree. Changes that should survive regeneration belong in `src/Salable.php`, `src/ApiKeyAccessTokenProvider.php`, or in `openapi.yaml`.

`openapi.yaml` is the pinned description. Release builds generate from this file and fail if `src/SDK/` does not match it.

To refresh the description from the published Salable spec:

```bash
curl -fsSL https://salable.app/openapi.yaml -o openapi.yaml
SOURCE=openapi.yaml ruby scripts/prepare-openapi.rb
```

`scripts/prepare-openapi.rb` is safe to run again. It names anonymous object schemas, types `limit` as an integer and `includeArchived` as a boolean, adds 403 and 404 error bodies, and adds discriminators where object unions already expose a unique `const` property.

Regenerate the client with [Kiota](https://github.com/microsoft/kiota) 1.35:

```bash
./scripts/generate.sh
```

Commit `openapi.yaml` and `src/SDK/` (including `src/SDK/kiota-lock.json`) together.

`import` is a Go keyword, so the pinned spec sets the `/api/products/import` operation id to `Import`. PHP is not affected: the navigator stays `import()` and the HTTP path stays `/api/products/import`.

## Checks

```bash
composer validate --strict
composer install
vendor/bin/php-cs-fixer fix --dry-run --diff
vendor/bin/phpstan analyse --no-progress
vendor/bin/phpunit
```

## Commits and versions

Use conventional commits. `feat` and `fix` drive minor and patch releases. A breaking spec change uses `feat!:` or a `BREAKING CHANGE:` footer.

Publish the preview from the `beta` branch. semantic-release tags that branch as `v1.0.0-beta.1`, `v1.0.0-beta.2`, and so on, and marks the GitHub Release as a prerelease. Composer treats the `-beta` suffix as beta stability, so applications install it only when they opt in:

```bash
composer require salable/sdk:^1.0@beta
```

Merge `beta` into `main` only after the OpenAPI names have settled. A push to `main` tags the stable `v1.0.0` line, which is the compatibility promise. Until that merge, do not push these commits to `main`.

## Packagist

semantic-release creates the GitHub tag and changelog. Beta tags are GitHub prereleases. Packagist publishes `salable/sdk` from those tags, including `v1.0.0-beta.N`, only after a one-time setup:

1. Submit [github.com/Salable/php-sdk](https://github.com/Salable/php-sdk) on [Packagist](https://packagist.org/packages/submit) as `salable/sdk`.
2. Enable the Packagist GitHub webhook so new tags update the package automatically.

That registration is outside this repository. CI does not call the Packagist API.
