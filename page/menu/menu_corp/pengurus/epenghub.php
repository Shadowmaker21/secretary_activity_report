<?php

$id = $_POST['id'];
$nama_peng = $_POST['nama_peng'];
$jabatan_peng = $_POST['jabatan_peng'];
$nik = $_POST['nik'];
$hubkeldir = $_POST['hubkeldir'];
$hubkelkom = $_POST['hubkelkom'];
$hubkelps = $_POST['hubkelps'];
$hubkeudir = $_POST_['hubkeudir'];
$hubkeukom = $_POST['hubkeukom'];
$hubkeups = $_POST['hubkeups'];


    $query=mysqli_query($koneksi1, "UPDATE pengurus_hub SET nama_peng='$nama_peng' , jabatan_peng='$jabatan_peng', nik='$nik', hubkeldir='$hubkeldir', hubkelkom='$hubkelkom', hubkelps='$hubkelps', hubkeudir='$hubkeudir', hubkeukom='$hubkeukom', hubkeups='$hubkeups' WHERE id = '$id'");

    if($query){
        ?>
        <script>alert('Data berhasil Diupdate')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=peng_hub'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>