<?php
if(isset($_GET['id_offline'])){
	$id_offline    =$_GET['id_offline'];
}
else {
	die ("Error. No ID Selected!");    
}
include "../sekar/config/koneksi.php";

$no=0;
$query = mysqli_query($koneksi1, "SELECT * FROM not_dekom WHERE id_offline='$id_offline'");
$row1 = mysqli_fetch_array($query);
$no++;
use Dompdf\Dompdf;
require '../sekar/assets/dompdf-0.8.3/vendor/autoload.php';
require_once '../sekar/assets/dompdf/autoload.inc.php';
$dompdf = new Dompdf();
$html = '<table border="1" cellpadding="1" cellspacing="1" style="width:730px">';
$thn = gmdate("d M Y");
$html .= '<tbody>
<tr>
<td style="text-align:center"><strong>PT. BPR WELERI MAKMUR</strong></td>
<td style="text-align:center">
<p><strong>FORMULIR DAFTAR HADIR</strong></p>
</td>
<td>
<table border="1" cellpadding="1" cellspacing="1" style="width:200px">
<tbody>
<tr>
<td>No. Dok&nbsp; &nbsp; :</td>
</tr>
<tr>
<td>Revisi&nbsp; &nbsp; &nbsp; &nbsp;:</td>
</tr>
<tr>
<td>Tgl.Terbit&nbsp;: &nbsp; &nbsp;'.$thn.'</td>
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
$html .= '<p>MATERI &nbsp; &nbsp; &nbsp; &nbsp;  : '.$row1['agenda'].'';
$html .= '<p>TANGGAL &nbsp; &nbsp; : '.$row1['tanggal'].'';
$html .= '<p>TEMPAT &nbsp; &nbsp; &nbsp; &nbsp;: '.$row1['tempat'].'';
$html .= '<p>JAM &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: '.$row1['jam'].'';
$html .= '</p>';
$html .= '<table border="1" cellpadding="1" cellspacing="1" style="width:700px">';
$html .= '<tbody>';
$html .= '<tr>
	<td style="width:20px">No</td>
	<td style="text-align:center">Nama</td>
	<td style="text-align:center">Jabatan</td>
	</tr>';
$query = mysqli_query($koneksi1, "SELECT * FROM absen2 WHERE id_offline='$id_offline'");
while($row = mysqli_fetch_array($query)){
	$html .= '
	<tr>
	<td style="text-align:center">'.$no.'.</td>
	<td>'.$row['nama_user'].'</td>
	<td>'.$row['jabatan'].'</td>
	</tr>';
	$no++;
}
$html .= '</tbody>';
$html .= '</table>';
$html .= '<p> </p>';
$thn = gmdate("d M Y");
$html .= '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Semarang, '.$thn.'</p>';
$html .= '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Pemimpin Rapat,</p>';
$html .= '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>';
$kode = 'KERRY THAMRIM'."/".date("d-m-Y")."/".'DIREKTUR UTAMA'."";
        require_once('../sekar/assets/phpqrcode/qrlib.php');
        if(empty($id)){
            $id = '';
        }else{
            QRcode::png("$kode","qr.png","M",4,4);
        }
$html .= '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p>';

$html .= '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <u>KERRY THAMRIM</u></p>';
$html .= '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Direktur Utama</p>';

$dompdf->loadHtml("$html");
$dompdf->setPaper('Letter','portrait');
$dompdf->render();
ob_clean();
$dompdf->stream("AbsenOffline '$thn'.pdf", array("Attachment"=>false));
?>

