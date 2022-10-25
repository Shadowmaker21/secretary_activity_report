<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tindak Lanjut Pemeriksaan OJK</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tindak Lanjut Pemeriksaan OJK</li>
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
                <h3 class="card-title">Data Tindak Lanjut Pemeriksaan OJK</h3>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">Tambah Tindak Lanjut Pemeriksaan OJK</a>
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th>No</th>
			              <th>Nama Surat Tindak Lanjut OJK</th>
			              <th>File Tindak Lanjut OJK</th>
			              <th>Email</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        $no = 0;
                        $query = mysqli_query($koneksi1, "SELECT * FROM tindak_lanjut");
                        while($row = mysqli_fetch_assoc($query)){
                          $no++;
                          ?>
                          <tr>
                            <td><?php echo $no ?> </td>
                            <td><?php echo $row ['nama_tl'] ?> </td>
                            <td><?php echo $row ['file_tlojk']?> </td>
                            <td><?php echo $row ['email_tl']?> </td>
                            <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit<?php echo $row['id'] ?>">Edit</a></button>
                            </td>


                          </tr>
                          <!-- Modal form Tambah User -->
                          <div class="modal fade" id="modal-edit<?php echo $row['id'] ?>">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Form Edit Tindak Lanjut OJK</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form role="form" method="POST" action="index.php?page=edit_tindak" enctype="multipart/form-data">
                                    <div class="card-body">

                                      <div class="form-group">
                                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                        <label for="exampleInputEmail1">Nama Surat Tindak Lanjut</label>
                                        <input type="text" class="form-control" name="nama_tl" placeholder="Enter Nama Surat" value="<?php echo $row['nama_tl'] ?>">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <div class="input-group">
                                          <div class="custom-file">
                                            <input type="file" name="file_tlojk" class="custom-file-input" id="exampleInputFile" value="<?php echo $row['file_tlojk'] ?>">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">email</label>
                                        <input type="text" class="form-control" name="email_tl" placeholder="Enter Email" value="<?php echo $row['email_tl'] ?>"> 
                                      </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                      <button type="submit" class="btn btn-primary">Kirim Persetujuan</button>
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
              <h4 class="modal-title">Form Tindak Lanjut OJK</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=create" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Surat Tindak Lanjut</label>
                    <input type="text" class="form-control" name="nama_tl" placeholder="Enter Nama Surat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="file_tlojk" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">email</label>
                    <input type="text" class="form-control" name="email_tl" placeholder="Enter Email">
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
    