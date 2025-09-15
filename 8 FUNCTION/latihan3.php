<?php 
    $pelajar= "udin komarrudin";
    
     function siswa( $nama="kusen", $kelas="xi rpl"){
     	 global $pelajar; //mengambil pariabel dri luar function
   	  echo "siswa kelas $kelas yg bernama $pelajar
   	  selalu rajin";
   }

    siswa();

 ?>