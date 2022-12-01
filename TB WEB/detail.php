<?php
require 'koneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result = mysqli_query($db, "SELECT * FROM film WHERE id = '$id' ");
    $row = mysqli_fetch_array($result);
}

$query = "SELECT * FROM film";
$result = $db->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAIL</title>
    <link rel="stylesheet" href="css/detail.css">
</head>
<body>
    <!-- header -->

    <div class="header">
        <div class="logo">
            <img src="logo/logoo.png" alt="" width="250">
        </div>
        <p id="nama_toko">NONTON FILM</p>
        <!-- <div class="pencarian">
            <form action="carifilm.php" method="post">
                <input type="text" placeholder="Cari" required>
            </form>
        </div> -->
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
    
    <!-- tengah -->
    <div class="indentitas">
        <div class="data">
            <img src="film/<?=$row['cvr_film']?>" alt="" width="200px">
            <p class="label">Judul Film : <?= $row['nama_film'];?></p>
            <p class="label">Genre : <?= $row['genre'];?></p>
            <p class="label">Untuk Usia : <?= $row['usia'];?></p>
            <p class="label">Rating : <?= $row['rating'];?></p>
            <p class="label">Jadwal Tayang di Bioskop : <?= $row['jadwal'];?></p>
            <p class="label">Sinopsis</p>
            <?= $row['sinopsis'];?>
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
</body>
</html>