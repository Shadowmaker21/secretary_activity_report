<?php
	session_start();
	include "../../../config/koneksi.php";
 
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $username = $_POST['username'];
    
	$level = $_POST['level'];
	
	if($_POST['passwordbaru']!="") {
		$pass=md5($_POST['passwordbaru']);
	} else {
		$pass = $_POST['passwordlama'];
	}
	
	
	//	id_user nama_lengkap	id_jabatan	username	password	level 	
	 
    $query=mysqli_query($koneksi1, "UPDATE user SET 
						nama_lengkap = '$nama',
						id_jabatan = '$jabatan',
						username = '$username',
						password = '$pass',
						level = '$level'
						WHERE id_user = '$_POST[id]'");

    if($query){
		
		$_SESSION['sukses']="Data user berhasil diubah";
        ?>
       
	    <script type='text/javascript'> document.location = '../../../admin/index.php?page=user2'; </script>
        <?php
    }else{
		$_SESSION['gagal']="Data user berhasil diubah";
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>