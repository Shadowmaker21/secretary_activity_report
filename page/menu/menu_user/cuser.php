<?php

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $jabatan = $_POST['jabatan'];
    $kode = 'KERRY THAMRIM'."|".'DIREKTUR';
    $tgl_setuju = date("d-m-Y");
	$tempdir = "../../../../files/qr/";
	$konten = $kode."|".$tgl_setuju;
    require_once('../assets/phpqrcode/qrlib.php');
    $num1 = $num+1;
    $qr = "qr-".$num1.".png";
    QRcode::png($konten,$tempdir.$qr, QR_ECLEVEL_H, 4);
    

    $query=mysqli_query($koneksi1, "INSERT INTO qr VALUES('','$nama', '$nip', '$jabatan', '$qr')");

    if($query){
        ?>
        <script>alert('Data berhasil Ditambahkan')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=user'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>