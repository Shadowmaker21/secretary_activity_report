<?php
	
	include "../config/koneksi.php";
	
	if (isset($_POST['bukti'])){
		$appid = $_POST['appid'];
        $no_reg = $_POST['no_reg'];
        $tgl = $_POST['tgl'];
		

		$imgname=$_FILES['nama_file4']['name'];
		echo '<br>';
		$extension = pathinfo($imgname,PATHINFO_EXTENSION);
    	$getfilename =  str_replace(' ', '_', $imgname);

		
		$rename=$getfilename;

    	$newname=$rename;

    	$filename=$_FILES['nama_file4']['tmp_name'];
    	move_uploaded_file($filename, '../files/'.$newname);
        

		$sql = "UPDATE surat SET nama_file4='$newname' WHERE id = '$appid'";
		$run = mysqli_query($koneksi1,$sql);
		if($run == true){
			
			$tgl=date("Y-m-d H:i:s");
			mysqli_query($koneksi1,"UPDATE surat_status 
						SET status_sekertarisakhir='Bukti Konfirmasi Selesai',
							id_usersekertarisakhir='$_SESSION[iduser]',
							tgl_updatesekertarisakhir='$tgl' 
						WHERE id_surat='$appid'");
						
			
			$_SESSION['sukses']="File Konfirmasi berhasil diupload";
			
            ?>
          
			<script type='text/javascript'> document.location = 'index.php?page=surat'; </script>
                <?php
        }else{
			
			$_SESSION['gagal']="File tanda terima gagal diupload";
			
            ?>
			<script type='text/javascript'> document.location = 'index.php?page=surat'; </script>
            <?php
        }
	}
	
 ?>