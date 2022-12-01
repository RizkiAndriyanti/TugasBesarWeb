<?php
require 'koneksi.php';
session_start();

date_default_timezone_set("Asia/Makassar");

$query = "SELECT *FROM film";
$result = $db->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMAN USER</title>
    <link rel="stylesheet" href="css/haladmin.css">
</head>
<body>
    <div class="kontainer">

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
        

        <!-- Tengah -->

        <div class="main">
            <div id="judul">
                <p>Film Collection</p>
            </div>
            <div class="cvr_film">
                <?php
                    $i = 1;
                    while($row = mysqli_fetch_array($result)){

                ?> 

                <a href="detail.php?id=<?=$row['id']?>">
                    <img src="film/<?=$row['cvr_film']?>" width="150px">
                </a>

                <?php
                    $i++;
                    }
                ?>
            </div>
            
            <div class="about">
                <h1>ABOUT</h1>
                <p>Nontonyuk hadir menyajikan informasi lengkap seputar bioskop, jadwal film dan lengkap dengan sinopsisnya Group bioskop yang hadir di Nontonyuk .Informasi jadwal film dan yang lainnya  kami update setiap hari menyesuaikan informasi yang ada di website official maupun sumber valid lainnya sehingga data yang kami sajikan akurat</p>
            </div>

        </div>

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
        
    </div>
</body>
</html>