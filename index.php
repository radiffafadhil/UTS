<!DOCTYPE html>
<html>
<head>
    <title>KAMPUS XYZ</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "input mahasiswa  berhasil!";
            } else {
                echo "input gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>