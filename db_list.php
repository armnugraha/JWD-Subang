<!--*
	* @Author Arman Nugraha
	* JWD
	* Since 19 November 2019
	* DB List PHP
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
$db   = "perpus";
$con  = mysqli_connect($host,$user,$pass,$db);

if (!$con) {
	die("koneksi db tidak berhasil: ".mysqli_connect_error());
}

$carijudul = "";

if (!empty($_GET["judul"])) {
	$carijudul = $_GET["judul"];
}

?>

<form method="get">
	cari:<input type="text" 
		name="judul" 
		placeholder="judul" 
		value="<?php echo $carijudul; ?>">
	<input type="submit" name="cari">
</form>

<?php

$sql = "select * from buku where judul like '%".$carijudul."%'";

$result = mysqli_query($con,$sql);


if(mysqli_num_rows($result)>0) {
	echo "<table border=1>";
	echo "<tr>";
	echo "<td>id</td><td>judul</td><td>pengarang</td><td>tahun</td><td>aksi</td>";
	echo "</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["judul"]."</td>";
		echo "<td>".$row["pengarang"]."</td>";
		echo "<td>".$row["tahun"]."</td>";
		echo "<td><a href='db_update.php?id=".$row["id"]." '>Edit</a></td>";
		echo "</tr>";
	}
	echo "</table>";
} else {
	echo "tabel kosong / tidak ada hasil pencarian";
}

?>


</body>
</html>