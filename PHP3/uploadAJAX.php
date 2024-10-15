<html>
    <head>
        <title>Unggah file dokumen</title>
    </head>

    <body>
        <form id="upload-form" action="uploadAjax.php" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" id="file" multiple="multiple"> 
            <input type="submit" name="submit" value="unggah">
        </form>
        <div id="status"></div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
        <script src="upload.js"></script>
    </body>
</html>
