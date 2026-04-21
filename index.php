<?php
session_start();
include("db.php");

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $res = $conn->query("SELECT * FROM users WHERE username='$username'");
    $user = $res->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['id'];
        header("Location: dashboard.php");
    } else {
        echo "Invalid login!";
    }
}
?>

<link rel="stylesheet" href="style.css">

<div class="login-box">
    <form method="POST">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button>Login</button>
    </form>
</div><?php
session_start();
include("db.php");

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $res = $conn->query("SELECT * FROM users WHERE username='$username'");
    $user = $res->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['id'];
        header("Location: dashboard.php");
    } else {
        echo "Invalid login!";
    }
}
?>

<link rel="stylesheet" href="style.css">

<div class="login-box">
    <form method="POST">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button>Login</button>
    </form>
</div><?php
session_start();
include("db.php");

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $res = $conn->query("SELECT * FROM users WHERE username='$username'");
    $user = $res->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['id'];
        header("Location: dashboard.php");
    } else {
        echo "Invalid login!";
    }
}
?>

<link rel="stylesheet" href="style.css">

<div class="login-box">
    <form method="POST">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button>Login</button>
    </form>
</div>
