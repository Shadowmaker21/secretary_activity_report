<?php

    $id = $_POST['id'];
    $nama_hkm = $_POST['nama_hkm'];
    $nomor_hkm = $_POST['nomor_hkm'];
    $ket_hkm = $_POST['ket_hkm'];
    $file_hkm = $_POST['file_hkm'];

    $query=mysqli_query($koneksi1, "UPDATE hukum SET nama_hkm='$nama_hkm' , nomor_hkm='$nomor_hkm' ,ket_hkm='$ket_hkm' ,file_hkm='$file_hkm' WHERE id = '$id'");

    if($query){
        ?>
        <script>alert('Data berhasil Ditambahkan')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=hukum'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>