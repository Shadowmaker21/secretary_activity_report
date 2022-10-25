<?php
    $id = $_POST['id'];
    $nama_pub = $_POST['nama_pub'];
    $tahun = $_POST['tahun'];
    $email = implode(" | ", $_POST['email']);
    $file_pub = $_FILES['file_pub']['name'];
    $file_tmp = $_FILES['file_pub']['tmp_name'];
    move_uploaded_file($file_tmp,"../files/".$file_pub);
    $tanggal = $_POST['tanggal'];
    $imgname=$_FILES['file_pu1']['name'];
	echo '<br>';
	$extension = pathinfo($imgname,PATHINFO_EXTENSION);
    $getfilename =  str_replace(' ', '_', $imgname);

	
	$rename=$getfilename;

    $newname=$rename;

    $filename=$_FILES['file_pu1']['tmp_name'];
    move_uploaded_file($filename, '../files/'.$newname);


    $query=mysqli_query($koneksi1, "UPDATE publikasi SET file_pu1='$newname' WHERE id='$id'");

    if($query){
        ?>
        <script>alert('Data berhasil Ditambahkan')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=pub'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>