<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = trim($_POST['nama']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $errors = [];

    // Validate nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    // Validate email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Validate password
    if (strlen($password) < 8) {
        $errors[] = "Password harus minimal 8 karakter.";
    }

    // If there are no errors, process the form
    if (empty($errors)) {
        // Here you can save the data to the database, send email, etc.
        echo "Form submitted successfully!";
    } else {
        // Output errors
        echo implode("<br>", $errors);
    }
}
?>
