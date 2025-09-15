<?php 
    session_start();
    if (isset($_POST['buat'])) {
   	$namaSession=$_POST['session'];
   	// membuat session
   $_SESSION['isi']= $namaSession;
    header("Location:session.php");
    }
     // ketika button hapus di klik
    if (isset($_POST['hapus'])) {
    session_unset();
    header("Location:session.php");
    }
    
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>session</title>
</head>
<body>
     <h1>session akan muncul dibawah!</h1>
     <?php if (isset($_SESSION['isi'])): ?>
     <h4>sekarang makan kue <?= $_SESSION['isi']?></h4>
 <?php endif ?>
     <form method="post" action="">
     	<input type="text" name="session">
     	<button type="submit" name="buat">buat</button>
     	<button type="submit" name="hapus">hapus</button>
     </form>
</body>
</html>