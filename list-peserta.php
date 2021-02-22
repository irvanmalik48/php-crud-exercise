<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampung Aspirasi | Teknik Informatika UNSRI</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <header>
        <h3>Mahasiswa yang telah beraspirasi</h3>
    </header>

    <nav>
        <a href="form-tampung.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th><p>Nama</p></th>
            <th><p>NIM</p></th>
            <th><p>Kritik</p></th>
            <th><p>Saran</p></th>
            <th><p>Harapan</p></th>
            <th><p>Tindakan</p></th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM data_aspirasi";
        $query = mysqli_query($db, $sql);

        while($peserta = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td><p>".$peserta['nama']."</p></td>";
            echo "<td><p>".$peserta['nim']."</p></td>";
            echo "<td><p>".$peserta['kritik']."</p></td>";
            echo "<td><p>".$peserta['saran']."</p></td>";
            echo "<td><p>".$peserta['harapan']."</p></td>";

            echo "<td><p>";
            echo "<a href='form-edit.php?nomor=".$peserta['nomor']."'>Edit</a> | ";
            echo "<a href='hapus.php?nomor=".$peserta['nomor']."'>Hapus</a>";
            echo "</td></p>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>