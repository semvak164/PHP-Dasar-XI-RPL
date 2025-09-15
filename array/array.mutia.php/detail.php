<!DOCTYPE html>
<html>
<head>
  <title>Data Siswa</title>
  <!-- menghubungkan CDN CSS menggunakan boostrap -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
  <!-- menghubungkan CDN JS menggunakan boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  <!-- menghubungkan CDN IKON mengunakan boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>
<body>
  <div class="container-fluid bg-primary-subtle py-5">
    <div class="container">
      <!-- card -->
    <div class="card">
    <div class="card-header">
      detail siswa
    </div>  
      <div class="card-body">
        <div class="row">
          <div class="col-3">
            <img src="../foto/<?= $_GET['foto'] ?>" class="rounded" style="widht: 100%;">
        </div>
        <div class="col-6">
          <table>
            <tr>
              <td><h5>Nama</h5></td>
              <td><h5>:</h5></td>
              <td><h5><?= $_GET ['Nama'] ?></h5></td>
            </tr>

            <tr>
              <td><h5>NISN</h5></td>
              <td><h5>:</h5></td>
              <td><h5><?= $_GET ['NISN'] ?></h5></td>
            </tr>

            <tr>
              <td><h5>Kelas</h5></td>
              <td><h5>:</h5></td>
              <td><h5><?=$_GET['Kelas'] ?></h5></td>
            </tr>

            <tr>
              <td><h5>Alamat</h5></td>
              <td><h5>:</h5></td>
              <td><h5><?= $_GET ['Alamat'] ?></h5></td>
            </tr>

            <tr>
              <td><h5>Gender</h5></td>
              <td><h5>:</h5></td>
              <td><h5><?= $_GET ['Gender'] ?></h5></td>
            </tr>
          </table>
            <a href="data_siswa.php" class="btn btn-warning">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html> ,