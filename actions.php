<?php
session_start();
include("db.php");

// LOGOUT
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
}

// START SESSION
if (isset($_GET['start'])) {
    $id = $_GET['start'];

    $conn->query("INSERT INTO sessions (client_id, start_time) VALUES ($id, NOW())");
    $conn->query("UPDATE clients SET status='online' WHERE id=$id");

    header("Location: dashboard.php");
}

// STOP SESSION
if (isset($_GET['stop'])) {
    $id = $_GET['stop'];

    $res = $conn->query("SELECT * FROM sessions WHERE client_id=$id AND end_time IS NULL");
    $s = $res->fetch_assoc();

    $start = strtotime($s['start_time']);
    $end = time();

    $hours = ($end - $start) / 3600;
    $rate = 500;
    $cost = $hours * $rate;

    $conn->query("UPDATE sessions SET end_time=NOW(), cost=$cost WHERE id=".$s['id']);
    $conn->query("UPDATE clients SET status='offline' WHERE id=$id");

    header("Location: dashboard.php");
}
?><?php
session_start();
include("db.php");

// LOGOUT
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
}

// START SESSION
if (isset($_GET['start'])) {
    $id = $_GET['start'];

    $conn->query("INSERT INTO sessions (client_id, start_time) VALUES ($id, NOW())");
    $conn->query("UPDATE clients SET status='online' WHERE id=$id");

    header("Location: dashboard.php");
}

// STOP SESSION
if (isset($_GET['stop'])) {
    $id = $_GET['stop'];

    $res = $conn->query("SELECT * FROM sessions WHERE client_id=$id AND end_time IS NULL");
    $s = $res->fetch_assoc();

    $start = strtotime($s['start_time']);
    $end = time();

    $hours = ($end - $start) / 3600;
    $rate = 500;
    $cost = $hours * $rate;

    $conn->query("UPDATE sessions SET end_time=NOW(), cost=$cost WHERE id=".$s['id']);
    $conn->query("UPDATE clients SET status='offline' WHERE id=$id");

    header("Location: dashboard.php");
}
?>
