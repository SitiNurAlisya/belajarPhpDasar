<?php
    // function (built in function atau user defined function)
    $teks = "Hello World";
    echo "Panjang dari teks ialah " . strlen($teks) . "karakter.";


    // date => menampilkan tanggal
    echo "<br>";
    echo date("Y-m-d H:i:s");


    function salam($nama = "Admin") {
        return "Selamat Datang, $nama";
    }

?>

<html>
    <body>
        <h1><?php echo salam(); ?></h1>
    </body>
</html>