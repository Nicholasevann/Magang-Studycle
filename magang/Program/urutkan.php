<?php
include 'koneksi.php';
$i = 0;
$result = mysqli_query($conn, "SELECT * FROM bilangan ORDER BY angka");
echo "Hasil dari pengurutan data yaitu : ";
while ($row = mysqli_fetch_assoc($result)) :
    echo $row["angka"] . " ";
endwhile;
