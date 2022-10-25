<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data PDIR</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">pdir</li>
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
                <h3 class="card-title">Data PS Direktur</h3>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                  Tambah Data Direktur
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                <table id="examplebaru" class="table table-bordered table-striped">  
                    <thead>
                        <th>No</th>
			                  <th>Nama Pemegang Saham</th>
                        <th>NIK</th>
                        <th>Jabatan</th>
                        <th>Nominal (Rp)</th>
                        <th>% Saham</th>
                        <th>Nama Perusahaan</th>
                        <th>Jenis Usaha</th>
                        <th>% Saham</th>
                        <th>Action</th>
                       
                        
                    </thead>
                    <tbody>
                    <?php
                        $no = 0;
                        $query = mysqli_query($koneksi1, "SELECT * FROM psdir ");
                        while($row = mysqli_fetch_assoc($query)){
                          $no++;
                          ?>
                      <tr>
                        <td><?php echo $no ; ?></td>
                        <td><?php echo $row['nama_ps2']; ?></td>
                        <td><?php echo $row['nik']; ?></td>
                        <td><?php echo $row['jabatan_ps2']; ?></td>
                        <td><?php echo $row['nominal_ps2']; ?></td>
                        <td><?php echo $row['saham_ps2']; ?></td>
                        <td><?php echo $row['pers_ps2']; ?></td>
                        <td><?php echo $row['jenis_ps2']; ?></td>
                        <td><?php echo $row['saham_psl2']; ?></td>
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
              <form role="form" method="POST" action="index.php?page=edir" enctype="multipart/form-data">
                <div class="card-body">


                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pemegang Saham </label>
                    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
                    <input type="text" class="form-control" name="nama_ps2" placeholder="Nama Pemegang Saham" value="<?php echo $row['nama_ps2']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK </label>
                    <input type="text" class="form-control" name="nik" placeholder="NIK" value="<?php echo $row['nik']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan </label>
                    <input type="text" class="form-control" name="jabatan_ps2" placeholder="Jabatan" value="<?php echo $row['jabatan_ps2']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nominal Saham</label>
                    <input type="text" class="form-control" name="nominal_ps2" placeholder="Nominal Saham BPR WM" value="<?php echo $row['nominal_ps2']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Presentasi Saham BPR WM</label>
                    <input type="text" class="form-control" name="saham_ps2" placeholder="Presentasi Saham BPR WM" value="<?php echo $row['saham_ps2']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Perusahaan Lain</label>
                    <input type="text" class="form-control" name="pers_ps2" placeholder="Nama Perusahaan Lain" value="<?php echo $row['pers_ps2']; ?>">
                  </div>
                  <div class="form-group">
                  <label>Jenis Perusahaan Lain</label>
                  <select class="select2" name="jenis_ps2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" value="<?php echo $row['jenis_ps2']; ?>">
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
                    <input type="text" class="form-control" name="saham_psl2" placeholder="Presentasi Saham Lain" value="<?php echo $row['saham_psl2']; ?>">
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
              <h4 class="modal-title">Input Pemegang Saham Direktur</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=cpdir" enctype="multipart/form-data">
                <div class="card-body">


                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pemegang Saham </label>
                    <input type="text" class="form-control" name="nama_ps2" placeholder="Nama Pemegang Saham">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK </label>
                    <input type="text" class="form-control" name="nik" placeholder="NIK">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan </label>
                    <input type="text" class="form-control" name="jabatan_ps2" placeholder="Jabatan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nominal Saham</label>
                    <input type="text" class="form-control" name="nominal_ps2" placeholder="Nominal Saham BPR WM">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Presentasi Saham BPR WM</label>
                    <input type="text" class="form-control" name="saham_ps2" placeholder="Presentasi Saham BPR WM">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Perusahaan Lain</label>
                    <input type="text" class="form-control" name="pers_ps2" placeholder="Nama Perusahaan Lain">
                  </div>
                  <div class="form-group">
                  <label>Jenis Perusahaan Lain</label>
                  <select class="select2" name="jenis_ps2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
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
                    <input type="text" class="form-control" name="saham_psl2" placeholder="Presentasi Saham Lain">
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
    