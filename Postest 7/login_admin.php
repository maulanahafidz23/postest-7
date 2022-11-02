<?php
    session_start();
    include 'koneksi.php';  
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $_SESSION['login'] = $_POST['login'];

        $result = mysqli_query($conn, "SELECT * FROM register WHERE username = '$username'");

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password'])){
                $_SESSION['login'] = true;
                echo "<script>alert('Login berhasil!');window.location='index.php';</script>";
                exit;
            } 
        } else {
            echo "<script>alert('Username atau Password salah!');window.location='login_admin.php';</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
    content="IE=edge">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="shortcut icon" href="img/logo.ico">
    <title>Pt Sukses Mandiri Jaya Abadi</title>
</head>
<body>                   
<form method="post">
        <table>
            <tr>
                <td colspan="2">
                    <h1>LOG-IN</h1> 
                </td>
            </tr>
            <tr>
                <td><input type="text" name="username" id="username" placeholder="Username"><hr></td>
            </tr>
            <tr>
                <td><input type="password" name="password" id="password" placeholder="Password"><hr></td>
            </tr>
            <tr>
                <td><button type="submit" value="login" name="login" >LOGIN</button></td><br><br>
            </tr>
            <tr>
                <td><button type="reset" value="reset" name="reset">RESET</button></td><br>
            </tr>
            <br>
            <tr>
                <td>Belum punya akun? <a href="register.php" style="color: red; text-decoration: none;">Register</a></td>
            </tr>
        </table>
    </form>
</body>
</html>