<?php
session_start();

if (!isset($_SESSION['valid'], $_SESSION['id'])) {
    header('Location: login.php');
    exit;
}

require_once __DIR__ . '/php/config_login.php';

if (!isset($con) || !$con) {
    http_response_code(503);
    exit('Database connection is unavailable. Check app/php/config_login.php.');
}

// Read the role from the database on every request instead of trusting a
// role value stored in the session.
$roleStatement = $con->prepare('SELECT Role FROM users WHERE Id = ? LIMIT 1');
if (!$roleStatement) {
    http_response_code(503);
    exit('Admin setup is incomplete. Import app/sql/admin_role_migration.sql into the staff database, then try again.');
}

$userId = (int) $_SESSION['id'];
$roleStatement->bind_param('i', $userId);
$roleStatement->execute();
$roleResult = $roleStatement->get_result();
$currentUser = $roleResult->fetch_assoc();
$roleStatement->close();

if (!$currentUser || $currentUser['Role'] !== 'admin') {
    http_response_code(403);
    exit('Access denied. This page is only available to admin accounts.');
}

function escapeHtml($value): string {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

$userCountResult = $con->query('SELECT COUNT(*) AS total FROM users');
$messageCountResult = $con->query('SELECT COUNT(*) AS total FROM details');

if (!$userCountResult || !$messageCountResult) {
    http_response_code(503);
    exit('Could not load dashboard data. Check that the users and details tables exist in the staff database.');
}

$userCount = (int) $userCountResult->fetch_assoc()['total'];
$messageCount = (int) $messageCountResult->fetch_assoc()['total'];

$usersResult = $con->query('SELECT Id, Username, Email, Age, Role FROM users ORDER BY Id DESC');
$messagesResult = $con->query('SELECT name, email, message FROM details ORDER BY name ASC');
if (!$usersResult || !$messagesResult) {
    http_response_code(503);
    exit('Could not load the database records.');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie Admin Panel</title>
    <link rel="stylesheet" href="admin-panel.css">
</head>
<body>
    <div class="layout">
        <aside class="sidebar">
            <a class="brand" href="index.php"><span class="brand-mark">F</span> Foodie</a>
            <p class="side-label">WORKSPACE</p>
            <a class="side-link active" href="admin.php">▦ <span>Dashboard</span></a>
            <a class="side-link" href="#users">♙ <span>Users</span></a>
            <a class="side-link" href="#messages">✉ <span>Contact messages</span></a>
            <div class="sidebar-bottom">
                <a class="side-link" href="index.php">↗ <span>View website</span></a>
                <a class="side-link" href="php/logout.php">⇥ <span>Log out</span></a>
            </div>
        </aside>

        <main class="main">
            <header class="topbar">
                <div>
                    <p class="eyebrow">FOODIE / ADMINISTRATION</p>
                    <h1>Dashboard</h1>
                    <p class="muted">A simple overview of your website database.</p>
                </div>
                <span class="admin-pill">● Admin access</span>
            </header>

            <section class="stats" aria-label="Database summary">
                <article class="stat-card">
                    <div class="stat-icon purple">♙</div>
                    <p>Total registered users</p>
                    <strong><?php echo $userCount; ?></strong>
                    <span>Records in <code>users</code></span>
                </article>
                <article class="stat-card">
                    <div class="stat-icon orange">✉</div>
                    <p>Contact messages</p>
                    <strong><?php echo $messageCount; ?></strong>
                    <span>Records in <code>details</code></span>
                </article>
                <article class="stat-card">
                    <div class="stat-icon green">▤</div>
                    <p>Database</p>
                    <strong>staff</strong>
                    <span>MySQL / MariaDB</span>
                </article>
            </section>

            <section class="panel" id="users">
                <div class="panel-heading">
                    <div><h2>Registered users</h2><p>Account records from the users table.</p></div>
                    <span class="count"><?php echo $userCount; ?> records</span>
                </div>
                <div class="table-wrap">
                    <table>
                        <thead><tr><th>ID</th><th>Username</th><th>Email</th><th>Age</th><th>Role</th></tr></thead>
                        <tbody>
                        <?php if ($usersResult->num_rows === 0): ?>
                            <tr><td colspan="5" class="empty">No registered users yet.</td></tr>
                        <?php else: ?>
                            <?php while ($user = $usersResult->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo (int) $user['Id']; ?></td>
                                    <td class="name-cell"><?php echo escapeHtml($user['Username']); ?></td>
                                    <td><?php echo escapeHtml($user['Email']); ?></td>
                                    <td><?php echo escapeHtml($user['Age']); ?></td>
                                    <td><span class="role <?php echo $user['Role'] === 'admin' ? 'role-admin' : ''; ?>"><?php echo escapeHtml($user['Role']); ?></span></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="panel" id="messages">
                <div class="panel-heading">
                    <div><h2>Contact messages</h2><p>Messages submitted through Contact Us.</p></div>
                    <span class="count"><?php echo $messageCount; ?> records</span>
                </div>
                <div class="table-wrap">
                    <table>
                        <thead><tr><th>Name</th><th>Email</th><th>Message</th></tr></thead>
                        <tbody>
                        <?php if ($messagesResult->num_rows === 0): ?>
                            <tr><td colspan="3" class="empty">No contact messages yet.</td></tr>
                        <?php else: ?>
                            <?php while ($message = $messagesResult->fetch_assoc()): ?>
                                <tr>
                                    <td class="name-cell"><?php echo escapeHtml($message['name']); ?></td>
                                    <td><?php echo escapeHtml($message['email']); ?></td>
                                    <td class="message-cell"><?php echo escapeHtml($message['message']); ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </section>
            <footer>Foodie Admin Panel <span>•</span> Read-only database overview</footer>
        </main>
    </div>
</body>
</html>
