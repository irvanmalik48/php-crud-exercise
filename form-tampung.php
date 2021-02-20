<!DOCTYPE html>
<html>
<head>
    <title>Formulir Tampung Aspirasi | Teknik Informatika UNSRI</title>
</head>

<body>
    <header>
        <h3>Formulir Tampung Aspirasi</h3>
    </header>

    <form action="proses-tampung.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="nim">NIM: </label>
            <input type="text" name="nim" placeholder="nomor induk mahasiswa" />
        </p>
        <p>
            <label for="kritik">Kritik: </label>
            <textarea name="kritik"></textarea>
        </p>
        <p>
            <label for="saran">Saran: </label>
            <textarea name="saran"></textarea>
        </p>
        <p>
            <input type="submit" value="Tampung" name="tampung" />
        </p>

        </fieldset>

    </form>

    </body>
</html>