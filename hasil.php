<?php
if(isset($_GET['id_offline'])){
	$id_offline    =$_GET['id_offline'];
}
else {
	die ("Error. No ID Selected!");    
}
include "../sekar/config/koneksi.php";

$query = mysqli_query($koneksi1, "SELECT absen2.id_offline,hari,tanggal,tempat,jam,GROUP_CONCAT(absen2.nama_user) AS peserta,not_dekom.agenda,ket,jenis,not_dekom.id_offline FROM not_dekom RIGHT JOIN absen2 ON not_dekom.id_offline=absen2.id_offline WHERE not_dekom.id_offline='$id_offline' GROUP BY absen2.id_offline");
$row = mysqli_fetch_assoc($query);

use Dompdf\Dompdf;
require '../sekar/assets/dompdf-0.8.3/vendor/autoload.php';
$dompdf = new Dompdf();

$html = '<table border="1" cellpadding="1" cellspacing="1" style="width:730px">';
$thn = gmdate("d M Y");
$html .= '<tbody>
<tr>
<td style="text-align:center"><strong>PT. BPR WELERI MAKMUR</strong></td>
<td style="text-align:center">
<p><strong>FORMULIR</strong></p>
<p><strong>NOTULEN MEETING</strong></p>
</td>
<td>

<table border="1" cellpadding="1" cellspacing="1" style="width:130px">
<tbody>
<tr>
<td>No. Dok&nbsp; &nbsp; :</td>
</tr>
<tr>
<td>Revisi&nbsp; &nbsp; &nbsp; &nbsp;:</td>
</tr>
<tr>
<td>Halaman&nbsp; &nbsp;:</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>';
$html .= '</table>';

$html .= '<p>&nbsp; &nbsp;Hari / Tanggal &nbsp; &nbsp; &nbsp; &nbsp;: '.$row['hari'].' / '.$row['tanggal'].'';
$html .= '<p>&nbsp; &nbsp;Tempat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  : '.$row['tempat'].'';
$html .= '<p>&nbsp; &nbsp;Jam &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : '.$row['jam'].'';
$no = 1;
$query = mysqli_query($koneksi1, "SELECT absen2.id_offline,absen2.nama_user ,absen2.jabatan FROM not_dekom RIGHT JOIN absen2 ON not_dekom.id_offline=absen2.id_offline WHERE not_dekom.id_offline='$id_offline' ");
while($row = mysqli_fetch_assoc($query)){
	if($no == 1){
		$html .= '<p>&nbsp; &nbsp;Peserta &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: '; $html .=''.$no.'. '.$row['jabatan'].'';
	}else{
		$html .= '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   '; $html .=' '.$no.'. '.$row['jabatan'].'';
	}
	
$no++;
}
$query = mysqli_query($koneksi1, "SELECT absen2.id_offline,hari,tanggal,tempat,jam,GROUP_CONCAT(absen2.nama_user) AS peserta,not_dekom.agenda,ket,jenis,not_dekom.id_offline FROM not_dekom RIGHT JOIN absen2 ON not_dekom.id_offline=absen2.id_offline WHERE not_dekom.id_offline='$id_offline' GROUP BY absen2.id_offline");
$row = mysqli_fetch_assoc($query);
$html .= '<p>&nbsp; &nbsp;Agenda Rapat &nbsp; &nbsp; &nbsp; &nbsp; : '.$row['agenda'].'';
$html .= '</p>';
$html .= '<table border="1" cellpadding="1" cellspacing="1" style="width:740px">';
$html .= '<tbody>
<tr>
<td style="width:20px" "text-align:center">No.</td>
<td style="text-align:center">Uraian</td>
</tr>';
$no =1;
$query = mysqli_query($koneksi1, "SELECT absen2.id_offline,hari,tanggal,tempat,jam,absen2.nama_user ,not_dekom.agenda,ket,jenis,not_dekom.id_offline FROM not_dekom RIGHT JOIN absen2 ON not_dekom.id_offline=absen2.id_offline WHERE not_dekom.id_offline='$id_offline' ");
$row = mysqli_fetch_assoc($query);
$html .= '
<tr>
<td>'.$no.'</td>
<td>'.$row['ket'].'</td>
</tr>';
$html .= '</tbody>';
$html .= '</table>';
$html .= '<p>';
$thn = gmdate("d M Y");
$html .= '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Semarang, '.$thn.'</p>';

$html .= '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pemimpin Rapat,&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Notulis,</p>';

$html .= '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>';

$html .= '<p>&nbsp;</p>';

$html .= '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<u>KERRY THAMRIM</u>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <u>FIKRINA AZIZAH</u></p>';

$html .= '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Direktur Utama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Sekretaris</p>';

$dompdf->loadHtml("$html");
$dompdf->setPaper('Letter','portrait');
ob_clean();
$dompdf->render();
$dompdf->stream("Notulen Offline $thn.pdf", array("Attachment"=>false));
?>