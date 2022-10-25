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
    $dic = @$_POST['dic'];
    $menc[] = implode(" | ", @$_POST);
    $jenis = @$_POST['jenis'];
    
    $imgname=$_FILES['file']['name'];
	echo '<br>';
	$extension = pathinfo($imgname,PATHINFO_EXTENSION);
    $getfilename =  str_replace(' ', '_', $imgname);

	
	$rename=$getfilename;

    $newname=$rename;

    $filename=$_FILES['file']['tmp_name'];
    move_uploaded_file($filename, '../files/'.$newname);


    $query=mysqli_query($koneksi1, "UPDATE intern SET file='$newname', no_intern='$no_intern', tbt='$tbt', blk='$blk', surat='$surat', kode='$kode', jen='$jen', hal='$hal' WHERE id = '$id'");

    

    if($query){
        ?>
        <script>alert('Data berhasil Diupdate')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=se'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>