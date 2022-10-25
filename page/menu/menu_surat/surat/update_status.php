<?php
session_start();
include "../../../../config/koneksi.php";

 
 $query = mysqli_query($koneksi1, "SELECT * FROM surat 
				left join surat_status ON surat_status.id_surat=surat.id 
				WHERE (surat_status.status_direktur='Baru' or surat_status.status_direktur='Konfirmasi') AND surat.dir='$_SESSION[idjabatan]'");
 $num = mysqli_num_rows($query);

 
 // DIREKTUR --> UPDATE --> BARU
	if($_GET['lvl']=="dir" and $_GET['st']=="Baru") {
		
		$tgl=date("Y-m-d H:i:s");
		$iduser=$_SESSION['iduser'];
		$update = mysqli_query($koneksi1,"UPDATE surat_status 
					SET status_direktur='Baru',
						status_sekertarisawal='Baru', 
						tgl_updatedirektur='$tgl',
						id_userdirektur='$iduser',
						catatan_konfirmasi='',
						status_siak=NULL
					WHERE id_surat='$_GET[id]'");
					
		if($update)
		{ 
			$_SESSION['sukses']="Status surat berhasil diupdate";
			?>
			
				<script type='text/javascript'> document.location = '../../../../direksi1/index.php?page=acc_surat'; </script>
				<?php
		}else{
			
			$_SESSION['sukses']="Status surat gagal diupdate";
			
			?>
			<script type="text/javascript">
				alert("Ada Kesalahan saat input.");
			</script>
			<?php
		}
	
	
	}
    
	
	// QR Code Berhasil
	// DIREKTUR --> UPDATE --> DISETUJUI
	else if($_GET['lvl']=="dir" && $_GET['st']=="Disetujui") {
		$nama = $_SESSION['nama'];
		$level = $_SESSION['level'];
		$tgl_setuju = date("d-m-Y");
		$tgl=date("Y-m-d H:i:s");
		$tempdir = "../../../../files/qr/";
		$konten = $nama."|".$level."|".$tgl_setuju;
		$num1 = $num+1;
		$qr = "qr-".$num1.".png";
		QRcode::png($konten,$tempdir.$qr, QR_ECLEVEL_H, 4);

		$update = mysqli_query($koneksi1,"UPDATE surat_status 
					SET status_direktur='Disetujui',
						status_sekertarisawal='Proses',
						tgl_updatedirektur='$tgl',
						id_userdirektur='$iduser',
						status_siak='Baru',
						qr_direktur='$qr'
					WHERE id_surat='$_GET[id]'");
	
	if($update)
		{ 
			$_SESSION['sukses']="Status surat berhasil diupdate";
			?>
			
				<script type='text/javascript'> document.location = '../../../../direksi1/index.php?page=acc_surat'; </script>
				<?php
		}else{
			
			$_SESSION['gagal']="Status surat gagal diupdate";
			
			?>
			<script type="text/javascript">
				alert("Ada Kesalahan saat input.");
			</script>
			<?php
		}
	}
	
	
	// DIREKTUR --> UPDATE --> KONFIRMASI
	else if($_GET['lvl']=="dir" and $_GET['st']=="Konfirmasi") {
		$nama = $_SESSION['nama'];
		$level = $_SESSION['level'];
		$tgl_setuju = date("d-m-Y");
		$tgl=date("Y-m-d H:i:s");
		$tempdir = "../../../../files/qr/";
		$konten = $nama."|".$level."|".$tgl_setuju;
		$num1 = $num+1;
		$qr = "qr-".$num1.".png";
		QRcode::png($konten,$tempdir.$qr, QR_ECLEVEL_H, 4);
		$iduser=$_SESSION['iduser'];
		$update = mysqli_query($koneksi1,"UPDATE surat_status 
					SET status_direktur='Konfirmasi',
						status_sekertarisawal='Konfirmasi',
						tgl_updatedirektur='$tgl',
						id_userdirektur='$iduser', 
						status_siak=NULL,
						qr_direktur='$qr'
					WHERE id_surat='$_GET[id]'");
					
		if($update)
		{ 
			$_SESSION['sukses']="Status surat berhasil diupdate";
			?>
			
				<script type='text/javascript'> document.location = '../../../../direksi1/index.php?page=acc_surat'; </script>
				<?php
		}else{
			
			$_SESSION['sukses']="Status surat gagal diupdate";
			
			?>
			<script type="text/javascript">
				alert("Ada Kesalahan saat input.");
			</script>
			<?php
		}
	
	
	}
 
    
 
?>    