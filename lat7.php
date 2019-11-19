<!--*
	* @Author Arman Nugraha
	* JWD
	* Since 19 November 2019
	* Lat 7 PHP
	*-->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db = "perpus";

		$con = mysqli_connect($host,$user,$pass,$db);

		if (!$con) {
			die("Tidak berhasil terhubung".mysqli_connect_error() );
		}

		$sql = "SELECT * FROM buku";
		$result = mysqli_query($con,$sql);
		
		if (mysqli_num_rows($result) > 0 ) {
			
			while ($row = mysqli_fetch_assoc($result)) {
				echo "id : " . $row["id"] . "<br>";
				echo "judul : " . $row["judul"] . "<br>";
				echo "pengarang : " . $row["pengarang"] . "<br>";
				echo "tahun : " . $row["tahun"] . "<br>";
			}
			
		}else{
			echo "Tabel Kosong";
		}

	?>

</body>
</html>