<?php

    $id = $_POST['id'];
    $jenis_srt = $_POST['jenis_srt'];
    $sanksi = $_POST['sanksi'];
    $ket_pel = $_POST['ket_pel'];
    $nom_san = $_POST['nom_san'];
    $bid = $_POST['bid'];
    $dir = $_POST['dir'];
    $nomor_srt = $_POST['nomor_srt'];

    $imgname=$_FILES['nama_file']['name'];
	echo '<br>';
	$extension = pathinfo($imgname,PATHINFO_EXTENSION);
    $getfilename =  str_replace(' ', '_', $imgname);

	
	$rename=$getfilename;

    $newname=$rename;

    $filename=$_FILES['nama_file']['tmp_name'];
    move_uploaded_file($filename, '../files/'.$newname);

    $ket = $_POST['ket'];

    $query=mysqli_query($koneksi1, "UPDATE surat SET jenis_srt='$jenis_srt' , sanksi='$sanksi' , ket_pel='$ket_pel',nom_san='$nom_san',bid='$bid',dir='$dir',nomor_srt='$nomor_srt',nama_file='$newname',ket='$ket' WHERE id = '$id'");

    if($query){
        ?>
        <script>alert('Update Data berhasil')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=surat'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>