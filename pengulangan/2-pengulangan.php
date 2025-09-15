<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>pengulangan</title>
</head>
<body>
     <h1>pengulangan</h1>
      <h2>for</h2>
      <?php 
     for ($i= 1; $i <= 5; $i++) { 
     	  echo "hllo njep<br>";
     }
     ?>

     <h2>while</h2>

     <?php 
      $i= 9;
      while ($i = 5) {
      	 echo "hello husen <br>";
      	  $i++;
      }
      ?>

      <h2>DO while </h2>
      <?php 
         $i <= 5;
         do {
         	echo "hallo naaa<br>";
         	$i++;
         } while ($i <= 5);
       ?>
</body>
</html>