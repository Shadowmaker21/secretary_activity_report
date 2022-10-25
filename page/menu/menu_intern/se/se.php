<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Intern SE Direksi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">SE</li>
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
                <h3 class="card-title">Data Intern SE Direksi</h3>
                <br>
                <div>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                  BARU
                </button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default1">
                  PEMBAHARUAN
                </button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default2">
                  PENCABUTAN
                </button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg1">
                  Kirim email SE
                </button>
              </div>
              <div class="card-body"></div>

              <div class="table-responsive">
                <table id="examplebaru" class="table table-bordered table-striped">  
                    <thead>
                        <th>No</th>
                        <th>No Surat</th>
			                  <th>Tanggal Terbit</th>
                        <th>Tanggal Berlaku</th>
                        <th>Nomor Surat SE</th>
                        <th>Kode Surat</th>
			                  <th>Jenis SE</th>
                        <th>Divisi</th>
                        <th>Perihal</th>
                        <th>Dicabut</th>
			                  <th>Mencabut</th>
                        <th>File SE</th>
                        <th>Action</th>

                    </thead>
                    <tbody>
                    <?php
                        $no = 0;
                        $query = mysqli_query($koneksi1, "SELECT * FROM intern WHERE jenis='SE'");
                        while($row = mysqli_fetch_assoc($query)){

                          $no++;
                          ?>
                      <tr>
                        <td><?php echo $no ; ?></td>
                        <td><?php echo $row['no_intern']; ?></td>
                        <td><?php echo $row['tbt']; ?></td>
                        <td><?php echo $row['blk']; ?></td>
                        <td><?php echo $row['surat']; ?></td>
                        <td><?php echo $row['kode']; ?></td>
                        <td><?php echo $row['jen']; ?></td>
                        <td><?php echo $row['div']; ?></td>
                        <td><?php echo $row['hal']; ?></td>
                        <td><?php echo $row['dic']; ?></td>
                        <td><?php echo $row['menc']; ?></td>
                        <td><?php if($row['file']!="") { ?><a href='../files/<?php echo $row['file'] ?>' target='_blank'><i class="fa fa-file"></i><?php echo $row['file'] ?> </a><?php }?>
			                  </td>
                        <td>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit<?php echo $row['id'] ?>">Upload And Edit</a></button>
                        </td>
                        

                      </tr>
                      <!-- Modal form Tambah User -->
                      <div class="modal fade" id="modal-edit<?php echo $row['id'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">edit SK Intern</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=ese" enctype="multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputFile">File Upload</label>
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <input type="file" name="file" class="form-control" value="<?php echo $row['file'] ?>">                        
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NOMOR SURAT</label>
                    <input type="text" class="form-control" name="no_intern" value="<?php echo $row['no_intern'] ?>" readonly>
                  </div>
                  <div class="form-group"> 
                  <label>Jenis Kode</label> 
                  <select class="select2" name="kode" id="pilihkode3"  data-placeholder="Pilih Kode" style="width: 100%;"> 
						      <option value=""></option>
						        <?php
						         $querybidang = mysqli_query($koneksi1, "SELECT * FROM divisi 
						      		LEFT JOIN kode_srt ON kode_srt.id_kode=divisi.id_kode
						      		WHERE divisi.nama_divisi like '%%'");
                              while($j = mysqli_fetch_array($querybidang)){
                              
						      	echo "<option value='$j[kode_surat]'>".$j['kode_surat']."</option>";
						      }
						       ?>
                        
                   </select> 
                   </div> 
                 <div class="form-group"> 
                   <label>Divisi</label> 
                   <select class="select2" name="div" id="pilihdivisi3" data-placeholder="Pilih Divisi" style="width: 100%;" > 
						<option value=""></option>
                  <?php
						         $querybidang1 = mysqli_query($koneksi1, "SELECT * FROM divisi 
						      		LEFT JOIN kode_srt ON kode_srt.id_kode=divisi.id_kode
						      		WHERE divisi.nama_divisi like '%%'");
                              while($j = mysqli_fetch_array($querybidang1)){
                              
						      	echo "<option value='$j[nama_divisi]'>".$j['nama_divisi']."</option>";
						      }
						       ?>
                   </select> 
                   </div>

                <div class="form-group">
                  <label>Kode Surat</label>
                  <select class="select2" name="jen" data-placeholder="Select a State" style="width: 100%;" >
                        <option value=""></option>
                        <option value="Kredit">01-Kredit</option>
                        <option value="Tabungan">01-Tabungan</option>
                        <option value="Deposito">01-Deposito</option>
                        <option value="Layanan">01-Layanan</option>
						            <option value="Struktur Organisasi">02-Struktur Organisasi</option>
                        <option value="Promosi/Demosi/Mutasi">02-Promosi/Demosi/Mutasi</option>
                        <option value="Surat Teguran/Peringatan">02-Surat Teguran/Peringatan</option>
                        <option value="Penyesuaian">03-Penyesuaian</option>
                        <option value="Kewenangan">03-Kewenangan</option>
                        <option value="Standarisasi">03-Standarisasi</option>
                        <option value="-">-</option>
                  </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Terbit SE</label>
                    <input type="date" class="form-control" name="tbt" placeholder="Enter Use ID" value="<?php echo $row['tbt'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Berlaku SE</label>
                    <input type="date" class="form-control" name="blk" placeholder="Enter Use ID" value="<?php echo $row['blk'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Surat SE</label>
                    <input type="text" class="form-control" name="surat"  value="<?php echo $row['surat'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Perihal</label>
                    <input type="text" class="form-control" name="hal" placeholder="Perihal" value="<?php echo $row['hal'] ?>">
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
              <h4 class="modal-title">Input SE BARU</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <?php
      $auto = "SELECT COUNT(IF(jenis='SE', jenis,NULL)) AS max_code FROM intern";
      $hasil = mysqli_query($koneksi1,$auto);
      $data = mysqli_fetch_array($hasil);

      $max_code = $data['max_code'];

      $nourut = (int) substr($max_code, 0,3);
      $nourut++;
                              //035/intern.03/II/2022
      $kodejadi = sprintf("%03s" , $nourut);
       
      ?>


      <?php
      $auto1 = "SELECT COUNT(IF(jenis='SE', jenis,NULL)) AS max_code1 FROM intern";
      $hasil1 = mysqli_query($koneksi1,$auto1);
      $data1 = mysqli_fetch_array($hasil1);
                        
      $max_code1 = $data1['max_code1'];
                        
      $nourut1 = (int) substr($max_code1, 0,3);
      $nourut1++;
                              //035/SK.03/II/2022
      $char1 = 'SK';
      
      $array_bln = array(1=>"I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
      $bln = $array_bln[date('n')];
      $thn = gmdate("Y");
      $kodejadi1 = sprintf("%03s" , $nourut1) .'/'.$char1."."."/".$bln."/".$thn ;
       
      ?>
              <form role="form" method="POST" action="index.php?page=cse" enctype="multipart/form-data">
                <div class="card-body">

                <table>
                <tr>
                <td>
                <div class="form-group">
                    <label for="exampleInputEmail1">NOMOR SURAT</label>
                    <input type="text" class="form-control" name="no_intern" value="<?php echo $kodejadi ?>" readonly>
                  </div>
                  </td>
                  <td>
                <div class="form-group"> 
                  <label>Jenis Kode</label> 
                  <select class="select2" name="kode" id="pilihkode"  data-placeholder="Pilih Kode" style="width: 100%;"> 
						      <option value=""></option>
						        <?php
						         $querybidang = mysqli_query($koneksi1, "SELECT * FROM divisi 
						      		LEFT JOIN kode_srt ON kode_srt.id_kode=divisi.id_kode
						      		WHERE divisi.nama_divisi like '%%'");
                              while($j = mysqli_fetch_array($querybidang)){
                              
                      echo "<option value='$j[kode_surat]'>".$j['kode_surat']."</option>";
						      }
						       ?>
                        
                   </select> 
                   </div> 
                   </td>
                </tr> 
                  <tr>
                   <td>
                 <div class="form-group"> 
                   <label>Divisi</label> 
                   <select class="select2" name="div" id="pilihdivisi" data-placeholder="Pilih Divisi" style="width: 100%;" > 
						<option value=""></option>
                   </select> 
                   </div>
                   </td>
                   <td>
                <div class="form-group">
                  <label>Kode Surat</label>
                  <select class="select2" name="jen" data-placeholder="Select a State" style="width: 100%;">
                        <option value=""></option>
                        <option value="Kredit">01-Kredit</option>
                        <option value="Tabungan">01-Tabungan</option>
                        <option value="Deposito">01-Deposito</option>
                        <option value="Layanan">01-Layanan</option>
						            <option value="Struktur Organisasi">02-Struktur Organisasi</option>
                        <option value="Promosi/Demosi/Mutasi">02-Promosi/Demosi/Mutasi</option>
                        <option value="Surat Teguran/Peringatan">02-Surat Teguran/Peringatan</option>
                        <option value="Penyesuaian">03-Penyesuaian</option>
                        <option value="Kewenangan">03-Kewenangan</option>
                        <option value="Standarisasi">03-Standarisasi</option>
                        <option value="-">-</option>
                  </select>
                </div>
                </td>
                </tr>
                <tr>
                  <td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Terbit SE</label>
                    <input type="date" class="form-control" name="tbt" placeholder="Enter Use ID">
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Berlaku SE</label>
                    <input type="date" class="form-control" name="blk" placeholder="Enter Use ID">
                  </div>
                  </td>
                  </tr>
                  <tr>
                  <td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Surat SE</label>
                    <input type="text" class="form-control" name="surat"  value="<?php echo $kodejadi1 ?>">
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Perihal</label>
                    <input type="text" class="form-control" name="hal" placeholder="Perihal">
                  </div>
                  </td>
                  </tr>
                  <tr>
                  <td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Dicabut</label>
                    <input type="text" class="form-control" name="dic" placeholder="Dicabut" readonly>
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mencabut</label>
                    <input type="text" class="form-control" name="menc" placeholder="Mencabut" readonly>
                    <input type="hidden" class="form-control" name="jenis" value="SE">
                  </div>
                  </td>
                  </tr>
                  </table>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>
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
    <div class="modal fade" id="modal-default1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Input SE PEMBAHARUAN</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <?php
      $auto = "SELECT COUNT(IF(jenis='SE', jenis,NULL)) AS max_code FROM intern";
      $hasil = mysqli_query($koneksi1,$auto);
      $data = mysqli_fetch_array($hasil);

      $max_code = $data['max_code'];

      $nourut = (int) substr($max_code, 0,3);
      $nourut++;
                              //035/intern.03/II/2022
      $kodejadi = sprintf("%03s" , $nourut);
       
      ?>


      <?php
      $auto1 = "SELECT COUNT(IF(jenis='SE', jenis,NULL)) AS max_code1 FROM intern";
      $hasil1 = mysqli_query($koneksi1,$auto1);
      $data1 = mysqli_fetch_array($hasil1);
                        
      $max_code1 = $data1['max_code1'];
                        
      $nourut1 = (int) substr($max_code1, 0,3);
      $nourut1++;
                              //035/SK.03/II/2022
      $char1 = 'SK';
      
      $array_bln = array(1=>"I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
      $bln = $array_bln[date('n')];
      $thn = gmdate("Y");
      $kodejadi1 = sprintf("%03s" , $nourut1) .'/'.$char1."."."/".$bln."/".$thn ;
       
      ?>
              <form role="form" method="POST" action="index.php?page=cse1" enctype="multipart/form-data">
                <div class="card-body">

                <table>
                <tr>
                <td>
                <div class="form-group">
                    <label for="exampleInputEmail1">NOMOR SURAT</label>
                    <input type="text" class="form-control" name="no_intern" value="<?php echo $kodejadi ?>" readonly>
                  </div>
                  </td>
                  <td>
                <div class="form-group"> 
                  <label>Jenis Kode</label> 
                  <select class="select2" name="kode" id="pilihkode1"  data-placeholder="Pilih Kode" style="width: 100%;"> 
						      <option value=""></option>
						        <?php
						         $querybidang = mysqli_query($koneksi1, "SELECT * FROM divisi 
						      		LEFT JOIN kode_srt ON kode_srt.id_kode=divisi.id_kode
						      		WHERE divisi.nama_divisi like '%%'");
                              while($j = mysqli_fetch_array($querybidang)){
                              
                      echo "<option value='$j[kode_surat]'>".$j['kode_surat']."</option>";
						      }
						       ?>
                        
                   </select> 
                   </div> 
                   </td>
                </tr> 
                  <tr>
                   <td>
                 <div class="form-group"> 
                   <label>Divisi</label> 
                   <select class="select2" name="div" id="pilihdivisi1" data-placeholder="Pilih Divisi" style="width: 100%;" > 
						<option value=""></option>
                   </select> 
                   </div>
                   </td>
                   <td>
                <div class="form-group">
                  <label>Kode Surat</label>
                  <select class="select2" name="jen" data-placeholder="Select a State" style="width: 100%;">
                        <option value=""></option>
                        <option value="Kredit">01-Kredit</option>
                        <option value="Tabungan">01-Tabungan</option>
                        <option value="Deposito">01-Deposito</option>
                        <option value="Layanan">01-Layanan</option>
						            <option value="Struktur Organisasi">02-Struktur Organisasi</option>
                        <option value="Promosi/Demosi/Mutasi">02-Promosi/Demosi/Mutasi</option>
                        <option value="Surat Teguran/Peringatan">02-Surat Teguran/Peringatan</option>
                        <option value="Penyesuaian">03-Penyesuaian</option>
                        <option value="Kewenangan">03-Kewenangan</option>
                        <option value="Standarisasi">03-Standarisasi</option>
                        <option value="-">-</option>
                  </select>
                </div>
                </td>
                </tr>
                <tr>
                  <td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Terbit SE</label>
                    <input type="date" class="form-control" name="tbt" placeholder="Enter Use ID">
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Berlaku SE</label>
                    <input type="date" class="form-control" name="blk" placeholder="Enter Use ID">
                  </div>
                  </td>
                  </tr>
                  <tr>
                  <td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Surat SE</label>
                    <input type="text" class="form-control" name="surat"  value="<?php echo $kodejadi1 ?>">
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Perihal</label>
                    <input type="text" class="form-control" name="hal" placeholder="Perihal">
                  </div>
                  </td>
                  </tr>
                  <tr>
                  <td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Dicabut</label>
                    <input type="text" class="form-control" name="dic" placeholder="Dicabut" readonly>
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mencabut</label>
                    <input type="text" class="form-control" name="menc" placeholder="Mencabut" readonly>
                    <input type="hidden" class="form-control" name="jenis" value="SE">
                  </div>
                  </td>
                  </tr>
                  </table>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>
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
    <div class="modal fade" id="modal-default2">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Input SE PEMBAHARUAN</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <?php
      $auto = "SELECT COUNT(IF(jenis='SE', jenis,NULL)) AS max_code FROM intern";
      $hasil = mysqli_query($koneksi1,$auto);
      $data = mysqli_fetch_array($hasil);

      $max_code = $data['max_code'];

      $nourut = (int) substr($max_code, 0,3);
      $nourut++;
                              //035/intern.03/II/2022
      $kodejadi = sprintf("%03s" , $nourut);
       
      ?>


      <?php
      $auto1 = "SELECT COUNT(IF(jenis='SE', jenis,NULL)) AS max_code1 FROM intern";
      $hasil1 = mysqli_query($koneksi1,$auto1);
      $data1 = mysqli_fetch_array($hasil1);
                        
      $max_code1 = $data1['max_code1'];
                        
      $nourut1 = (int) substr($max_code1, 0,3);
      $nourut1++;
                              //035/SK.03/II/2022
      $char1 = 'SK';
      
      $array_bln = array(1=>"I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
      $bln = $array_bln[date('n')];
      $thn = gmdate("Y");
      $kodejadi1 = sprintf("%03s" , $nourut1) .'/'.$char1."."."/".$bln."/".$thn ;
       
      ?>
              <form role="form" method="POST" action="index.php?page=cse2" enctype="multipart/form-data">
                <div class="card-body">

                <table>
                <tr>
                <td>
                <div class="form-group">
                    <label for="exampleInputEmail1">NOMOR SURAT</label>
                    <input type="text" class="form-control" name="no_intern" value="<?php echo $kodejadi ?>" readonly>
                  </div>
                  </td>
                  <td>
                <div class="form-group"> 
                  <label>Jenis Kode</label> 
                  <select class="select2" name="kode" id="pilihkode2"  data-placeholder="Pilih Kode" style="width: 100%;"> 
						      <option value=""></option>
						        <?php
						         $querybidang = mysqli_query($koneksi1, "SELECT * FROM divisi 
						      		LEFT JOIN kode_srt ON kode_srt.id_kode=divisi.id_kode
						      		WHERE divisi.nama_divisi like '%%'");
                              while($j = mysqli_fetch_array($querybidang)){
                              
                      echo "<option value='$j[kode_surat]'>".$j['kode_surat']."</option>";
						      }
						       ?>
                        
                   </select> 
                   </div> 
                   </td>
                </tr> 
                  <tr>
                   <td>
                 <div class="form-group"> 
                   <label>Divisi</label> 
                   <select class="select2" name="div" id="pilihdivisi2" data-placeholder="Pilih Divisi" style="width: 100%;" > 
						<option value=""></option>
                   </select> 
                   </div>
                   </td>
                   <td>
                <div class="form-group">
                  <label>Kode Surat</label>
                  <select class="select2" name="jen" data-placeholder="Select a State" style="width: 100%;">
                        <option value=""></option>
                        <option value="Kredit">01-Kredit</option>
                        <option value="Tabungan">01-Tabungan</option>
                        <option value="Deposito">01-Deposito</option>
                        <option value="Layanan">01-Layanan</option>
						            <option value="Struktur Organisasi">02-Struktur Organisasi</option>
                        <option value="Promosi/Demosi/Mutasi">02-Promosi/Demosi/Mutasi</option>
                        <option value="Surat Teguran/Peringatan">02-Surat Teguran/Peringatan</option>
                        <option value="Penyesuaian">03-Penyesuaian</option>
                        <option value="Kewenangan">03-Kewenangan</option>
                        <option value="Standarisasi">03-Standarisasi</option>
                        <option value="-">-</option>
                  </select>
                </div>
                </td>
                </tr>
                <tr>
                  <td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Terbit SE</label>
                    <input type="date" class="form-control" name="tbt" placeholder="Enter Use ID">
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Berlaku SE</label>
                    <input type="date" class="form-control" name="blk" placeholder="Enter Use ID">
                  </div>
                  </td>
                  </tr>
                  <tr>
                  <td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Surat SE</label>
                    <input type="text" class="form-control" name="surat"  value="<?php echo $kodejadi1 ?>">
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Perihal</label>
                    <input type="text" class="form-control" name="hal" placeholder="Perihal">
                  </div>
                  </td>
                  </tr>
                  <tr>
                  <td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Dicabut</label>
                    <input type="text" class="form-control" name="dic" placeholder="Dicabut" readonly>
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mencabut</label>
                    <select class="select2" name="menc[]" id="pilihsk" multiple="multiple" data-placeholder="Pilih Kode" style="width: 100%;"> 
						        <option value=""></option>
						        <?php
						         $querybidang = mysqli_query($koneksi1, "SELECT * FROM intern 
                     WHERE intern.surat like '%%'");
                              while($j = mysqli_fetch_array($querybidang)){
                              
						      	echo "<option value='$j[surat]'>".$j['surat']."</option>";
						      }
						       ?>
                    <input type="hidden" class="form-control" name="jenis" value="SE">
                   </select>
                  </div>
                  </td>
                  </tr>
                  </table>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>
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
              <h4 class="modal-title">Form Kirim Email SE</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php?page=create_emailse" enctype="multipart/form-data">
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
                    <input type="hidden" class="form-control" name="web_from" value="sekar|se">
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
                  <button type="submit" name="send" class="btn btn-primary">Kirim</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->  
    