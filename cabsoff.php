<?php
include "../sekar/config/koneksi.php";

    $id = @$_POST['id'];
    $id_offline = $_POST['id_offline'];
    $agenda = @$_POST['agenda'];
    $nip = $_POST['nip'];
    $jabatan = $_POST['jabatan'];
    $nama_user = $_POST['nama_user'];
    $tgl_join = @$_POST['tgl_join'];


    $query=mysqli_query($koneksi1, "INSERT INTO absen2 VALUES('','$id_offline','$agenda','$nip','$jabatan','$nama_user',CURRENT_TIMESTAMP)");

    if($query){
        ?>
        <script>alert('Berhasil Absen, Silahkan Masuk')</script>";
	    <script type='text/javascript'> location = 'index.php?page=index'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
    
?>