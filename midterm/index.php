<?php
session_start();
if (isset($_SESSION['username'])) {
    header('Location: home.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Here</title>
    <script>
        function validateLoginForm() {
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;
            let errorMessage = "";

            if (username === "" || password === "") {
                errorMessage = "Must be filled";
            } else if (password.length < 5) {
                errorMessage = "Password is at least 5 characters";
            } else if (!/\d/.test(password)) {
                errorMessage = "Password must consist of letters and numbers.";
            }

            if (errorMessage) {
                document.getElementById("error").textContent = errorMessage;
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="login-container">
        <h2>SoSo Hotel</h2>
        <form action="login_validation.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <button type="submit">Login</button>
            <div id="error" class="error-message"></div>
            </div>
        </form>
    </div>
</body>
</html>
