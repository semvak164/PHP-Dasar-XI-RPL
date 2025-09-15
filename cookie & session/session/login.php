<?php 
    session_start();

 if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    header("Location:dashboard.php");
}
  
  if (isset($_POST['login'])) {
         $username=$_POST['username'];
         $password=$_POST['password'];
      
      if ($username=="jefri"&& $password=="123") {
          $_SESSION['username']= $username;
           $_SESSION['password']= $password;
        

          header(":Location:dashboard.php");
      }else{
       $pesan="
             <div class=-danger mt-4' role='alert'>
             unsername dan password salah!
              </div>

              ";
    
  }



   }



 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login cookie</title>

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
      <div class="container-fluid bg-primary-subtle d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="card p-3 text-center">
        <form  method="post" action="">
          <h3>login</h3>
          <?php 
          if (isset($pesan)) {
             echo $pesan;
           } ?>
         
          <input type="text" placeholder="Input Username" name="username" class="form-control my-3" 
          placeholder="Input username">   
          <input type="password" placeholder=" Input Password" name="password" class="form-control my-3"
           placeholder="Input password"> 
          <button type="submit" name="login" class="btn btn-primary">login</button>
     </form> 
      </div>
      
</body>
</html>