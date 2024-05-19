<?php
session_start();

// Function to check if user is logged in
function is_logged_in() {
    return isset($_SESSION['user_id']);
}

// Function to check user's role
function has_role($role) {
    return isset($_SESSION['role']) && $_SESSION['role'] === $role;
}

if (!is_logged_in()) {
    header("Location: login.php");
    exit();
}

if (!has_role('admin')) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h1>Admin Panel</h1>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
    <p>Only users with the admin role can see this page.</p>
    <a href="index.php">Back to Home</a>
    <a href="logout.php">Logout</a>
</body>
</html>
