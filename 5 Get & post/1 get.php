<!DOCTYPE html>
<html>
<head>
	
	<title>get di php</title>
</head>
<body>
    <h1>GET di PHP</h1>
    <form action="1 get.php" method="get">
    	<input type="text" name="nama" placeholder="nama">
    	<input type="submit" value="submit">
    </form>
    <?php 
     echo $_GET['nama'];
     ?>
</body>
</html>