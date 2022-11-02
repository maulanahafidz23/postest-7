<?php
require 'koneksi.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM data_customer WHERE id=$id");

$data_customer = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data_customer[] = $row;
}

$dc = $data_customer[0];




if (isset($_POST["tambah"])) {
    $nama_cust = htmlspecialchars($_POST["nama_cust"]);
    $nama_barang = htmlspecialchars($_POST["nama_barang"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $date = htmlspecialchars($_POST["date"]);

    $sql = "UPDATE data_customer SET
            nama_cust = '$nama_cust',
            nama_barang = '$nama_barang',
            alamat = '$alamat',
            date = '$date'
            WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ( $result ) {
        echo"
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data gagal diubah');
                document.location.href = 'edit.php';
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
    <title>Edit Data</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td><h1>Edit Forms</h1></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
            </tr>
            <tr>
                <td>Nama Customer</td>
                <td><input type="text" name="nama_cust" value="<?php echo $dc["nama_cust"]; ?>" ><br><br></td>
            </tr>
            <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" value="<?php echo $dc["nama_barang"]; ?>"><br><br></td>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $dc["alamat"]; ?>"><br><br></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><input type="date" name="date" value="<?php echo $dc["date"]; ?>"><br><br></td>
            </tr>
            <tr>
                <td><button type="submit" name="tambah">Edit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>