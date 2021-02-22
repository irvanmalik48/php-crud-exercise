<?php

include("config.php");

if( !isset($_GET['nomor']) ){
    header('Location: list-peserta.php');
}

$nomor = $_GET['nomor'];

$sql = "SELECT * FROM data_aspirasi WHERE nomor=$nomor";
$query = mysqli_query($db, $sql);
$peserta = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("Data not found.");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Aspirasi | Teknik Informatika UNSRI</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <header>
        <h3>Formulir Edit Aspirasi</h3>
    </header>

    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="nomor" value="<?php echo $peserta['nomor'] ?>" />
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $peserta['nama'] ?>" />
        </p>
        <p>
            <label for="nim">NIM: </label>
            <input type="text" name="nim" placeholder="nomor induk mahasiswa" value="<?php echo $peserta['nim'] ?>" />
        </p>
        <p>
            <label for="kritik">Kritik: </label>
            <textarea name="kritik"><?php echo $peserta['kritik'] ?></textarea>
        </p>
        <p>
            <label for="saran">Saran: </label>
            <textarea name="saran"><?php echo $peserta['saran'] ?></textarea>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
        </fieldset>
    </form>
</body>
</html>