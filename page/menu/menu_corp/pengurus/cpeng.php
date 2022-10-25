<?php

    $id = $_POST['id'];
    $nama_peng = $_POST['nama_peng'];
    $jabatan_peng = $_POST['jabatan_peng'];
    $awal_peng = $_POST['awal_peng'];
    $mulai_peng = $_POST['mulai_peng'];
    $akhir_peng = $_POST['akhir_peng'];
    $rups_peng = $_POST['rups_peng'];
    $akte_rups = $_POST['akte_rups'];

    $imgname=$_FILES['ojk_peng']['name'];
	echo '<br>';
	$extension = pathinfo($imgname,PATHINFO_EXTENSION);
    $getfilename =  str_replace(' ', '_', $imgname);

	
	$rename=$getfilename;

    $newname=$rename;

    $filename=$_FILES['ojk_peng']['tmp_name'];
    move_uploaded_file($filename, '../files/'.$newname);
    
    $sojk_peng = $_POST['sojk_peng'];
    
    $imgname1=$_FILES['certif_peng']['name'];
	echo '<br>';
	$extension1 = pathinfo($imgname,PATHINFO_EXTENSION);
    $getfilename1 =  str_replace(' ', '_', $imgname1);

	
	$rename1=$getfilename1;

    $newname1=$rename1;

    $filename1=$_FILES['certif_peng']['tmp_name'];
    move_uploaded_file($filename, '../files/'.$newname1);
    
    $jatem_peng = $_POST['jatem_peng'];
    $pend = $_POST['pend'];


    $query=mysqli_query($koneksi1, "INSERT INTO pengurus VALUES('','$nama_peng','$jabatan_peng','$awal_peng','$mulai_peng','$akhir_peng','$rups_peng','$akte_rups','$newname','$sojk_peng','$newname1','$jatem_peng','$pend')");

    if($query){
        ?>
        <script>alert('Data berhasil Ditambahkan')</script>";
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