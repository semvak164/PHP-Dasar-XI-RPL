<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>nilai 2</title>
</head>
<body>
	<?php 
      $nilai = 80;
      if ($nilai >= 80) {
      	 echo "Nilai anda $nilai, anda lulus";
       } elseif ($nilai >= 60) {
       	echo "Nilai anda $nilai, anda remedial";
       } else {
       	echo "Nilai anda $nilai, anda tidak lulus";
       }
	 ?>

</body>
</html>