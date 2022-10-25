<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SIAK</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">SIAK</li>
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
                <h3 class="card-title">Data QR</h3>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">Tambah Invoices</a>
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th>No</th>
			              <th>Nama</th>
                          <th>NIP</th>
			              <th>Jabatan</th>
                          <th>QR CODE</th>
                          <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        $no = 0;
                        $query = mysqli_query($koneksi1, "SELECT * FROM qr");
                        while($row = mysqli_fetch_assoc($query)){
                          $no++;
                          ?>
                          <tr>
                            <td><?php echo $no ?> </td>
                            <td><?php echo $row ['nama'] ?> </td>
                            <td><?php echo $row ['nip']?> </td>
                            <td><?php echo $row ['jabatan']?> </td>
                            <td><?php $kode = $row['nama']."/".$row['nip']."/".$row['jabatan']."";
                            require_once('../assets/phpqrcode/qrlib.php');

                            QRcode::png("$kode","kode".$id.".png","M",4,4);
                             ?>
                             <img src="kode<?php $no ?>.png" alt="">
                             </td>
                            
                            <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit<?php echo $row['id'] ?>">Edit</a></button>
                            </td>

                          </tr>
                          <!-- Modal form Tambah User -->
                          <div class="modal fade" id="modal-edit<?php echo $row['id'] ?>">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Form Publikasi</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form role="form" method="POST" action="index.php?page=edit_user">
                                    <div class="card-body">

                                      <div class="form-group">
                                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                        <label for="exampleInputEmail1">Nama User</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Enter Nama Surat" value="<?php echo $row['nama'] ?>">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">NIP</label>
                                        <input type="text" class="form-control" name="nip" placeholder="Enter Nama Surat" value="<?php echo $row['nip'] ?>">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Jabatan</label>
                                        <input type="text" class="form-control" name="jabatan" placeholder="Enter Jabatan" value="<?php echo $row['jabatan'] ?>">
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
              <h4 class="modal-title">Form User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=cuser">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Enter Nama ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                    <input type="text" class="form-control" name="nip" placeholder="Enter NIP">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" placeholder="Masukkan Jabatan">
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