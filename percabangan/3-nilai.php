<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Nilai 3</title>
</head>
<body>
    <?php
    $na = -100;

        if ($na >= 101){
             echo("Keterangan : Nilai tidak valid");
            echo "<br>";
            echo("Predikat : Nilai tidak valid");
            echo "<br>";
            echo("Nilai akhir :". $na);
            echo "<br>";
        }
        else if ($na >= 90){
            echo("Keterangan : Lulus");
            echo "<br>";
            echo("Predikat : A");
            echo "<br>";
            echo("Nilai akhir :". $na);
            echo "<br>";
        }else if ($na >= 80){
            echo "<br>";
            echo("Keterangan : Lulus");
            echo "<br>";
            echo("Predikat : B");
            echo "<br>";
            echo("Nilai akhir :". $na);
            echo "<br>";
        }else if ($na >= 70){
            echo("Keterangan : Lulus");
            echo "<br>";
            echo("Predikat : C");
            echo "<br>";
            echo("Nilai akhir :". $na);
            echo "<br>";
        }else if ($na >= 60){
            echo("Keterangan : Tidak Lulus");
            echo "<br>";
            echo("Predikat : D");
            echo "<br>";
            echo("Nilai akhir :". $na);
            echo "<br>";
        }else if ($na >= 0){
            echo("Keterangan : Tidak Lulus");
            echo "<br>";
            echo("Predikat : E");
            echo "<br>";
            echo("Nilai akhir :". $na);
        }else if ($na <= -1){
            echo("Keterangan : Nilai tidak valid");
            echo "<br>";
            echo("Predikat : Nilai tidak valid");
            echo "<br>";
            echo("Nilai akhir :". $na);
        }
    ?>
</body>
</html>