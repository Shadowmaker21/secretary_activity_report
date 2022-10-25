<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hasil Notulen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">hasil</li>
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
              <h3 class="card-title">
                Summernote
              </h3>
            </div>
            <div class="card-body">
            <?php
                        $no = 0;
                        $query = mysqli_query($koneksi1, "SELECT * FROM not_dir");
                        while($row = mysqli_fetch_assoc($query)){
                          $no++;
                          ?>
                          <?php } ?>
            <!-- /.card-header -->
            <form role="form" method="POST" action="index.php?page=e" enctype="multipart/form-data" value="<?php echo $row['id'] ?>">

            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <input type="hidden" name="hari" value="<?php echo $row['hari'] ?>">
            <input type="hidden" name="tanggal" value="<?php echo $row['tanggal'] ?>">
            <input type="hidden" name="tempat" value="<?php echo $row['tempat'] ?>">
            <input type="hidden" name="jam" value="<?php echo $row['jam'] ?>">
            <input type="hidden" name="email" value="<?php echo $row['email'] ?>">
            <input type="hidden" name="agenda" value="<?php echo $row['agenda'] ?>">
            <input type="hidden" name="jenis" value="<?php echo $row['jenis'] ?>">
            <div class="form-group">

            <textarea id="editor" name="ket"  value="<?php echo $row['ket'] ?>">
            
            </textarea>
            </div>
            </div>
            
            <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                        </div>
                        
            </form>
            
            </div>
            </div>
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

    