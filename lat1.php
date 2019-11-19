<!--*
	* @Author Arman Nugraha
	* JWD
	* Since 18 November 2019
	* Lat 1 PHP
	*-->

<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang</title>
	<style type="text/css">
		td{
			padding: 15px;
		}
	</style>
</head>
<body>
	<?php 
		// echo "Hellow world";

		function tulis()
		{
			echo "Hellow world <br>";
		}

		tulis();
		tulis();
		tulis();

		function luas_persegi($p=1,$l=1)
		{
			$h = $p*$l;

			return $h;
		}

		echo luas_persegi(5,5);
		echo "<br>";
		echo luas_persegi();
		echo "<br>";

		function luas_segitiga($a=1,$t=1)
		{
			$h = $a*$t/2;

			return $h;
		}

		echo luas_segitiga(5,5);
		echo "<br>";

		function luas_segitiga2($a=3,$t1=3,$t2=3)
		{

			$h = luas_segitiga($a,$t1) + luas_persegi($a,$t2);

			return $h;
			
		}

		echo luas_segitiga2();
		echo "<br>";


	 ?>
</body>
</html>