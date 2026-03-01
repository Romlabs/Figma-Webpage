<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CCE Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="auth login">

<!-- STANDING KNIGHT -->
<img src="assets/images/knight-standing.png" class="knight-stand">

<div class="form-card">
    <h2>Welcome to CCE</h2>

    <form action="process-login.php" method="POST">
        <label>Username / Email</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <a href="#" class="forgot">Forgot your password?</a>

        <button type="submit">LOGIN</button>

        <p class="small">
            No account? <a href="register.php">Register here</a>
        </p>
    </form>
</div>

</body>
</html>
