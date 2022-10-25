<?php
	session_start();
	include "../../../config/koneksi.php";
 
    $id = $_GET['id'];
    
	
	//	id_user nama_lengkap	id_jabatan	username	password	level 	
	 
    $query=mysqli_query($koneksi1, "DELETE FROM user WHERE id_user='$id'");

    if($query){
		
		$_SESSION['sukses']="Data user berhasil dihapus";
        ?>
       
	    <script type='text/javascript'> document.location = '../../../admin/index.php?page=user2'; </script>
        <?php
    }else{
		$_SESSION['gagal']="Data user gagal dihapus";
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>