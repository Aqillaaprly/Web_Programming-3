<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Price Check</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="price.js"></script>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="price.php">Check Price</a></li>
            <li><a href="sessionLogout.php">Logout</a></li>
        </ul>
    </nav>

    <div class="price-check-container">
        <h2>Price Check</h2>
        
        <form id="priceCheckForm">
            <label for="floor">Floor (1-10):</label>
            <input type="number" id="floor" name="floor" min="1" max="10" required><br>

            <label>Room Type:</label><br>
            <input type="radio" id="standard" name="room_type" value="standard" required>
            <label for="standard">Standard (500000)</label><br>
            <input type="radio" id="superior" name="room_type" value="superior">
            <label for="superior">Superior (750000)</label><br>
            <input type="radio" id="deluxe" name="room_type" value="deluxe">
            <label for="deluxe">Deluxe (1500000)</label><br>

            <label for="stay_length">Length of Stay (days):</label>
            <input type="number" id="stay_length" name="stay_length" min="1" required><br>

            <label>Discount:</label><br>
            <input type="radio" id="none" name="discount" value="none" checked>
            <label for="none">None</label><br>
            <input type="radio" id="member" name="discount" value="member">
            <label for="member">Member (10% Discount)</label><br>
            <input type="radio" id="birthday" name="discount" value="birthday">
            <label for="birthday">Birthday Promo (IDR 500 Discount)</label><br>

            <button type="button" onclick="calculatePrice()">Check</button>
        </form>

        <div id="totalPriceResult" class="result"></div>
    </div>

    <footer>
        <p>&copy; 2024 Hotel SoSo. All rights reserved.</p>
    </footer>

</body>
</html>
