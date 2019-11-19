<!--*
	* @Author Arman Nugraha
	* JWD
	* Since 19 November 2019
	* Tugas 4 PHP
	* tugas 4 buat aplikasi untuk membuat password berdasarkan nama
	* menggunakan input form html, terdiri nama
	* input tdk boleh kosong, dan tidak boleh keluar notice
	* ketentuan pasw yg dihasilkan :
	* - semua huruf mati menjadi huruf besar
	* - huruf a menjadi angka 4
	* - huruf i menjadi tanda seru (!)
	* - huruf o menjadi angka 0
	* - huruf s menjadi tanda dolar ($)
	* hasil disimpan dalam file history yg ditampilkan ke layar juga
	*-->

<!DOCTYPE html>
<html>
<head>
	<title>Generate Password By Name</title>
</head>
<body>
	<form>
		Nama : <input type="text" name="nama" required> <br>
		<input type="submit"> <br>
	</form>

	<?php
		if (!empty($_GET["nama"])) {

			$getName = $_GET["nama"];

			$changeText = str_replace("a", 4, $getName);
			$changeText = str_replace("i", "!", $changeText);
			$changeText = str_replace("o", 0, $changeText);
			$changeText = str_replace("s", "$", $changeText);

			$changeTextUpper = strtoupper($changeText);

			$myFile = "password.txt";

			$create = fopen($myFile, 'a') or die("can't open file");
			$stringData = "Input : " . $getName . "<br>" . "Output : " . $changeTextUpper . "<br>";
			fwrite($create, $stringData);

			echo "<br>Hasil file password : <br>";

			$read = fopen($myFile, "r");
			echo fread($read, filesize($myFile));

			fclose($create);

		}
	?>

</body>
</html>