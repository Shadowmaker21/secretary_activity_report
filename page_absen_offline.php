<?php 
  include "../sekar/config/koneksi.php";
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SEKAR WEB | BPR WM</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../sekar/assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../sekar/assets/plugins/fontawesome-free/css/all.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../sekar/assets/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../sekar/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../sekar/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../sekar/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../sekar/assets/plugins/select2/css/select2.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../sekar/assets/plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="../sekar/assets/dist/css/adminlte.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

          
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../sekar/assets/dist/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SEKAR WEB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="../sekar/assets/dist/img/logo.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
			<!-- CEK ECHO -->
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->            

         </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Absen Online</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Absen</li>
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
                <h3 class="card-title">Absen Online</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="../sekar/cabsoff.php" enctype="multipart/form-data">
              
              <div class="form-group">
                   <label>Pilih Agenda Meeting Sesuai Jadwal</label> 
                   <select class="select2" name="id_offline" data-placeholder="Pilih agenda Meeting" style="width: 100%;"required> 
                   <?php
                        $no = 0;
                        $query = mysqli_query($koneksi1, "SELECT * FROM absen2 RIGHT JOIN not_dekom ON absen2.id=not_dekom.id_offline");
                        while($row = mysqli_fetch_assoc($query)){
                          $no++;
                        echo "<option value='$row[id_offline]'>".$row['agenda']." | ".$row['tanggal']."</option>";
                      } ?>   
                   </select>
                   </div>
                   
                   <div class="form-group"> 
                   <label>Masukkan NIP</label> 
                   <select class="select2" name="nip" id="pilihnik"  data-placeholder="Pilih nik" style="width: 100%;" required> 
						      <option value=""></option>
						      <?php
						       $querynik = mysqli_query($koneksi1, "SELECT * FROM jabatan2");
                   while($j = mysqli_fetch_array($querynik)){
							    echo "<option value='$j[id_nik]' data-jabatan='".$j['nama_jabatan']."' data-nama='".$j['nama_user']."'>".$j['no_nik']."</option>";
						      }
						      ?>
                   </select> 
                   </div> 

                 <div class="form-group"> 
                   <label>Jabatan</label> 
                   <select class="select2" name="jabatan" id="pilihjab" data-placeholder="Pilih Jabatan" style="width: 100%;" > 
						<option value=""></option>
            <?php
						       $querynik = mysqli_query($koneksi1, "SELECT * FROM jabatan2");
                            while($j = mysqli_fetch_array($querynik)){
							          echo "<option value='".$j['nama_jabatan']."'>".$j['nama_jabatan']."</option>";
						      }
						      ?>
                   </select> 
                 </div>
                 <div class="form-group"> 
                   <label>Nama</label> 
                   <select class="select2" name="nama_user" id="pilihnama" data-placeholder="Pilih Nama" style="width: 100%;" > 
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
                    <input type="text" name="tgl_join" class="form-control" id="exampleInputPassword1"  value="<?php date_default_timezone_set("Asia/Jakarta"); echo date("Y-m-d"); ?>" disabled>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" id="add" class="btn btn-primary">Submit</button>
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
    </div>
    <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Senantiasa Terpercaya Melayani Anda
    </div>
    <!-- Default to the right -->
    <strong>SEKAR &copy; 2022 <a href="https://bprwm.co.id/">BPR Weleri Makmur</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script type="text/javascript" src="../sekar/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../sekar/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../sekar/assets/dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../sekar/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../sekar/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../sekar/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../sekar/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../sekar/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../sekar/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../sekar/assets/plugins/jszip/jszip.min.js"></script>
<script src="../sekar/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../sekar/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../sekar/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../sekar/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../sekar/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Select2 -->
<script src="../sekar/assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Summernote -->
<script src="../sekar/assets/plugins/summernote/summernote-bs4.min.js"></script>
<script src="../sekar/assets/ckeditor/ckeditor.js"></script>





</body>
</html>

<!-- Page specific script -->
<script>
 
		
 $(document).ready(function(){
			 $(".alert").delay(3000).addClass("in").fadeOut("slow");
		});

	$("#pilihnik").change(function(){

			var getValue= $(this).val();
      var jabatan = $("#pilihnik option[value='"+getValue+"']").attr('data-jabatan');
      var nama = $("#pilihnik option[value='"+getValue+"']").attr('data-nama');
			
			if(getValue == 0){
				$("#pilihjab").html("<option> </option>");
        $("#pilihnama").html("<option> </option>");
        $("#pilihnik").html("<option> </option>");
			}else{
        $("#pilihnama").val(nama).trigger('change');
        $("#pilihjab").val(jabatan).trigger('change');
			}
		}) 
    
    var thisDay = new Date().getDate(); 
            function checkButton()
            {
                if (thisDay>=15 && thisDay<=16)
                {
                    $("#add").prop("disabled", true);
                }
                printAlert();
            }
 
            function printAlert() {
                window.alert('We are not accepting entries right now.');
            }  
		
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
	
	
	$("#examplebaru").DataTable({
      "responsive": false, "lengthChange": true, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#examplebaru_wrapper .col-md-6:eq(0)');
	
	
	
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    //Initialize Select2 Elements
    $('.select2').select2()
    // Summernote
    $('#summernote').summernote()
  });

  $(document).ready(function(){

});

</script>




    