<!--*
	* @Author Arman Nugraha
	* JWD
	* Since 18 November 2019
	* Lat 5 PHP
	*-->

<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang</title>
</head>
<body>
	<form method="get" action="lat5.php">
		nama : <input type="text" name="nama" required> <br>
		<input type="submit"> <br>
	</form>

	<?php
		if (isset($_GET["nama"])) {
			$coba = $_GET["nama"];
			echo $coba;
		}
	?>
</body>
</html>