<?php

include("config.php");

if( isset($_GET['nomor']) ){
    $nomor = $_GET['nomor'];
    $sql = "DELETE FROM data_aspirasi WHERE nomor=$nomor";
    $query = mysqli_query($db, $sql);
    if( $query ){
        header('Location: list-peserta.php');
    } else {
        die("Can't delete.");
    }
} else {
    die("Access forbidden.");
}

?>