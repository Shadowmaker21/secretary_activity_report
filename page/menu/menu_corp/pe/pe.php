<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">PE</li>
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
                <h3 class="card-title">Data Pejabat Eksekutif</h3>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                  Tambah PE
                </button>
              </div>
              <!-- /.card-header -->
              <div class="table-responsive">
                <table id="examplebaru" class="table table-bordered table-striped">  
                    <thead>
                        <th>No</th>
			                  <th>Nama Pejabat Eksekutif</th>
                        <th>Nomor KTP</th>
                        <th>Jabatan</th>
                        <th>Awal Menjabat</th>
                        <th>Tanggal Menjabat</th>
                        <th>Total Menjabat</th>
                        <th>Surat Pengangkatan Dari Bank</th>
                        <th>Surat Penegasan OJK</th>
                        <th>Certif</th>
                        <th>Jatuh Tempo Certif</th>
                        <th>Masa Aktif Certif</th>
                        <th>Pendidikan Terakhir</th>
                        <th>Action</th>

                    </thead>
                    <tbody>
                    <?php
                        $no = 0;
                        $query = mysqli_query($koneksi1, "SELECT * FROM pengurus_eksekutif");
                        while($row = mysqli_fetch_assoc($query)){
                          $no++;
                          ?>
                      <tr>
                      <td><?php echo $no ; ?></td>
                        <td><?php echo $row['nama_pe']; ?></td>
                        <td><?php echo $row['ktp_pe']; ?></td>
                        <td><?php echo $row['jabatan_pe']; ?></td>
                        <td><?php echo $row['awal_pe']; ?></td>
                        <td><?php echo $row['mjb_pe']; ?></td>
                        <td><?php
                                        $awal  = new DateTime($row['awal_pe']);
                                        $akhir = new DateTime(); // Waktu sekarang
                                        $diff  = $awal->diff($akhir);

                                        echo $diff->y . ' tahun, ';
                                        echo $diff->m . ' bulan, ';
                                        echo $diff->d . ' hari, ';
                            ?></td>
                        <td><?php echo $row['spb_pe']; ?></td>
                        <td><?php echo $row['spo_pe']; ?></td>
                        <td><?php echo $row['certif_pe']; ?></td>
                        <td><?php echo $row['jatem_pe']; ?></td>
                        <td>
                          <?php 
                          $awal  = new DateTime($row['jatem_pe']);
                          $akhir = new DateTime(); // Waktu sekarang
                          $diff  = $awal->diff($akhir);

                          echo $diff->y . ' tahun, ';
                          echo $diff->m . ' bulan, ';
                          echo $diff->d . ' hari, ';
                          ?>
                        </td>
                        <td><?php echo $row['pend_pe']; ?></td>
                        <td>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit<?php echo $row['id'] ?>">Edit</a></button>
                        </td>


                      </tr>
                      <!-- Modal form Tambah User -->
    <div class="modal fade" id="modal-edit<?php echo $row['id'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit PE</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=epe" enctype="multipart/form-data">
                <div class="card-body">


                  <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <label for="exampleInputEmail1">Nama Pejabat Eksekutif </label>
                    <input type="text" class="form-control" name="nama_pe" placeholder="Enter Nama PE" value="<?php echo $row['nama_pe'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor KTP</label>
                    <input type="text" class="form-control" name="ktp_pe" placeholder="NIK" value="<?php echo $row['ktp_pe'] ?>">
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan_pe" placeholder="Jabatan" value="<?php echo $row['jabatan_pe'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Awal Menjabat</label>
                    <input type="date" class="form-control" name="awal_pe" placeholder="Tanggal Menjabat" value="<?php echo $row['awal_pe'] ?>">
                  </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Menjabat</label>
                    <input type="date" class="form-control" name="mjb_pe" placeholder="Tanggal Menjabat" value="<?php echo $row['mjb_pe'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">File Surat Pengangkatan dari Bank</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name = "spb_pe" id="exampleInputFile" value="<?php echo $row['spb_pe'] ?>">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Surat Penugasan dari OJK</label>
                    <input type="text" class="form-control" name="spo_pe" placeholder="Enter Nomor Surat" value="<?php echo $row['spo_pe'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">File Certificate</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="certif_pe" id="exampleInputFile" value="<?php echo $row['certif_pe'] ?>">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Jatuh Tempo</label>
                    <input type="date" class="form-control" name="jatem_pe" placeholder="Tanggal Jatuh Tempo" value="<?php echo $row['jatem_pe'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pendidikan Terakhir</label>
                    <input type="text" class="form-control" name="pend_pe" placeholder="Tanggal Jatuh Tempo" value="<?php echo $row['pend_pe'] ?>">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

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
              <h4 class="modal-title">Input PE</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=create_pe" enctype="multipart/form-data">
                <div class="card-body">


                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pejabat Eksekutif </label>
                    <input type="text" class="form-control" name="nama_pe" placeholder="Enter Nama PE" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor KTP</label>
                    <input type="text" class="form-control" name="ktp_pe" placeholder="NIK">
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan_pe" placeholder="Jabatan" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Awal Menjabat</label>
                    <input type="date" class="form-control" name="awal_pe" placeholder="Tanggal Menjabat" >
                  </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Menjabat</label>
                    <input type="date" class="form-control" name="mjb_pe" placeholder="Tanggal Menjabat">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">File Surat Pengangkatan dari Bank</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name = "spb_pe" id="exampleInputFile" >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Surat Penugasan dari OJK</label>
                    <input type="text" class="form-control" name="spo_pe" placeholder="Enter Nomor Surat">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">File Certificate</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="certif_pe" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Jatuh Tempo</label>
                    <input type="date" class="form-control" name="jatem_pe" placeholder="Tanggal Jatuh Tempo">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pendidikan Terakhir</label>
                    <input type="text" class="form-control" name="pend_pe" placeholder="Tanggal Jatuh Tempo">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    