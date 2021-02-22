<?php
$server = "localhost";
$user = "irvanmalik48"; // change accordingly
$password = "irvann48_"; // change accordingly
$nama_database = "tampung_aspirasi";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ) {
    die("Failed connecting to database: " . mysqli_connect_error());
}
?>