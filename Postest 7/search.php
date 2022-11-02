<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login_admin.php");
    exit;
}

require('koneksi.php');

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];

    $result = mysqli_query($conn, "SELECT * FROM data_customer WHERE nama_cust LIKE '%$keyword%'
    OR nama_barang LIKE '%$keyword%' OR alamat LIKE '%$keyword%'");
} else {
    $result = mysqli_query($conn, "SELECT * FROM data_customer");
}

$data_customer = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data_customer[] = $row;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Searching</title>
</head>
<body>
    <center>
    <h1>Data Customer</h1>
    <table border=1px>
        <tr>
            <th><b>ID</b></th>
            <th><b>Nama</b></th>
            <th><b>Nama Barang</b></th>
            <th><b>Foto Barang</b></th>
            <th><b>Alamat</b></th>
            <th><b>Date</b></th>
            <th><b>Opsi</b></th>
        </tr>
        <?php $i = 1; foreach ($data_customer as $dc):?>
        <tr>
            <td><?php echo $i ;?></td>
            <td><?php echo $dc['nama_cust'] ;?></td>
            <td><?php echo $dc['nama_barang'] ;?></td>
            <td><?php echo "<img src='img/$dc[gambar]' width='100' height='80'>";?></td>
            <td><?php echo $dc['alamat'] ;?></td>
            <td><?php echo $dc['waktu'];?></td>
            <td><a href="edit.php?id=<?php echo $dc['id']; ?>" >Edit</a> 
            | <a href="hapus.php?id=<?php echo $dc['id']; ?>" onclick = "return confirm('And yakin ingin mengahpus data ini ?')">Hapus</a></td>
        </tr>
        <?php $i++; endforeach;?>
        <tr>
            <td ><button width="100px"><a href="index.php" style="color: black  ">Kembali</a></button></td>
            <form action="" method="get">
                <input type="text" name="keyword">
                <button type="submit" name="cari">Cari</button>
            </form>
    </table>
    </center>
</body>
</html>