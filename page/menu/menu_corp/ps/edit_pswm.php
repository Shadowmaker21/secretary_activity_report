<?php

    $id = $_POST['id'];
    $nama_pswm = $_POST['nama_pswm'];
    $pers_pswm = $_POST['pers_pswm'];
    $kode_bank = $_POST['kode_bank'];
    $jenis_pswm = $_POST['jenis_pswm'];
    $saham_pswm = $_POST['saham_pswm'];

    $query=mysqli_query($koneksi1, "UPDATE pswm SET nama_pswm='$nama_pswm' , pers_pswm='$pers_pswm' , kode_bank='$kode_bank', jenis_pswm='$jenis_pswm', saham_pswm='$saham_pswm' WHERE id='$id'");

    if($query){
        ?>
        <script>alert('Data berhasil Diupdate')</script>";
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