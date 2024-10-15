$(document).ready(function () {
    $('#upload-form').submit(function (e) { 
        e.preventDefault();
        
        var formData = new FormData(this);

        $.ajax({
            type: "POST",
            url: "ajaxUpload.php",
            cache: false, 
            contentType: false,
            processData: false,
            data: formData,
            success: function (response) {
                $('#status').html(response);
            },
            error: function (){
                $('#status').html('Terjadi kesalahan saat mengunggah file');
            }
        });

    });
});
