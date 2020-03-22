<?php
include 'koneksianggota.php';

$ID_Anggota=$_GET['ID_Anggota'];

$query="DELETE FROM anggota WHERE ID_Anggota='$ID_Anggota'";

$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if($num > 0){
    echo"Berhasil hapus data <br>";
    echo "<a href='tampil.php'>Lihat Data</a>";
}else{
    echo "Gagal hapus data <br>".mysqli_connect_error();
    echo "<a href='tampil.php'>Lihat Data</a>"; 
} 


?>