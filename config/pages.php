<?php
error_reporting(error_reporting()& ~E_NOTICE);
include "../config/koneksi.php";

// PAGE SURAT
if(empty($_GET['page'])){
    $getPage = '';
}else{
    $getPage = $_GET['page'];
}
if($getPage=="surat"){
    include "../page/menu/menu_surat/surat/surat.php";
}
if($getPage=="acc_surat"){
    include "../page/menu/menu_surat/surat/acc_surat.php";
}
if($getPage=="result"){
    include "../page/menu/menu_surat/surat/result.php";
}
if($getPage=="accept"){
    include "../page/menu/menu_surat/surat/accept.php";
}
if($getPage=="accept2"){
    include "../page/menu/menu_surat/surat/accept2.php";
}
if($getPage=="accept3"){
    include "../page/menu/menu_surat/surat/accept3.php";
}
if($getPage=="accept4"){
    include "../page/menu/menu_surat/surat/accept4.php";
}
if($getPage=="accept5"){
    include "../page/menu/menu_surat/surat/accept5.php";
}
if($getPage=="tanda"){
    include "../page/menu/menu_surat/surat/tanda.php";
}
if($getPage=="ctanda"){
    include "../page/menu/menu_surat/surat/ctanda.php";
}
if($getPage=="create_surat"){
    include "../page/menu/menu_surat/surat/create_surat.php";
}
if($getPage=="edit_surat"){
    include "../page/menu/menu_surat/surat/edit_surat.php";
}

if($getPage=="create_catatan"){
    include "../page/menu/menu_surat/surat/create_catatan.php";
}

if($getPage=="create_emailsurat"){
    include "../page/menu/menu_surat/surat/create_emailsurat.php";
}


// PAGE hukum

if($getPage=="hukum"){
    include "../page/menu/menu_surat/hukum/hukum.php";
}
if($getPage=="create_hkm"){
    include "../page/menu/menu_surat/hukum/create_hkm.php";
}
if($getPage=="edit_hkm"){
    include "../page/menu/menu_surat/hukum/edit_hkm.php";
}

// PAGE PUBLIKASI

if($getPage=="pub"){
    include "../page/menu/menu_surat/publikasi/pub.php";
}
if($getPage=="create_pub"){
    include "../page/menu/menu_surat/publikasi/create_pub.php";
}
if($getPage=="edit_pub"){
    include "../page/menu/menu_surat/publikasi/edit_pub.php";
}
if($getPage=="create_emailpub"){
    include "../page/menu/menu_surat/publikasi/create_emailpub.php";
}

// PAGE TINDAK LANJUT

if($getPage=="tindak"){
    include "../page/menu/menu_surat/tindak_lanjut/tindak.php";
}
if($getPage=="create"){
    include "../page/menu/menu_surat/tindak_lanjut/create.php";
}
if($getPage=="edit_tindak"){
    include "../page/menu/menu_surat/tindak_lanjut/edit_tindak.php";
}

// PAGE PSDIREKSI

if($getPage=="pdir"){
    include "../page/menu/menu_corp/psdir/pdir.php";
}if($getPage=="cpdir"){
    include "../page/menu/menu_corp/psdir/cpdir.php";
}if($getPage=="edir"){
    include "../page/menu/menu_corp/psdir/edir.php";
}


// PAGE PS

if($getPage=="ps"){
    include "../page/menu/menu_corp/ps/ps.php";
}if($getPage=="create_ps"){
    include "../page/menu/menu_corp/ps/create_ps.php";
}
if($getPage=="edit_ps"){
    include "../page/menu/menu_corp/ps/edit_ps.php";
}
if($getPage=="pswm"){
    include "../page/menu/menu_corp/ps/pswm.php";
}
if($getPage=="create_pswm"){
    include "../page/menu/menu_corp/ps/create_pswm.php";
}
if($getPage=="edit_pswm"){
    include "../page/menu/menu_corp/ps/edit_pswm.php";
}

// PAGE Pengurus

if($getPage=="peng"){
    include "../page/menu/menu_corp/pengurus/peng.php";
}
if($getPage=="cpeng"){
    include "../page/menu/menu_corp/pengurus/cpeng.php";
}
if($getPage=="epeng"){
    include "../page/menu/menu_corp/pengurus/epeng.php";
}
if($getPage=="peng_kel"){
    include "../page/menu/menu_corp/pengurus/peng_kel.php";
}
if($getPage=="peng_hub"){
    include "../page/menu/menu_corp/pengurus/peng_hub.php";
}

// PAGE PENGURUS EKSEKUTIF

if($getPage=="pe"){
    include "../page/menu/menu_corp/pe/pe.php";
}
if($getPage=="create_pe"){
    include "../page/menu/menu_corp/pe/create_pe.php";
}
if($getPage=="epe"){
    include "../page/menu/menu_corp/pe/epe.php";
}

// PAGE SK INTERN

if($getPage=="sk"){
    include "../page/menu/menu_intern/sk/sk.php";
}
if($getPage=="csk"){
    include "../page/menu/menu_intern/sk/csk.php";
}
if($getPage=="csk1"){
    include "../page/menu/menu_intern/sk/csk1.php";
}
if($getPage=="csk2"){
    include "../page/menu/menu_intern/sk/csk2.php";
}
if($getPage=="esk"){
    include "../page/menu/menu_intern/sk/esk.php";
}
if($getPage=="create_emailsk"){
    include "../page/menu/menu_intern/sk/create_emailsk.php";
}

// PAGE SE INTERN

if($getPage=="se"){
    include "../page/menu/menu_intern/se/se.php";
}
if($getPage=="cse"){
    include "../page/menu/menu_intern/se/cse.php";
}
if($getPage=="cse1"){
    include "../page/menu/menu_intern/se/cse1.php";
}
if($getPage=="cse2"){
    include "../page/menu/menu_intern/se/cse2.php";
}
if($getPage=="ese"){
    include "../page/menu/menu_intern/se/ese.php";
}
if($getPage=="get_nose"){
    include "../page/menu/menu_intern/se/get_nose.php";
}
if($getPage=="create_emailse"){
    include "../page/menu/menu_intern/se/create_emailse.php";
}

// PAGE MEMO INTERN

if($getPage=="memo"){
    include "../page/menu/menu_intern/memo/memo.php";
}
if($getPage=="cmem"){
    include "../page/menu/menu_intern/memo/cmem.php";
}
if($getPage=="cmem1"){
    include "../page/menu/menu_intern/memo/cmem1.php";
}
if($getPage=="cmem2"){
    include "../page/menu/menu_intern/memo/cmem2.php";
}
if($getPage=="emem"){
    include "../page/menu/menu_intern/memo/emem.php";
}
if($getPage=="get_nomem"){
    include "../page/menu/menu_intern/memo/get_nomem.php";
}
if($getPage=="create_emailmemo"){
    include "../page/menu/menu_intern/memo/create_emailmemo.php";
}


// PAGE NOTULEN

if($getPage=="notulen"){
    include "../page/menu/menu_notulen/notulen/notulen.php";
}
if($getPage=="notulen_dir"){
    include "../page/menu/menu_notulen/notulen/notulen_dir.php";
}
if($getPage=="not_has"){
    include "../page/menu/menu_notulen/notulen/not_has.php";
}
if($getPage=="absen"){
    include "../page/menu/menu_notulen/notulen/absen.php";
}
if($getPage=="page_absen"){
    include "../page/menu/menu_notulen/notulen/page_absen.php";
}
if($getPage=="absen2"){
    include "../page/menu/menu_notulen/notulen/absen2.php";
}
if($getPage=="try"){
    include "../page/menu/menu_notulen/notulen/try.php";
}

if($getPage=="not_dir"){
    include "../page/menu/menu_notulen/notulen_direksi/not_dir.php";
}
if($getPage=="cnotdir"){
    include "../page/menu/menu_notulen/notulen_direksi/cnotdir.php";
}
if($getPage=="edirnot"){
    include "../page/menu/menu_notulen/notulen_direksi/edirnot.php";
}

if($getPage=="not_dekom"){
    include "../page/menu/menu_notulen/notulen_dekom/not_dekom.php";
}
if($getPage=="cnot"){
    include "../page/menu/menu_notulen/notulen_dekom/cnot.php";
}
if($getPage=="edekom"){
    include "../page/menu/menu_notulen/notulen_dekom/edekom.php";
}

// NOTULEN DEWAN KOMISARIS
if($getPage=="not_haskom"){
    include "../page/menu/menu_notulen/not_hasil/not_haskom.php";
}
if($getPage=="cnothas"){
    include "../page/menu/menu_notulen/not_hasil/cnothas.php";
}
if($getPage=="create_emailhas"){
    include "../page/menu/menu_notulen/not_hasil/create_emailhas.php";
}


// PAGE SIAK

if($getPage=="siak"){
    include "../page/menu/menu_siak/siak.php";
}
if($getPage=="siak2"){
    include "../page/menu/menu_siak/siak2.php";
}
if($getPage=="create_siak"){
    include "../page/menu/menu_siak/create_siak.php";
}
if($getPage=="edit_surat"){
    include "../page/menu/menu_siak/edit_siak.php";
}



// PAGE SIAK

if($getPage=="umum"){
    include "../page/menu/menu_umum/umum.php";
}
if($getPage=="umum2"){
    include "../page/menu/menu_umum/umum2.php";
}
if($getPage=="cumum"){
    include "../page/menu/menu_umum/cumum.php";
}
if($getPage=="edit_umum"){
    include "../page/menu/menu_siak/edit_umum.php";
}

// PAGE SIAK

if($getPage=="user"){
    include "../page/menu/menu_user/user.php";
}
if($getPage=="cuser"){
    include "../page/menu/menu_user/cuser.php";
}


if($getPage=="user2"){
    include "../page/menu/menu_user2/user2.php";
}
if($getPage=="cuser"){
    include "../page/menu/menu_user2/cuser2.php";
}

if(@$_GET['sekar']=="page_absen"){
    include "../sekar/page_absen.php";
}


?>