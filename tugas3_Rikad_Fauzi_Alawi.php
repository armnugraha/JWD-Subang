<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form>
        Panjang : <input type="text" name="p" required> <br>
        Lebar : <input type="text" name="l" required> <br>
        Tinggi : <input type="text" name="t" required> <br>

        <input type="submit">
    </form>

    <?php

        if(!empty($_GET['p']) && !empty($_GET['l']) && !empty($_GET['t'])) {
            $p = $_GET['p'];
            $l = $_GET['l'];
            $t = $_GET['t'];
    
            $v = $p * $l * $t * 1/3;
            echo 'hasilnya = ';
            echo $v;
        }
    ?>
</body>
</html>