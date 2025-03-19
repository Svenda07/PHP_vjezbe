<?php
session_start(); // Start session to check if user is logged in
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to external CSS -->
</head>
<body>
    <div class="container">
        <!-- Welcome Image -->
        <img src="images/logo.png" alt="Welcome Image">

        <!-- Check if user is logged in -->
        <?php if (isset($_SESSION['username'])): ?>
            <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
            <p>You are logged in.</p>
            <a href="dashboard.php"><button>Go to Dashboard</button></a>
            <a href="logout.php"><button>Logout</button></a>
        <?php else: ?>
            <h2>Welcome to Our Website</h2>
            <p>Please log in or register to continue.</p>
            <a href="login.php"><button>Login</button></a>
            <a href="register.php"><button>Register</button></a>
        <?php endif; ?>
    </div>
</body>
</html>
