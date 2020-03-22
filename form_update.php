
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    .container{
        width: 45%;
        margin-top: 9%;
		margin-bottom: 9%;
        box-shadow: 0 3px 20px rgba(0,0,0,0.3);
        padding: 40px;
    }
    button{
        width: 49%;
    }
</style>
<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php
include 'koneksianggota.php';

$ID_Anggota = $_GET ['ID_Anggota'];
$query = "SELECT * FROM anggota WHERE ID_Anggota = '$ID_Anggota'";
$result = $connect->query($query);
$row = $result->fetch_assoc();
?>

<div class="container">
    <form action="update.php" method="POST">
    <center><h1>PENGUBAHAN DATA PENDUDUK</h1></center>
    <hr>
    
    <div class="form-group">
        <td><label for="Nik">Nik</label></td>
        <td><input type="text" name="Nik" id="Nik" value="<?php echo $row['Nik'];?>" class="form-control"></td>
    </div>
    <div class="form-group">
        <td><label for="Nama">Nama</label></td>
        <td><input type="text" name="Nama" id="Nama" value="<?php echo $row['Nama']; ?>" class="form-control"></td>
    </div>
    <div class="form-group">
        <td><label for="Alamat">Alamat</label></td>
        <td><input type="text" name="Alamat" id="Alamat" value="<?php echo $row['Alamat'];?>" class="form-control"></td>
    </div>
    <div class="form-group">
        <td><label for="Telp">Telp</label></td>
        <td><input type="text" name="Telp" id="Telp" value="<?php echo $row['Telp'];?>" class="form-control"></td>
     </div>

        <td><input type="hidden" name="ID_Anggota" value="<?php echo $row['ID_Anggota'];?>" class="form-control"></td>
        <center><button type="submit" name="btnSimpan" value="Simpan" class="btn btn-primary">SIMPAN</button></center>
    
    </form>
    </div>
</body>
</html>