<?php
include 'koneksi.php';
$bilangan = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bilangan = $_POST["bilangan"];

    $query = "INSERT INTO bilangan value ('','$bilangan')";
    mysqli_query($conn, $query);
}
$result = mysqli_query($conn, "SELECT * FROM bilangan");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <table>
            <tr>
                <td>Masukkan bilangan</td>
                <td>:</td>
                <td><input type="text" name="bilangan"></td>
                <td><input type="submit" value="Masukkan bilangan"></td>
            </tr>
        </table>
    </form>
    <form action="urutkan.php" method="POST">
        <input type="submit" name="urutkan" value="Urutkan">
    </form>
    <form action="rata2.php" method="POST">
        <input type="submit" name="rata2" value="Rata-rata">
    </form>
    <form action="nilaitengah.php" method="POST">
        <input type="submit" name="nilaitengah" value="Nilai Tengah">
    </form>
    <form action="hasilperkalian.php" method="POST">
        <input type="submit" name="hasilperkalian" value="Hasil Perkalian">
    </form>
    <br><br>
    Bilangan yang diinputkan :
</body>

</html>
<?php while ($row = mysqli_fetch_assoc($result)) :
    echo $row["angka"] . " ";
endwhile ?>