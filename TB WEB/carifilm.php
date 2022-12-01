<?php
require 'koneksi.php';

if(isset($_POST['carisepatu'])){
    $query = mysqli_query($db, "SELECT * FROM film WHERE nama_film LIKE '%".
    $_POST['carisepatu']. "%'");

    echo "
        <script>
            alert('Data Ada');
            document.location.href ='film.php';
        </script>
    ";
}else{
    echo "
        <script>
            alert('Data Tidak Ada');
            document.location.href ='film.php';
        </script>
    ";
}

?>