<?php
// Sl.php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "ebooks"; 

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle delete user
if (isset($_GET['delete'])) {
    $userId = intval($_GET['delete']);
    $conn->query("DELETE FROM student_login WHERE id = $userId");
    header("Location: Sl.php");
    exit;
}

// Handle reset password
if (isset($_GET['reset'])) {
    $userId = intval($_GET['reset']);
    $defaultPassword = password_hash("123456", PASSWORD_DEFAULT);
    $conn->query("UPDATE student_login SET password = '$defaultPassword' WHERE id = $userId");
    header("Location: Sl.php");
    exit;
}

// Fetch users
$sql = "SELECT id, username, email, password FROM student_login";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registered Users</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #eaf4ff;
            color: #333;
            padding: 30px;
        }
        h2 {
            text-align: center;
            color: #004080;
        }
        .top-bar {
            width: 85%;
            margin: 0 auto 20px auto;
            text-align: right;
        }
        .home-btn {
            background-color: #28a745;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }
        .home-btn:hover {
            background-color: #218838;
        }
        table {
            width: 85%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th {
            background-color: #004080;
            color: white;
            padding: 12px;
        }
        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ccc;
        }
        tr:nth-child(even) {
            background-color: #f2f9ff;
        }
        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
            color: white;
        }
        .delete-btn {
            background-color: #ffcc00;
            color: #333;
        }
        .reset-btn {
            background-color: #0066cc;
        }
        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<h2>Registered Users</h2>

<div class="top-bar">
    <a class="home-btn" href="adpview.php">🏠 Home</a>
</div>

<?php if ($result && $result->num_rows > 0): ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['id']) ?></td>
            <td><?= htmlspecialchars($row['username']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td>
                <a class="btn delete-btn" href="Sl.php?delete=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                <a class="btn reset-btn" href="Sl.php?reset=<?= $row['id'] ?>" onclick="return confirm('Reset password to 123456?');">Reset Password</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
<?php elseif ($result): ?>
    <p style="text-align:center; color:#555;">No registered users found.</p>
<?php else: ?>
    <p style="text-align:center; color:red;">Error fetching user data: <?= htmlspecialchars($conn->error) ?></p>
<?php endif; ?>

</body>
</html>

<?php $conn->close(); ?>
