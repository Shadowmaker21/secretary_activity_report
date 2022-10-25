<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid" width="100%">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hasil Notulen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">SIAK</li>
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
                <h3 class="card-title">Data INVOICES</h3>
                <br>
              </div>
              <!-- /.card-header -->
              <div class="card-body" width="100%">
			  <!DOCTYPE html>
				<html lang="en">
				<head>
				    <meta charset="UTF-8">
				    <meta http-equiv="X-UA-Compatible" content="IE=edge">
				    <meta name="viewport" content="width=device-width, initial-scale=1.0">
				    <title>Document</title>
				    <style>
				        table {
				            border-collapse: collapse;
				            width: 100%;
				        }
					
				        table, th, td {
				            border: 1px solid black;
				        }
				        th, td {
				            padding: 10px;
				        }
				        th {
				            background-color: rgb(255, 255, 255);
				            color: rgb(0, 0, 0);
				        }
				        tr:hover {background-color: #f5f5f5;}
					
				    </style>
				
				</head>
				<body>
					
				    <center>
						<table width="100px">
						<table border="1">
						<?php
                        $no = 0;
                        $query = mysqli_query($koneksi1, "SELECT * FROM not_dir");
                        while($row = mysqli_fetch_assoc($query)){
                          $no++;
                          ?>
                          
				            <tr>
				                <th rowspan="3" width="450px">PT. BPR WELERI MAKMUR</th>
				                <th rowspan="3" width="450px">FORMULIR<br><br>NOTULEN MEETING</th>
				                <td colspan="1" width="100px">No. Dok.</td>
				                <td colspan="1" width="px">:</td>
				            </tr>
					
				            <tr>
				                <td width="100px">Revisi</td>
				                <td width="px">:</td>
				            </tr>
				            <tr>
				                <td width="100px">Halaman</td>
				                <td width="px">:</td>
				            </tr>
				        </table>
				        <br>
				        <br>
				        <table>
				            <tr>
				                <td width="180px">Hari / Tanggal</td>
				                <td> : <?php echo $row['hari']; ?> / <?php echo $row['tanggal']; ?></td> 
				            </tr>
				            <tr>
				                <td width="180px">Tempat</td>
				                <td >: <?php echo $row['tempat']; ?> </td>
				            </tr>
				            <tr>
				                <td width="180px">Jam</td>
				                <td >: <?php echo $row['jam']; ?> </td>
				            </tr>
				            <tr>
				                <td width="180px">Peserta</td>
				                <td >: <?php echo $row['email']; ?> </td>
				            </tr>
				            <tr>
				                <td width="180px">Agenda Rapat</td>
				                <td >: <?php echo $row['agenda']; ?> </td>
				            </tr>
				        </table>
				        <br>
				        <br>
				        <td><?php echo $row['ket']; ?></td>
						</table>					
				    </center>
					
				</body>
				<?php } ?>
				</div>
				</div>
				</div>
				</html>
				</div>
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
    

