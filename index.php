<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampung Aspirasi</title>
    <link rel="stylesheet" href="styles/styles.css">
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