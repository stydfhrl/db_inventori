<?php
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $id_barang   = $_POST['id_barang'];
    $nama_barang  = $_POST['nama_barang'];
    $qty  = $_POST['qty'];
    $unit     = $_POST['unit'];

    $sql    = "UPDATE inventori SET nama_barang='$nama_barang', qty='$qty', unit='$unit' 
               WHERE id_barang='$id_barang'";
    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: tbl_inventori.php');
    }else{
        header('Location: edit.php?status=gagal');
    }
}
?>