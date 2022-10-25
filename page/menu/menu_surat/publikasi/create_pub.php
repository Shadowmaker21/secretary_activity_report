<?php

    $nama_pub = $_POST['nama_pub'];
    $tahun = $_POST['tahun'];
    
    $email = implode(" | ", $_POST['email']);
    $getfilename =  str_replace(' ', '', $email);

    $rename=$getfilename;

    $newname2=$rename;


    $imgname=$_FILES['file_pub']['name'];
	echo '<br>';
	$extension = pathinfo($imgname,PATHINFO_EXTENSION);
    $getfilename =  str_replace(' ', '_', $imgname);

	
	$rename=$getfilename;

    $newname=$rename;

    $filename=$_FILES['file_pub']['tmp_name'];
    move_uploaded_file($filename, '../files/'.$newname);



    $tanggal = $_POST['tanggal'];
    
    
    $imgname=$_FILES['file_pu1']['name'];
	echo '<br>';
	$extension = pathinfo($imgname,PATHINFO_EXTENSION);
    $getfilename =  str_replace(' ', '_', $imgname);

	
	$rename=$getfilename;

    $newname1=$rename;

    $filename=$_FILES['file_pu1']['tmp_name'];
    move_uploaded_file($filename, '../files/'.$newname1);


    


    $query=mysqli_query($koneksi1, "INSERT INTO publikasi VALUES('','$nama_pub','$tahun','$newname2','$newname',CURRENT_TIMESTAMP,'$newname1')");

    if($query){
        ?>
        <script>alert('Data Berhasil dikirim')</script>";
                <script type='text/javascript'> document.location = 'index.php?page=pub'; </script>";
                <?php
        }else{
            ?>
            <script type="text/javascript">
                alert("Data Tidak dapat di ACC");
            </script>
            <?php
    }
    
?>