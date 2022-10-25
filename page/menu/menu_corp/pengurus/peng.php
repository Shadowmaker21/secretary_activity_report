<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengurus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengurus</li>
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
                <h3 class="card-title">Data Pengurus</h3>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                  Pengurus
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                
                <table id="examplebaru" class="table table-bordered table-striped">  
                    <thead>
                    <th>No</th>
                    <th>Nama Pemegang Saham</th>
                    <th>Jabatan</th>
                    <th>Pertama Kali Menjabat</th>
                    <th>Tanggal Mulai Menjabat</th>
                    <th>Tanggal Akhir Menjabat</th>
                    <th>Total Menjabat</th>
                    <th>Tanggal RUPS</th>
                    <th>Akte RUPS</th>
                    <th>Surat OJK</th>
                    <th>Tanggal Surat OJK</th>
                    <th>Certif</th>
                    <th>Jatuh Tempo Certif</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Action</th>

                    </thead>
                    <tbody>
                    <?php
                        $no = 0;
                        $query = mysqli_query($koneksi1, "SELECT * FROM pengurus");
                        while($row = mysqli_fetch_assoc($query)){
                          $no++;
                          ?>
                      <tr>
                        <td><?php echo $no ; ?></td>
                        <td><?php echo $row['nama_peng']; ?></td>
                        <td><?php echo $row['jabatan_peng']; ?></td>
                        <td><?php echo $row['awal_peng']; ?></td>
                        <td><?php echo $row['mulai_peng']; ?></td>
                        <td><?php echo $row['akhir_peng']; ?></td>
                        <td><?php
                                        $awal  = new DateTime($row['awal_peng']);
                                        $akhir = new DateTime(); // Waktu sekarang
                                        $diff  = $awal->diff($akhir);

                                        echo $diff->y . ' tahun, ';
                                        echo $diff->m . ' bulan, ';
                                        echo $diff->d . ' hari, ';
                            ?></td>
                        <td><?php echo $row['rups_peng']; ?></td>
                        <td><?php echo $row['akte_rups']; ?></td>
                        <td><?php echo $row['ojk_peng']; ?></td>
                        <td><?php echo $row['sojk_peng']; ?></td>
                        <td><?php echo $row['certif_peng']; ?></td>
                        <td><?php echo $row['jatem_peng']; ?></td>
                        <td><?php echo $row['pend']; ?></td>
                        <td>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit<?php echo $row['id'] ?>">Edit</a></button>
                        </td>

                      </tr>
                      <!-- Modal form Tambah User -->
      <div class="modal fade" id="modal-edit<?php echo $row['id'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Pengurus</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=epeng" enctype="multipart/form-data">
                <div class="card-body">


                  <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <label for="exampleInputEmail1">Nama Pengurus </label>
                    <input type="text" class="form-control" name="nama_peng" placeholder="Enter Nama Pengurus" value="<?php echo $row['nama_peng'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan </label>
                    <input type="text" class="form-control" name="jabatan_peng" placeholder="Enter Jabatan"value="<?php echo $row['jabatan_peng'] ?>">
                  </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Awal Menjabat</label>
                    <input type="date" class="form-control" name="awal_peng" value="<?php echo $row['awal_peng'] ?>">
                        </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Mulai Menjabat</label>
                    <input type="date" class="form-control" name="mulai_peng" placeholder="Tanggal Mulai Menjabat" value="<?php echo $row['mulai_peng'] ?>">
                  </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Akhir Jabatan</label>
                    <input type="date" class="form-control" name="akhir_peng" placeholder="Tanggal Akhir Menjabat" value="<?php echo $row['akhir_peng'] ?>">
                  </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal RUPS</label>
                    <input type="date" class="form-control" name="rups_peng" placeholder="Tanggal RUPS" value="<?php echo $row['rups_peng'] ?>">
                  </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Akte RUPS</label>
                    <input type="text" class="form-control" name="akte_rups" placeholder="Akte RUPS" value="<?php echo $row['akte_rups'] ?>">
                  </div>

                <div class="form-group">
                    <label for="exampleInputFile">File input Surat OJK</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name = "ojk_peng" id="exampleInputFile" value="<?php echo $row['ojk_peng'] ?>">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Surat OJK</label>
                    <input type="date" class="form-control" name="sojk_peng" placeholder="Tanggal Surat OJK" value="<?php echo $row['sojk_peng'] ?>">
                  </div>

                <div class="form-group">
                    <label for="exampleInputFile">File input Certif</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name = "certif_peng" id="exampleInputFile" value="<?php echo $row['certif_peng'] ?>">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jatuh Tempo</label>
                    <input type="date" class="form-control" name="jatem_peng" placeholder="Jatuh Tempo" value="<?php echo $row['jatem_peng'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pendidikan Terakhir</label>
                    <input type="text" class="form-control" name="pend" placeholder="Akte RUPS" value="<?php echo $row['pend'] ?>">
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
              <h4 class="modal-title">Input Pengurus</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=cpeng" enctype="multipart/form-data">
                <div class="card-body">


                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pengurus </label>
                    <input type="text" class="form-control" name="nama_peng" placeholder="Nama Pengurus">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan </label>
                    <input type="text" class="form-control" name="jabatan_peng" placeholder="Jabatan">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Pertama Kaloi Menjabat</label>
                    <input type="date" class="form-control" name="awal_peng" placeholder="Tanggal Mulai Menjabat">
                  </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Mulai Menjabat</label>
                    <input type="date" class="form-control" name="mulai_peng" placeholder="Tanggal Mulai Menjabat">
                  </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Akhir Jabatan</label>
                    <input type="date" class="form-control" name="akhir_peng" placeholder="Tanggal Akhir Menjabat">
                  </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal RUPS</label>
                    <input type="date" class="form-control" name="rups_peng" placeholder="Tanggal RUPS">
                  </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Akte RUPS</label>
                    <input type="text" class="form-control" name="akte_rups" placeholder="Akte RUPS">
                  </div>

                <div class="form-group">
                    <label for="exampleInputFile">File input Surat OJK</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name = "ojk_peng" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Surat OJK</label>
                    <input type="date" class="form-control" name="sojk_peng" placeholder="Tanggal Surat OJK">
                  </div>

                <div class="form-group">
                    <label for="exampleInputFile">File input Certif</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name = "certif_peng" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jatuh Tempo</label>
                    <input type="date" class="form-control" name="jatem_peng" placeholder="Jatuh Tempo">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pendidikan Terakhir</label>
                    <input type="text" class="form-control" name="pend" placeholder="Jabatan">
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
    