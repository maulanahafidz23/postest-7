<?php
date_default_timezone_set('asia/kuala_lumpur');
require ('koneksi.php');

if (isset($_POST["tambah"])) {
    $nama_cust = htmlspecialchars($_POST["nama_cust"]);
    $nama_barang = htmlspecialchars($_POST["nama_barang"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $waktu = date("Y-m-d  H:i:s");
    
    $gambar = $_FILES['gambar']['name'];
    $unique = uniqid();
    $x = explode('.', $gambar);
    $extensi = strtolower(end($x));
    $gambar_baru = "$unique.$extensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    // if (move_uploaded_file($tmp, 'img/'.$gambar_baru)) {
        $sql =  "INSERT INTO data_customer VALUES ('', '$nama_cust', '$nama_barang','$gambar_baru', '$alamat', '$waktu')";
        $result = mysqli_query($conn, $sql);
        if ( $result ) {
                echo"
                    <script>
                        alert('Data berhasil ditambah');
                        document.location.href = 'index.php';
                    </script>
                ";
                move_uploaded_file($tmp, 'img/'.$gambar_baru);
        }else{
                echo"
                    <script>
                        alert('Data gagal ditambah');
                        document.location.href = 'tambah.php';
                    </script>
                ";
        } 
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="crud.css">
    <title>Tambah Data</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><h1>Order Forms</h1></td>
            </tr>
            <tr>
                <td>Nama Customer :</td>
                <td><input type="text" name="nama_cust" required></td><br>
            </tr>
            <tr>
                <td>Nama Barang   :</td>
                <td><input type="text" name="nama_barang" required></td><br>
            </tr>
            <tr>
                <td>Foto Barang</td>
                <td><input type="file" name="gambar" required></td>
            </tr>
            <tr>
                <td>Alamat        :</td>
                <td><textarea name="alamat" id="alamat" cols="30" rows="5"></textarea></td><br>
            </tr>
            <td><button type="submit" name="tambah">Tambah</button></td>
            <td><button type="reset" name="tambah">Reset</button></td>
        </table>
    </form>
</body>
</html>