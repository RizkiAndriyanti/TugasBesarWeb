<?php 

require 'koneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $hapus = mysqli_query($db, "DELETE FROM user WHERE id='$id'");

    if($hapus){
        header("Location:akunuser.php");
    }
}