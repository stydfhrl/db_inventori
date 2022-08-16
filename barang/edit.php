<?php
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $id_barang   = $_POST['id_barang'];
    $nama_barang  = $_POST['nama_barang'];
    $unit     = $_POST['unit'];

    $sql    = "UPDATE barang SET nama_barang='$nama_barang', unit='$unit' 
               WHERE id_barang='$id_barang'";
    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: tbl_barang.php');
    }else{
        header('Location: edit.php?status=gagal');
    }
}
?>