<!--*
	* @Author Arman Nugraha
	* JWD
	* Since 19 November 2019
	* Tugas 6 PHP
	*-->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		// $input = 5 * 2;
		// $input = 5 * 2 + 1;
		$input = 5;

		$bilang_fakt = 1;

		for ($i=1; $i <= $input; $i++) { 

			// genap
			if ($i % 2 == 0) {
				// echo $i;
			}

			//ganjil
			if ($i % 2 == 1) {
				// echo $i;
			}

			// faktorial
			$bilang_fakt = $bilang_fakt*$i;

			// bilangan prima

			$a = 0;

			for ($j=1; $j <= $i; $j++) { 
				if ($i % $j == 0) {
					$a++;
				}
			}

			if ($a == 2) {
				// echo $i . '<br>';
			}

		}

		// echo $bilang_fakt;

		for ($i=1; $i <= $input; $i++) { 

			

		}

		// var_dump($bilang_fakt);

		die();

		$crtable = '';

		$jumlah_tb = 2;

		if ($_POST){

			$jumlah_tb = $_POST['jumlah'];

		}

		$crtable .= '<table border="1">';

		$colors = ["#f0f70c", "#cf1208", "#fabf0c"];

		for ($i = 0; $i < $jumlah_tb; $i++) {
			$crtable .= '<tr>';
			for ($j = 0; $j < $jumlah_tb; $j++) {

				$rand_color = rand(0,2);

				$crtable .= '<td width="50" bgcolor="'.$colors[$rand_color].'">'.$i.'</td>';
			}
			$crtable .= '</tr>';
		}

		$crtable .= '</table>';

	?>

	<form action="" method="post">
		<table border="0" width="200">
			<tr>
				<td width="80"><label>Jumlah:</label></td>
				<td width="120"><input type="text" name="jumlah" value="<?php echo $jumlah_tb; ?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="right">
					<input type="submit" value="Create Table">
				</td>
			</tr>
		</table>
	</form>
	<br/>
	<br/>

	<?php
		echo $crtable;
	?>


</body>
</html>