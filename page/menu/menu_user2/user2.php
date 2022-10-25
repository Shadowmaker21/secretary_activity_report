<style>
.select2-selection{
 
	height: calc(2.25rem + 2px) !important;
	font-size: 1rem  !important;
	font-weight: 400  !important;
	line-height: 1.5  !important;
}
</style>

<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>KELOLA USER</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kelola User</li>
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
             
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">Tambah User</a>
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			  
		<?php
		 if($_SESSION['sukses']!="")
		 {
			echo " <div class='alert alert-success'><button class='close' data-dismiss='alert' type='button'><i class='ace-icon fa fa-times'>
			</i></button>".$_SESSION['sukses']."</div>";
			$_SESSION['sukses']="";  
		 } else if($_SESSION['gagal']!="")
		 {
			echo " <div class='alert alert-danger'><button class='close' data-dismiss='alert' type='button'><i class='ace-icon fa fa-times'>
			</i></button>".$_SESSION['gagal']."</div>";
			$_SESSION['gagal']="";  
		 } 
		?>
			  
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th>No</th>
			              <th>Nama Lengkap</th>
                          <th>Bidang / Jabatan</th>
			              <th>Username</th>
                          <th>Level</th>
                          <th>Action</th>
                </thead>
                <tbody>
                    <?php
			$no = 0;
			$query = mysqli_query($koneksi1, "SELECT * FROM user
					left join jabatan ON user.id_jabatan=jabatan.id_jabatan 
					left join bidang ON jabatan.id_bidang=bidang.id_bidang  ");
			while($row = mysqli_fetch_assoc($query)){
			  $no++;
			  ?>
                          <tr>
                            <td><?php echo $no ?> </td>
                            <td><?php echo $row ['nama_lengkap'] ?> </td>
                            <td><?php echo $row ['nama_bidang']?> - <?php echo $row ['nama_jabatan']?> </td>
                            <td><?php echo $row ['username']?> </td>
                            <td> <?php echo $row ['level']?> </td>
                            
                            <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit<?php echo $row['id_user'] ?>">Edit</a></button>
							
				 
			 
			  <form method="POST" action="<?php echo "../page/menu/menu_user2/hapus_user2.php?id=".$row['id_user']; ?>" 
			   accept-charset="UTF-8" style="display:inline">
    				<button class="btn  btn-danger btn-flat" type="button" data-toggle="modal" 
					data-target="#confirmDelete" data-title="Hapus User" data-message="Apakah Anda Yakin Akan Menghapus User dengan nama :: <?php echo $row['nama_lengkap'];?> ?">
        			 Hapus
    				</button>
				</form>
			 
			 
			
                            </td>

                          </tr>
                          <!-- Modal form Tambah User -->
                          <div class="modal fade" id="modal-edit<?php echo $row['id_user'] ?>">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Form Edit User</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form role="form" method="POST" action="../page/menu/menu_user2/edit_user2.php">
                                    <div class="card-body">

                                      <div class="form-group">
                                        <input type="hidden" name="id" value="<?php echo $row['id_user'] ?>">
                                        <label for="exampleInputEmail1">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Enter Nama Lengkap" value="<?php echo $row['nama_lengkap'] ?>">
                                      </div>
                                      
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Jabatan</label>
                                          <select class="select2" name="jabatan"   data-placeholder="Pilih Jabatan" style="width: 100%;">
						 <?php
						   $queryjabatan = mysqli_query($koneksi1, "SELECT * FROM jabatan 
								LEFT JOIN bidang ON jabatan.id_bidang=bidang.id_bidang");
                        while($j = mysqli_fetch_array($queryjabatan)){
							if($j['id_jabatan']==$row['id_jabatan']) { $OK="selected=selected";} else { $OK="";} 
							echo "<option value='$j[id_jabatan]' $OK>".$j['nama_jabatan']." - Bidang ".$j['nama_bidang']."</option>";
						}
						 ?>
						  </select>
										 
                                      </div>
									  
									  
					  <div class="form-group"> 
                                        <label for="exampleInputEmail1">Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Enter Username" value="<?php echo $row['username'] ?>">
                                      </div>
									  
									  
									  
					  <div class="form-group"> 
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="password" class="form-control" name="passwordbaru" placeholder="Kosongkan jika tidak ingin diganti" value="">
					  <input type="hidden" class="form-control" name="passwordlama" placeholder="Enter Password" value="<?php echo $row['password'] ?>">
                                      </div>
									  
						<div class="form-group">
						  <label>Level</label>
						  <select class="select2" name="level"  data-placeholder="Pilih Level" style="width: 100%;">
							<option value="admin" <?php if($row['level']=="admin") {echo "selected=selected";} ?>>Admin</option>
							<option value="sekertaris" <?php if($row['level']=="sekertaris") {echo "selected=selected";} ?>>Sekertaris</option>
							<option value="direksi1" <?php if($row['level']=="direksi1") {echo "selected=selected";} ?>>Direksi 1</option>
							<option value="direksi2" <?php if($row['level']=="direksi2") {echo "selected=selected";} ?>>Direksi 2</option>
							<option value="direksi3" <?php if($row['level']=="direksi3") {echo "selected=selected";} ?>>Direksi 3</option>
							<option value="sdm" <?php if($row['level']=="sdm") {echo "selected=selected";} ?>>SDM</option>
							<option value="siak" <?php if($row['level']=="siak") {echo "selected=selected";} ?>>SIAK</option>
							<option value="umum" <?php if($row['level']=="umum") {echo "selected=selected";} ?>>UMUM</option>
						  </select>
						</div>
				
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                      <button type="submit" class="btn btn-primary">Simpan</button>
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
              <h4 class="modal-title">Form Tambah User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="../page/menu/menu_user2/cuser2.php">
                <div class="card-body">

                   <div class="form-group">
                                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                        <label for="exampleInputEmail1">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Enter Nama Lengkap" value="">
                                      </div>
                                      
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Jabatan</label>
                                          <select class="select2" name="jabatan"   data-placeholder="Pilih Jabatan" style="width: 100%;">
						 <?php
						   $queryjabatan = mysqli_query($koneksi1, "SELECT * FROM jabatan 
								LEFT JOIN bidang ON jabatan.id_bidang=bidang.id_bidang");
                        while($j = mysqli_fetch_array($queryjabatan)){
							 
							echo "<option value='$j[id_jabatan]'>".$j['nama_jabatan']." - Bidang ".$j['nama_bidang']."</option>";
						}
						 ?>
						  </select>
										 
                                      </div>
									  
									  
					  <div class="form-group"> 
                                        <label for="exampleInputEmail1">Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Enter Username" value="">
                                      </div>
									  
									  
									  
					  <div class="form-group"> 
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Enter Password" value="">
					   
                                      </div>
									  
					<div class="form-group">
						  <label>Level</label>
						  <select class="select2" name="level"  data-placeholder="Pilih Level" style="width: 100%;">
							<option value="admin">Admin</option>
							<option value="sekertaris">Sekertaris</option>
							<option value="direksi1">Direksi 1</option>
							<option value="direksi2">Direksi 2</option>
							<option value="direksi3">Direksi 3</option>
							<option value="sdm">SDM</option>
							<option value="siak">SIAK</option>
							<option value="umum">UMUM</option>
						  </select>
						</div>					  
				  
				  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
	  
	  
	  


