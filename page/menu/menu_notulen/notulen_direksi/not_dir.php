<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Jadwal Notulen Online</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">NotDek</li>
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
                <h3 class="card-title"><b>Jadwal Notulen</b></h3>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                  Buat Jadwal
                </button>
                <br>
                <br>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table id="examplebaru" class="table table-bordered table-striped">  
                    <thead>
                        <th>No</th>
                        <th>Hari</th>
			                  <th>Tanggal</th>
                        <th>Tempat</th>
                        <th>Jam</th>
			                  <th>Agenda Rapat</th>
                        <th>Isian Notulen</th>
                        <th>Jenis Rapat</th>
                        <th>Link Absen</th>
                        <th>Cetak</th>
                        <th>Input isi</th>


                    </thead>
                    <tbody>
                    <?php
                        $no = 0;
                        $query = mysqli_query($koneksi1, "SELECT id_online, hari,tanggal,tempat,jam,agenda,ket,jenis,not_dir.id_online FROM not_dir");
                        while($row = mysqli_fetch_assoc($query)){
                          $no++;
                          ?>
                      <tr>
                        <td><?php echo $no ; ?></td>
                        <td><?php echo $row['hari']; ?></td>
                        <td><?php echo $row['tanggal']; ?></td>
                        <td><?php echo $row['tempat']; ?></td>
                        <td><?php echo $row['jam']; ?></td>
                        <td><?php echo $row['agenda']; ?></td>
                        <td><?php echo $row['ket']; ?></td>
                        <td><?php echo $row['jenis']; ?></td>
                        <td>http://192.168.0.4/sekar/page_absen_online.php?id_online=<?php echo $row['id_online'] ?></td>
                        <td><a href="http://192.168.0.4/sekar/hasil2.php?id_online=<?php echo $row['id_online'] ?>" target="_blank">CETAK</a></td>
                        <td>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit<?php echo $row['id_online'] ?>">Edit</a></button>
                        </td>
                      </tr>

    <!-- Modal form Tambah User -->
      <div class="modal fade" id="modal-edit<?php echo $row['id_online'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Input Notulen</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=edirnot" enctype="multipart/form-data">
                <div class="card-body">
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Hari</label>
                    <input type="hidden" name="id" value="<?php echo $row['id_online'] ?>">
                    <input type="text" class="form-control" name="hari" placeholder="Hari" value="<?php echo $row['hari'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="<?php echo $row['tanggal'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tempat</label>
                    <input type="text" class="form-control" name="tempat" placeholder="Tempat" value="<?php echo $row['tempat'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Waktu</label>
                    <input type="time" class="form-control" name="jam" placeholder="Waktu" value="<?php echo $row['jam'] ?>">
                  </div>

                <div class="form-group">
                  <label>Peserta</label>
                  <select class="checkbox" name="email[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" value="<?php echo $row['email'] ?>">
                    <option value="Direksi">Direksi</option>
                    <option value="Kepala PPKB">Kepala PPKB</option>
                    <option value="heri.wmsmg@gmail.com">Kepala Kantor Pusat</option>
					          <option value="hendra.wmsmg@gmail.com">Kepala Kantor Tlogosari</option>
					          <option value="asido.wmsmg@gmail.com">Kepala Kantor Gang Besen</option>
                    <option value="andi1.wmsmg@gmail.com">Kepala Kantor Siliwangi</option>
                    <option value="luqman.wmsmg@gmail.com">Kepala Kantor Ngaliyan</option>
                    <option value="anisari.wmsmg@gmail.com">Kepala Kantor Banyumanik</option>
                    <option value="deny.wmwlr@gmail.com">Kepala Kepala Kantor Kendal</option>
                    <option value="Ali.bprwmkds@gmail.com">Kepala Kantor Kaliwungu Kudus</option>
                    <option value="subari.wmslo@gmail.com">Kepala Kantor Laweyan</option>
                    <option value="adit.wmslo@gmail.com">Kepala Kantor Sukoharjo</option>
                    <option value="setyoprasojowm@gmail.com">Kepala Bisnis Semarang</option>
                    <option value="isnanto.wmwlr@gmail.com">Kepala Bisnis Weleri</option>
                    <option value="sis.wmkds@gmail.com">Kepala Bisnis Area Pati</option>
                    <option value="aprin.wmslo1@gmail.com">Kepala Bisnis Surakarta</option>
                    <option value="">Kepala IT</option>
                    <option value="">Kepala Pengembangan Bisnis</option>
                    <option value="sdm.bprwm@gmail.com">Kepala Human Capital</option>
                    <option value="simak.bprwm@gmail.com">Wakil Kepala SIAK</option>

                  </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Agenda Bisnis</label>
                    <input type="text" class="form-control" name="agenda" placeholder="Enter Agenda" value="<?php echo $row['agenda'] ?>">
                  </div>
                  <div class="card-body">
                    <textarea id="editor" class="form-control" name="ket" value="<?php echo $row['ket'] ?>">

                    </textarea>
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
              <h4 class="modal-title">Input Notulen</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=cnotdir" enctype="multipart/form-data">
                <div class="card-body">
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Hari</label>
                    <input type="text" class="form-control" name="hari" placeholder="Hari">
                  </div>
                  
                  <div class="form-group">
                  <label>Tanggal</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservation" name="tanggal">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tempat</label>
                    <input type="text" class="form-control" name="tempat" placeholder="Tempat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Waktu</label>
                    <input type="time" class="form-control" name="jam" placeholder="Waktu">
                  </div>

                <div class="form-group">
                  <label>Peserta</label>
                  <select class="select2" name="email[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                    <option value=""> </option>
                    <option value="Direktur Utama">Direktur Utama</option>
                    <option value="Direktur Kepatuhan">Direktur Kepatuhan</option>
                    <option value="Direktur Operasional">Direktur Operasional</option>
                    <option value="andha69@yahoo.com">Kepala PPKB</option>
                    <option value="heri.wmsmg@gmail.com">Kepala Kantor Pusat</option>
					          <option value="hendra.wmsmg@gmail.com">Kepala Kantor Tlogosari</option>
					          <option value="asido.wmsmg@gmail.com">Kepala Kantor Gang Besen</option>
                    <option value="andi1.wmsmg@gmail.com">Kepala Kantor Siliwangi</option>
                    <option value="luqman.wmsmg@gmail.com">Kepala Kantor Ngaliyan</option>
                    <option value="anisari.wmsmg@gmail.com">Kepala Kantor Banyumanik</option>
                    <option value="deny.wmwlr@gmail.com">Kepala Kepala Kantor Kendal</option>
                    <option value="Ali.bprwmkds@gmail.com">Kepala Kantor Kaliwungu Kudus</option>
                    <option value="subari.wmslo@gmail.com">Kepala Kantor Laweyan</option>
                    <option value="adit.wmslo@gmail.com">Kepala Kantor Sukoharjo</option>
                    <option value="setyoprasojowm@gmail.com">Kepala Bisnis Semarang</option>
                    <option value="isnanto.wmwlr@gmail.com">Kepala Bisnis Weleri</option>
                    <option value="sis.wmkds@gmail.com">Kepala Bisnis Area Pati</option>
                    <option value="aprin.wmslo1@gmail.com">Kepala Bisnis Surakarta</option>
                    <option value="">Kepala IT</option>
                    <option value="">Kepala Pengembangan Bisnis</option>
                    <option value="sdm.bprwm@gmail.com">Kepala Human Capital</option>
                    <option value="simak.bprwm@gmail.com">Wakil Kepala SIAK</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Agenda Bisnis</label>
                    <input type="text" class="form-control" name="agenda" placeholder="Enter Agenda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Rapat</label>
                    <input type="text" class="form-control" name="jenis" value="Online" readonly>
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