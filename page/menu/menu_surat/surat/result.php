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
                <h3 class="card-title">ACC Surat Pelanggaran</h3>

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
                    <th>Pengirim</th>
                    <th>Nama File</th>
			              <th>Keterangan</th>
                    <th>Status</th>
                    <th>TTD QR</th>

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
                            <td><?php echo $row ['nama_pengirim']?> </td>
                            <td><?php echo $row ['nama_file']?> </td>
                            <td><?php echo $row ['ket']?></td>
                            <td>
							      <?php 
							        if ($row['status'] == 0) {
							        	echo "<span class='badge badge-warning'>Pending</span>";
							        }
							        else{
							        	echo "<span class='badge badge-success'>Approved</span>";
							        }}
							    ?>
							</td>
                            <td>
                            <?php $kode = $row['nama']."/".$row['nip']."/".$row['jabatan']."";
                            require_once('../assets/phpqrcode/qrlib.php');

                            QRcode::png("$kode","kode".$id.".png","M",4,4);
                             ?>
                             <img src="kode<?php $no ?>.png" alt="">
                            </td>
                    
                                     </tr>
                                    </div>
                                    <!-- /.card-body -->
                                    </form>

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
