<?php
include '../koneksi.php';
if(isset($_POST['simpan'])) {
    $id_pegawai   = $_POST['id_pegawai'];
    $nama_pegawai  = $_POST['nama_pegawai'];
    $email     = $_POST['email'];
    $alamat   = $_POST['alamat'];
    $no_telp   = $_POST['no_telp'];

    $sql    = "INSERT INTO pegawai (id_pegawai, nama_pegawai, email, alamat, no_telp)
               VALUES ('$id_pegawai', '$nama_pegawai', '$email', '$alamat', '$no_telp')";
             
    $query  = mysqli_query($connect, $sql);
        if ($query) {
            header('Location: tbl_pegawai.php');
        }else{
            header('Location: simpan.php?status=gagal');
        }
        // mysqli_close($conn);
}
?>