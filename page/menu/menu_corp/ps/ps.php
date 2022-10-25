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
                <table id="example1" class="table table-bordered table-striped">  
                    <thead>
                        <th>No</th>
			                  <th>Nama Pemegang Saham</th>
                        <th>Nominal (Rp)</th>
                        <th>% Saham</th>
                        <th>Action</th>
                    </thead>
                    <tfoot>
                  <tr>
                        <th>JUMLAH</th>
			                  <th></th>
                        <?php
                            $query=mysqli_query($koneksi1, "SELECT SUM(nominal_ps)
                            FROM pemegang_saham");
                            while($data3 = mysqli_fetch_array($query)) {
                             ?>
                            <th><?php echo number_format($data3['SUM(nominal_ps)'],2) ;?></th>
                            <?php
                            }
                            ?>
                        <?php
                            $query=mysqli_query($koneksi1, "SELECT SUM(saham_ps)
                            FROM pemegang_saham");
                            while($data4 = mysqli_fetch_array($query)) {
                             ?>
                            <th><?php echo number_format($data4['SUM(saham_ps)'],2) ;?></th>
                            <?php
                            }
                            ?>

                        <th></th>
                  </tr>
                  </tfoot>

                    <tbody>
                    <?php
                        $no = 0;
                        $query = mysqli_query($koneksi1, "SELECT * FROM pemegang_saham");
                        while($row = mysqli_fetch_assoc($query)){
                          $no++;
                          ?>
                      <tr>
                        <td><?php echo $no ; ?></td>
                        <td><?php echo $row['nama_ps']; ?></td>
                        <td><?php echo $row['nominal_ps']; ?></td>
                        <td><?php echo $row['saham_ps']; ?></td>
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
              <form role="form" method="POST" action="index.php?page=edit_ps" enctype="multipart/form-data">
                <div class="card-body">


                  <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <label for="exampleInputEmail1">Nama Pemegang Saham </label>
                    <input type="text" class="form-control" name="nama_ps" placeholder="Nama Pemegang Saham" value="<?php echo $row['nama_ps'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nominal Saham</label>
                    <input type="text" class="form-control" name="nominal_ps" placeholder="Nominal Saham"value="<?php echo $row['nominal_ps'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Presentasi Saham BPR WM</label>
                    <input type="text" class="form-control" name="saham_ps" placeholder="Presentasi Saham BPR" value="<?php echo $row['saham_ps'] ?>">
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
              <h4 class="modal-title">Input Pemegang Saham</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=create_ps" enctype="multipart/form-data">
                <div class="card-body">


                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pemegang Saham </label>
                    <input type="text" class="form-control" name="nama_ps" placeholder="Nama Pemegang Saham">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nominal Saham</label>
                    <input type="text" class="form-control" name="nominal_ps" placeholder="Nominal Saham">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Presentasi Saham BPR WM</label>
                    <input type="text" class="form-control" name="saham_ps" placeholder="Presentasi Saham BPR">
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