<?php 
// berfungsi mengaktifkan session
session_start();
 
// berfungsi menghubungkan koneksi ke database
include 'config/koneksi.php';
 
// berfungsi menangkap data yang dikirim
$user = $_POST['username'];
$pass = md5($_POST['password']);

//var_dump($user); exit;
 
// berfungsi menyeleksi data user dengan username dan password yang sesuai
$sql = mysqli_query($koneksi1,"SELECT * FROM user WHERE username='$user' AND password='$pass'");
//berfungsi menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($sql);

// berfungsi mengecek apakah username dan password ada pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($sql);


	$_SESSION['iduser'] = $data['id_user'];
	$_SESSION['idjabatan'] = $data['id_jabatan'];
	
	// berfungsi mengecek jika user login sebagai admin
	if($data['level']=="ADMIN"){
		// berfungsi membuat session
		$_SESSION['nama'] =  $data['nama_lengkap'];
		$_SESSION['level'] = "ADMIN";
		//berfungsi mengalihkan ke halaman admin
		header("location:admin/index.php");
	// berfungsi mengecek jika user login sebagai moderator
	}else if($data['level']=="SEKRETARIS"){
		// berfungsi membuat session
		$_SESSION['nama'] = $data['nama_lengkap'];
		$_SESSION['level'] = "SEKRETARIS";
		// berfungsi mengalihkan ke halaman moderator
		header("location:sekertaris/index.php");

	}else if($data['level']=="SDM"){
		// berfungsi membuat session
		$_SESSION['nama'] = $data['nama_lengkap'];
		$_SESSION['level'] = "SDM";
		// berfungsi mengalihkan ke halaman moderator
		header("location:sdm/index.php");

	}else if($data['level']=="SIAK"){
		// berfungsi membuat session
		$_SESSION['nama'] = $data['nama_lengkap'];
		$_SESSION['level'] = "SIAK";
		// berfungsi mengalihkan ke halaman moderator
		header("location:siak/index.php");

	}else if($data['level']=="UMUM"){
		// berfungsi membuat session
		$_SESSION['nama'] = $data['nama_lengkap'];
		$_SESSION['level'] = "UMUM";
		// berfungsi mengalihkan ke halaman moderator
		header("location:umum/index.php");

	}else if($data['level']=="DIREKTUR UTAMA"){
		// berfungsi membuat session
		$_SESSION['nama'] = $data['nama_lengkap'];
		$_SESSION['level'] = "DIREKTUR UTAMA";
		// berfungsi mengalihkan ke halaman moderator
		header("location:direksi1/index.php");

	}else if($data['level']=="DIREKTUR KEPATUHAN"){
		// berfungsi membuat session
		$_SESSION['nama'] = $data['nama_lengkap'];
		$_SESSION['level'] = "DIREKTUR KEPATUHAN";
		// berfungsi mengalihkan ke halaman moderator
		header("location:direksi2/index.php");

	}else if($data['level']=="DIREKTUR OPERASIONAL"){
		// berfungsi membuat session
		$_SESSION['nama'] = $data['nama_lengkap'];
		$_SESSION['level'] = "DIREKTUR OPERASIONAL";
		// berfungsi mengalihkan ke halaman moderator
		header("location:direksi3/index.php");

	}
	else{
		// berfungsi mengalihkan alihkan ke halaman login kembali
		header("location:index.php?alert=gagal1");
	}	
}else{
	header("location:index.php?alert=gagal");
}
?>