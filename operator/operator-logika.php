<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>operator logika</title>
</head>
<body>
	 <?php 
      $N =true;
      $I =false;

      echo "==OPERATOR LOGIKA==";
      echo "<br>";
      echo "true && false :";
       var_dump($N && $I);
      echo "<br>";
      echo "fales && fales :"; 
       var_dump($I && $I);
      echo "<br>";
      echo "true && true :";
       var_dump($N && $N);
      echo "<br>";
      echo "fales && fales :"; 
       var_dump($I && $I);
           echo "<br><br>";

         echo "==OPERATOR LOGIKA OR==";
            echo "<br>";
        echo "N || I  :"; var_dump($N || $I);
        echo "<br>";
        echo "I || I  :";   var_dump($I || $I);
        echo "<br>";
        echo "N || N  :";  var_dump($N || $N);
        echo "<br>";
        echo "I || N  :";  var_dump($I || $I);
        echo "<br><br>";
        
        
        echo "==OPERATOR LOGIKA NEGASI==";
        echo "<br>";
        echo "I :"; var_dump(!$I );
        echo "<br>";
        echo "N :"; var_dump(!$N );
        echo "<br>";
	  ?>

</body>
</html>