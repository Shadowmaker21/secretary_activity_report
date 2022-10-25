<?php
if(isset($_POST['send']))
{
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $no_srt = $_POST['no_srt'];
    $tgl_srt = $_POST['tgl_srt'];
    $ket = $_POST['ket'];
    $nominal = $_POST['nominal'];
    $file = $_POST['file'];


    $query=mysqli_query($koneksi1, "INSERT INTO umum(id,nama, no_srt,tgl_srt,ket,nominal,file) VALUES('','$nama', '$no_srt','$tgl_srt','$ket','$nominal','$file')");

    if($query){
        ?>
        <script>alert('Data berhasil Ditambahkan')</script>";
	    <script type='text/javascript'> document.location = 'index.php?page=umum'; </script>";
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan saat input.");
        </script>
        <?php
    }
}
?>