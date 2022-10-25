<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pemegang Saham</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pemegang Saham</li>
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
                <h3 class="card-title">Data Pemegang Saham</h3>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                  Pemegang Saham
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                
                <table id="examplebaru" class="table table-bordered table-striped">  
                    <thead>
                        <th>No</th>
			            <th>Nama Pemegang Saham</th>
                        <th>Nama Perusahaan</th>
                        <th>Kode Sandi Bank</th>
                        <th>Jenis Usaha</th>
                        <th>% Saham</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                    <?php
                        $no = 0;
                        $query = mysqli_query($koneksi1, "SELECT id,nama_pswm, GROUP_CONCAT(pers_pswm), kode_bank, GROUP_CONCAT(jenis_pswm), GROUP_CONCAT(saham_pswm) FROM pswm GROUP BY nama_pswm ORDER BY id ASC");
                        while($row = mysqli_fetch_assoc($query)){
                          $no++;
                          ?>
                      <tr>
                        <td><?php echo $no ; ?></td>
                        <td><?php echo $row['nama_pswm']; ?></td>
                        <td><?php echo $row['GROUP_CONCAT(pers_pswm)']; ?></td>
                        <td><?php echo $row['kode_bank']; ?></td>
                        <td><?php echo $row['GROUP_CONCAT(jenis_pswm)']; ?></td>
                        <td><?php echo $row['GROUP_CONCAT(saham_pswm)']; ?></td>
                        <td>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit<?php echo $row['id'] ?>">Edit</a></button>
                        </td>
                                                                                                                                                                                                                                                                                                                           
                      </tr>
                      <!-- Modal form Tambah User -->
    <div class="modal fade" id="modal-edit<?php echo $row['id'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Input Pemegang Saham</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=edit_pswm" enctype="multipart/form-data">
                <div class="card-body">


                  <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <label for="exampleInputEmail1">Nama Pemegang Saham </label>
                    <input type="text" class="form-control" name="nama_pswm" placeholder="Nama Pemegang Saham" value="<?php echo $row['nama_pswm'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Perusahaan Lain</label>
                    <input type="text" class="form-control" name="pers_pswm" placeholder="Nama perusahaan lain"value="<?php echo $row['pers_pswm'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Bank</label>
                    <input type="text" class="form-control" name="kode_bank" value="<?php echo $row['kode_bank'] ?>">
                  </div>
                  <div class="form-group">
                  <label>Jenis Perusahaan Lain</label>
                  <select class="select2" name="jenis_pswm" multiple="multiple" data-placeholder="Select a State" style="width: 100%;"> value="<?php echo $row['jenis_pswm'] ?>"
                      <option value="KEGIATAN TEKNOLOGI DAN JASA KOMPUTER LAINNYA">KEGIATAN TEKNOLOGI DAN JASA KOMPUTER LAINNYA</option>
                      <option value="JASA TRANSPORTASI ">JASA TRANSPORTASI</option>
                      <option value="PERBANKAN">PERBANKAN</option>
                      <option value="RENTAL/PENYEWAAN">RENTAL/PENYEWAAN</option>
                      <option value="PERDAGANGAN BESAR MOBIL BEKAS">PERDAGANGAN BESAR MOBIL BEKAS</option>
                      <option value="PENYALUR, EKSPOR, IMPOR">PENYALUR, EKSPOR, IMPOR</option>
                      <option value="PROPERTY AGENT">PROPERTY AGENT</option>
                      <option value="KONTRAKTOR & DEVELOPER">KONTRAKTOR & DEVELOPER</option>
                      <option value="BAHAN BANGUNAN">BAHAN BANGUNAN</option>
                      <option value="RETAIL">RETAIL</option>
                      <option value="-">-</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Presentasi Saham Lain</label>
                    <input type="text" class="form-control" name="saham_pswm" placeholder="Presentasi Saham Lain"value="<?php echo $row['saham_pswm'] ?>">
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
              <h4 class="modal-title">Input Pemegang Saham</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=create_pswm" enctype="multipart/form-data">
                <div class="card-body">


                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pemegang Saham </label>
                    <input type="text" class="form-control" name="nama_pswm" placeholder="Nama Pemegang Saham">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nominal Saham</label>
                    <input type="text" class="form-control" name="nominal_ps" placeholder="Nominal Saham">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Presentasi Saham BPR WM</label>
                    <input type="text" class="form-control" name="saham_ps" placeholder="Presentasi Saham BPR">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Perusahaan Lain</label>
                    <input type="text" class="form-control" name="pers_pswm" placeholder="Nama Perusahaan Lain">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Bank</label>
                    <input type="text" class="form-control" name="kode_bank" placeholder="Masukkkan Kode Bank">
                  </div>
                  <div class="form-group">
                  <label>Jenis Perusahaan Lain</label>
                  <select class="select2" name="jenis_pswm" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                      <option value="KEGIATAN TEKNOLOGI DAN JASA KOMPUTER LAINNYA">KEGIATAN TEKNOLOGI DAN JASA KOMPUTER LAINNYA</option>
                      <option value="JASA TRANSPORTASI ">JASA TRANSPORTASI</option>
                      <option value="PERBANKAN">PERBANKAN</option>
                      <option value="RENTAL/PENYEWAAN">RENTAL/PENYEWAAN</option>
                      <option value="PERDAGANGAN BESAR MOBIL BEKAS">PERDAGANGAN BESAR MOBIL BEKAS</option>
                      <option value="PENYALUR, EKSPOR, IMPOR">PENYALUR, EKSPOR, IMPOR</option>
                      <option value="PROPERTY AGENT">PROPERTY AGENT</option>
                      <option value="KONTRAKTOR & DEVELOPER">KONTRAKTOR & DEVELOPER</option>
                      <option value="BAHAN BANGUNAN">BAHAN BANGUNAN</option>
                      <option value="RETAIL">RETAIL</option>
                      <option value="-">-</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Presentasi Saham Lain</label>
                    <input type="text" class="form-control" name="saham_pswm" placeholder="Presentasi Saham Lain">
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