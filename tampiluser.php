<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Pengguna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<center><h1>Data Kependudukan Kota Malang</h1></center>
    <center><table border="1" width="80%"></center>
    <tr>
    <th bgcolor="aqua">ID Anggota</th>
    <th bgcolor="aqua">NIK</th>
    <th bgcolor="aqua">Nama</th>
    <th bgcolor="aqua">Alamat</th>
    <th bgcolor="aqua">Telp</th>
    </tr>

    <?php
    include "koneksianggota.php";
    $query = "SELECT * FROM anggota";
    $sql = mysqli_query($connect, $query); 
    
    while($data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo"<td>".$data['ID_Anggota']."</td>";
        echo"<td>".$data['Nik']."</td>";
        echo"<td>".$data['Nama']."</td>";
        echo"<td>".$data['Alamat']."</td>";
        echo"<td>".$data['Telp']."</td>";
        echo "</tr>";
    }
    ?>
    </table> 
    <br><br> 
    <a href="index.html" class="btn btn-info">KEMBALI</a>
</body>
</html>