<?php
require'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM data_customer");

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
    <title>Index</title>
    <style>
    </style>
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
            <td colspan="4"><button width="100px"><a href="tambah.php" style="color: black  ">Tambah Data</a></button></td>
            <td colspan="4"><button width="100px"><a href="search.php" style="color: black  ">Search Data</a></button></td>
        </tr>
    </table>
    </center>
</body>
</html>