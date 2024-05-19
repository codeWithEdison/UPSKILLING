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

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Home Page</h1>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
    <p>
        <?php
        if (has_role('admin')) {
            echo "<a href='admin.php'>Admin Panel</a>";
        }
        ?>
    </p>
    <a href="logout.php">Logout</a>
</body>
</html>
