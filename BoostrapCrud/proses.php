<?php
include("koneksi.php"); // Pastikan koneksi ke database diimpor

if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];
    
    if ($aksi == 'ubah' && isset($_POST['id'])) {
        // Mendapatkan data dari form
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
        
        // Query untuk mengupdate data anggota
        $query = "UPDATE anggota SET 
                    nama = '$nama', 
                    jenis_kelamin = '$jenis_kelamin', 
                    alamat = '$alamat', 
                    no_telp = '$no_telp'
                  WHERE id = '$id'";
        
        if (mysqli_query($koneksi, $query)) {
            header("Location: Anggota.php"); // Redirect ke halaman Anggota jika berhasil
            exit(); // Gunakan exit setelah header redirection
        } else {
            echo "Gagal mengupdate data: " . mysqli_error($koneksi);
        }
    } elseif ($aksi == 'hapus' && isset($_GET['id'])) {
        // Mendapatkan ID untuk menghapus data
        $id = $_GET['id'];
        
        // Query untuk menghapus data anggota
        $query = "DELETE FROM anggota WHERE id = '$id'";
        
        if (mysqli_query($koneksi, $query)) {
            header("Location: Anggota.php"); // Redirect ke halaman Anggota jika berhasil
            exit();
        } else {
            echo "Gagal menghapus data: " . mysqli_error($koneksi);
        }
    } else {
        echo "Aksi tidak valid atau ID tidak ada.";
    }
} else {
    echo "Aksi tidak ditemukan.";
}
