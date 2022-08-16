<?php
include '../koneksi.php';
if(isset($_POST['simpan'])) {
    $id_peminjaman   = $_POST['id_peminjaman'];
    $id_barang   = $_POST['id_barang'];
    $nama_barang  = $_POST['nama_barang'];
    $id_user  = $_POST['id_user'];
    $nama_user  = $_POST['nama_user'];
    $qty  = $_POST['qty'];

    $sql     = "INSERT INTO peminjaman (id_peminjaman, id_barang, nama_barang, id_user, nama_user, qty)
            VALUES ('$id_peminjaman', '$id_barang', '$nama_barang', '$id_user', '$nama_user', '$qty')";
    $query  = mysqli_query($connect, $sql);
        if ($query) {
            header('Location: tbl_peminjaman.php');
        }else{
            header('Location: simpan.php?status=gagal');
        }
        // mysqli_close($conn);
}
?>