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
    <title>Hotel Profile - Home</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
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

    <div class="home-container">
        <h2>Welcome to our hotel, <?= htmlspecialchars($_SESSION['username']) ?></h2>

        <!-- Hotel Profile Section -->
        <div class="hotel-profile">
            <h4>Hotel Profile</h4>
            <p>
                Welcome to our luxurious hotel, where comfort meets style. Our hotel offers the best facilities and
                top services to make your stay memorable. Whether you're here for business or pleasure,
                we ensure that your experience is one of a kind. We over you the cheapest price range at the town with great 
                facilities that will make you have wonderful experience with us.
            </p>
        </div>

        <!-- Banner Slider Section -->
        <div class="slider">
            <div class="slide">
                <img src="img/banner1.jpg" alt="Banner 1">
            </div>
            <div class="slide">
                <img src="img/banner2.jpg" alt="Banner 2">
            </div>
            <div class="slide">
                <img src="img/banner3.jpg" alt="Banner 3">
            </div>
        </div>
        <div class="main-content">
        </div>
    </div>
    
    <footer>
        <p>&copy; 2024 Hotel SoSo. All rights reserved.</p>
    </footer>

</body>
</html>
