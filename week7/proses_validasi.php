<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
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

    // Validate Password
    if (empty($password)) {
        $errors[] = "Password harus diisi.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password harus terdiri dari minimal 8 karakter.";
    }

    // Check for errors
    if (!empty($errors)) {
        echo implode("<br>", $errors);
    } else {
        echo "Data berhasil dikirim: Nama = $nama, Email = $email, Password = " . str_repeat('*', strlen($password));
    }
}
?>