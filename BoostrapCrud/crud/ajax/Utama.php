<?php
include "auth.php"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
    <meta name="csrf-token" content="<?php echo $_SESSION['csrf_token'] ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWvCO0pAR3eZrvnx7LQ9jAN1Md6cp8rFiN5N4CE5d5ZL6I5qPQ5Yy0K" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php" style="color: #fff;">
            CRUD dengan Ajax
        </a>
    </nav>
    <div class="container" style="margin-top: 30px;">
        <h3>Data Anggota</h3>
        <form action="post" class="form-data" id="form-data">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" name="nama" id="nama" class="form-control" required="true">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" required="true"> Laki-laki
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P"> Perempuan
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
                    </div>
                    <div class="form-group">
                        <label>No Telp</label>
                        <input type="text" name="no_telp" id="no_telp" class="form-control" required="true">
                    </div>
                    <div class="form-group">
                        <button type="button" name="simpan" id="simpan" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
                <div class="col-sm-8">
                    <h3>Data</h3>
                    <div id="content-data"></div>
                </div>
            </div>
        </form>
    </div>
    <div class="text-center">© <?php echo date("Y"); ?> Copyright:
        <a href="https://google.com"> Design Dan Pemrograman Web</a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#simpan').on('click', function() {
                var form_data = $('.form-data').serialize();
                $.ajax({
                    type: 'POST',
                    url: 'simpan.php',
                    data: form_data,
                    success: function() {
                        $('#content-data').load('data.php');
                    }
                });
            });
            $('#content-data').load('data.php');
        });
    </script>
</body>
</html>
