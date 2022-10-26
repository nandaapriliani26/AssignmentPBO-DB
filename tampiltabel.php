<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>........</title>
</head>
<body>

<h3> MELAMAR PEKERJAAN <h3>
<table border="1">
    <tr>
        <th>id</th>
        <th>kategori</th>
</tr>

<?php

include "koneksi.php";
$no=1;
$ambildata = mysqli_query($koneksi,"select * from kategori");
while($tampil = mysqli_fetch_array($ambildata)){
    echo"
    <tr>
    <td>$tampil[id]</td>
    <td>$tampil[kategori]</td>
    </tr>";
    $no++;
}
?>