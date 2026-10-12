<?php
session_start();

include("php/config_login.php");
if (!isset($_SESSION['valid']) || !isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

$id = (int) $_SESSION['id'];
$stmt = $con->prepare("SELECT Id, Username, Email, Age, Role FROM users WHERE Id = ? LIMIT 1");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result()->fetch_assoc();
$stmt->close();

if (!$result) {
    session_destroy();
    header("Location: login.php");
    exit;
}

$res_Uname = $result['Username'];
$res_Email = $result['Email'];
$res_Age = $result['Age'];
$res_id = (int) $result['Id'];
$res_Role = $result['Role'] ?? 'user';

function profileEscape($value): string {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_login.css">
    <title>My Foodie Profile</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home_login.php">Foodie</a></p>
        </div>

        <div class="right-links">
            <a href="edit.php?Id=<?php echo $res_id; ?>">Change Profile</a>
            <?php if ($res_Role === 'admin'): ?>
                <a href="admin.php">Admin Panel</a>
            <?php endif; ?>
            <a href="php/logout.php"><button class="btn">Log Out</button></a>
            <a href="index.php"><button class="btn">Go back</button></a>
        </div>
    </div>
    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Welcome <b><?php echo profileEscape($res_Uname); ?></b></p>
                </div>
                <div class="box">
                    <p>Your email: <b><?php echo profileEscape($res_Email); ?></b>.</p>
                </div>
            </div>
            <div class="bottom">
                <div class="box">
                    <p>You are <b><?php echo profileEscape($res_Age); ?> years old</b>.</p>
                </div>
                <div class="bottom">
                    <div style="font-size: 20px; font-weight: bold" class="box">
                        <p><mark style="color: red">Thanks for visiting our website</mark></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
