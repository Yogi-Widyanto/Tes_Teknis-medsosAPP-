<?php 
    include 'koneksi/dbConn.php';
    $caption = $_POST['komen'];
    
    mysql_query("insert into user values('','$nama','$alamat','$pekerjaan')");