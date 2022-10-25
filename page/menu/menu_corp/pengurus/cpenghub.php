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


    $query=mysqli_query($koneksi1, "INSERT INTO pengurus_hub VALUES('','$nama_peng','$jabatan_peng','$nik','$hubkeldir','$hubkelkom','$hubkelps','$hubkeudir','$hubkeukom','$hubkeups')");

    if($query){
        ?>
        <script>alert('Data berhasil Ditambahkan')</script>";
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