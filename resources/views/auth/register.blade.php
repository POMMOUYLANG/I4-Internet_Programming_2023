<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Register</h2>

    <!-- Registration form -->
    <form method="post" action="register.php">
        <label>Username:</label>
        <input type="text" name="username" ><br>

        <label>Email:</label>
        <input type="email" name="email" ><br>

        <label>Password:</label>
        <input type="password" name="password"><br>

        <label>Confirm Password:</label>
        <input type="password" name="confirm_password"><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
