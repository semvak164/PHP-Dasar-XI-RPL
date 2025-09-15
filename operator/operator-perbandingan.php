<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>operator perbandingan</title>
</head>
<body>
     <?php 
       $a =10;
       $b =20;

       echo "== OPERATOR PERBANDINGAN ==";
        echo "<br>";
        echo "NILAI A adalah $a dan nilai B adalah  $b";
        echo "<br><br>";
        echo "A == B :";
        var_dump($a == $b);
        echo "<br>";
        echo "A != B :";
        var_dump($a != $b);
        echo "<br>";
        echo "A > B :";
        var_dump($a > $b);
        echo "<br>";
        echo "A < B :";
        var_dump($a < $b);
        echo "<br>";
        echo "A >= B :";
        var_dump($a >= $b);
        echo "<br>";
        echo "A <= B :";
        var_dump($a <= $b);
        echo "<br>";
       
     ?>
</body>
</html>