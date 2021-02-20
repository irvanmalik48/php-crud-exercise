<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tampung Aspirasi | Teknik Informatika UNSRI</title>
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
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kritik</th>
            <th>Saran</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM data_aspirasi";
        $query = mysqli_query($db, $sql);

        while($peserta = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$peserta['nomor']."</td>";
            echo "<td>".$peserta['nama']."</td>";
            echo "<td>".$peserta['nim']."</td>";
            echo "<td>".$peserta['kritik']."</td>";
            echo "<td>".$peserta['saran']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?nomor=".$peserta['nomor']."'>Edit</a> | ";
            echo "<a href='hapus.php?nomor=".$peserta['nomor']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>