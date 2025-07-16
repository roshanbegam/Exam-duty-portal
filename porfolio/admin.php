<?php
// ==== DB CONFIG ====
$host = 'localhost';
$db = 'portfolio_db';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB connection failed: " . $e->getMessage());
}

// Fetch all messages
$stmt = $pdo->query("SELECT * FROM contact_messages ORDER BY submitted_at DESC");
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Contact Messages</title>
    <style>
        body {
            font-family: Arial;
            padding: 2rem;
            background: #f9f9f9;
        }
        h2 {
            color: #007bff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        th {
            background: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background: #f0f0f0;
        }
    </style>
</head>
<body>
    <h2>Contact Form Messages</h2>
    <?php if (count($messages) > 0): ?>
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Date</th>
        </tr>
        <?php foreach ($messages as $msg): ?>
        <tr>
            <td><?= $msg['id'] ?></td>
            <td><?= htmlspecialchars($msg['name']) ?></td>
            <td><?= htmlspecialchars($msg['email']) ?></td>
            <td><?= nl2br(htmlspecialchars($msg['message'])) ?></td>
            <td><?= $msg['submitted_at'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php else: ?>
        <p>No messages found.</p>
    <?php endif; ?>
</body>
</html>
