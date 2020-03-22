<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "koneksianggota.php";

    $nik = $_GET ['Nik'];
    $nama = $_GET ['Nama'];
    $alamat = $_GET ['Alamat'];
    $telp = $_GET ['Telp'];

    $query = "INSERT INTO anggota (Nik,Nama,Alamat,Telp) 
    VALUES ('$nik','$nama','$alamat','$telp')";

    $result = mysqli_query($connect,$query);
    $num = mysqli_affected_rows($connect);

    if($num>0){
        echo "Berhasil tambah data";
        echo "<a href='tampil.php'> Lihat Data </a>";
    }else{
        echo "Gagal tambah data".mysqli_error($connect);
        echo "<a href='tampil.php'> Lihat Data </a>";
    }
    
?>
</body>
</html>