<html lang="en">
<head>
    <title>Multiupload Document</title>
</head>
<body>
    <h2>Unggah Dokumen</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".jpg, .jpeg, .gif, .svg">
        <input type="submit" value="unggah">
    </form>
</body>
</html>
