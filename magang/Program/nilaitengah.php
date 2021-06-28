<?php
include 'koneksi.php';
$i = 0;
$result = mysqli_query($conn, "SELECT * FROM bilangan ORDER BY angka");
echo "Hasil dari pengurutan data yaitu : ";
while ($row = mysqli_fetch_assoc($result)) :
    echo $row["angka"] . " ";
    $angka[$i] = $row["angka"];
    $i++;
endwhile;
$tengah = (count($angka) / 2);
if (count($angka) > 1) {
    if (count($angka) % 2 == 0) {
        $median = ($angka[$tengah - 1] + $angka[$tengah]) / 2;
    } else {
        $median = $angka[$tengah];
    }
} else {
    $median = "Tidak ada";
}
echo "<br>Mediannya adalah" . " = " . $median;
