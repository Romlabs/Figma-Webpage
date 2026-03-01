<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CCE Login</title>

    <!-- Jacquard (optional if used elsewhere) -->
    <link href="https://fonts.googleapis.com/css2?family=Jacquard+12&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>
<body class="auth login">

<!-- RIGHT SIDE GRAPHICS -->
<div class="login-visual">
    <img src="assets/images/knight-standing.png" class="knight-large">
    <img src="assets/images/cce-logo.png" class="csg-logo">
</div>

<!-- LOGIN CARD -->
<div class="login-wrapper">
    <div class="form-card login-card">

        <div class="login-header">
            <img src="assets/images/um-seal.png" class="um-logo">
            <h2>Welcome to CCE</h2>
        </div>

        <form action="process-login.php" method="POST">

            <label>Username/Email:</label>
            <input type="text" name="username" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <a href="#" class="forgot">Forgot your password?</a>

            <button type="submit" class="login-btn">
                LOGIN
            </button>

            <p class="small">
                No account? <a href="register.php">Register here</a>
            </p>

        </form>
    </div>
</div>

</body>
</html>