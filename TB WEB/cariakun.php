<?php
require 'koneksi.php';

if(isset($_POST['cari'])){
    $query = mysqli_query($db, "SELECT * FROM user WHERE nama LIKE '%".
    $_POST['cari']. "%'");

    echo "
        <script>
            alert('Data Ada');
            document.location.href ='akunuser.php';
        </script>
    ";
}else{
    echo "
        <script>
            alert('Data Tidak Ada');
        </script>
    ";
}

?>