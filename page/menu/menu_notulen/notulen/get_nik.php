<?php
	include "../../../../config/koneksi.php";
	
	$id = isset($_GET['nik_id']) ? intval($_GET['nik_id']) : 0;
	$query = "SELECT * FROM jabatan2 
		where id_nik='$id'";
	$result = mysqli_query($koneksi1, $query);
	$respon = array();
	while ($hasil = mysqli_fetch_array($result))
	{
	    $respon[]= $hasil;
	}
	echo json_encode($respon);	
?>