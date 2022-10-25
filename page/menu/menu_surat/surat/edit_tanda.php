<?php

    $id = $_POST['id'];
    $nama = $_POST['nama'];


    $imgname=$_FILES['file']['name'];
	echo '<br>';
	$extension = pathinfo($imgname,PATHINFO_EXTENSION);
    $getfilename =  str_replace(' ', '_', $imgname);

	
	$rename=$getfilename;

    $newname=$rename;

    $filename=$_FILES['file']['tmp_name'];
    move_uploaded_file($filename, '../files/'.$newname);

    $keterangan = $_POST['keterangan'];
    $tgl_upload = $_POST['tgl_upload'];

    $query=mysqli_query($koneksi1, "UPDATE tanda SET nama='$nama' , file='$newname' ,keterangan='$keterangan',CURRENT_TIMESTAMP WHERE id = '$id'");

    if($query){
        ?>
        <script>alert('Update Data berhasil')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=tanda'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>