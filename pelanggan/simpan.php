<?php
include '../koneksi.php';
if(isset($_POST['simpan'])) {
    $id_user   = $_POST['id_user'];
    $nama_user  = $_POST['nama_user'];
    $email     = $_POST['email'];
    $alamat   = $_POST['alamat'];
    $no_telp   = $_POST['no_telp'];

    $sql    = "INSERT INTO pelanggan (id_user, nama_user, email, alamat, no_telp)
               VALUES ('$id_user', '$nama_user', '$email', '$alamat', '$no_telp')";

    $query  = mysqli_query($connect, $sql);
        if ($query) {
            header('Location: tbl_pelanggan.php');
        }else{
            header('Location: simpan.php?status=gagal');
        }
        // mysqli_close($conn);
}
?>