# Recipe pages

Each recipe detail page is kept as a PHP file in this directory. The recipe's original HTML markup and recipe content are retained; only local links and asset paths are adjusted for the new directory.

## Compatibility

The former `img/<recipe>.html` paths now redirect to `img/recipes/<recipe>.php`. Keep these redirects until external links and bookmarks no longer need the old paths.

## Relative paths

Because the PHP recipe files live one directory below the existing application files, local CSS, JavaScript, images, and root-level PHP pages use `../` paths. Existing assets have intentionally not been moved yet.
