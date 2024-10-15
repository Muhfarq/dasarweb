<?php
if (isset($_FILES['files'])) { // Handle 'files[]' array
    $errors = array();
    $allowed_extensions = array("jpg", "jpeg", "png", "svg");
    $max_size = 2097152; // 2MB

    // Loop through each file
    foreach ($_FILES['files']['name'] as $key => $file_name) {
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        
        // Fixed the variable issue
        $file_parts = explode('.', $file_name); // Assign to variable first
        $file_ext = strtolower(end($file_parts)); // Use the variable in end()

        // Validate file extension
        if (!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "$file_name: Ekstensi file yang diizinkan hanyalah pdf, doc, docx, atau txt.";
        }

        // Validate file size
        if ($file_size > $max_size) {
            $errors[] = "$file_name: Ukuran file tidak boleh lebih dari 2 MB.";
        }

        // If no errors, move the uploaded file
        if (empty($errors)) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            echo "$file_name berhasil diunggah.<br>";
        } else {
            // Display errors
            echo implode("<br>", $errors);
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
