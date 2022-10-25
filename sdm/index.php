<?php 
include "../config/koneksi.php";

session_start();
//berfungsi mengecek apakah user sudah login atau belum
if($_SESSION['level']==""){
	header("location:../index.php?alert=belum_login");
}

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
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../assets/plugins/select2/css/select2.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.min.css">

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
        <a class="nav-link" href="logout.php">
          <i class="fas fa-power-off"></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../assets/dist/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SEKAR WEB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="../assets/dist/img/logo.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
			<!-- CEK ECHO -->
          <a href="#" class="d-block"><?php echo $_SESSION['nama']; ?> - <?php echo $_SESSION['level']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!-- MENU KETENTUAN INTERNS -->
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa-solid fa-ethernet"></i>
              <p>
                Menu Ketentuan Intern
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=sk" class="nav-link">
                  <i class="fa-solid fa-book nav-icon"></i>
                  <p>Nomor SK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=se" class="nav-link">
                  <i class="fa-solid fa-book nav-icon"></i>
                  <p>Nomor SE</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=memo" class="nav-link">
                  <i class="fa-solid fa-book nav-icon"></i>
                  <p>Nomor Memo</p>
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <?php
            include "../config/pages.php"
        ?>
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
<script type="text/javascript" src="../assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../assets/plugins/jquery-3.2.1/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/jszip/jszip.min.js"></script>
<script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Select2 -->
<script src="../assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Summernote -->
<script src="../assets/plugins/summernote/summernote-bs4.min.js"></script>
<script src="../assets/ckeditor/ckeditor.js"></script>

<?php include "delete_confirm.php"; ?>




</body>
</html>

<!-- Page specific script -->
<script>

CKEDITOR.replace('editor');



	$(document).ready(function(){
			 $(".alert").delay(3000).addClass("in").fadeOut("slow");
		});

	$("#pilihbidang").change(function(){

			var getValue= $(this).val();
			
 
			
			if(getValue == 0)
			{
				$("#pilihdirektur").html("<option> </option>");
			}
			else
			{
				$.getJSON('../page/menu/menu_surat/surat/get_direktur.php',{'bidang_id' : getValue},function(data){
					var showData;
					$.each(data,function(index,value){
						
						showData += "<option value="+value.id_jabatan+">"+value.nama_jabatan+"</option>";
					})
					$("#pilihdirektur").html(showData)
				})
			}
		})   
		
		$(document).ready(function(){
			 $(".alert").delay(3000).addClass("in").fadeOut("slow");
		});

	$("#pilihnik").change(function(){

			var getValue= $(this).val();
			
 
			
			if(getValue == 0)
			{
				$("#pilihjab").html("<option> </option>");
        $("#pilihnama").html("<option> </option>");
        $("#pilihnik").html("<option> </option>");
			}
			else
			{
				$.getJSON('../page/menu/menu_notulen/notulen/get_nik.php',{'nik_id' : getValue},function(data){
					var showData;
					$.each(data,function(index,value){
						
						showData += "<option value="+value.nama_jabatan+">"+value.nama_jabatan+"</option>";
					})
					$("#pilihjab").html(showData)
          console.log(showData)
				})
        $.getJSON('../page/menu/menu_notulen/notulen/get_nik.php',{'nik_id' : getValue},function(data){
					var showData;
					$.each(data,function(index,value){
						
						showData += "<option value="+value.nama_user+">"+value.nama_user+"</option>";
					})
					$("#pilihnama").html(showData)
          console.log(showData)
				})
        $.getJSON('../page/menu/menu_notulen/notulen/get_nik.php',{'nik_id' : getValue},function(data){
					var showData;
					$.each(data,function(index,value){
						
						showData += "<option value="+value.no_nik+">"+value.no_nik+"</option>";
					})
					$("#pilihnik").html(showData)
          console.log(showData)
				})
			}
		}) 
    

    $(document).ready(function(){
			 $(".alert").delay(3000).addClass("in").fadeOut("slow");
		});

	$("#pilihkode").change(function(){

			var getValue= $(this).val();
			
 
			
			if(getValue == 0)
			{
				$("#pilihkode").html("<option> </option>");
			}
			else
			{
				$.getJSON('../page/menu/menu_intern/sk/get_sk.php',{'kode_id' : getValue},function(data){
					var showData;
					$.each(data,function(index,value){
						
						showData += "<option value="+value.nama_divisi+">"+value.nama_divisi+"</option>";
					})
					$("#pilihdivisi").html(showData)
				})
			}
		}) 

    $(document).ready(function(){
			 $(".alert").delay(3000).addClass("in").fadeOut("slow");
		});

	$("#pilihkode1").change(function(){

			var getValue= $(this).val();
			
 
			
			if(getValue == 0)
			{
				$("#pilihkode1").html("<option> </option>");
			}
			else
			{
				$.getJSON('../page/menu/menu_intern/sk/get_sk.php',{'kode_id' : getValue},function(data){
					var showData;
					$.each(data,function(index,value){
						
						showData += "<option value="+value.nama_divisi+">"+value.nama_divisi+"</option>";
					})
					$("#pilihdivisi1").html(showData)
				})
			}
		}) 

    
    $(document).ready(function(){
			 $(".alert").delay(3000).addClass("in").fadeOut("slow");
		});

	$("#pilihkode2").change(function(){

			var getValue= $(this).val();
			
 
			
			if(getValue == 0)
			{
				$("#pilihkode2").html("<option> </option>");
			}
			else
			{
				$.getJSON('../page/menu/menu_intern/sk/get_sk.php',{'kode_id' : getValue},function(data){
					var showData;
					$.each(data,function(index,value){
						
						showData += "<option value="+value.nama_divisi+">"+value.nama_divisi+"</option>";
					})
					$("#pilihdivisi2").html(showData)
				})
			}
		})

    $(document).ready(function(){
			 $(".alert").delay(3000).addClass("in").fadeOut("slow");
		});

	$("#pilihkode3").change(function(){

			var getValue= $(this).val();
			
 
			
			if(getValue == 0)
			{
				$("#pilihkode3").html("<option> </option>");
			}
			else
			{
				$.getJSON('../page/menu/menu_intern/sk/get_sk.php',{'kode_id' : getValue},function(data){
					var showData;
					$.each(data,function(index,value){
						
						showData += "<option value="+value.nama_divisi+">"+value.nama_divisi+"</option>";
					})
					$("#pilihdivisi3").html(showData)
				})
			}
		})    

    $("#pilihsk").change(function(){

    var getValue= $(this).val();
    
    if(getValue == 0)
			{
				$("#pilihsk").html("<option> </option>");
			}
			else
			{
				$.getJSON('../page/menu/menu_intern/sk/get_nosk.php',{'kode_id' : getValue},function(data){
					var showData;
					$.each(data,function(index,value){
						
						showData += "<option value="+value.surat+">"+value.surat+"</option>";
					})
        })
			}
		})

   
		
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

// Pusat

function check_pusat(valx) {
  if($(valx).prop('checked') == true){
    $('.check_email').prop('checked',true);
  }else{
    $('.check_email').prop('checked',false);
  }
}

function check_pusat_sub(valx) {
  var xx = 0;
  $('.check_email').each(function() {
    if($(this).prop('checked') == false){
      xx++;
    }
  });

  if(xx > 0){
    $('#knt_pst').prop('checked',false);
  }else{
    $('#knt_pst').prop('checked',true);
  }
}

  // ====================================================================================================

  $(document).ready(function(){

});

function check_semarang(valx) {
  if($(valx).prop('checked') == true){
    $('.check_kantor_semarang').prop('checked',true);
  }else{
    $('.check_kantor_semarang').prop('checked',false);
  }
}

function check_semarang_sub(valx) {
  var xx = 0;
  $('.check_kantor_semarang').each(function() {
    if($(this).prop('checked') == false){
      xx++;
    }
  });

  if(xx > 0){
    $('#knt_smg').prop('checked',false);
  }else{
    $('#knt_smg').prop('checked',true);
  }
}

</script>