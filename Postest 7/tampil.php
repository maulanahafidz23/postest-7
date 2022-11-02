<?php
    $nama = $_POST["nama"];
    $telp = $_POST["telp"];
    $tgl = $_POST["tgl"];
    $merk = $_POST["merk"];
    $tipe = $_POST["tipe"];
    $ring = $_POST["ring"];
    $lebar = $_POST["lebar"];
    $desc = $_POST["desc"];
    $alamat = $_POST["alamat"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tampil Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <table border="1" align="center" width="1000px" cellspacing="1">

        <form action="form.php">

        <tr height="100px" class="atas" >
            <td align="center" colspan="2"><h1>DATA DIRI PEMBELI</h1></td>
        </tr>
    
        <tr height="50px">
            <td align="center">Nama Lengkap</td>
            <td align="center"> <?php echo $nama; ?></td>
        </tr>
        
        <tr height="50px">
            <td align="center">Nomor Telfon</td>
            <td align="center"> <?php echo $telp; ?></td>
        </tr>

        <tr height="50px">
            <td align="center">Tanggal Order</td>
            <td align="center"> <?php echo $tgl; ?></td>
        </tr>

        <tr height="50px">
            <td align="center">Brand</td>
            <td align="center"> <?php echo $merk; ?></td>
        </tr>

        <tr height="50px">
            <td align="center">Type</td>
            <td align="center"> <?php echo $tipe; ?></td>
        </tr>

        <tr height="50px">
            <td align="center">Ring</td>
            <td align="center"> <?php echo $ring; ?></td>
        </tr>

        <tr height="50px">
            <td align="center">Lebar</td>
            <td align="center"> <?php echo $lebar; ?></td>
        </tr>

        <tr height="50px">
            <td align="center">Deskripsi</td>
            <td align="center"> <?php echo $desc; ?></td>
        </tr>

        <tr height="50px">
            <td align="center">Alamat</td>
            <td align="center"> <?php echo $alamat; ?></td>
        </tr>

        <tr height="30px">
            <td colspan="2" align="center"><button type="submit">Kembali</button></td>
        </tr>
        </form>
    </table>
</body>
</html>