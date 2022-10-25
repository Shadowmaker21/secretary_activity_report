<?php
session_start();

if(isset($_POST['send']))
{
    $id = $_POST['idsurat'];
    $catatan = $_POST['catatan'];
	$tgl=date("Y-m-d H:i:s");
	$iduser=$_SESSION['iduser'];
	 
    $update = mysqli_query($koneksi1,"UPDATE surat_status 
			SET catatan_konfirmasi='$catatan',
			tgl_updatedirektur='$tgl',
			id_userdirektur='$iduser'
			WHERE id_surat='$id'");


    if($update)
    {
		 
		 
		$_SESSION['sukses']="Catatan konfirmasi berhasil disimpan";
        ?>
        
            <script type='text/javascript'> document.location = 'index.php?page=acc_surat'; </script>
            <?php
    }else{
		
		$_SESSION['gagal']="Catatan konfirmasi gagal disimpan";
		
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
}
?>    