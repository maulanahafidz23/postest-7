<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Pendataan</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="body" > 
    <script>
			alert("Ini akan membawa anda untuk mengisi form order, Tekan Oke untuk melanjutkanya");
	</script>
    <table border="1" align="center" width="1000px" cellspacing="1">
        <tr height="100px" class="atas">
            <td align="center"><h1>PT.SUKSES MANDIRI JAYA ABADI</h1></td>
        </tr>
        <tr class="bawah">
            <td height="500px" valign="top">

                <form action="tampil.php" method="post">  
                
                <h2 align="center">Order Forms</h2>

                <br>
                <label for="nama">Nama Lengkap :</label>
                <input type="text" name="nama" id="nama" placeholder="Nama anda..." required><br>
                <br>
                <label for="telp">Nomor Telpon :</label>
                <input type="number" name="telp" id="telp" placeholder="+62" required><br>
                <br>
                <label for="tgl">Tanggal Order :</label>
                <input type="date" name="tgl" id="tgl" required><br>
                <br>
                <label for="merk">Brand :</label>
                <select name="merk" id="merk">
                    <option value="hsrr">HSR Wheels</option>
                    <option value="rtf">ROTIFORM</option>
                    <option value="bbs">BBS Wheels</option>
                    <option value="works">WORKS</option>
                    <option value="ls">Lenso</option>
                </select><br>
                <br>
                <label for="tipe">Type :</label>
                <input type="text" name="tipe" id="tipe" required><br>
                <br>
                <label for="ring">Ring :</label>
                <input type="text" name="ring" id="ring" placeholder="R..."><br>
                <br>
                <label for="lebar">Lebar :</label>
                <input type="text" name="lebar" id="lebar" placeholder="example: 8,5 inch"><br>
                <br>
                <label for="desc">Deskripsi :</label>
                <textarea name="desc" id="desc" cols="50" rows="2"></textarea><br>
                <br>
                <label for="alamat">Alamat :</label>
                <textarea name="alamat" id="alamat" cols="50" rows="5"></textarea><br>
                <br>
                <button type="submit" value="Submit">Submit</button>
                <button type="reset" value="Reset">Reset</button>
                <br>

                </form>

            </td>
        </tr>
    </table>
</body>
</html>