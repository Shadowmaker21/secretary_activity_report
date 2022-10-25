<?php

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $file = $_POST['file'];
    $keterangan = $_POST['keterangan'];
    $email = $_POST['email'];

    $query=mysqli_query($koneksi1, "UPDATE siak SET nama='$nama' , file='$file' ,keterangan='$keterangan',email='$email' WHERE id = '$id'");

    if($query){
        ?>
        <script>alert('Update Data berhasil')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=siak'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>