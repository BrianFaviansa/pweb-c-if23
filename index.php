<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tes PHP</h1>

    <?php

    echo "Hello, World!";

    echo "<h1><br>Ini adalah header</h1>";

    $matkul = "Pemrograman Web";
    $sks = 2;

    echo "Matkul : $matkul <br>";
    echo "SKS nya : $sks";

    if ($sks >= 3) {
        echo "<h2>Ada praktikum</h2>";
    } else {
        echo "<h2>Tidak ada praktikum</h2>";
    }

    $adaPraktikum;
    ?>

    <h2>
        Ada praktikum kah? 
        <?php 
        $sks >= 3 ? $adaPraktikum = "Ada" : $adaPraktikum = "Tidak";
        echo $adaPraktikum; 
        
        function hello($nama = "Dunia"){
            return "<br> Hello $nama";
        }

        echo hello();
        ?>
    </h2>


</body>

</html>