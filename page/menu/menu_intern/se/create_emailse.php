<?php
if (isset($_POST['send'])) {
    
    $to = implode(" | ", $_POST['to']);
    $getfilename =  str_replace(' ', '', $to);

    $rename=$getfilename;

    $newname1=$rename;

    $subject = addslashes(strip_tags($_POST['subject']));
    $name = $_POST['name'];
    $body = nl2br($_POST['body']);
    $web_from = $_POST['web_from'];
	
    $imgname=$_FILES['lampiran']['name'];
	echo '<br>';
	$extension = pathinfo($imgname,PATHINFO_EXTENSION);
    $getfilename =  str_replace(' ', '_', $imgname);

	
	$rename='http://192.168.0.4/sekar/files/'.$getfilename;

    $newname=$rename;

    $filename=$_FILES['lampiran']['tmp_name'];
    move_uploaded_file($filename, '../files/'.$getfilename);

    $stt_lampiran = $_POST['stt_lampiran'];
    $create_date = $_POST['NULL'];
    $update_date = $_POST['update_date'];
    $flag = $_POST['flag'];
    $insert_from = $_POST['insert_from'];
    $update_from = $_POST['update_from'];

    

	$query = "INSERT INTO outbox_mail VALUES('','$newname1','$subject','$name','$body','$web_from','$newname','$stt_lampiran','$create_date',CURRENT_TIMESTAMP,'$flag','$insert_from','$update_from')";
	$run = mysqli_query($koneksi2,$query);
		if($run == true){
            ?>
                <script>alert('Email Berhasil Terkirim')</script>";
                <script type='text/javascript'> document.location = 'index.php?page=se'; </script>";
                <?php
        }else{
            ?>
            <script type="text/javascript">
                alert("Email Tidak Berhasil Dikirim");
            </script>
            <?php
        }
}
?>