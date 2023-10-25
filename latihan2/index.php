<!-- Contoh Array Numeric -->
<?php
// // cara lama pemakaian array
// $hari = array("Senin", "Selasa", "Rabu");

// // cara baru pemakaian array
// $bulan = ["Januari", "Februari"]; //perbedaan nya hanya dalam penulisan syntax
// tipe data array tida harus selalu sama di dalam satu array
// $arr = ["kalimat", 123, true];
// var_dump($hari);

// var_dump($hari);
// menampilkan satu elemen array
// echo $hari[1];


// echo $hari[1];

// // cara menambahkan elemen array
// $bulan[] = "Maret";
// echo "<br>";
// var_dump($bulan);
// echo "<br>";

// // pengulangan khusus untuk array
// foreach ($bulan as $bln) {
//     echo $bln;
//     echo "<br>";
// }


// Array Associative
$mahasiswa = [
    ["nama" => "Siti", "prodi" => "Informatika", "semester" => 3],
    ["nama" => "Nur", "prodi" => "Sistem Informasi", "semester" => 7],
    ["nama" => "Alisya", "prodi" => "Hukum", "semester" => 5],

];

// echo $mahasiswa["prodi"];
// echo "<br>";
foreach ($mahasiswa as $mhs){
    if ($mhs["nama"] == "Siti"){
        foreach ($mhs as $m) {
            echo $m . "<br>";
        }
    }
    
}


?>  
