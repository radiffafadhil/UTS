<?php

include("config.php");

if( isset($_GET['nim']) ){

    // ambil id dari query string
    $id = $_GET['nim'];

    // buat query hapus
    $sql = "DELETE FROM mahasiswa WHERE nim=$nim";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-siswa.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>