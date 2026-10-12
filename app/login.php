<?php
// Secure session cookie settings must be set before starting the session.
$isHttps = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'secure' => $isHttps,
    'httponly' => true,
    'samesite' => 'Lax',
]);
session_start();

require_once __DIR__ . '/php/config_login.php';

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$error = '';
$emailValue = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emailValue = strtolower(trim((string)($_POST['email'] ?? '')));
    $password = (string)($_POST['password'] ?? '');
    $csrfToken = (string)($_POST['csrf_token'] ?? '');

    if (!hash_equals($_SESSION['csrf_token'], $csrfToken)) {
        $error = 'Your session expired. Refresh the page and try again.';
    } elseif (!filter_var($emailValue, FILTER_VALIDATE_EMAIL) || strlen($emailValue) > 200 || $password === '' || strlen($password) > 4096) {
        $error = 'Invalid email or password.';
    } else {
        $stmt = $con->prepare('SELECT Id, Username, Email, Age, Password FROM users WHERE Email = ? LIMIT 1');
        $stmt->bind_param('s', $emailValue);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();

        $passwordMatches = false;
        if ($user) {
            $storedPassword = (string)$user['Password'];
            if (password_verify($password, $storedPassword)) {
                $passwordMatches = true;
            } elseif (hash_equals($storedPassword, $password)) {
                // Compatibility for older accounts: upgrade plaintext passwords after a successful login.
                $passwordMatches = true;
                $newHash = password_hash($password, PASSWORD_DEFAULT);
                $upgrade = $con->prepare('UPDATE users SET Password = ? WHERE Id = ?');
                $upgrade->bind_param('si', $newHash, $user['Id']);
                $upgrade->execute();
                $upgrade->close();
            }
        }

        if ($passwordMatches) {
            session_regenerate_id(true);
            $_SESSION['valid'] = $user['Email'];
            $_SESSION['username'] = $user['Username'];
            $_SESSION['age'] = $user['Age'];
            $_SESSION['id'] = (int)$user['Id'];
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
            header('Location: index.php');
            exit;
        }
        // Keep the same message whether the email or password was incorrect.
        $error = 'Invalid email or password.';
    }
}

function loginEscape($value): string {
    return htmlspecialchars((string)$value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_login.css">
    <title>Login | Foodie</title>
</head>
<body>
<div class="container">
    <div class="box form-box">
        <header>Login</header>
        <?php if ($error !== ''): ?>
            <div class="message" role="alert"><p><?php echo loginEscape($error); ?></p></div>
        <?php endif; ?>
        <form action="login.php" method="post">
            <input type="hidden" name="csrf_token" value="<?php echo loginEscape($_SESSION['csrf_token']); ?>">
            <div class="field input">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo loginEscape($emailValue); ?>" maxlength="200" autocomplete="username" required>
            </div>
            <div class="field input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" autocomplete="current-password" maxlength="4096" required>
            </div>
            <div class="field">
                <button type="submit" class="btn">Login</button>
            </div>
            <div class="links">
                Don't have an account? <a href="register.php">Sign up</a><br>
                <a href="index.php">Go back</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
