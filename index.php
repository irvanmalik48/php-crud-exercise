<!DOCTYPE html>
<html>
<head>
    <title>Tampung Aspirasi</title>
</head>

<body>
    <header>
        <h3>Tampung Aspirasi</h3>
        <h1>Teknik Informatika | UNSRI</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-tampung.php">Menuju Form</a></li>
            <li><a href="list-peserta.php">-</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Aspirasi telah direkam.";
                } else {
                    echo "Gagal menerima input.";
                }
            ?>
        </p>
    <?php endif; ?>
    </body>
</html>