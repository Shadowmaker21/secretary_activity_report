<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Absen Notulen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">se</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Absen Notulen</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="index.php?page=cabs" enctype="multipart/form-data">
              <div class="form-group"> 
                   <label>Masukkan NIP</label> 
                   <select class="select2" name="nip" id="pilihnik"  data-placeholder="Pilih nik" style="width: 100%;"required> 
						      <option value=""></option>
						      <?php
						       $querynik = mysqli_query($koneksi1, "SELECT * FROM jabatan2 
							    	LEFT JOIN nik ON nik.id_nik=jabatan2.id_nik
							    	WHERE jabatan2.nama_jabatan like '%%' AND jabatan2.nama_user like '%%'");
                            while($j = mysqli_fetch_array($querynik)){
                            
							    echo "<option value='$j[id_nik]'>".$j['no_nik']."</option>";
						      }
						      ?>
                        
                   </select> 
                   </div> 

                 <div class="form-group"> 
                   <label>Jabatan</label> 
                   <select class="select2" name="jabatan" id="pilihjab" data-placeholder="Pilih Jabatan" style="width: 100%;" > 
						<option value=""></option>
            <?php
						       $querynik = mysqli_query($koneksi1, "SELECT * FROM jabatan2 
							    	LEFT JOIN nik ON nik.id_nik=jabatan2.id_nik
							    	WHERE jabatan2.nama_jabatan like '%%' AND jabatan2.nama_user like '%%'");
                            while($j = mysqli_fetch_array($querynik)){
                            
							    echo "<option value='$j[nama_jabatan]'>".$j['nama_jabatan']."</option>";
						      }
						      ?>
                   </select> 
                 </div>
                 <div class="form-group"> 
                   <label>Nama</label> 
                   <select class="select2" name="nama_user" id="pilihnama" data-placeholder="Pilih Jabatan" style="width: 100%;" > 
						<option value=""></option>
            <?php
						       $querynik = mysqli_query($koneksi1, "SELECT * FROM jabatan2 
							    	LEFT JOIN nik ON nik.id_nik=jabatan2.id_nik
							    	WHERE jabatan2.nama_jabatan like '%%' AND jabatan2.nama_user like '%%'");
                            while($j = mysqli_fetch_array($querynik)){
                            
							    echo "<option value='$j[nama_user]'>".$j['nama_user']."</option>";
						      }
						      ?>
                   </select> 
                 </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Join</label>
                    <input type="text" name="tgl_join" class="form-control" id="exampleInputPassword1"  value="<?php date_default_timezone_set("Asia/Jakarta"); echo date("YmdH"); ?>" disabled>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    