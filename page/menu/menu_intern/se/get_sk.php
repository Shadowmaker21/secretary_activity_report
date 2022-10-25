<?php
	include "../../../../config/koneksi.php";
	
	$id = isset($_GET['kode_id']) ? intval($_GET['kode_id']) : 0;
	$query = "SELECT * FROM divisi 
		where id_kode='$id'";
	$result = mysqli_query($koneksi1, $query);
	$respon = array();
	while ($hasil = mysqli_fetch_array($result))
	{
	    $respon[]= $hasil;
	}
	echo json_encode($respon);	
?>