<?php

    $id = $_POST['id'];
    $nama_pswm = $_POST['nama_pswm'];
    $pers_pswm = $_POST['pers_pswm'];
    $kode_bank = $_POST['kode_bank'];
    $jenis_pswm = $_POST['jenis_pswm'];
    $saham_pswm = $_POST['saham_pswm'];

    $query=mysqli_query($koneksi1, "INSERT INTO pswm VALUES('','$nama_pswm','$pers_pswm','$kode_bank', '$jenis_pswm', '$saham_pswm')");

    if($query){
        ?>
        <script>alert('Data berhasil Ditambahkan')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=pswm'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>