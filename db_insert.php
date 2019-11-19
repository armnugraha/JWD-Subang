db_insert.php

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post">
	judul:<input type="text" name="judul" required> <br>
	pengarang:<input type="text" name="pengarang" required> <br>
	tahun:<input type="text" name="tahun" required> <br>
	<input type="submit" name="insert">
</form>

<?php

if (!empty($_POST["judul"])) {

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "perpus";
	$con  = mysqli_connect($host,$user,$pass,$db);

	if (!$con) {
		die("koneksi db tidak berhasil: ".mysqli_connect_error());
	}

	$sql = "insert into buku (judul,pengarang,tahun)
		values ('".$_POST["judul"]."',
		'".$_POST["pengarang"]."',
		".$_POST["tahun"].")";

	if(mysqli_query($con,$sql)) {
		echo "berhasil masuk 1 baris ";
?>
		<a href="db_list.php">kembali ke list</a>
<?php			
	} else {
		echo "gagal insert";
	}
}

?>

</body>
</html>