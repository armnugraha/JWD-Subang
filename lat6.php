<!--*
	* @Author Arman Nugraha
	* JWD
	* Since 19 November 2019
	* Lat 6 PHP
	*-->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		$filetext = fopen("file.txt", "r");
		echo fread($filetext, filesize("file.txt"));
		fclose($filetext);
	?>

</body>
</html>