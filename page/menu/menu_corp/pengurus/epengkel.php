<?php

    $id = $_POST['id'];
    $nama_peng = $_POST['nama_peng'];
    $jabatan_peng = $_POST['jabatan_peng'];
    $awal_peng = $_POST['awal_peng'];
    $mulai_peng = $_POST['mulai_peng'];
    $akhir_peng = $_POST['akhir_peng'];
    $rups_peng = $_POST['rups_peng'];
    $akte_rups = $_POST['akte_rups'];
    $ojk_peng = $_FILES['ojk_peng']['name'];
    $file_tmp = $_FILES['ojk_peng']['tmp_name'];
    move_uploaded_file($file_tmp,"../files/".$ojk_peng);
    
    $sojk_peng = $_POST['sojk_peng'];

    $certif_peng = $_FILES['certif_peng']['name'];
    $file_tmp = $_FILES['certif_peng']['tmp_name'];
    move_uploaded_file($file_tmp,"../files/".$certif_peng);
    
    $jatem_peng = $_POST['jatem_peng'];
    $pend = $_POST['pend'];


    $query=mysqli_query($koneksi1, "UPDATE pengurus SET nama_peng='$nama_peng' , jabatan_peng='$jabatan_peng', awal_peng='$awal_peng', mulai_peng='$mulai_peng', akhir_peng='$akhir_peng', rups_peng='$rups_peng', akte_rups='$akte_rups', ojk_peng='$ojk_peng', sojk_peng='$sojk_peng', certif_peng='$certif_peng', jatem_peng='$jatem_peng', pend='$pend' WHERE id = '$id'");

    if($query){
        ?>
        <script>alert('Data berhasil Diupdate')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=peng'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>