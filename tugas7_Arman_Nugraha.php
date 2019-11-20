<!--*
	* @Author Arman Nugraha
	* JWD
	* Since 19 November 2019
	* Tugas 7 PHP
	*-->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		$crtable = '';

		$jumlah_tb = 5;

		if ($_POST){

			$jumlah_tb = $_POST['jumlah'];

		}

		$r0 = 240;
        $g0 = 0;
        $b0 = 0;
        $count_total_sq = $jumlah_tb*2;

		$crtable .= '<table border="1">';

		// $colors = ["#f0f70c", "#cf1208", "#fabf0c"];

		$count_total_sq = $jumlah_tb*2;

        for ($i = 0; $i < $jumlah_tb; $i++) {

            $crtable .= '<tr>';
            for ($j = 0; $j < $jumlah_tb; $j++) {
                $set_percent = ($i+$j) / $count_total_sq;
                $torgb = $set_percent * 255;

                $r = $r0;
                $g = $g0;
                $b = $b0;
                $g = $g0 + $torgb;
    
                $crtable .= "<td width='50' style='background-color:rgb($r, $g, $b)'>&nbsp;</td>";
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