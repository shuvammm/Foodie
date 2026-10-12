# Foodie

Foodie is a PHP-backed recipe website. The original application remains under `img/` so existing hosting paths and PHP/database pages are preserved.

## Recipe page migration

- Recipe detail pages are grouped in `img/recipes/` and use the `.php` extension.
- Former recipe `.html` URLs now contain static HTML redirects to the new PHP pages. These work even when the web server serves `.html` files as static content.
- The homepage and category/shop pages link directly to the new recipe PHP pages.
- Existing images, CSS, JavaScript, login/register pages, and database files remain at their current paths in this staged migration to avoid breaking relative asset references.

## Run locally

1. Install a PHP-capable local server such as XAMPP.
2. Place the repository folder inside the server's web root.
3. Start Apache (and MySQL if testing database-backed login features).
4. Open `/Foodie/img/index.php` in your browser.

## Notes

- PHP is required for recipe pages and database-backed pages; the old HTML URLs are static redirects.
- Database setup remains defined by the existing SQL files under `img/sql/`; review the existing database configuration before testing login/register functionality.
- This branch focuses on safe recipe migration and link updates. A later pass can consolidate repeated navigation/footer markup and move assets after all references are verified.
