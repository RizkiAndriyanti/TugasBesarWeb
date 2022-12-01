<?php 
    require 'koneksi.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM film WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['kirim'])){
        $nama = $_POST['nama_film'];
        $genre = $_POST['genre'];
        $usia = $_POST['usia'];
        $rating = $_POST['rating'];
        $jadwal = $_POST['jadwal'];
        $sinopsis = $_POST['sinopsis'];

        $update = mysqli_query($db, "UPDATE film SET nama_film='$nama',genre='$genre',usia='$usia',rating='$rating',jadwal='$jadwal','sinopsis=$sinopsis' WHERE id='$id'");

        if($update){
            header("Location:sepatu.php");
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
    <link rel="stylesheet" href="css/tambahfilm.css">
</head>
<body>
    <!-- header -->

    <div class="header">
        <div class="logo">
            <img src="logo/logoo.png" alt="" width="250">
        </div>
        <p id="nama_toko">NONTON FILM</p>
        <div class="pencarian">
            <form action="carisepatu.php" method="post">
                <input type="text" placeholder="Cari" required>
            </form>
        </div>
        <div class="navbar">
            <div class="tomlog">
                <a href="login.php" > <button class="tombol"> LOG-IN</button></a>
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

    <h1 class="judul-tambahsepatu">EDIT DATA SEPATU</h1>
    <form class="form-tambahsepatu" action="" method="post" enctype="multipart/form-data">
            <input class="form" type="text" placeholder="Nama Film" name="nama_film">
            <br>
            <input class="form" type="text" placeholder="Genre" name="genre">
            <br>
            <input class="form" type="text" placeholder="Usia" name="usia">
            <br>
            <input class="form" type="text" placeholder="Rating Film"  name="rating">
            <br>
            <input class="form" type="date" placeholder="Jadwal" name="jadwal" >
            <br>
            <input class="form" type="text" placeholder="Sinopsis" name="sinopsis" >
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