<?php
session_start();
error_reporting(E_ALL); 
ini_set('display_errors', 1); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $valid_username = 'Aqilla Aprily'; 
    $valid_password = 'tata234'; 

    if (empty($username) || empty($password)) {
        echo "<script>alert('Must be filled'); window.history.back();</script>";
        exit;
    }

    if (strlen($password) < 5) {
        echo "<script>alert('Password is at least 5 characters'); window.history.back();</script>";
        exit;
    }

    if (!preg_match('/[A-Za-z]/', $password) || !preg_match('/[0-9]/', $password)) {
        echo "<script>alert('Password must consist of letters and numbers'); window.history.back();</script>";
        exit;
    }
    
    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: home.php"); 
        exit;
    } else {
        echo "<script>alert('Invalid username or password'); window.history.back();</script>";
        exit;
    }
}
?>
