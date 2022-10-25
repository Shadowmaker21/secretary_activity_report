<?php
    
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tahun = $_POST['tahun'];
	
    $imgname=$_FILES['file_not']['name'];
	echo '<br>';
	$extension = pathinfo($imgname,PATHINFO_EXTENSION);
    $getfilename =  str_replace(' ', '_', $imgname);

	
	$rename=$getfilename;

    $newname=$rename;

    $filename=$_FILES['file_not']['tmp_name'];
    move_uploaded_file($filename, '../files/'.$newname);

    $tanggal_update = $_POST['tanggal_update'];
    


    $query=mysqli_query($koneksi1, "INSERT INTO hasil_notdekom VALUES('','$nama','$newname',CURRENT_TIMESTAMP)");

    if($query){
        ?>
        <script>alert('Data Berhasil dikirim')</script>";
                <script type='text/javascript'> document.location = 'index.php?page=not_haskom'; </script>";
                <?php
        }else{
            ?>
            <script type="text/javascript">
                alert("Data Tidak dapat di ACC");
            </script>
            <?php
    }
    
?>
