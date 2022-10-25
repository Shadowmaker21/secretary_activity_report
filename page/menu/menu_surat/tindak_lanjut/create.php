<?php

    $id = $_POST['id'];
    $nama_tl = $_POST['nama_tl'];
    $file_tlojk = $_POST['file_tlojk'];
    $email_tl = $_POST['email_tl'];


    $query=mysqli_query($koneksi1, "INSERT INTO tindak_lanjut VALUES('','$nama_tl','$file_tlojk','$email_tl')");

    if($query){
        ?>
        <script>alert('Data berhasil Ditambahkan')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=tindak'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
?>