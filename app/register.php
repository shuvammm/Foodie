<?php
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

$errors = [];
$success = false;
$usernameValue = '';
$emailValue = '';
$ageValue = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usernameValue = trim((string)($_POST['username'] ?? ''));
    $emailValue = strtolower(trim((string)($_POST['email'] ?? '')));
    $ageValue = trim((string)($_POST['age'] ?? ''));
    $password = (string)($_POST['password'] ?? '');
    $confirmPassword = (string)($_POST['confirm_password'] ?? '');
    $csrfToken = (string)($_POST['csrf_token'] ?? '');

    if (!hash_equals($_SESSION['csrf_token'], $csrfToken)) {
        $errors[] = 'Your session expired. Refresh the page and try again.';
    } else {
        if (!preg_match('/^[\p{L}\p{N} _.-]{3,30}$/u', $usernameValue)) {
            $errors[] = 'Username must be 3–30 characters and use letters, numbers, spaces, dots, underscores or hyphens.';
        }
        if (!filter_var($emailValue, FILTER_VALIDATE_EMAIL) || strlen($emailValue) > 200) {
            $errors[] = 'Enter a valid email address (maximum 200 characters).';
        }
        if ($ageValue === '' || !ctype_digit($ageValue) || (int)$ageValue < 13 || (int)$ageValue > 120) {
            $errors[] = 'Age must be a number between 13 and 120.';
        }
        if (strlen($password) < 8 || strlen($password) > 72) {
            $errors[] = 'Password must be 8–72 characters long.';
        } elseif (!preg_match('/[A-Za-z]/', $password) || !preg_match('/[0-9]/', $password)) {
            $errors[] = 'Password must contain at least one letter and one number.';
        }
        if (!hash_equals($password, $confirmPassword)) {
            $errors[] = 'Passwords do not match.';
        }

        if (!$errors) {
            $stmt = $con->prepare('SELECT Id FROM users WHERE Email = ? LIMIT 1');
            $stmt->bind_param('s', $emailValue);
            $stmt->execute();
            $existing = $stmt->get_result()->fetch_assoc();
            $stmt->close();

            if ($existing) {
                $errors[] = 'An account with this email already exists.';
            } else {
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $con->prepare("INSERT INTO users (Username, Email, Age, Password, Role) VALUES (?, ?, ?, ?, 'user')");
                $age = (int)$ageValue;
                $stmt->bind_param('ssis', $usernameValue, $emailValue, $age, $passwordHash);
                if ($stmt->execute()) {
                    $success = true;
                    $usernameValue = '';
                    $emailValue = '';
                    $ageValue = '';
                    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                } else {
                    // Do not expose SQL or database details to visitors.
                    $errors[] = 'We could not create your account right now. Please try again.';
                }
                $stmt->close();
            }
        }
    }
}

function registerEscape($value): string {
    return htmlspecialchars((string)$value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_login.css">
    <title>Sign Up | Foodie</title>
</head>
<body>
<div class="container">
    <div class="box form-box">
        <header>Sign Up</header>
        <?php if ($success): ?>
            <div class="message success" role="status"><p>Registration successful. You can now log in.</p></div>
            <div class="links"><a href="login.php">Login now</a></div>
        <?php else: ?>
            <?php if ($errors): ?>
                <div class="message" role="alert"><ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo registerEscape($error); ?></li>
                    <?php endforeach; ?>
                </ul></div>
            <?php endif; ?>
            <form action="register.php" method="post">
                <input type="hidden" name="csrf_token" value="<?php echo registerEscape($_SESSION['csrf_token']); ?>">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo registerEscape($usernameValue); ?>" minlength="3" maxlength="30" autocomplete="username" required>
                </div>
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo registerEscape($emailValue); ?>" maxlength="200" autocomplete="email" required>
                </div>
                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" value="<?php echo registerEscape($ageValue); ?>" min="13" max="120" step="1" required>
                </div>
                <div class="field input">
                    <label for="password">Password (8–72 characters, with a letter and a number)</label>
                    <input type="password" name="password" id="password" minlength="8" maxlength="72" autocomplete="new-password" required>
                </div>
                <div class="field input">
                    <label for="confirm_password">Confirm password</label>
                    <input type="password" name="confirm_password" id="confirm_password" minlength="8" maxlength="72" autocomplete="new-password" required>
                </div>
                <div class="field"><button type="submit" class="btn">Create account</button></div>
                <div class="links">Already have an account? <a href="login.php">Sign in</a></div>
            </form>
        <?php endif; ?>
    </div>
</div>
</body>
</html>
