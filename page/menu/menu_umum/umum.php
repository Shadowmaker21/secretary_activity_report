<!-- Content Header (Page header) -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link  href="../assets/fancybox-3.5.7/dist/jquery.fancybox.min.css" rel="stylesheet">
<script src="../assets/fancybox-3.5.7/dist/jquery.fancybox.min.js"></script>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>UMUM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">UMUM</li>
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
                <h3 class="card-title">Data UMUM</h3>
                <br>
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
                    <th>Order Bayar</th>
                    <th>Upload Bukti Bayar</th>
                    <th>Status</th>
                    <th>QR</th>

                </thead>
                <tbody>
                    <?php
                        $no = 0;
                        $query = mysqli_query($koneksi1,"SELECT * FROM surat 
							LEFT JOIN surat_status ON surat.id=surat_status.id_surat 
							WHERE surat_status.status_siak='Order Bayar Sanksi' and (surat_status.status_umum='Baru' or surat_status.status_umum IS NULL) ");
                        while($row = mysqli_fetch_assoc($query)){
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
					<a href='../files/<?php echo $row['nama_file'] ?>' target='_blank'> <i class="fa fa-file"></i>  
					<?php echo $row['nama_file'] ?> </a>
					<?php }?>	
				</td>
                            <td>
				<?php if($row['nama_file2']!="") { ?>
					<a href='../files/<?php echo $row['nama_file2'] ?>' target='_blank'> <i class="fa fa-file"></i>  
					<?php echo $row['nama_file2'] ?> </a>
					<?php }?>		
				</td>
                            <td>
                            <form action="index.php?page=accept3" method="POST" value="<?php echo $row['id']; ?>" enctype="multipart/form-data">
				<input type="hidden" name="appid" value="<?php echo $row['id']; ?>">
                              <label>Upload Bukti Bayar</label>
				<input type="file" name="nama_file3" >
				<input type="submit" class="btn btn-sm btn-success" name="order" value="Upload">
				 </form>
                            </td>
                            <td>
				<?php 
					  if ($row['status_umum'] == NULL or $row['status_umum'] == "Baru") {
						echo "<div class='btn btn-warning btn-sm'>Disetujui Direksi. Upload Bukti Bayar Sanksi!</div>";
					  }
					  else if ($row['status_umum'] == "Upload Order Bayar") {
						echo "<span class='badge badge-success'>Upload Order Bayar</span>";
					  }
				  ?>
							 		          </td>
                            <td><img height='80px' src="<?php echo $row ['qr']?>"></td>

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
				
				<a href='../files/<?php echo $row['nama_file'] ?>' target='_blank'><i class="fa fa-file"></i>  
				<?php echo $row['nama_file'] ?> </a>
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
					
					if($_SESSION['level']=="UMUM") {
						
						 
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
                            <td><img height='80px' src="<?php echo $row ['qr']?>"></td>
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

    