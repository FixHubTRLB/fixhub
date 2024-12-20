<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - FixHub</title>
    <link rel="stylesheet" href="style.css"> <!-- Assure-toi que le chemin est correct -->
</head>
<body>

    <?php include 'header.php'; ?> <!-- Inclusion du header -->

    <div class="main-content">
        <form action="register.php" method="POST" class="register-form">
            <h1>Register</h1>

            <?php
            // Affiche un message d'erreur s'il y a un problème avec l'inscription
            if (isset($error)) {
                echo "<p class='error'>$error</p>";
            }
            ?>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>

            <button type="submit" class="submit-btn">Register</button>
            <p class="login-link">Already have an account? <a href="login.php">Login here</a></p>
        </form>
    </div>

    <footer>
        &copy; <?php echo date("Y"); ?> FixHub. All rights reserved.
    </footer>
</body>
</html>
