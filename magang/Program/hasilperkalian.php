<?php
include 'koneksi.php';
$i = 0;
$hasil = 1;
$result = mysqli_query($conn, "SELECT * FROM bilangan");
echo "Hasil dari perkalian data yaitu : ";
while ($row = mysqli_fetch_assoc($result)) :
    $hasil = $hasil * $row["angka"];
endwhile;
echo $hasil;
