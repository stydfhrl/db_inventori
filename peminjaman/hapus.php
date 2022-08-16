<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    header('Location: tbl_peminjaman.php');
}

    $id_peminjaman = $_GET['id_peminjaman']; 

    $sql    = "DELETE FROM peminjaman WHERE id_peminjaman='$id_peminjaman'";
    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: tbl_peminjaman.php');
    }else{
        header('Location: hapus.php?status=gagal');
}
?>