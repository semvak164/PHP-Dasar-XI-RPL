</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>Eata Siswa</title>
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
      edit siswa
    </div>  
      <div class="card-body">
        <div class="row">
          <div class="col-3">
            <img src="../foto/<?= $_GET['foto'] ?>" class="rounded" style="widht: 100%;">
        </div>
        <div class="col-6">
            <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="email" value="<?= $_GET['Nama'] ?> "class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">NISN</label>
    <input type="text"value="<?= $_GET['NISN'] ?> "class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Kelas</label>
    <input type="text"  value="<?= $_GET['Kelas'] ?> "class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <input type="text"  value="<?= $_GET['Alamat'] ?>"class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gender</label>
    <input type="text" value="<?= $_GET['Gender'] ?>"class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    
  </div>
 
  <a href="data_siswa.php"></a>
</form>


          <a href="#" class="btn btn-cyan
          ">simpan</a>
            <a href="data_siswa.php" class="btn btn-warning">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html> 