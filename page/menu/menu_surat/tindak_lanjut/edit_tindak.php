<?php

    $id = $_POST['id'];
    $nama_tl = $_POST['nama_tl'];
    $file_tlojk = $_POST['file_tlojk'];
    $email_tl = $_POST['email_tl'];


    $query=mysqli_query($koneksi1, "UPDATE tindak_lanjut SET nama_tl='$nama_tl' , file_tlojk='$file_tlojk' ,email_tl='$email_tl' WHERE id = '$id'");

    if($query){
        ?>
        <script>alert('Data berhasil Diupdate')</script>";
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