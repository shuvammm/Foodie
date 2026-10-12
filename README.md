# Foodie

Foodie is a PHP-backed recipe website. The application code and resources are organized under `app/`.

## Admin panel

A basic, read-only database dashboard is available at `app/admin.php`. It displays registered users and Contact Us messages from the `staff` database. Access is restricted to accounts whose database role is `admin`.

### Enable the admin panel on an existing database

1. Back up your `staff` database in phpMyAdmin.
2. Select the `staff` database and import `app/sql/admin_role_migration.sql`. Run this migration only once on the existing database.
3. In phpMyAdmin's SQL tab, promote your own account (replace the example email):
   ```sql
   UPDATE users SET Role = 'admin' WHERE Email = 'your-email@example.com';
   ```
4. Log out of Foodie and log back in, then open `http://localhost/Foodie/app/admin.php` if your repository is in `htdocs/Foodie`.

Newly registered accounts default to the `user` role. Do not make ordinary users administrators. The panel does not provide edit/delete controls.

For a new database, `app/sql/users.sql` includes the role column already; do not also run the migration on that fresh table.

## Recipe page migration

- Recipe detail pages are grouped in `app/recipes/` and use the `.php` extension.
- Former recipe `.html` URLs now contain static HTML redirects to the new PHP pages. These work even when the web server serves `.html` files as static content.
- The homepage and category/shop pages link directly to the new recipe PHP pages.
- All tracked images are stored directly in `app/assets/images/` in one flat folder, with no image-category subfolders. PHP, HTML, and CSS image references point to this single folder. CSS, JavaScript, login/register pages, and database files remain in their existing locations.

## Run locally

1. Install a PHP-capable local server such as XAMPP.
2. Place the repository folder inside the server's web root.
3. Start Apache and the database server.
4. Open `/Foodie/app/index.php` in your browser.

## Notes

- PHP is required for recipe pages and database-backed pages; the old HTML URLs are static redirects.
- Database setup is defined by the SQL files under `app/sql/`. Review the database configuration in `app/php/config_login.php` before testing login/register functionality.
