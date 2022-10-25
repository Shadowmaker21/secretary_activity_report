<?php

    $id = $_POST['id'];
    $nama_pe = $_POST['nama_pe'];
    $ktp_pe = $_POST['ktp_pe'];
    $jabatan_pe	= $_POST['jabatan_pe'];
    $awal_pe = $_POST['awal_pe'];
    $mjb_pe = $_POST['mjb_pe'];
    
    $imgname=$_FILES['spb_pe']['name'];
	echo '<br>';
	$extension = pathinfo($imgname,PATHINFO_EXTENSION);
    $getfilename =  str_replace(' ', '_', $imgname);

	
	$rename=$getfilename;

    $newname=$rename;

    $filename=$_FILES['spb_pe']['tmp_name'];
    move_uploaded_file($filename, '../files/'.$newname);

    $spo_pe = $_POST['spo_pe'];

    $imgname1=$_FILES['certif_pe']['name'];
	echo '<br>';
	$extension1 = pathinfo($imgname,PATHINFO_EXTENSION);
    $getfilename1 =  str_replace(' ', '_', $imgname1);

	
	$rename1=$getfilename1;

    $newname1=$rename1;

    $filename1=$_FILES['certif_pe']['tmp_name'];
    move_uploaded_file($filename1, '../files/'.$newname1);

    $jatem_pe = $_POST['jatem_pe'];
    $pend_pe = $_POST['pend_pe'];


    $query=mysqli_query($koneksi1, "INSERT INTO pengurus_eksekutif VALUES nama_pe='$nama_pe' ,ktp_pe='$ktp_pe', jabatan_pe='$jabatan_pe',awal_pe='$awal_pe', mjb_pe='$mjb_pe', spb_pe='$newname', spo_pe='$spo_pe', certif_pe='$newname1', jatem_pe='$jatem_pe', pend_pe='$pend_pe' WHERE id = '$id'");

    if($query){
        ?>
        <script>alert('Data berhasil Ditambahkan')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=pe'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>