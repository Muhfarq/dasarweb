<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $allowed_extensions = array("jpg", "jpeg", "png", "svg", "pdf", "doc", "docx", "txt");
    $max_size = 2097152; // 2MB

    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];

    $file_parts = explode('.', $file_name);
    $file_ext = strtolower(end($file_parts));

    // Validate file extension
    if (!in_array($file_ext, $allowed_extensions)) {
        $errors[] = "$file_name: Ekstensi file yang diizinkan hanyalah " . implode(", ", $allowed_extensions) . ".";
    }

    // Validate file size
    if ($file_size > $max_size) {
        $errors[] = "$file_name: Ukuran file tidak boleh lebih dari 2 MB.";
    }

    // If no errors, move the uploaded file
    if (empty($errors)) {
        if (move_uploaded_file($file_tmp, "documents/" . $file_name)) {
            echo "$file_name berhasil diunggah.<br>";
        } else {
            echo "Terjadi kesalahan saat menyimpan file.";
        }
    } else {
        // Display errors
        echo implode("<br>", $errors);
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
