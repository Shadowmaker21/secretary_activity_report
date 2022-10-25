<?php

    $id = @$_POST['id'];
    $hari = $_POST['hari'];
    $tanggal = $_POST['tanggal'];
    $tempat = $_POST['tempat'];
    $jam = $_POST['jam'];
    $email[] = implode(" | ", @$_POST);
    $agenda = $_POST['agenda'];
    $ket = $_POST['ket'];
    $jenis = $_POST['jenis'];



    $query=mysqli_query($koneksi1, "INSERT INTO not_dir VALUES('','$hari','$tanggal','$tempat','$jam','$email','$agenda', '$ket','$jenis')");

    if($query){
        ?>
        <script>alert('Data berhasil Ditambahkan')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=not_dir'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>