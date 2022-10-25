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

  <link rel="stylesheet" href="../assets/dist/css/adminlte.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">

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

      <?php
	  ////id_suratstatus 	id_surat 	status_sekertarisawal 	tgl_updatesekertarisawal 	id_usersekertarisawal 	status_direktur 	tgl_updatedirektur 	id_userdirektur 	status_siak 	tgl_udatesiak 	id_usersiak 	status_umum 	tgl_updateumum 	id_userumum 	status_sekertarisakhir 	tgl_updatesekertarisakhir 	id_usersekertarisakhir 	 
          $sql_get = mysqli_query($koneksi1,"SELECT * FROM surat 
			LEFT JOIN surat_status ON surat.id=surat_status.id_surat 
			WHERE surat_status.status_sekertarisawal='Baru' or surat_status.status_sekertarisakhir='Baru'");
          $count = mysqli_num_rows($sql_get);
        ?>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge" id="count"><?php echo $count;?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
             
            <?php

              $sql_get = mysqli_query($koneksi1,"SELECT * FROM surat 
			LEFT JOIN surat_status ON surat.id=surat_status.id_surat 
			WHERE surat_status.status_sekertarisawal='Baru' or surat_status.status_sekertarisakhir='Baru'");
              if(mysqli_num_rows($sql_get)>0)
              {
                while($row = mysqli_fetch_assoc($sql_get)){
                 
                  if($row['status_sekertarisawal']=="Baru") {
					  echo '<a class="dropdown-item text-danger" href="index.php?page=surat" >Baru &#x2192; '.$row['nomor_srt'].'</a>';
					echo '<div class="dropdown-divider"></div>';
				  } else if($row['status_sekertarisawal']!="Baru" and $row['status_umum']=="Upload Order Bayar") {
					  echo '<a class="dropdown-item text-danger" href="index.php?page=surat" >Need Update Status &#x2192; '.$row['nomor_srt'].'</a>';
					echo '<div class="dropdown-divider"></div>';
				  }
				  
                }
              }
              else
              {
                echo '<a class="dropdown-item text-danger font-weight-bold" href="#" >Sorry! No Message</a>';
              }

            ?>
             
            <span class="float-right text-muted text-sm"></span>
          </a>
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
            
               <!-- MENU SURAT -->
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              </i><i class=" nav-icon fa-solid fa-bars"></i>
              <p>
                Menu Surat
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=surat" class="nav-link">
                </i><i class="fa-solid fa-book nav-icon"></i>
                  <p>Surat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=hukum" class="nav-link">
                  </i><i class="fa-solid fa-gavel nav-icon"></i>
                  <p>Hukum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=pub" class="nav-link">
                  </i><i class="fa-solid fa-person-dots-from-line nav-icon"></i>
                  <p>Publikasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=tindak" class="nav-link">
                  </i><i class="fa-solid fa-forward-step nav-icon"></i>
                  <p>Tindak Lanjut Pemeriksaan OJK (Menunggu Dari IASS)</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="index.php?page=tanda" class="nav-link">
                  </i><i class="fa-solid fa-file-arrow-up nav-icon"></i>
                  <p>Upload TTOJK</p>
                </a>
              </li> -->
            </ul>
          </li>

          <!-- MENU CORPORATE -->
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa-solid fa-computer"></i>
              <p>
                Menu Corporate File
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=ps" class="nav-link">
                  <i class="fa-solid fa-people-arrows nav-icon"></i>
                  <p>PS BPR WM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=pswm" class="nav-link">
                  <i class="fa-solid fa-arrows-down-to-people nav-icon"></i>
                  <p>Kepemilikan Saham Lain PS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=pdir" class="nav-link">
                  <i class="fa-solid fa-hand-holding-hand nav-icon"></i>
                  <p>Pemegang Saham Pengurus</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=peng" class="nav-link">
                  </i><i class="fa-solid fa-screwdriver-wrench nav-icon"></i>
                  <p>Pengurus</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=peng_hub" class="nav-link">
                  </i><i class="fa-solid fa-screwdriver-wrench nav-icon"></i>
                  <p>Pengurus (Hubungan Keuangan)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=peng_kel" class="nav-link">
                  </i><i class="fa-solid fa-screwdriver-wrench nav-icon"></i>
                  <p>Pengurus (Hubungan Keluarga)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=pe" class="nav-link">
                  <i class="fa-solid fa-toolbox nav-icon"></i>
                  <p>Pengurus Eksekutif</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- MENU NOTULEN -->
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa-solid fa-handshake"></i>
              <p>
                Menu Notulen
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="index.php?page=not_haskom" class="nav-link">
                  <i class="fa-solid fa-calendar-days nav-icon"></i>
                  <p>Notulen Dewan Komisaris</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=not_dir" class="nav-link">
                  <i class="fa-solid fa-calendar-days nav-icon"></i>
                  <p>Jadwal Notulen online</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=not_dekom" class="nav-link">
                  <i class="fa-solid fa-calendar-days nav-icon"></i>
                  <p>Jadwal Notulen offline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=absen" class="nav-link">
                  <i class="fa-solid fa-clipboard-list nav-icon"></i>
                  <p>Daftar Absen Notulen Online</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=absen2" class="nav-link">
                  <i class="fa-solid fa-clipboard-list nav-icon"></i>
                  <p>Daftar Absen Notulen Offline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=not_has" class="nav-link">
                  <i class="fa-solid fa-file-lines nav-icon"></i>
                  <p>Page Not</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=notulen" class="nav-link">
                  <i class="fa-solid fa-square-poll-horizontal nav-icon"></i>
                  <p>Notulen Hasil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=notulen_dir" class="nav-link">
                  <i class="fa-solid fa-square-poll-horizontal nav-icon"></i>
                  <p>Notulen Hasil</p>
                </a>
              <!-- </li>
              <li class="nav-item">
                <a href="index.php?page=try" class="nav-link">
                  <i class="fa-solid fa-square-poll-horizontal nav-icon"></i>
                  <p>Generate</p>
                </a>
              </li> -->
              
            </ul>
          </li>

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

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

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
					var showData1;
					$.each(data,function(index,value){
						
						showData1 += "<option value='+value.nama_jabatan+'>"+value.nama_jabatan+"</option>";
					})
					$("#pilihjab").html(showData1)
          console.log(showData1)
				})
        $.getJSON('../page/menu/menu_notulen/notulen/get_nik.php',{'nik_id' : getValue},function(data){
					var showData2;
					$.each(data,function(index,value){
						
						showData2 += "<option value='+value.nama_user+'>"+value.nama_user+"</option>";
					})
					$("#pilihnama").html(showData2)
          console.log(showData2)
				})
        $.getJSON('../page/menu/menu_notulen/notulen/get_nik.php',{'nik_id' : getValue},function(data){
					var showData3;
					$.each(data,function(index,value){
						
						showData3 += "<option value='+value.no_nik+'>"+value.no_nik+"</option>";
					})
					$("#pilihnik").html(showData3)
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
//Date range picker
$('#reservation').daterangepicker({
  locale: {
        format: 'YYYY-MM-DD'
      }
})
//Date range picker with time picker
$('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM-DD-YYYY hh:mm A'
      }
    })

</script>