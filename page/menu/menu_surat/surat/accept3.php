<?php
	include "../config/koneksi.php";
	if (isset($_POST['order'])){
		$appid = $_POST['appid'];


        $imgname=$_FILES['nama_file3']['name'];
		echo '<br>';
		$extension = pathinfo($imgname,PATHINFO_EXTENSION);
    	$getfilename =  str_replace(' ', '_', $imgname);

		
		$rename=$getfilename;

    	$newname=$rename;

    	$filename=$_FILES['nama_file3']['tmp_name'];
    	move_uploaded_file($filename, '../files/'.$newname);
        

		$sql = "UPDATE surat SET nama_file3='$newname' WHERE id = '$appid'";
		$run = mysqli_query($koneksi1,$sql);
		if($run == true){
			
			$tgl=date("Y-m-d H:i:s");
			mysqli_query($koneksi1,"UPDATE surat_status 
						SET status_umum='Upload Order Bayar',
							id_userumum='$_SESSION[iduser]',
							tgl_updateumum='$tgl',
							status_sekertarisakhir='Baru'
						WHERE id_surat='$appid'");
						
			
			$_SESSION['sukses']="File bukti bayar berhasil diupload";
            ?>
              
                <script type='text/javascript'> document.location = 'index.php?page=umum'; </script>
                <?php
        }else{
			
			$_SESSION['gagal']="File bukti bayar gagal diupload";
            ?>
            <script type="text/javascript">
                alert("Data Tidak dapat di ACC");
            </script>
            <?php
        }
	}
	
 ?>