<?php 
    require 'koneksi.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM user WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $pw = $_POST['pw'];
        $konfirm = $_POST['konfirmasi'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $nohp = $_POST['nohp'];
        $ttl = $_POST['ttl'];

        $update = mysqli_query($db, "UPDATE user SET nama='$nama', pw='$pw', email='$email', nohp='$nohp', ttl='$ttl' WHERE id='$id'");

        if($update){
            header("Location:akunuser.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMAN EDIT SEPATU</title>
    <link rel="stylesheet" href="css/regisuser.css">
</head>
<body>
    <!-- header -->

    <div class="header">
        <div class="logo">
            <img src="logo/logoo.png" alt="" width="250">
        </div>
        <p id="nama_toko">NONTON FILM</p>
        <div class="pencarian">
            <form action="cariakun.php" method="post">
                <input type="text" placeholder="Cari" required>
            </form>
        </div>
        <div class="navbar">
            <div class="tomlog">
                <a href="loginuser.php" > <button class="tombol"> LOG-IN</button></a>
                <a href="logout.php" > <button class="tombol"> LOG-OUT</button></a>
            </div>
        </div>
        <input class="mode" type="checkbox" onclick="ubahMode()">
        <script>
            function ubahMode(){
                const ubah = document.body;
                ubah.classList.toggle("dark");
            }
        </script>
    </div>

    <!-- tengah -->

    <h1 class="judul-buatakun">EDIT DATA USER</h1>
    <form class="form-tambahuser" action="" method="post" enctype="multipart/form-data">
            <input class="form" type="text" placeholder="Name" name="nama">
            <br>
            <input class="form" type="password" placeholder="Password" name="pw">
            <br>
            <input class="form" type="email" placeholder="Email"  name="email">
            <br>
            <input class="form" type="text" placeholder="Masukkan username" name="username">
            <br>
            <input class="form" type="text" placeholder="Nomor Telpon" name="nohp">
            <br>
            <input class="form" type="date" placeholder="Tanggal Lahir Kamu" name="ttl">
            <br>
            <div class="tmbl-kirim">
                <input class="kirim" type="submit" value="Kirim" name="kirim">
            </div>
    </form>

    <!-- footer -->

    <div class="footer">
        <h1 class="kontak">Contact Info</h1>
        <div class="footer-2">
            <div class="alamat">
                <h2>Address</h2>
                <h3>JL. Perjuangan 7</h3>
            </div>
            <div class="email">
                <h2>Email</h2>
                <h3>nontonyukk@gmail.com</h3>
            </div>
            <div class="telp">
                <h2>Telpon</h2>
                <h3>+62 821 9188 1004</h3>
            </div>
            <div class="media-sosial">
                <h2>Instagram</h2>
                <div class="buat-ig">
                    <img src="logo/ig.png" alt="" width="50px">
                    <h3>NONTON FILM</h3>
                </div>
            </div>
            
        </div>
        <div class="copyright">
            &copy; 2021. <b>NontonYukk.com</b> All Rights Reserved.
        </div>
    </div>
</body>
</html>