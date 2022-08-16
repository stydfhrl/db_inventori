<?php
include '../koneksi.php';
if(isset($_POST['simpan'])) {
    $id_barang   = $_POST['id_barang'];
    $nama_barang  = $_POST['nama_barang'];
    $qty  = $_POST['qty'];
    $unit     = $_POST['unit'];

    $sql    = "INSERT INTO inventori (id_barang, nama_barang, qty, unit)
               VALUES ('$id_barang', '$nama_barang', '$qty', '$unit')";

    $query  = mysqli_query($connect, $sql);
        if ($query) {
            header('Location: tbl_inventori.php');
        }else{
            header('Location: simpan.php?status=gagal');
        }
        // mysqli_close($conn);
}
?>