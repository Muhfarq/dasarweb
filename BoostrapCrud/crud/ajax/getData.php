<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    echo json_encode(['error' => 'Invalid CSRF token']);
    exit;
}

$id = $_POST['id'];
$query = "SELECT * FROM anggota WHERE id=?";
$sql = $db1->prepare($query);
$sql->bind_param('i', $id);
$sql->execute();
$res1 = $sql->get_result();

$data = $res1->fetch_assoc();
echo json_encode($data);
$db1->close();
?>
