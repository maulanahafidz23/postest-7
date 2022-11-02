<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $username = strtolower(stripslashes($_POST['username']));
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

if ($password == $cpassword) {
    $password = password_hash($password, PASSWORD_DEFAULT);
    $cek_username = "SELECT username FROM register WHERE username = '$username'";
    $temp = mysqli_query($conn, $cek_username);
    $row = mysqli_fetch_assoc($temp);

        if ($row) {
            echo "<script>
            alert('Nama ini sudah digunakan!');
            document.location.href = 'register.php';
            </script>";
        } else {
            $insert_sql = "INSERT INTO register VALUES ('','$username','$password')";
            mysqli_query($conn, $insert_sql);

            if (mysqli_affected_rows($conn) > 0) {
                echo "<script>
                        alert('registrasi Anda Berhasil!');
                        document.location.href = 'login_admin.php';
                    </script>";
            } else {
                echo "<script>
                        alert('Data Register Gagal!');
                        document.location.href = 'register.php';
                    </script>";
            }
        }
    } else {
        echo "<script>
                    alert('Konfirmasi password yang Anda Masukkan!');
                    document.location.href = 'register.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>REGISTER</title>
</head>

<body class="c">
<div class="containerr">
    <h1>Registerasi User</h1>
    <form action="" method="post">
   
        <label for="username">NAMA</label><br>
        <input type="text" name="username" id="username" size="35" autocomplete="off" required><br><br>
        <label for="password">PASSWORD</label><br>
        <input type="password" name="password" maxlength="8" size="8" id="password" autocomplete="off" required><br><br>
        <label for="cpassword">KONFIRMASI PASSWORD</label><br>
        <input type="password" name="cpassword" maxlength="8" size="8" id="cpassword" autocomplete="off" required><br><br>
        <button type="submit" name="register" class="reg">Register</button>
        </form>
        <a href="index.html"><button class="back">Kembali</button></a>
    </form>
</div>

</body>
</html>
