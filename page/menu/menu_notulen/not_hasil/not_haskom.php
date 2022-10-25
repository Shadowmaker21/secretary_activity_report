<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Publikasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Publikasi</li>
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
                <h3 class="card-title">Data Publikasi</h3>
                <br>
                <div>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">Tambah File Notulen Dewan Komisaris</a>
                </button>

                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg1">
                  Kirim email Notulen Dewan Komisaris
                </button>
                </div>  
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th>No</th>
			              <th>Nama Hasil Notulen</th>
                    <th>File Upload</th>
                    <th>Tanggal Publikasi</th>

                </thead>
                <tbody>
                    <?php
                        $no = 0;
                        $query = mysqli_query($koneksi1, "SELECT * FROM hasil_notdekom");
                        while($row = mysqli_fetch_assoc($query)){
                          $no++;
                          ?>
                          <tr>
                            <td><?php echo $no ?> </td>
                            <td><?php echo $row ['nama'] ?></td>
                            <td><?php if($row['file_not']!="") { ?><a href='../files/<?php echo $row['file_not'] ?>' target='_blank'><i class="fa fa-file"></i><?php echo $row['file_not'] ?> </a><?php }?>
			                </td>
                            <td><?php echo $row ['tanggal_update']?> </td>

                            
                          </tr>
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
              <h4 class="modal-title">Form Upload Hasil Notulen Dewan Komisaris</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=cnothas" enctype="multipart/form-data">
                <div class="card-body">


                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Surat</label>
                  <input type="text" class="form-control" name="nama" placeholder="Enter Use ID">
                </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Upload File</label></label>
                        <div>
                            <input type="file" name="file_not" class="form-control" required>
                        </div>
                    </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Upload</label>
                    <input type="text" name="tanggal_update" class="form-control" id="exampleInputPassword1"  value="<?php date_default_timezone_set("Asia/Bangkok"); echo date("Y-m-d H:i:s"); ?>" disabled>
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

<!-- Modal form Tambah User -->
<div class="modal fade" id="modal-lg1">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Form Kirim Email</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=create_emailhas" enctype="multipart/form-data">
                <div class="card-body">
                  
                <div class="form-group">
				<label for="exampleInputEmail1">Pilih Email</label>
                      <!-- Pusat -->
                        <ul>
		<input type="checkbox" id="knt_smg" onclick="check_semarang(this)" name="to" value=""> Centang Semua</li>
		<ul>
			<div>
			<table>
			<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emailkomi" name="to[]" onclick="check_semarang_sub(this)" value="komisarisutama.wm@gmail.com"> Komisaris Utama</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir1" name="to[]" onclick="check_semarang_sub(this)" value="basukiyenny@gmail.com"> Komisaris</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir2" name="to[]" onclick="check_semarang_sub(this)" value="gianto.darmawan@gmail.com"> Komisaris Independen</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir3" name="to[]" onclick="check_semarang_sub(this)" value="kerry.thamrim@gmail.com"> Direktur Utama</li>
					</td>	
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir4" name="to[]" onclick="check_semarang_sub(this)" value="hendrardi168@gmail.com"> Direktur Kepatuhan</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir5" name="to[]" onclick="check_semarang_sub(this)" value="kasmiati2.smg@gmail.com"> Direktur Operasional</li>
					</td>
				</tr>
				<tr>
					<td>	
			<input type="checkbox" class="check_kantor_semarang" id="emaildir6" name="to[]" onclick="check_semarang_sub(this)" value="syaifur.bprwm@gmail.com|skkmr.bprwm@gmail.com"> Kepala SKKMR</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir7" name="to[]" onclick="check_semarang_sub(this)" value="acctwmsmg@gmail.com"> Kepala SIAK</li>
					</td>
					
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir8" name="to[]" onclick="check_semarang_sub(this)" value="simak.bprwm@gmail.com"> Wakil Kepala SIAK</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir9" name="to[]" onclick="check_semarang_sub(this)" value="treasury.bprwm@gmail.com"> Treasury</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir10" name="to[]" onclick="check_semarang_sub(this)" value="admbisnis3.wm@gmail.com"> Admin Bisnis</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir11" name="to[]" onclick="check_semarang_sub(this)" value="admbisnis3.wmsmg@gmail.com"> Admin SLIK</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir12" name="to[]" onclick="check_semarang_sub(this)" value="tsi.wmsmg@gmail.com"> TSI</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir13" name="to[]" onclick="check_semarang_sub(this)" value="ilalangfjh@gmail.com|legal.bprwm@gmail.com">Corporate Legal</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir14" name="to[]" onclick="check_semarang_sub(this)" value="skaiwelerimakmur@gmail.com"> Kepala SKAI</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir15" name="to[]" onclick="check_semarang_sub(this)" value="yosinursukma@gmail.com"> IC Kudus</li>
					</td>
					
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir16" name="to[]" onclick="check_semarang_sub(this)" value="rachmat.wmsmg@gmail.com"> IC Weleri</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir17" name="to[]" onclick="check_semarang_sub(this)" value="yolandadianna@gmail.com"> IC Surakarta</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir18" name="to[]" onclick="check_semarang_sub(this)" value="sdm.bprwm@gmail.com|ppsdm.bprwm@gmail.com"> Human Capital</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir19" name="to[]" onclick="check_semarang_sub(this)" value="chandrapardhiharto@gmail.com"> Kepala PPKB</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir20" name="to[]" onclick="check_semarang_sub(this)" value="umum.wmsmg@gmail.com"> Kepala Umum</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir21" name="to[]" onclick="check_semarang_sub(this)" value="adm.kaoprsmg@gmail.com"> Admin Umum</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir22" name="to[]" onclick="check_semarang_sub(this)" value="bizdev2.bprwm@gmail.com"> Kepala Bizdev</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir23" name="to[]" onclick="check_semarang_sub(this)" value="heri.wmsmg@gmail.com"> Kepala Kantor Pusat</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir24" name="to[]" onclick="check_semarang_sub(this)" value="setyoprasojowm@gmail.com"> Kepala Bisnis</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir25" name="to[]" onclick="check_semarang_sub(this)" value="syknes80@gmail.com"> Kepala Monitoring BTB</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir26" name="to[]" onclick="check_semarang_sub(this)" value="sinyo.galeen@gmail.com"> Kepala Monitoring BB</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir27" name="to[]" onclick="check_semarang_sub(this)" value="amu.wmsmg@gmail.com"> Monitoring</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir28" name="to[]" onclick="check_semarang_sub(this)" value="funding.divisionwm@gmail.com"> Kepala Dana</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir29" name="to[]" onclick="check_semarang_sub(this)" value="kabidoprs.smg@gmail.com"> Kepala Operasional</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir30" name="to[]" onclick="check_semarang_sub(this)" value="kasieteller.wmsmg@gmail.com"> Kepala Pelayanan</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir31" name="to[]" onclick="check_semarang_sub(this)" value="bo.wmsmg2@gmail.com"> Customer Service</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir32" name="to[]" onclick="check_semarang_sub(this)" value="loanprocessing2.wmsmg@gmail.com"> Loan Processing</li>
					</td>				
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir33" name="to[]" onclick="check_semarang_sub(this)" value="loanberkas2.wmsmg@gmail.com"> Loan Berkas</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir34" name="to[]" onclick="check_semarang_sub(this)" value="yudi.wmsmg@gmail.com"> Kepala AO Gayamsari</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir35" name="to[]" onclick="check_semarang_sub(this)" value="csobprwm@gmail.com"> CS Online</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir36" name="to[]" onclick="check_semarang_sub(this)" value="hendra.wmsmg@gmail.com"> Kepala Kantor Tlogosari</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir37" name="to[]" onclick="check_semarang_sub(this)" value="asido.wmsmg@gmail.com"> Kepala Kantor Gg. Besen</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir38" name="to[]" onclick="check_semarang_sub(this)" value="andi1.wmsmg@gmail.com|wmsiliwangi2@gmail.com"> Kepala Kantor Siliwangi</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir39" name="to[]" onclick="check_semarang_sub(this)" value="luqman.wmsmg@gmail.com|wmngaliyan@gmail.com"> Kepala Kantor Ngaliyan</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir40" name="to[]" onclick="check_semarang_sub(this)" value="anisari.wmsmg@gmail.com|wmbanyumanik2@gmail.com"> Kepala Kantor Banyumanik</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir41" name="to[]" onclick="check_semarang_sub(this)" value="karno.wmkds@gmail.com"> Kepala Cabang Weleri</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir42" name="to[]" onclick="check_semarang_sub(this)" value="isnanto.wmwlr@gmail.com"> Kepala Bisnis Weleri</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir43" name="to[]" onclick="check_semarang_sub(this)" value="yanah.wmwlr@gmail.com "> Kepala Operasional Weleri</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir44" name="to[]" onclick="check_semarang_sub(this)" value="liliek.wmwlr2@gmail.com"> CS Utama</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir45" name="to[]" onclick="check_semarang_sub(this)" value="loanweleri@gmail.com"> Loan Processing Weleri</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir46" name="to[]" onclick="check_semarang_sub(this)" value="zushilafitria@gmail.com"> Kepala AMU</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir47" name="to[]" onclick="check_semarang_sub(this)" value="deny.wmwlr@gmail.com|wmkaskendal2@gmail.com"> Kepala Kantor Kendal</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir48" name="to[]" onclick="check_semarang_sub(this)" value="wmpegandon@gmail.com"> Kantor Boja</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir49" name="to[]" onclick="check_semarang_sub(this)" value="wmkaliwunguwlr@gmail.com"> Kantor Kaliwungu Kendal</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir50" name="to[]" onclick="check_semarang_sub(this)" value="wmcepiring@gmail.com"> Kantor Cepiring</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir51" name="to[]" onclick="check_semarang_sub(this)" value="doni.riyanto07@gmail.com"> Kepala Cabang Kudus</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir52" name="to[]" onclick="check_semarang_sub(this)" value="pancatyas05@gmail.com"> Kepala Operasional Kudus</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir53" name="to[]" onclick="check_semarang_sub(this)" value="bisnis.wmkds@gmail.com"> CS Kudus</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir54" name="to[]" onclick="check_semarang_sub(this)" value="diky.wmkds@gmail.com"> Loan Processing Kudus</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir55" name="to[]" onclick="check_semarang_sub(this)" value="agusistiqlal3@gmail.com"> Kepala AMU Kudus</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir56" name="to[]" onclick="check_semarang_sub(this)" value="Ali.bprwmkds@gmail.com|klw2.wmkds@gmail.com"> Kepala Kantor Kaliwungu Kudus</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir57" name="to[]" onclick="check_semarang_sub(this)" value="sis.wmkds@gmail.com"> Kepala Bisnis Pati</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir58" name="to[]" onclick="check_semarang_sub(this)" value="csbprwm.pati@gmail.com"> CS Pati</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir59" name="to[]" onclick="check_semarang_sub(this)" value="tellerbprwm.pati@gmail.com"> Teller Pati</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir60" name="to[]" onclick="check_semarang_sub(this)" value="wisnusubroto83@gmail.com"> Kepala Cabang Surakarta</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir61" name="to[]" onclick="check_semarang_sub(this)" value="aprin.wmslo1@gmail.com"> Kepala Bisnis Surakarta</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir62" name="to[]" onclick="check_semarang_sub(this)" value="operasional.wmslo@gmail.com"> Kepala Operasional Surakarta</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir63" name="to[]" onclick="check_semarang_sub(this)" value="cs.wmsolo@gmail.com"> CS Surakrta</li>
					</td>
				</tr>
				<tr>	
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir64" name="to[]" onclick="check_semarang_sub(this)" value="loan.wmsolo1@gmail.com"> Loan Processing Solo</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir65" name="to[]" onclick="check_semarang_sub(this)" value="yanto.wmklt@gmail.com"> Kepala AMU Solo</li>
					</td>			
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir66" name="to[]" onclick="check_semarang_sub(this)" value="subari.wmslo@gmail.com|cs.wmpjg@gmail.com"> Kepala Kantor Laweyan</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir67" name="to[]" onclick="check_semarang_sub(this)" value="adit.wmslo@gmail.com|kaswmsukoharjo@gmail.com"> Kepala Kantor Sukoharjo</li>
					</td>
				</tr>
				<tr>
				<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir68" name="to[]" onclick="check_semarang_sub(this)" value="mudjinugrohobprwmklt@gmail.com"> Kepala Cabang Klaten</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir69" name="to[]" onclick="check_semarang_sub(this)" value="bpr.wmklt2@gmail.com"> Service Assitance Klaten</li>
					</td>			
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir70" name="to[]" onclick="check_semarang_sub(this)" value="csbprwmklt3@gmail.com"> CS Klaten</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir71" name="to[]" onclick="check_semarang_sub(this)" value="elantdeep@gmail.com"> Kepala Cabang Sragen</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir72" name="to[]" onclick="check_semarang_sub(this)" value="bisnis.wmsrg2@gmail.com"> Service Assistance Sragen</li>
					</td>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir73" name="to[]" onclick="check_semarang_sub(this)" value="cswmsrg2@gmail.com"> CS Sragen</li>
					</td>					
				</tr>
				<tr>
				<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir74" name="to[]" onclick="check_semarang_sub(this)" value="hendro.wmsmg@gmail.com"> Kepala Cabang Tegal</li>
					</td>
				<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir75" name="to[]" onclick="check_semarang_sub(this)" value="bprwmtegal2@gmail.com"> Service Assistance Tegal</li>
					</td>
				</tr>
				<tr>
					<td>
			<input type="checkbox" class="check_kantor_semarang" id="emaildir76" name="to[]" onclick="check_semarang_sub(this)" value="cswmtegal@gmail.com"> CS Tegal</li>
					</td>						
				</tr>
			</table>
			</div>
		</ul>
	</ul>
</div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Subject</label>
                    <input type="text" class="form-control" name="subject" placeholder="Masukkan Subject Email">
                    <input type="hidden" class="form-control" name="name" value="sekar">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Body Surat</label>
                    <textarea class="form-control" rows="3" name="body" placeholder="Kepada Yth."></textarea>
                    <input type="hidden" class="form-control" name="web_from" value="sekar|notulen">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Lampiran</label>
                      <div>
                        <input type="file" name="lampiran" class="form-control" required>
                      </div>
                      <input type="hidden" class="form-control" name="stt_lampiran" value="tetap">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Create Date</label>
                    <input type="hidden" class="form-control" name="create_date">
                    <input type="text" class="form-control" name="update_date" value="<?php date_default_timezone_set("Asia/Bangkok"); echo date("Y-m-d H:i:s"); ?>" disabled>
                    <input type="hidden" class="form-control" name="flag" value="*">
                    <input type="hidden" class="form-control" name="insert_from">
                    <input type="hidden" class="form-control" name="update_from">
                  </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="send" class="btn btn-primary">Kirim Publikasi</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->    