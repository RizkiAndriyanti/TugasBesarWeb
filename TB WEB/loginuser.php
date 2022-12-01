<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMAN LOGIN</title>
    <link rel="stylesheet" href="css/loginuser.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    body{
        background-image: url("logo/bg.jpg");
    }
</style>
<body>
    <!-- tengah  -->
    <div class="container">
        <h1 class="judul-login">Silahkan Login yaaa!!</h1>
        <div class="form-login">
            <form action="" method="POST">
                    <input class="form" type="text" placeholder="Username" name="username">
                    <br>
                    <input class="form" type="password" placeholder="Password" name="pw">
                    <br>
                    <div class="tmbl-kirim">
                        <input class="kirim" type="submit" value="LOG-IN" name="kirim">
                    </div>
            </form>
        </div>
        <div class="tombolbuatakun">
            <a style="text-decoration:none" href="registeruser.php"><button class="button1">BUAT AKUN</button></a>
        </div>
    </div>
</body>
</html>


<?php
    session_start();
    require 'koneksi.php';
    if(isset($_POST['kirim'])){
        $user = $_POST['username'];
        $pw = $_POST['pw'];

        $pw = md5($pw);

        $query = "SELECT * FROM user WHERE username = '$username' OR email = '$username' ";
        $result = $db->query($query);
        $row = mysqli_fetch_array($result);
        $user = $row['nama'];

        if($password == $row['pw']){

            $_SESSION['kirim'] = true;
            echo "
                <script>
                    alert('selamat datang $user');
                    document.location.href ='haluser.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('username dan pw salah');
                    document.location.href ='loginuser.php';
                </script>
            ";
        }
        
    }
?>