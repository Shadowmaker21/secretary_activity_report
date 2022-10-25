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
                  Tambah Pengurus
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
                    <th>NIK</th>
                    <th>Hubungan Keuangan Direksi Lain</th>
                    <th>Hubungan Keuangan Komisaris Lain</th>
                    <th>Hubungan Keuangan Pemegang Saham Lain</th>
                    

                    </thead>
                    <tbody>
                    <?php
                        $no = 0;
                        $query = mysqli_query($koneksi1, "SELECT * FROM pengurus_hub");
                        while($row = mysqli_fetch_assoc($query)){
                          $no++;
                          ?>
                      <tr>
                        <td><?php echo $no ; ?></td>
                        <td><?php echo $row['nama_peng']; ?></td>
                        <td><?php echo $row['jabatan_peng']; ?></td>
                        <td><?php echo $row['nik']; ?></td>
                        <td><?php echo $row['hubkeudir']; ?></td>
                        <td><?php echo $row['hubkeukom']; ?></td>
                        <td><?php echo $row['hubkeups']; ?></td>

                      </tr>
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