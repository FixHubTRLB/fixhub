<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FixHub</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

    <?php include 'header.php'; ?> 

    <div class="main-content">
        <form action="login.php" method="POST" class="login-form">
            <h1>Login</h1>

            <?php
            if (isset($error)) {
                echo "<p class='error'>$error</p>";
            }
            ?>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="submit-btn">Login</button>
            <p class="register-link">Don't have an account? <a href="register.php">Register here</a></p>
        </form>
    </div>

    <footer>
        &copy; <?php echo date("Y"); ?> FixHub. All rights reserved.
    </footer>
</body>
</html>
