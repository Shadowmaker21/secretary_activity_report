<?php
	session_start();
	include "../../../config/koneksi.php";
 
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
	$level = $_POST['level'];
	
	
	//	id_user nama_lengkap	id_jabatan	username	password	level 	
	 
    $query=mysqli_query($koneksi1, "INSERT INTO user (nama_lengkap,id_jabatan,username,password,level) 
					VALUES('$nama', '$jabatan', '$username','$password','$level')");

    if($query){
		
		$_SESSION['sukses']="Data user berhasil ditambahkan";
        ?>
       
	    <script type='text/javascript'> document.location = '../../../admin/index.php?page=user2'; </script>
        <?php
    }else{
		$_SESSION['gagal']="Data user gagal ditambahkan";
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>