<!--*
	* @Author Arman Nugraha
	* JWD
	* Since 18 November 2019
	* Tugas 3 PHP
	*tugas 3 buat kalkulator penghitung volume pyramid
	*menggunakan input form html, terdiri dari panjang, lebar, tinggi
	*input tdk boleh kosong, dan tidak boleh keluar notice
	*-->

<!DOCTYPE html>
<html>
<head>
	<title>Hitung Volume Pyramid</title>
</head>
<body>
	<form method="get" action="tugas3.php">
		Panjang : <input type="number" name="pj" required> <br>
		Lebar : <input type="number" name="lb" required> <br>
		Tinggi : <input type="number" name="tt" required> <br>
		<input type="submit"> <br>
	</form>

	<?php
		if (!empty($_GET["pj"]) && !empty($_GET["lb"]) && !empty($_GET["tt"])) {
			$rumus = (1/3)*$_GET["pj"]*$_GET["lb"]*$_GET["tt"];
			echo "Hasilnya adalah : " . $rumus;
		}
	?>

</body>
</html>