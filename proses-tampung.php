<?php

include("config.php");

if(isset($_POST['tampung'])){

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kritik = $_POST['kritik'];
    $saran = $_POST['saran'];
    $harapan = $_POST['harapan'];

    $sql = "INSERT INTO data_aspirasi (nama, nim, kritik, saran) VALUE ('$nama', '$nim', '$kritik', '$saran', '$harapan')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }


} else {
    die("Error: Access is forbidden.");
}

?>