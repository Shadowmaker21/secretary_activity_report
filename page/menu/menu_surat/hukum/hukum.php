<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hukum / Reelas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Hukum</li>
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
                <h3 class="card-title">Data Hukum/Reelas</h3>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">Tambah Hukum</a>
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th>No</th>
			              <th>Nama Hukum</th>
			              <th>Nomor Hukum</th>
			              <th>Keterangan Hukum</th>
                    <th>Aksi</th>


                </thead>
                <tbody>
                    <?php
                        $no = 0;
                        $query = mysqli_query($koneksi1, "SELECT * FROM hukum");
                        while($row = mysqli_fetch_assoc($query)){
                          $no++;
                          ?>
                          <tr>
                            <td><?php echo $no ?> </td>
                            <td><?php echo $row ['nama_hkm'] ?> </td>
                            <td><?php echo $row ['nomor_hkm']?> </td>
                            <td><?php echo $row ['ket_hkm']?> </td>
                            <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit<?php echo $row['id'] ?>">Edit</a></button>
                            </td>

                          </tr>
                          <!-- Modal form Edit Hukum -->
                          <div class="modal fade" id="modal-edit<?php echo $row['id'] ?>">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Form Surat Pelanggaran</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form role="form" method="POST" action="index.php?page=edit_hkm" enctype="multipart/form-data">
                                    <div class="card-body">

                                    <div class="form-group">
                                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                        <label for="exampleInputEmail1">Nama Hukum</label>
                                        <input type="text" class="form-control" name="nama_hkm" placeholder="Enter Nama Hukum" value="<?php echo $row['nama_hkm'] ?>">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Nomor Hukum</label>
                                        <input type="text" class="form-control" name="nomor_hkm" placeholder="Enter Nomor Hukum" value="<?php echo $row['nomor_hkm'] ?>">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <textarea class="form-control" rows="3" name="ket_hkm" placeholder="Enter ..." value="<?php echo $row['ket_hkm'] ?>"></textarea>
                                      </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                      <button type="submit" class="btn btn-primary">Edit</button>
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
              <h4 class="modal-title">Form Reelas</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=create_hkm" enctype="multipart/form-data">
                <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Hukum</label>
                    <input type="text" class="form-control" name="nama_hkm" placeholder="Enter Nama Hukum">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Hukum</label>
                    <input type="text" class="form-control" name="nomor_hkm" placeholder="Enter Nomor Hukum">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea class="form-control" rows="3" name="ket_hkm" placeholder="Enter ..."></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    