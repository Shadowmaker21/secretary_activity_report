<?php
	include "../config/koneksi.php";
	if (isset($_POST['approve'])){
		$appid = $_POST['appid'];
        $qr = $_POST['qr'];
		$sql = "UPDATE surat SET status='1', qr='../admin/Direktur1.png' WHERE id = '$appid'";
		$run = mysqli_query($koneksi1,$sql);
		if($run == true){
            ?>
                <script>alert('Data Berhasil di Setujui')</script>";
                <script type='text/javascript'> document.location = 'index.php?page=surat'; </script>";
                <?php
        }else{
            ?>
            <script type="text/javascript">
                alert("Data Tidak dapat di ACC");
            </script>
            <?php
        }
	}
	
 ?>