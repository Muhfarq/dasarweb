<?php
$targetdir = "documents/";

// Membuat folder jika belum ada
if (!file_exists($targetdir)) {
    mkdir($targetdir, 0777, true);
}

// Memeriksa apakah ada file yang diunggah
if (isset($_FILES['files'])) {
    $totalFiles = count($_FILES['files']['name']);
    
    // Memproses setiap file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetdir . basename($fileName);
        
        // Memindahkan file ke folder tujuan
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah file $fileName.<br>";
        }
    }
} else {
    echo "Tidak ada file diunggah.";
}
?>
