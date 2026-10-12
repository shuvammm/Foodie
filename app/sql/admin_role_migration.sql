-- Run this once in the existing `staff` database using phpMyAdmin or MySQL.
-- It adds a role column; existing and newly registered accounts default to 'user'.
ALTER TABLE users
    ADD COLUMN Role VARCHAR(20) NOT NULL DEFAULT 'user';

-- After running the migration, promote YOUR existing account to admin.
-- Replace the email below with the email address used for your Foodie account,
-- remove the leading comment markers, and run the UPDATE separately.
-- UPDATE users SET Role = 'admin' WHERE Email = 'your-email@example.com';
