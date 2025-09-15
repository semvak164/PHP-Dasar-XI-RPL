    <?php 
    $u="admin";
     $p="123";

      //proses


      $iu= $_POST['username'];
    $ip= $_POST['password'];
      echo "<br>";

 //decision / percabangan

 if ($iu == $u && $ip == $p){
        echo "berhasil login";
        header("location:dashboard.php");
  }else{
       echo "gagal login";      
 }

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login php</title>
</head>
<body>
	<form action=""method="post">
	   <input type="text" name="username"><br>	
	   <input type="password" name="password" id="password"><br>	
	   <input type="submit" value="login">
	</form>

</body>
</html>