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
		$db   = "perpus";
		$con  = mysqli_connect($host,$user,$pass,$db);

		if (!$con) {
			die("koneksi db tidak berhasil: ".mysqli_connect_error());
		}

		if (!empty($_GET["id"])) {

			$sql = "select * from buku where id =".$_GET["id"]."";

			$result = mysqli_query($con,$sql);

			$row = mysqli_fetch_assoc($result);

		?>

			<form method="post">
				<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
				judul:<input type="text" name="judul" required value="<?php echo $row['judul'] ?>"> <br>
				pengarang:<input type="text" name="pengarang" required value="<?php echo $row['pengarang'] ?>"> <br>
				tahun:<input type="text" name="tahun" required value="<?php echo $row['tahun'] ?>"> <br>
				<input type="submit" name="update">
			</form>

		<?php
			
		}else{
			echo "silahkan update dari <a href='db_list.php'>List</a>";
		}

	?>

<?php

if (!empty($_POST["judul"])) {

	$sql = "udpate buku set judul=".$_POST["judul"].",pengarang=".$_POST["pengarang"].",tahun=".$_POST["tahun"]." where id=".$_POST["id"]." ";

	if(mysqli_query($con,$sql)) {
		echo "berhasil udpate 1 baris ";
?>
		<a href="db_list.php">kembali ke list</a>
<?php			
	} else {
		echo "gagal update";
	}
}

?>

</body>
</html>