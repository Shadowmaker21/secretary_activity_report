<?php
session_start();

if(isset($_POST['send']))
{
    $id = $_POST['id'];
    $jenis_srt = $_POST['jenis_srt'];
    $sanksi = $_POST['sanksi'];
    $ket_pel = $_POST['ket_pel'];
    $nom_san = $_POST['nom_san'];
    $bid = $_POST['bid'];
    $dir = $_POST['dir'];
    $nomor_srt = $_POST['nomor_srt'];
    $tgl_srt = $_POST['tgl_srt'];

    $imgname=$_FILES['nama_file']['name'];
	echo '<br>';
	$extension = pathinfo($imgname,PATHINFO_EXTENSION);
    $getfilename =  str_replace(' ', '_', $imgname);

	
	$rename=$getfilename;

    $newname=$rename;

    $filename=$_FILES['nama_file']['tmp_name'];
    move_uploaded_file($filename, '../files/'.$newname);

    $nama_file2 = $_POST['nama_file2'];
    $nama_file3 = $_POST['nama_file3'];
    $nama_file4 = $_POST['nama_file4'];
    $no_reg = $_POST['no_reg'];
    $tgl = $_POST['tgl'];

	//id	jenis_srt	sanksi	ket_pel	nom_san	bid	dir	nomor_srt	tgl_srt	nama_file	nama_file2	nama_file3	nama_file4	status	qr	no_reg	tgl  
    $sql_insert = mysqli_query($koneksi1,"INSERT INTO surat (jenis_srt,sanksi,ket_pel,nom_san,bid,dir,nomor_srt,tgl_srt,nama_file) 
	VALUES ('$jenis_srt','$sanksi','$ket_pel','$nom_san','$bid','$dir','$nomor_srt','$tgl_srt','$newname')  ");
	
	$idsurat=mysqli_insert_id($koneksi1);
	
	 

    if($sql_insert)
    {
		
		$tglupdate=date("Y-m-d H:i:s");
		$tgl_updatedirektur="0000-00-00 00:00:00";
		$tgl_udatesiak="0000-00-00 00:00:00";
		$tgl_updateumum="0000-00-00 00:00:00";
		$tgl_updatesekertarisakhir="0000-00-00 00:00:00";
		
		//id_suratstatus 	id_surat 	status_sekertarisawal 	tgl_updatesekertarisawal 	id_usersekertarisawal 	status_direktur 	tgl_updatedirektur 	id_userdirektur 	status_siak 	tgl_udatesiak 	id_usersiak 	status_umum 	tgl_updateumum 	id_userumum 	status_sekertarisakhir 	tgl_updatesekertarisakhir 	id_usersekertarisakhir 	 
		 mysqli_query($koneksi1,"INSERT INTO surat_status (id_surat,status_sekertarisawal,tgl_updatesekertarisawal,id_usersekertarisawal,status_direktur )
		 VALUES ('$idsurat','Baru','$tglupdate','$_SESSION[iduser]','Baru')");
		 
		 
		$_SESSION['sukses']="Data surat berhasil ditambahkan dan menunggu approval dari Direktur";
        ?>
        
            <script type='text/javascript'> document.location = 'index.php?page=surat'; </script>
            <?php
    }else{
		
		$_SESSION['sukses']="Data surat gagal ditambahkan";
		
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
}
?>    