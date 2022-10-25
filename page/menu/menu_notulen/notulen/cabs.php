<?php

    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $jabatan = $_POST['jabatan'];
    $nama_user = $_POST['nama_user'];
    $tgl_join = $_POST['tgl_join'];
    


    $query=mysqli_query($koneksi1, "INSERT INTO absen VALUES('','$nip','$jabatan','$nama_user',CURRENT_TIMESTAMP)");



    if($query){
        ?>

        <script>alert('Berhasil Absen, Silahkan Masuk')</script>";
	    <script type='text/javascript'> location = 'https://us02web.zoom.us/j/9996733325'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
    
?>