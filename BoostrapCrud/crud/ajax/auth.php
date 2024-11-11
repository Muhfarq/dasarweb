<?php
session_start();

// Dummy authentication check
if (!isset($_SESSION['user_logged_in'])) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit();
}
?>
