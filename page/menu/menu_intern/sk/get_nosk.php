<?php
	include "../../../../config/koneksi.php";
	
	$id = isset($_GET['kode_id']) ? intval($_GET['kode_id']) : 0;
	$query = "SELECT * FROM intern 
		where id='$id'";
	$result = mysqli_query($koneksi1, $query);
	$respon = array();
	while ($hasil = mysqli_fetch_assoc($result))
	{
	    $respon[]= $hasil;
	}
	echo json_encode($respon);	
?>