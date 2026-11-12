<?php
    require 'koneksi.php';  

    $id = $_GET['id'] ?? '';

    if ($id === '' || !ctype_digit($id)) {
        echo 'ID tidak valid';
    } else {
        $query = 'DELETE FROM mahasiswa WHERE id = ?';
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);

        $hasil = mysqli_stmt_affected_rows($stmt);
        if ($hasil > 0) {
        echo "Data berhasil dihapus";
        } else {
        echo "Data tidak ditemukan";
        }
    }

    echo '<br><a href="index.php">Kembali ke halaman utama</a>';
?>