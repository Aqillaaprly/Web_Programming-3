<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $errors = array();

    // Validate Nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    // Validate Email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Check for errors
    if (empty($errors)) { // Fixed syntax here
        echo "Data berhasil dikirim: Nama = $nama, Email = $email";
    } else {
        foreach ($errors as $error) { // Fixed syntax here
            echo $error . "<br>";
        }
    }
}
?>
