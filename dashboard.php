<?php
session_start();
include("db.php");

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}

$clients = $conn->query("SELECT * FROM clients");
$total = $conn->query("SELECT SUM(cost) as total FROM sessions")->fetch_assoc();
?>

<link rel="stylesheet" href="style.css">

<div class="main">
    <h2>Cafe Dashboard</h2>

    <h3>Total Revenue: <?= $total['total'] ?? 0 ?> RWF</h3>

    <a href="actions.php?logout=1">Logout</a>

    <table>
        <tr>
            <th>Name</th>
            <th>IP</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php while($c = $clients->fetch_assoc()): ?>
        <tr>
            <td><?= $c['name'] ?></td>
            <td><?= $c['ip_address'] ?></td>
            <td><?= $c['status'] ?></td>
            <td>
                <?php if($c['status']=="offline"): ?>
                    <a href="actions.php?start=<?= $c['id'] ?>">Start</a>
                <?php else: ?>
                    <a href="actions.php?stop=<?= $c['id'] ?>">Stop</a>
                <?php endif; ?>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
