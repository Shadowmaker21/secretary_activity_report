<?php

$id = $_POST['id'];
$hari = $_POST['hari'];
$tanggal = $_POST['tanggal'];
$tempat = $_POST['tempat'];
$jam = $_POST['jam'];
$email = implode(" | ", $_POST['email']);
$agenda = $_POST['agenda'];
$ket = $_POST['ket'];
$jenis = $_POST['jenis'];


    $query=mysqli_query($koneksi1, "UPDATE not_dekom SET hari='$hari' , tanggal='$tanggal' , tempat='$tempat',jam='$jam',email='$email', agenda='$agenda', ket='$ket', jenis='$jenis' WHERE id = '$id'");

    if($query){
        ?>
        <script>alert('Update Data berhasil')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=not_dekom'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>