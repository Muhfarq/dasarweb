<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    echo json_encode(['error' => 'Invalid CSRF token']);
    exit;
}

$id = $_POST['id'];
$query = "DELETE FROM anggota WHERE id=?";
$sql = $db1->prepare($query);
$sql->bind_param("i", $id);
$sql->execute();

echo json_encode(['success' => 'Data berhasil dihapus']);
$db1->close();
?>
