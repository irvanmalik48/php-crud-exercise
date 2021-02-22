<?php

include("config.php");

if(isset($_POST['simpan'])){
    $nomor = $_POST['nomor'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kritik = $_POST['kritik'];
    $saran = $_POST['saran'];
    $harapan = $_POST['harapan'];
    $sql = "UPDATE data_aspirasi SET nama='$nama', nim='$nim', kritik='$kritik', saran='$saran', harapan='$harapan' WHERE nomor=$nomor";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-peserta.php');
    } else {
        die("Failed to save.");
    }


} else {
    die("Access is forbidden.");
}

?>