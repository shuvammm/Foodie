# Recipe pages

Each recipe detail page is kept as a PHP file in this directory. The original HTML markup and recipe content are retained; local links and asset paths are adjusted for the new directory.

## Compatibility

The former `img/<recipe>.html` paths are static HTML redirects to `img/recipes/<recipe>.php`. They do not require PHP execution on the old `.html` path.

## Relative paths

Because recipe files live one directory below the existing application files, local CSS, JavaScript, images, and root-level PHP pages use `../` paths. Existing assets have intentionally not been moved yet.
