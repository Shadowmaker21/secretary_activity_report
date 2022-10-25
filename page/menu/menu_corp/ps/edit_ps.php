<?php

    $id = $_POST['id'];
    $nama_ps = $_POST['nama_ps'];
    $nominal_ps = $_POST['nominal_ps'];
    $saham_ps = $_POST['saham_ps'];

    $query=mysqli_query($koneksi1, "UPDATE pemegang_saham SET nama_ps='$nama_ps' , nominal_ps='$nominal_ps' ,saham_ps='$saham_ps' WHERE id='$id'");

    if($query){
        ?>
        <script>alert('Data berhasil Diupdate')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=ps'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>