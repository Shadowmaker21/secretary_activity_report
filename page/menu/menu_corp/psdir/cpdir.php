<?php

    $id = @$_POST['id'];
    $nama_ps2 = $_POST['nama_ps2'];
    $nik = $_POST['nik'];
    $jabatan_ps2 = $_POST['jabatan_ps2'];
    $nominal_ps2 = $_POST['nominal_ps2'];
    $saham_ps2 = $_POST['saham_ps2'];
    $pers_ps2 = $_POST['pers_ps2'];
    $jenis_ps2 = $_POST['jenis_ps2'];
    $saham_psl2 = $_POST['saham_psl2'];


    $query=mysqli_query($koneksi1, "INSERT INTO psdir VALUES('','$nama_ps2','$nik','$jabatan_ps2','$nominal_ps2','$saham_ps2','$pers_ps2','$jenis_ps2','$saham_psl2')");
 
    if($query){
        ?>
        echo <pre>;
 print_r($query);
 echo</pre>;
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>