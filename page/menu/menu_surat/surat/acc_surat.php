<!-- Content Header (Page header) -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link  href="../assets/fancybox-3.5.7/dist/jquery.fancybox.min.css" rel="stylesheet">
<script src="../assets/fancybox-3.5.7/dist/jquery.fancybox.min.js"></script>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Surat Pelanggaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Surat</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">ACC Surat Pelanggaran</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
			  
		  <?php
		 if($_SESSION['sukses']!="")
		 {
			echo " <div class='alert alert-success'><button class='close' data-dismiss='alert' type='button'><i class='ace-icon fa fa-times'>
			</i></button>".$_SESSION['sukses']."</div>";
			$_SESSION['sukses']="";  
		 } else if($_SESSION['gagal']!="")
		 {
			echo " <div class='alert alert-danger'><button class='close' data-dismiss='alert' type='button'><i class='ace-icon fa fa-times'>
			</i></button>".$_SESSION['gagal']."</div>";
			$_SESSION['gagal']="";  
		 } 
		?>
		
		
		<div class="table-responsive">
                <table id="examplebaru" class="table table-bordered table-striped">
                <thead>
                    <th>No</th>
		                <th>Jenis Surat</th>
		                <th>Jenis Pelanggaran</th>
                    <th>Keterangan pelanggaran</th>
                    <th>Nominal Sanksi</th>
                    <th>Pilih Bidang</th>
                    <th>Pilih Direksi</th>
		                <th>Nomor Surat</th>
                    <th>tanggal Surat</th>
                    <th>Nama File</th>
                    <th>Status</th>
                    <th>qr</th>

                </thead>
                <tbody>
                   <?php
			$no = 0;
			$query = mysqli_query($koneksi1, "SELECT * FROM surat 
				left join surat_status ON surat_status.id_surat=surat.id 
				WHERE (surat_status.status_direktur='Baru' or surat_status.status_direktur='Konfirmasi' or surat_status.status_direktur='Disetujui') AND surat.dir='$_SESSION[idjabatan]'");
			while($row = mysqli_fetch_array($query)){
				
			$caribidang = mysqli_query($koneksi1, "SELECT * FROM bidang 
				WHERE id_bidang='$row[bid]'");
			$bidang = mysqli_fetch_array($caribidang);
			
			$carijabatan = mysqli_query($koneksi1, "SELECT * FROM jabatan 
				WHERE id_jabatan='$row[dir]'");
			$jabatan = mysqli_fetch_array($carijabatan);
				
			  $no++;
			  ?>
                          <tr>
                            <td><?php echo $no ?> </td>
                            <td><?php echo $row ['jenis_srt'] ?> </td>
                            <td><?php echo $row ['sanksi']?> </td>
                            <td><?php echo $row ['ket_pel']?> </td>
                            <td><?php echo $row ['nom_san']?> </td>
                            <td><?php echo $row ['bid']?> </td>
                            <td><?php echo $row ['dir']?> </td>
                            <td><?php echo $row ['nomor_srt']?> </td>
                            <td><?php echo $row ['tgl_srt']?> </td>
                            <td>
				<?php if($row['nama_file']!="") { ?>
				<!-- Mempersingkat nama file -->
				<?php 
					if (strlen($row['nama_file']) >= 25) {
						$temp = substr($string, 0, 15). " ... " . substr($row['nama_file'], -10);
					}
					else {
						$temp = $row['nama_file'];
					}?>

				<a href='../files/<?php echo $row['nama_file'] ?>' target='_blank'><i class="fa fa-file"></i>  
				<?php echo $temp ?> </a>
				<?php }?>
			    </td>            
				 <td> 
				 <?php
						$warna="";
						if($row['status_direktur']=="Baru") {$warna="warning";} 
						else if($row['status_direktur']=="Disetujui") {$warna="success";} 
						else if($row['status_direktur']=="Konfirmasi") {$warna="danger";} 
						
						?>
						<div class='btn-group'>
							  <button style='width:100px' type='button' class='btn btn-<?= $warna?> btn-sm'><?= $row['status_direktur']?></button>

							  <button type='button' class='btn btn-<?= $warna?> btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> <span class='caret'></span> <span class='sr-only'>Toggle Dropdown</span> </button>
							  <div class='dropdown-menu' style='border:1px solid #cecece; background:#FFF;'>
								<a class='dropdown-item' href='../page/menu/menu_surat/surat/update_status.php?lvl=dir&st=Baru&id=<?php echo $row ['id'] ?>' onclick="return confirm('Apa anda yakin untuk ubah status jadi Baru ?')"> Baru</a>
								<a class='dropdown-item' href='../page/menu/menu_surat/surat/update_status.php?lvl=dir&st=Disetujui&id=<?php echo $row ['id'] ?>' onclick="return confirm('Apa anda yakin untuk ubah status jadi Disetujui ?')"> Disetujui </a> 
								<a class='dropdown-item' href='../page/menu/menu_surat/surat/update_status.php?lvl=dir&st=Konfirmasi&id=<?php echo $row ['id'] ?>' onclick="return confirm('Apa anda yakin untuk ubah status jadi Konfirmasi ?')"> Konfirmasi</a> 
							  </div>
							</div>
							
							
							<?php if($row['status_direktur']=="Konfirmasi") {?>
							
								<form role="form" method="POST" action="index.php?page=create_catatan" enctype="multipart/form-data"> 
								<input type="hidden" name="idsurat" value="<?php echo $row ['id'] ?>">

								<div class="form-group">
								  <label>Catatan Konfirmasi</label>
								  <textarea name="catatan" class="form-control" rows="3"><?php echo $row ['catatan_konfirmasi'] ?></textarea>
								</div> 
								  <button type="submit" name="send" class="btn btn-primary">Simpan</button>
								</form>
							
							<?php } ?>
							<?php if($row['status_direktur']=="Disetujui") {?>
							
							<form role="form" method="POST" action="index.php?page=create_catatan" enctype="multipart/form-data"> 
							<input type="hidden" name="idsurat" value="<?php echo $row ['id'] ?>">

							<div class="form-group">
							  <label>Catatan Konfirmasi</label>
							  <textarea name="catatan" class="form-control" rows="3"><?php echo $row ['catatan_konfirmasi'] ?></textarea>
							</div> 
							  <button type="submit" name="send" class="btn btn-primary">Simpan</button>
							</form>
						
						<?php } ?>

							

							
					 
						
				 
				 </td>
				 <!-- Tampilkan gambar QR Code -->
        <td>
        	<a data-fancybox="gallery" href="../files/qr/<?php echo $row['qr_direktur']; ?>">
    				<img src="../files/qr/<?php echo $row['qr_direktur'] ?>" width="82px" height="82px">
					</a>
        </td>
				</tr>
                  
			 <?php } ?>
                   
                                     
                                  
                                    <!-- /.card-body -->
                                    </form>
			</div>						
									
									
									
                                  </div>
                                </div>
                                    <!-- /.modal-content -->
                              </div>
                                  <!-- /.modal-dialog -->
                            </div>
                                <!-- /.modal -->
    
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<style>
.select2-selection{
 
	height: calc(2.25rem + 2px) !important;
	font-size: 1rem  !important;
	font-weight: 400  !important;
	line-height: 1.5  !important;
}
</style>


<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Surat Pelanggaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Surat</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Surat Pelanggaran</h3>
                <br>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
		
		
		<div class="table-responsive">
                <table id="examplebaru" class="table table-bordered table-striped">
                <thead>
                    <th>No</th>
			              <th>Jenis Surat</th>
			              <th>Jenis Pelanggaran</th>
                    <th>Keterangan pelanggaran</th>
                    <th>Nominal Sanksi</th>
                    <th>Pilih Bidang</th>
                    <th>Pilih Dire</th>
			              <th>Nomor Surat</th>
                    <th>tanggal Surat</th>
                    <th>Nama File</th>
                    <th>Bukti Order Bayar</th>
                    <th>Status</th>
                    <th>QR</th>
                    <th>Bukti Bayar</th>
                    <th>No Register</th>
                    <th>Tanggal Surat</th>

                </thead>
                <tbody>
                    <?php
			$no = 0;
			$query = mysqli_query($koneksi1, "SELECT * FROM surat 
				left join surat_status ON surat_status.id_surat=surat.id");
				
				
			while($row = mysqli_fetch_array($query)){
				
			$caribidang = mysqli_query($koneksi1, "SELECT * FROM bidang 
				WHERE id_bidang='$row[bid]'");
			$bidang = mysqli_fetch_array($caribidang);
			
			$carijabatan = mysqli_query($koneksi1, "SELECT * FROM jabatan 
				WHERE id_jabatan='$row[dir]'");
			$jabatan = mysqli_fetch_array($carijabatan);
				
			  $no++;
			  ?>
                          <tr>
                            <td><?php echo $no ?> </td>
                            <td><?php echo $row ['jenis_srt'] ?> </td>
                            <td><?php echo $row ['sanksi']?> </td>
                            <td><?php echo $row ['ket_pel']?> </td>
                            <td><?php echo $row ['nom_san']?> </td>
                            <td><?php echo $bidang ['nama_bidang']?> </td>
                            <td><?php echo $jabatan ['nama_jabatan']?> </td>
                            <td><?php echo $row ['nomor_srt']?> </td>
                            <td><?php echo $row ['tgl_srt']?> </td>
                            <td>
				<?php if($row['nama_file']!="") { ?>
				<!-- Mempersingkat nama file -->
				<?php 
					if (strlen($row['nama_file']) >= 25) {
						$temp = substr($string, 0, 15). " ... " . substr($row['nama_file'], -10);
					}
					else {
						$temp = $row['nama_file'];
					}?>

				<a href='../files/<?php echo $row['nama_file'] ?>' target='_blank'><i class="fa fa-file"></i>  
				<?php echo $temp ?> </a>
				<?php }?>
			    </td>
                            <td>
				<?php if($row['nama_file3']!="") { ?>
				<a href='../files/<?php echo $row['nama_file3'] ?>' target='_blank'><i class="fa fa-file"></i>  
				<?php echo $row['nama_file3'] ?></a>
				<?php }?>			
			    </td>
          <td>
					<?php 
					
					if($_SESSION['level']=="DIREKTUR UTAMA") {
						
						 
						$status = "";
						if($row['status_sekertarisawal']=="Baru" ) { 
							$status= "<div class='btn btn-warning btn-sm'>".$row['status_sekertarisawal']." </div>";
						}    
						if($row['status_sekertarisawal']=="Proses" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_sekertarisawal']." </div>";
						}
            			if($row['status_sekertarisawal']=="Konfirmasi" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_sekertarisawal']." </div>";
						}  
						if($row['status_direktur']=="Baru" ) { 
							$status=  "<div class='btn btn-warning btn-sm'>".$row['status_sekertarisawal']." </div>";
						}  
						if($row['status_direktur']=="Disetujui" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_direktur']." </div>";
						} 
						if($row['status_direktur']=="Konfirmasi" ) { 
							$status=  "<div class='btn btn-danger btn-sm'>".$row['status_direktur']." </div>";
						} 
						if($row['status_siak']=="Baru" ) { 
							$status=  "<div class='btn btn-warning btn-sm'>".$row['status_direktur']." </div>";
						} 
						if($row['status_siak']=="Order Bayar Sanksi" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_siak']." </div>";
						} 
						if($row['status_umum']=="Baru" ) { 
							$status=  "<div class='btn btn-warning btn-sm'>".$row['status_siak']." </div>";
						} 
						if($row['status_umum']=="Upload Order Bayar" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_umum']." </div>";
						} 
						if($row['status_sekertarisakhir']=="Baru" ) { 
							$status=  "<div class='btn btn-warning btn-sm'>".$row['status_umum']." </div>";
						} 
						if($row['status_sekertarisakhir']=="Bukti Bayar Sanksi Selesai" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_sekertarisakhir']." </div>";
						} 
            			if($row['status_sekertarisakhir']=="Bukti Konfirmasi Selesai" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_sekertarisakhir']." </div>";
						} 
						echo $status; 
						
						
					}   
				  ?>

<?php 
					
					if($_SESSION['level']=="DIREKTUR KEPATUHAN") {
						
						 
						$status = "";
						if($row['status_sekertarisawal']=="Baru" ) { 
							$status= "<div class='btn btn-warning btn-sm'>".$row['status_sekertarisawal']." </div>";
						}    
						if($row['status_sekertarisawal']=="Proses" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_sekertarisawal']." </div>";
						}
            if($row['status_sekertarisawal']=="Konfirmasi" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_sekertarisawal']." </div>";
						}  
						if($row['status_direktur']=="Baru" ) { 
							$status=  "<div class='btn btn-warning btn-sm'>".$row['status_sekertarisawal']." </div>";
						}  
						if($row['status_direktur']=="Disetujui" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_direktur']." </div>";
						} 
						if($row['status_direktur']=="Konfirmasi" ) { 
							$status=  "<div class='btn btn-danger btn-sm'>".$row['status_direktur']." </div>";
						} 
						if($row['status_siak']=="Baru" ) { 
							$status=  "<div class='btn btn-warning btn-sm'>".$row['status_direktur']." </div>";
						} 
						if($row['status_siak']=="Order Bayar Sanksi" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_siak']." </div>";
						} 
						if($row['status_umum']=="Baru" ) { 
							$status=  "<div class='btn btn-warning btn-sm'>".$row['status_siak']." </div>";
						} 
						if($row['status_umum']=="Upload Order Bayar" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_umum']." </div>";
						} 
						if($row['status_sekertarisakhir']=="Baru" ) { 
							$status=  "<div class='btn btn-warning btn-sm'>".$row['status_umum']." </div>";
						} 
						if($row['status_sekertarisakhir']=="Bukti Bayar Sanksi Selesai" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_sekertarisakhir']." </div>";
						} 
            if($row['status_sekertarisakhir']=="Bukti Konfirmasi Selesai" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_sekertarisakhir']." </div>";
						} 
						echo $status; 
						
					}   
				  ?>

          <?php 
					
					if($_SESSION['level']=="DIREKTUR OPERASIONAL") {
						
						 
						$status = "";
						if($row['status_sekertarisawal']=="Baru" ) { 
							$status= "<div class='btn btn-warning btn-sm'>".$row['status_sekertarisawal']." </div>";
						}    
						if($row['status_sekertarisawal']=="Proses" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_sekertarisawal']." </div>";
						}
            			if($row['status_sekertarisawal']=="Konfirmasi" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_sekertarisawal']." </div>";
						}  
						if($row['status_direktur']=="Baru" ) { 
							$status=  "<div class='btn btn-warning btn-sm'>".$row['status_sekertarisawal']." </div>";
						}  
						if($row['status_direktur']=="Disetujui" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_direktur']." </div>";
						} 
						if($row['status_direktur']=="Konfirmasi" ) { 
							$status=  "<div class='btn btn-danger btn-sm'>".$row['status_direktur']." </div>";
						} 
						if($row['status_siak']=="Baru" ) { 
							$status=  "<div class='btn btn-warning btn-sm'>".$row['status_direktur']." </div>";
						} 
						if($row['status_siak']=="Order Bayar Sanksi" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_siak']." </div>";
						} 
						if($row['status_umum']=="Baru" ) { 
							$status=  "<div class='btn btn-warning btn-sm'>".$row['status_siak']." </div>";
						} 
						if($row['status_umum']=="Upload Order Bayar" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_umum']." </div>";
						} 
						if($row['status_sekertarisakhir']=="Baru" ) { 
							$status=  "<div class='btn btn-warning btn-sm'>".$row['status_umum']." </div>";
						} 
						if($row['status_sekertarisakhir']=="Bukti Bayar Sanksi Selesai" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_sekertarisakhir']." </div>";
						} 
            if($row['status_sekertarisakhir']=="Bukti Konfirmasi Selesai" ) { 
							$status=  "<div class='btn btn-success btn-sm'>".$row['status_sekertarisakhir']." </div>";
						} 
						echo $status; 
						
						
					}   
				  ?>

				</td>
				<!-- Tampilkan gambar QR Code -->
        <td>
        	<a data-fancybox="gallery" href="../files/qr/<?php echo $row['qr_direktur']; ?>">
    				<img src="../files/qr/<?php echo $row['qr_direktur'] ?>" width="82px" height="82px">
					</a>
        </td>
                            <td>
				                      <?php if($row['nama_file4']!="") { ?>
				                      <a href='../files/<?php echo $row['nama_file4'] ?>' target='_blank'><i class="fa fa-file"></i>  
				                      <?php echo $row['nama_file4'] ?></a>
				                      <?php }?>			
				                    </td>
                            <td><?php if($row['no_reg']!="") { echo $row ['no_reg']; } ?></td>
                            <td><?php if($row['tgl']!="") { echo $row ['tgl']; } ?></td>

                            
                          

                          <?php } ?>
                </tbody>
                </table>
              </div>
              
		</div>
			  <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
