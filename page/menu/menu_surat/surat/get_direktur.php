<?php
	include "../../../../config/koneksi.php";
	
	$id = isset($_GET['bidang_id']) ? intval($_GET['bidang_id']) : 0;
	$query = "SELECT * FROM jabatan 
		where id_bidang='$id'";
	$result = mysqli_query($koneksi1, $query);
	$respon = array();
	while ($hasil = mysqli_fetch_array($result))
	{
	    $respon[]= $hasil;
	}
	echo json_encode($respon);	
?>