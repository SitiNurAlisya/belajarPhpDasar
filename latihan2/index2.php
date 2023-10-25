<?php
    // $_GET["nama"] = "Siti";
    // $_GET["prodi"] = "Informatika";
    // var_dump($_GET);

    $mahasiswa = [
        [
            "nama" => "Siti", // ARRAY
            "nim" => "001"
        ],
        [
            "nama" => "Nur Alisya", //ARRAY
            "nim" => "002"
        ]
    ];


?>

<html>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <ul>
            <?php foreach($mahasiswa as $mhs) { ?>
                <li>
                <a href="index3.php?nama=<?php echo $mhs["nama"]; ?>&nim=<?php echo $mhs["nim"]; ?>"><?php echo $mhs["nama"]; ?></a>
                </li>
              

            <?php } ?>
        </ul>
    </body>
</html>
