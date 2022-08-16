<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    header('Location: tbl_pelanggan.php');
}

    $id_user = $_GET['id_user']; 

    $sql    = "DELETE FROM pelanggan WHERE id_user='$id_user'";
    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: tbl_pelanggan.php');
    }else{
        header('Location: hapus.php?status=gagal');
}
?>