<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CCE Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="auth register">

<!-- STANDING KNIGHT -->
<img src="assets/images/knight-standing.png" class="knight-stand">

<div class="form-card large">
    <h2>Create Account</h2>

    <form action="process-register.php" method="POST">

        <div class="row">
            <div>
                <label>Display Username</label>
                <input type="text" name="display_name" required>
            </div>

            <div>
                <label>Birthdate</label>
                <input type="date" name="birthdate" required>
            </div>

            <div>
                <label>Gender</label>
                <select name="gender" required>
                    <option value="">Select</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
        </div>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Confirm Password</label>
        <input type="password" name="confirm_password" required>

        <div class="captcha">
            <input type="checkbox" required> I'm not a robot
        </div>

        <button type="submit">REGISTER</button>

        <p class="small">
            Already have an account? <a href="login.php">Login here</a>
        </p>

    </form>
</div>

</body>
</html>
