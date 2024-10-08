<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi dan AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Form Input dengan Validasi</h2>

    <form id="myForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Prevent default form submission

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Reset error messages
                $("#nama-error").text("");
                $("#email-error").text("");
                $("#password-error").text("");

                // Validate form fields
                if (nama == "") {
                    $("#nama-error").text("Nama harus diisi");
                    valid = false;
                }

                if (email == "") {
                    $("#email-error").text("Email harus diisi");
                    valid = false;
                }

                if (password.length < 8) {
                    $("#password-error").text("Password minimal 8 karakter");
                    valid = false;
                }

                // If validation is successful, proceed with AJAX request
                if (valid) {
                    $.ajax({
                        url: "proses_validasi.php", // Server-side script for processing
                        method: "POST",
                        data: {
                            nama: nama,
                            email: email,
                            password: password
                        },
                        success: function(response) {
                            alert("Data berhasil dikirim: " + response);
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert("Terjadi kesalahan: " + textStatus);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
