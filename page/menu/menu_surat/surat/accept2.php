<?php
	include "../config/koneksi.php";
	if (isset($_POST['order'])){
		$appid2 = $_POST['appid2'];

        $imgname=$_FILES['nama_file2']['name'];
		echo '<br>';
		$extension = pathinfo($imgname,PATHINFO_EXTENSION);
    	$getfilename =  str_replace(' ', '_', $imgname);

		
		$rename=$getfilename;

    	$newname=$rename;

    	$filename=$_FILES['nama_file2']['tmp_name'];
    	move_uploaded_file($filename, '../files/'.$newname);

		$sql = "UPDATE surat SET nama_file2='$newname' WHERE id = '$appid2'";
		$run = mysqli_query($koneksi1,$sql);
		if($run == true){
			
			$tgl=date("Y-m-d H:i:s");
			mysqli_query($koneksi1,"UPDATE surat_status 
						SET status_siak='Order Bayar Sanksi',
							id_usersiak='$_SESSION[iduser]',
							tgl_updatesiak='$tgl',
							status_umum='Baru'
						WHERE id_surat='$appid2'");
			
			
			$_SESSION['sukses']="File order bayar berhasil diupload";
            ?>
               
                <script type='text/javascript'> document.location = 'index.php?page=siak'; </script>
                <?php
        }else{
			$_SESSION['gagal']="File order bayar gagal diupload";
			
            ?>
            <script type="text/javascript">
                alert("Upload gagal");
            </script>
            <?php
        }
	}
	
 ?>