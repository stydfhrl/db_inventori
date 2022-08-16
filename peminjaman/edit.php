<?php
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $id_peminjaman   = $_POST['id_peminjaman'];
    $id_barang   = $_POST['id_barang'];
    $nama_barang  = $_POST['nama_barang'];
    $id_user  = $_POST['id_user'];
    $nama_user  = $_POST['nama_user'];
    $qty  = $_POST['qty'];

    $sql    = "UPDATE peminjaman SET id_barang='$id_barang', nama_barang='$nama_barang', id_user='$id_user', nama_user='$nama_user', qty='$qty' 
               WHERE id_peminjaman='$id_peminjaman'";
    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: tbl_peminjaman.php');
    }else{
        header('Location: edit.php?status=gagal');
    }
}
?>