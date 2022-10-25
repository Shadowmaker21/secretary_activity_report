<!-- Content Header (Page header) -->
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
                <h3 class="card-title">Data Bag. Umum</h3>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">Upload Bukti Bayar</a>
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
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
                    <th>File Sanksi</th>
                    <th>Order Bayar</th>
                    <th>Upload Order Bayar</th>
                    <th>Status</th>
                    <th>QR</th>

                </thead>
                <tbody>
                    <?php
                        $no = 0;
                        $query = mysqli_query($koneksi1, "SELECT * FROM surat");
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
                            <td><img height="80px" src="../files/<?php echo $row['nama_file'] ?>" width="80"></td>
                            <td><img height="80px" src="../files/<?php echo $row['nama_file2'] ?>" width="80"></td>
                            <td><img height="80px" src="../files/<?php echo $row['nama_file3'] ?>" width="80"></td>
                            <td>
							 			            <?php 
							 			              if ($row['status'] == 0) {
							 			              	echo "<span class='badge badge-warning'>Pending</span>";
							 			              }
							 			              else{
							 			              	echo "<span class='badge badge-success'>Disetujui Direksi</span>";
							 			              }
							 		              ?>
							 		          </td>
                            <td><img height='80px' src="<?php echo $row ['qr']?>"></td>

                          <?php } ?>
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


<!-- Modal form Tambah User -->
<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Form Upload Bayar Sanksi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=cumum">
                <div class="card-body">

                
                  <div class="form-group">
                    <label for="exampleInputFile">File Upload</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="send" class="btn btn-primary">Kirim Persetujuan</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    