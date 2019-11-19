<!--*
	* @Author Arman Nugraha
	* JWD
	* Since 18 November 2019
	* Tugas 2 PHP
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
		
		function bintang($n=3)
		{
			for ($i=0; $i <= $n; $i++) { 
				for ($j=0; $j<=$i; $j++) { 
					echo"*";
				}
				echo"<br>";
			}
		}

		bintang(5);

		function bintang2($n=3)
		{
			for ($i=$n; $i >= 0; $i--) { 
				for ($j=0; $j<=$i; $j++) { 
					echo"*";
				}
				echo"<br>";
			}
			
		}

		bintang2(5);

		// buat func untuk mengganti seluruh huruf hidup dalam string dengan i
		echo"<br>";
		function ganti($value='selamat datang')
		{
			$str = str_replace("a", "i", $value);
			$str = str_replace("e", "i", $str);

			return $str;
		}

		echo ganti('selamat datang');
	 ?>
</body>
</html>