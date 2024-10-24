<?php 
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="logout-message">
        <h1>Thank you, see you soon!</h1>
        <button onclick="window.location.href='index.php';">Go to Home</button>
    </div>
</body>
</html>
