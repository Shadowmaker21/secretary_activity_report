<?php

    $id = $_POST['id'];
    $no_intern = $_POST['no_intern'];
    $tbt = $_POST['tbt'];
    $blk = $_POST['blk'];
    $surat = $_POST['surat'];
    $kode = $_POST['kode'];
    $jen = $_POST['jen'];
    $div = $_POST['div'];
    $hal = $_POST['hal'];
    $dic = $_POST['dic'];
    $menc = implode(" | ", $_POST['menc']);
    $jenis = $_POST['jenis'];
    
    $imgname=$_FILES['file']['name'];
	echo '<br>';
	$extension = pathinfo($imgname,PATHINFO_EXTENSION);
    $getfilename =  str_replace(' ', '_', $imgname);

	
	$rename=$getfilename;

    $newname=$rename;

    $filename=$_FILES['file']['tmp_name'];
    move_uploaded_file($filename, '../files/'.$newname);
    
    $query=mysqli_query($koneksi1, "INSERT INTO intern VALUES('','$no_intern','$tbt','$blk','$surat','$kode','$jen','$div','$hal','$dic','$menc', '$jenis','$newname')");
    
    if($query){
        ?>
        <script>alert('Data berhasil Ditambahkan')</script>";
        <script type='text/javascript'> document.location = 'index.php?page=sk'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>