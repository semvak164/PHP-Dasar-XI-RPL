<?php 
   
    $students = [
            ['01002', 'dadi', 'xi rpl', 'jl.bagus yabin', 'laki-laki', '1.jpg'],
              ['02345', 'jojo', 'xi rpl', 'jl.arif rahman', 'laki-laki', '2.jpg'],
              ['07654', 'udin', 'xi rpl', 'jl.cijambe','laki-laki','3.jpg'],
              ['06548', 'supri', 'xi rpl', 'jl.pondok indah','laki-laki','4.jpg'],
             ];
             $no=1;
             ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>data siswa</title>
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js
"></script>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid bg-primary-subtle py-5">
    <div class="container">
           <!-- card -->
           <div class="card">
            <div class="card-header">
              data siswa
            </div>
            <div class="card-body">
              <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Foto</th>
      <th scope="col">NAMA</th>
      <th scope="col">NIIN</th>
      <th scope="col">Gender</th>
      <th scope="col">Kelas</th>
      <th scope="col">Alamat</th>
       <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($students as $student) : ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><img src="../foto/<?= $student['5'] ?>"style="height: 100px;"></td>
      <td><?= $student['0'] ?></td>
      <td><?= $student['1'] ?></td>
      <td><?= $student['2'] ?></td>
      <td><?= $student['3'] ?></td>
      <td><?= $student['4'] ?></td>
      <td>
         
         <a href="edit siswa.php?foto=<?=$student['5']?>
              &Nama= <?=$student ['1']?>
              &NISN= <?=$student ['0']?>
              &Kelas= <?=$student ['2']?>
              &Alamat= <?=$student ['3']?>
              &Gender= <?=$student ['4']?> "class="btn btn-success"><i class="bi bi-pencil"></i></a>
              <a href="detail.php?foto=<?=$student['5']?>
              &Nama= <?=$student ['1']?>
              &NISN= <?=$student ['0']?>
              &Kelas= <?=$student ['2']?>
              &Alamat= <?=$student ['3']?>
              &Gender= <?=$student ['4']?> " class="btn btn-primary"><i class="bi bi-list"></i></a>
             
    </tr>
     <?php $no++ ?>
<?php endforeach ?>
  </tbody>
</table>
            </div>
            
           </div>
      
    </div> 
    
    </div>
</body>
</html>