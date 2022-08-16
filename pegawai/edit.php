<?php
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $id_pegawai   = $_POST['id_pegawai'];
    $nama_pegawai  = $_POST['nama_pegawai'];
    $email     = $_POST['email'];
    $alamat   = $_POST['alamat'];
    $no_telp   = $_POST['no_telp'];

    $sql    = "UPDATE pegawai SET nama_pegawai='$nama_pegawai', email='$email', alamat='$alamat', no_telp='$no_telp' 
               WHERE id_pegawai='$id_pegawai'";
    $query  = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: tbl_pegawai.php');
    }else{
        header('Location: edit.php?status=gagal');
    }
}
?>