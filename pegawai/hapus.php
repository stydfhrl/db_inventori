<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    header('Location: tbl_pegawai.php');
}

    $id_pegawai = $_GET['id_pegawai']; 

    $sql    = "DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'";
    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: tbl_pegawai.php');
    }else{
        header('Location: hapus.php?status=gagal');
}
?>