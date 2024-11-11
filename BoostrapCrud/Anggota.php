<!DOCTYPE html>
<html>
<head>
  <title>Data Anggota</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    <h2>Data Anggota</h2>
    <a class="btn btn-success mt-2" href="create.php">Tambah Data</a>

    <?php
    // Koneksi ke database (asumsikan koneksi sudah dibuat di file koneksi.php)
    include("koneksi.php");

    // Query untuk mengambil data anggota dari database
    $query = "SELECT * FROM anggota ORDER BY id DESC";
    $result = mysqli_query($koneksi, $query);

    // Tampilkan data anggota dalam bentuk tabel
    if (mysqli_num_rows($result) > 0) {
    ?>
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>No. Telp</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
          $jenisKelamin = ($row["jenis_kelamin"] == 'L') ? 'Laki-laki' : 'Perempuan';
        ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row["nama"]; ?></td>
          <td><?php echo $jenisKelamin; ?></td>
          <td><?php echo $row["alamat"]; ?></td>
          <td><?php echo $row["no_telp"]; ?></td>
          <td>
            <a class="btn btn-primary" href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
            <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#hapusModal<?php echo $row["id"]; ?>">Hapus</a>
          </td>
        </tr>
        <div class="modal fade" id="hapusModal<?php echo $row["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Apakah Anda yakin ingin menghapus data dengan nama "<?php echo $row["nama"]; ?>"?
              </div>
              <div class="modal-footer">
                <a class="btn btn-danger" href="proses.php?aksi=hapus&id=<?php echo $row["id"]; ?>">Hapus</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </tbody>
    </table>
    <?php
    } else {
      echo "Tidak ada data.";
    }
    ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>