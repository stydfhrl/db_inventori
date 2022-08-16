<?php
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $id_user   = $_POST['id_user'];
    $nama_user  = $_POST['nama_user'];
    $email     = $_POST['email'];
    $alamat   = $_POST['alamat'];
    $no_telp   = $_POST['no_telp'];

    $sql    = "UPDATE pelanggan SET nama_user='$nama_user', email='$email', alamat='$alamat', no_telp='$no_telp' 
               WHERE id_user='$id_user'";
    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: tbl_pelanggan.php');
    }else{
        header('Location: edit.php?status=gagal');
    }
}
?>