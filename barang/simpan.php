<?php
include '../koneksi.php';
if(isset($_POST['simpan'])) {
    $id_barang   = $_POST['id_barang'];
    $nama_barang  = $_POST['nama_barang'];
    $unit     = $_POST['unit'];

    $sql    = "INSERT INTO barang (id_barang, nama_barang, unit)
               VALUES ('$id_barang', '$nama_barang', '$unit')";

    $query  = mysqli_query($connect, $sql);
        if ($query) {
            header('Location: tbl_barang.php');
        }else{
            header('Location: simpan.php?status=gagal');
        }
        // mysqli_close($conn);
}
?>