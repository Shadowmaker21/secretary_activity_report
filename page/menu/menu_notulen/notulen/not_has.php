<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid" width="100%">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hasil Notulen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">SIAK</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Hasil Notulen</h3>
                <br>
              </div>
              <!-- /.card-header -->
              <div class="card-body"></div>
<!DOCTYPE html>
<html>

<head>
	<title>An HTML standard template</title>
	<meta charset="utf-8"  />
</head>

<body>
    <table border="1"  cellpadding="1" cellspacing="1" style="width:17cm; margin-left: 2cm">
        <tbody>
        <?php
        	$no = 0;
        	$query = mysqli_query($koneksi1, "SELECT * FROM not_dir");
        	while($row = mysqli_fetch_assoc($query)){
        	$no++;
			?>
            <tr>
                <td style="text-align:center"><strong>PT. BPR WELERI MAKMUR</strong></td>
                <td style="text-align:center">
                <p><strong>FORMULIR</strong></p>
    
                <p><strong>NOTULEN MEETING</strong></p>
                </td>
                <td>
                <table border="1" cellpadding="1" cellspacing="1" style="width:200px">
                    <tbody>
                        <tr>
                            <td>No. Dok&nbsp; &nbsp;:</td>
                        </tr>
                        <tr>
                            <td>Revisi&nbsp; &nbsp; &nbsp; :</td>
                        </tr>
                        <tr>
                            <td>Halaman&nbsp;:</td>
                        </tr>
                    </tbody>
                </table>
                </td>
            </tr>
        </tbody>
    </table>
    
    <p style="width:17cm; margin-left: 2cm">Hari / Tanggal&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;<?php echo $row['hari']; ?> / <?php echo $row['tanggal']; ?><br />
    Tempat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;<?php echo $row['tempat']; ?><br />
    Jam&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;09:00 WIB &ndash; 13:15 WIB<br />
    Peserta&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp; &nbsp;&nbsp; 1. &nbsp; &nbsp;Direksi<br />
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2.&nbsp;&nbsp; &nbsp;Kepala PPKB<br />
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;3.&nbsp;&nbsp; &nbsp;Kepala Kantor Pusat dan Kepala Cabang<br />
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;4.&nbsp;&nbsp; &nbsp;Kepala Bisnis<br />
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;5.&nbsp;&nbsp; &nbsp;Kepala TI<br />
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;6.&nbsp;&nbsp; &nbsp;Kepala Pengembangan Bisnis<br />
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;7.&nbsp;&nbsp; &nbsp;Kepala Human Capital<br />
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;8.&nbsp;&nbsp; &nbsp;Wakil Kepala &nbsp;SIAK<br />
    Agenda Rapat&nbsp; &nbsp; &nbsp; &nbsp;:&nbsp;&nbsp; &nbsp;Meeting Bisnis</p>
    
    <table border="1" cellpadding="1" cellspacing="1" style="width:17cm; margin-left: 2cm">
        <tbody>
            <tr>
                <td>no</td>
                <td style="text-align:center">Uraian</td>
            </tr>
            <tr>
                <td>1.</td>
                <td>
                <p>Sosialisasi Ketentuan Internal<br />
                Direktur Kepatuhan<br />
                A.&nbsp;&nbsp; &nbsp;Memo Intern nomor 020 tahun 2022 perihal Kebijakan Prosedur Permohonan Kredit<br />
                1)&nbsp;&nbsp; &nbsp;Mengarahkan kepada calon debitur/debitur untuk melakukan permohonan kredit secara digital/online<br />
                2)&nbsp;&nbsp; &nbsp;Memastikan bahwa Aplikasi Permohonan Kredit dan Riplay terisi lengkap dan benar serta ditandatangani oleh calon debitur/debitur.</p>
    
                <p>B.&nbsp;&nbsp; &nbsp;Memo Intern nomor 023 tahun 2022 perihal Kebijakan Pemeriksaan Dokumen Kredit<br />
                1)&nbsp;&nbsp; &nbsp;Pemeriksaan dokumen kredit setelah akad, oleh: Ka.Ops/SA, Pinca, Corporate Legal, dan IC.<br />
                2)&nbsp;&nbsp; &nbsp;Corporate Legal memeriksa dokumen kredit untuk plafon paling sedikit Rp150 juta.<br />
                3)&nbsp;&nbsp; &nbsp;IC memeriksa semua dokumen realisasi kredit secara harian.</p>
    
                <p>C.&nbsp;&nbsp; &nbsp;Memo Intern nomor 024 tahun 2022 perihal Kebijakan Wajib Meeting Koordinasi Bulanan<br />
                1)&nbsp;&nbsp; &nbsp;Wajib meeting koordinasi minimal sebulan sekali pada setiap kantor cabang.<br />
                2)&nbsp;&nbsp; &nbsp;Meeting koordinasi terdiri dari:<br />
                a)&nbsp;&nbsp; &nbsp;Meeting Bisnis;<br />
                b)&nbsp;&nbsp; &nbsp;Meeting Operasional.<br />
                3)&nbsp;&nbsp; &nbsp;Wajib ada notulensi meeting.</p>
    
                <p>Direktur Utama<br />
                4)&nbsp;&nbsp; &nbsp;Jadwal meeting koordinasi meeting bisnis dan koordinasi semua cabang dapat diinformasikan kepada Direktur Utama melalui Whastapp.<br />
                5)&nbsp;&nbsp; &nbsp;Meeting koordinasi bertujuan untuk membangun budaya koordinasi di level cabang yang solid dan menyamakan persepsi seluruh bidang dan unit kerja.<br />
                6)&nbsp;&nbsp; &nbsp;Meeting koordinasi Bisnis dan Operasional Cabang untuk awal Direktur Utama atau Direktur Operasional dapat mengikuti terlebih dahulu.<br />
                7)&nbsp;&nbsp; &nbsp;Pertumbuhan Bisnis BPR WM sudah cukup baik, akan tetapi masih menjadi perhatian adalah NPL yang masih tinggi perlu tindakan serius untuk mencegah kredit bermasalah, karena itu pentingnya meeting koordinasi bisnis dengan monitoring.<br />
                8)&nbsp;&nbsp; &nbsp;Tujuan meeting koordinasi bidang bisnis dan monitoring adalah memberikan masukan apabila ada kemungkinan kesalahan analisa dan menambah ilmu baik untuk Analis maupun Monitoring.<br />
                9)&nbsp;&nbsp; &nbsp;Meeting koordinasi bidang bisnis dan monitoring bulan Juli 2022 seluruh Cabang Direktur Utama akan menghadiri dan menunggu undangannya.</p>
    
                <p>D.&nbsp;&nbsp; &nbsp;SK Direksi nomor 094 tahun 2022 perihal Perubahan Rencana Bisnis Tahun 2022, perubahan pada Rencana Pelaksanaan kegiatan usaha baru, yaitu:<br />
                1)&nbsp;&nbsp; &nbsp;Pengembangan Fitur dan layanan tabungan (penggunaan PIN dan pendaftaran user klikwm.com secara online).<br />
                2)&nbsp;&nbsp; &nbsp; Customer Service Online (CSO)</p>
    
                <p>E.&nbsp;&nbsp; &nbsp;Memo Intern nomor 025 tahun 2022 perihal Kebijakan Biaya Administrasi Jasa Layanan Bank.<br />
                1)&nbsp;&nbsp; &nbsp;Perubahan dikarenakan adanya penambahan jenis layanan transfer bank yaitu BI Fast.<br />
                2)&nbsp;&nbsp; &nbsp;Biaya lebih murah akan tetapi belum semua bank bekerja sama menggunakan BI Fast.<br />
                Direktur Utama<br />
                3)&nbsp;&nbsp; &nbsp;Kebijakan umum pengenaan biaya transfer bank sebesar Rp. 5 ribu dengan jenis sebagai berikut:<br />
                a)&nbsp;&nbsp; &nbsp;&le; Rp. 250 juta menggunakan layanan BI Fast.<br />
                b)&nbsp;&nbsp; &nbsp;&gt; Rp. 250 juta s.d &lt; Rp. 500 juta menggunakan layanan LLG.<br />
                c)&nbsp;&nbsp; &nbsp;&ge; Rp. 500 juta menggunakan layanan RTGS.<br />
                4)&nbsp;&nbsp; &nbsp;Untuk nominal &gt; Rp. 250 juta s.d &lt; Rp. 500 juta, apabila nasabah menghendaki permintaan khusus transfer segera maka menggunakan layanan RTGS dengan dibebankan biaya sebesar Rp. 25 ribu.</p>
    
                <p>F.&nbsp;&nbsp; &nbsp;Memo Intern nomor 027 tahun 2022 perihal Pakta Integritas<br />
                Pada era digital, peran TI sangat penting dan strategis, sehingga perlu komitmen berupa Pakta Integritas bagi seluruh pegawai unit kerja TI.</p>
    
                <p>G.&nbsp;&nbsp; &nbsp;Memo Intern nomor 026 tahun 2022 perihal Kebijakan Pencairan Kredit Jelang Akhir Bulan<br />
                1)&nbsp;&nbsp; &nbsp;Berlaku 2 (dua) hari kerja (tgl 27-28), pencairan kredit dapat dilakukan meski hasil cek sertipikat dari BPN belum keluar.<br />
                2)&nbsp;&nbsp; &nbsp;Hal-hal yang perlu mendapat perhatian:<br />
                a)&nbsp;&nbsp; &nbsp;ada kesepakatan tertulis;<br />
                b)&nbsp;&nbsp; &nbsp;debitur membayar lunas biaya-biaya notaris dan setoran dana pembuatan rekening tabungan;<br />
                c)&nbsp;&nbsp; &nbsp;saldo tabungan hasil pencairan kredit, wajib diblokir;<br />
                d)&nbsp;&nbsp; &nbsp;tidak termasuk kredit take over dan/atau kredit dengan agunan masih dalam proses jual beli.</p>
    
                <p>Direktur Utama<br />
                3)&nbsp;&nbsp; &nbsp;Usulan Kepala Bisnis Weleri , kebijakan berlaku tidak hanya 2 hari kerja (tgl 27-28) tidak dapat disetujui sehingga apabila ada pencairan kredit sebelum tanggal 27-28 cek sertifikat belum hasil maka tetap memerlukan persetujuan Direksi.</p>
                </td>
            </tr>
            <tr>
                <td>2.</td>
                <td>
                <p>Bidang Operasional<br />
                Direktur Operasional<br />
                A.&nbsp;&nbsp; &nbsp;Struktur Organisasi<br />
                1)&nbsp;&nbsp; &nbsp;Direktur Operasional, mengingat terbitnya ketentuan SOP Layanan Perintah Transfer Dana dan Pemindahbukuan Secara Online Edisi II dimana terdapat fungsi/petugas Customer Service Online (CSO) maka mengusulkan dimasukkan dalam struktur organisasi.<br />
                2)&nbsp;&nbsp; &nbsp;Direktur Utama, agar menjadi catatan Human Capital (HC) untuk &nbsp;CSO akan dimasukkan dalam struktur organisasi kedepan apabila ada perbaikan struktur organisasi.<br />
                &nbsp;<br />
                B.&nbsp;&nbsp; &nbsp;Perbaikan/Perubahan pada CBS<br />
                1)&nbsp;&nbsp; &nbsp;Perhitungan Pelunasan<br />
                a)&nbsp;&nbsp; &nbsp;Sudah disediakan 2 pilihan yaitu versi bank terkait posting pelunasan dan versi nasabah untuk keperluan nasabah, penyelesaian kredit dan lelang.<br />
                b)&nbsp;&nbsp; &nbsp;Perbedaan pada tampilan bunga, yaitu rincian bunga wajib, bunga berjalan dan pinalty ditampilkan pada versi bank, sedangkan versi nasabah yang ditampilkan total bunga seluruhnya.<br />
                c)&nbsp;&nbsp; &nbsp;Analis, Monitoring, Corporate Legal meminta perhitungan pelunasan kepada Customer Service yang versi nasabah.<br />
                2)&nbsp;&nbsp; &nbsp;Tampilan Mutasi Kredit/Aktivitas Pinjaman Untuk Nasabah<br />
                a)&nbsp;&nbsp; &nbsp;Perhitungan denda yang sebelumnya ada sudah tidak ditampilkan karena belum terbayarkan.<br />
                b)&nbsp;&nbsp; &nbsp;Angsuran sudah jatuh tempo yang belum terbayar sudah tidak ditampilkan.<br />
                c)&nbsp;&nbsp; &nbsp;Saat ini tampil hanya denda dan angsuran yang sudah dibayarkan nasabah.<br />
                d)&nbsp;&nbsp; &nbsp;Tunggakan Pokok, Tunggakan Bunga, Denda dan Biaya ditampilkan pada kolom di atas dan di bawah mutasi di bawah sudah tidak muncul. Jadi yang ditampilkan di ruang/lokasi hanya mutasi yang sudah terbayar.</p>
    
                <p>C.&nbsp;&nbsp; &nbsp;Hasil Pemeriksaan Khusus OJK Pusat melalui OJK Semarang perihal kredit bermasalah dan hapus buku yang perlu perbaikan:<br />
                1)&nbsp;&nbsp; &nbsp;Ketentuan kredit Hapus buku wajib kredit yang sudah macet/kolektibilitas 5, apabila di bawah 5 wajib dilakukan adjustment, dengan alur diusulkan dan ditetapkan pada Berita Acara dan ditandatangani oleh Direksi.<br />
                2)&nbsp;&nbsp; &nbsp;Pada usulan adjustment wajib ada penjelasan upaya yang sudah dilakukan dan alasan dilakukan adjustment.<br />
                3)&nbsp;&nbsp; &nbsp;Adjustment menjadi kolektibilitas 5 dilakukan satu bulan sebelum bulan hapus buku, dan dilaporkan pada Labul APOLO bulan itu, pembentukan PPAP harus sudah 100 %.<br />
                4)&nbsp;&nbsp; &nbsp;Dokumentasi penyelesaian kredit bermasalah mulai dari penagihan, telah dilakukan pada program bantu Monitoring Online (MONOL) telah ada tanggal kunjungan dan tindakan akan tetapi belum dilengkapi hasil yang seharusnya perlu dituangkan dan dilengkapi dengan foto bukti kunjungan.<br />
                5)&nbsp;&nbsp; &nbsp;Usulan perbaikan pada MONOL untuk SP, Somasi dan Berkas Lelang dapat dimasukkan pada program bantu MONOL sehingga tidak lagi meminta dokumen dari berbagai pihak.<br />
                6)&nbsp;&nbsp; &nbsp;Perbaikan pada ketentuan hapus buku dimana menambahkan kebijakan kredit hapus buku dengan baki debet Rp. 50 juta ke atas wajib ada memorandum kredit. Memo yang pernah ada sebelumnya berlaku hanya menyebut &nbsp;untuk kredit hapus buku tahun 2013.</p>
    
                <p>Direktur Utama<br />
                7)&nbsp;&nbsp; &nbsp;Putusan kredit hapus buku mulai dari rekomendasi dimasukkan pada MONOL, mulai saat ini semua kredit hapus buku wajib ada memorandumnya melalui MONOL. Baki debet pada MONOL sudah sincronize dengan CBS.<br />
                8)&nbsp;&nbsp; &nbsp;Semua data pada program bantu dibuat real time. Apabila diperlukan untuk upload dilakukan satu kali saja di awal bulan dan setelahnya dapat bermutasi melalui sistem secara real time.<br />
                9)&nbsp;&nbsp; &nbsp;Penambahan Dokumentasi upload foto kunjungan pada MONOL, apabila nasabah berkenan maka dengan swafoto, apabila tidak berkenan bisa candid, apabila tidak bertemu dengan nasabah dapat foto di depan rumah.<br />
                10)&nbsp;&nbsp; &nbsp;Perbaikan MONOL kolom pembayaran debitur dilaporkan secara real time Contoh : tanggal 20 Juni 2022 debitur janji bayar 5 jt dan &nbsp;setor sesuai permintaan bank maka sistem membaca dan tidak ada kunjungan kembali ke nasabah. Namun bila setor akan tetapi kurang dari 5jt maka tetap muncul di daftar kunjungan agar dikunjungi kembali.<br />
                &nbsp;</p>
                </td>
            </tr>
            <tr>
                <td>3.</td>
                <td>
                <p>Bidang Bisnis<br />
                A.&nbsp;&nbsp; &nbsp;Pengajuan online melalui kredit69.com<br />
                1)&nbsp;&nbsp; &nbsp;Usulan Kepala Bisnis Surakarta untuk pengajuan kredit online calon debitur WIC, AO, CMO, SGM &nbsp;tidak memerlukan validasi PIC atau merubah mengganti validasi menjadi Kepala Operasional.<br />
                2)&nbsp;&nbsp; &nbsp;Kepala Pengembangan Bisnis, sudah didiskusikan dengan TI dan Direktur Utama untuk pengajuan kredit online calon debitur WIC, AO, CMO, SGM tidak memerlukan validasi PIC dengan target 22 Juli 2022 selesai.</p>
    
                <p>B.&nbsp;&nbsp; &nbsp;Perbaikan Program Bantu<br />
                Direktur Utama<br />
                1)&nbsp;&nbsp; &nbsp;Feedback perbaikan dapat disampaikan kepada PIC Program.<br />
                2)&nbsp;&nbsp; &nbsp;PIC Program berkoordinasi dengan PIC TI perihal feedback dan menyampaikan tindak lanjut feedback kepada yang mengusulkan dengan menyampaikan target waktu penyelesaian.<br />
                3)&nbsp;&nbsp; &nbsp;Apabila usulan belum direspon maka dapat diemailkan kepada PIC Program dan PIC TI dan Direktur Operasional.<br />
                4)&nbsp;&nbsp; &nbsp;Untuk seluruh PIC Program, data yang diambil data real time.<br />
                5)&nbsp;&nbsp; &nbsp;Kedepan seluruh reporting sudah tidak manual akan dibuat program bantu.<br />
                6)&nbsp;&nbsp; &nbsp;Supervisi wajib menggunakan program bantu sehingga jajarannya juga menggunakan.</p>
    
                <p>C.&nbsp;&nbsp; &nbsp;Benturan Kepentingan Persetujuan Kredit Referensi<br />
                Direktur Utama, apabila Kepala Cabang mendapat referensi pengajuan kredit maka tidak dapat memutuskan kredit tersebut meskipun sesuai dengan batas memutus permohonan kredit akan tetapi tetap ikut merekomendasi. Begitu pula dengan referensi Analis, maka tidak dapat menganalisa Analis yang bersangkutan.</p>
    
                <p>D.&nbsp;&nbsp; &nbsp;Pemutihan Sertifikat dengan hasil terdapat hutang PPh dan BPHTB<br />
                Direktur Utama<br />
                1)&nbsp;&nbsp; &nbsp;Usulan Kepala Bisnis Weleri kredit mikro di bawah Rp. 99 juta dengan jangka waktu Rp. 36 bulan dapat menggunakan sertifikat masih terhutang Pph dan BPHTB, tidak disetujui karena apabila bermasalah kedepan tidak dapat dipasang HT.<br />
                2)&nbsp;&nbsp; &nbsp;Apabila ada Surat Keterangan tidak terhutang Pph dan BPHTB dan benar maka bisa dijadikan agunan.<br />
                3)&nbsp;&nbsp; &nbsp;Pengumpulan data SKMHT cek sertifikat sebelumnya 99 % aman dengan hasil baik sehingga selama tidak APHT, SKMHT cukup dengan cek sertifikat menyusul.</p>
    
                <p>E.&nbsp;&nbsp; &nbsp;Monitoring dan Evaluasi Rapat Kerja Tahun 2022<br />
                Direktur Utama<br />
                1)&nbsp;&nbsp; &nbsp;Kredit<br />
                a)&nbsp;&nbsp; &nbsp;Kepala Kantor Pusat/Kepala Cabang dan Kepala Bisnis dapat menjadi perhatian untuk kantor yang belum mencapai target kredit agar segera melakukan tindakan dalam pencapaian target.<br />
                b)&nbsp;&nbsp; &nbsp;Apabila masih ada yang ditunggu maka tentukan deadline, setelah lewat maka dapat mencari pengganti.<br />
                c)&nbsp;&nbsp; &nbsp;Koordinasi dengan baik oleh seluruh tim cabang.<br />
                d)&nbsp;&nbsp; &nbsp;Perubahan pola kerja dan mindset AO, Kepala Kantor Kas khususnya yang belum mencapai target baik Kantor Kas dan Kantor Cabang agar tumbuh sesuai target.</p>
    
                <p>2)&nbsp;&nbsp; &nbsp;Tabungan<br />
                a)&nbsp;&nbsp; &nbsp;Tumbuhkan budaya Tamasha harus lancar.<br />
                b)&nbsp;&nbsp; &nbsp;Untuk tunggak Tamasha T1-T3 yang masih bisa lancar kembali, Kepala Cabang melihat kembali nominatifnya dan diinformasikan kepada referensi agar segera lancar kembali.<br />
                c)&nbsp;&nbsp; &nbsp;Tabungan Dormant<br />
                (1)&nbsp;&nbsp; &nbsp;Direktur Operasional, CBS yang baru hanya bisa membaca mutasi dari inputan user tidak dapat membaca transaksi otomatis menjadi mutasi, sehingga mutasi auto debet, bunga dan pajak bunga tidak terbaca sebagai mutasi, efeknya sudah mulai muncul debet biaya adm dormant meskipun saldo besar yang digunakan untuk autodebet tabungan berjangka.<br />
                (2)&nbsp;&nbsp; &nbsp;Direktur Utama, dikarenakan sistem belum mengakomodir maka dormant dari mutasi ditiadakan terlebih dahulu sampai dengan ketemu cara yang sesuai.</p>
    
                <p>3)&nbsp;&nbsp; &nbsp;Unit Kerja Human Capital<br />
                Segera diskusikan Job Description manual untuk Kepala Pelayanan yang ditempatkan di Gayamsari bersama Direktur Operasional apabila diperlukan bersama Direktur Utama, sebelum tanggal 18 Juli 2022 harus sudah jadi.</p>
    
                <p>4)&nbsp;&nbsp; &nbsp;Unit Kerja Pengembangan Bisnis<br />
                Diskusikan lebih lanjut untuk menghubungkan Virtual Account (VA) Tabungan Bisnis. Dapat menjadi bahan pertimbahangan 8 digit nomor dengan 2 digit jenis produk untuk Tabungan Makmur dan Tabungan Bisnis.</p>
    
                <p>5)&nbsp;&nbsp; &nbsp;Pembuatan program bantu Monev Rapat Kerja<br />
                a)&nbsp;&nbsp; &nbsp;Report Monitoring dan Evaluasi Rapat Kerja dapat dibuatkan program bantu kedepannya.<br />
                b)&nbsp;&nbsp; &nbsp;Template target dapat dimasukkan dan hasil ambil dari CBS sehingga tinggal menampilkan pada saat Meeting Bisnis.<br />
                c)&nbsp;&nbsp; &nbsp;Masing-masing unit kerja dapat mengisi langsung pada program tersebut sehingga tidak ada lupa atau kesalahan kopi file kembali.<br />
                d)&nbsp;&nbsp; &nbsp;Wakil Kepala SIAK dapat mempersiapkan dan unit kerja TI dapat menjadwalkan kapan dapat dikerjakan.</p>
    
                <p>F.&nbsp;&nbsp; &nbsp;Review Pengajuan Kredit Online melalui kredit69.com<br />
                Kepala Pengembangan Bisnis<br />
                1)&nbsp;&nbsp; &nbsp;Pengajuan kredit online bulan Juli 2022 terdapat 43 pengajuan.<br />
                2)&nbsp;&nbsp; &nbsp;Bulan Juni 2022 cabang yang aktif &nbsp;pengajuan online dari WIC adalah Cabang Surakarta dan sudah memberikan feedback.<br />
                3)&nbsp;&nbsp; &nbsp;Pengajuan kredit online yang terbanyak dari AO.<br />
                4)&nbsp;&nbsp; &nbsp;Strategi branding, mencari micro influencer dan memperbanyak total micro influencer.<br />
                5)&nbsp;&nbsp; &nbsp;Nasabah baru murni online bulan Juni 2022 dapat mencapai 10 akun dengan nominal Rp. 820 juta.</p>
    
                <p>G.&nbsp;&nbsp; &nbsp;Review GP 150 Seri III<br />
                Kepala Pengembangan Bisnis<br />
                1)&nbsp;&nbsp; &nbsp;Hasil GP 150 Seri III<br />
                &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<br />
                &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</p>
    
                <table border="1" cellpadding="1" cellspacing="1" style="width:500px">
                    <tbody>
                        <tr>
                            <td>Kantor</td>
                            <td>Target</td>
                            <td style="text-align:center">Per 30 Juni 2022</td>
                            <td style="text-align:center">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;Per 6 Juli 2022</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><span style="font-family:Calibri, sans-serif"><span style="font-size:13.3333px">Realisasi</span></span></td>
                            <td>% Pencapaian</td>
                            <td><span style="font-family:Calibri,sans-serif"><span style="font-size:13.3333px">Realisasi</span></span></td>
                            <td>% Pencapaian</td>
                        </tr>
                        <tr>
                            <td>Semarang&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</td>
                            <td>Rp. 17,25 m</td>
                            <td>Rp. 5,31 m</td>
                            <td>31%</td>
                            <td>Rp. 5,71 m</td>
                            <td>33%</td>
                        </tr>
                        <tr>
                            <td>Weleri</td>
                            <td>Rp. 9,00 m</td>
                            <td>Rp. 2,24 m&nbsp;</td>
                            <td>25%&nbsp;</td>
                            <td>Rp. 2,40 m&nbsp;</td>
                            <td>27%</td>
                        </tr>
                        <tr>
                            <td>Kudus</td>
                            <td>Rp. 9,00 m</td>
                            <td>Rp. 2,34 m</td>
                            <td>26%&nbsp;</td>
                            <td>Rp. 2,99 m&nbsp;</td>
                            <td>33%</td>
                        </tr>
                        <tr>
                            <td>Surakarta</td>
                            <td>Rp. 9,00 m</td>
                            <td>Rp. 1,02 m</td>
                            <td>12%</td>
                            <td>Rp. 1,02 m</td>
                            <td>11%</td>
                        </tr>
                        <tr>
                            <td>Klaten</td>
                            <td>Rp. 5,25 m</td>
                            <td>Rp. 0,39 m</td>
                            <td>7%</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Sragen</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Tegal</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Pati</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Konsolidasi</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
    
                <p>2)&nbsp;&nbsp; &nbsp;Kantor Pati dan Tegal pada 30 Juni 2022 sudah lebih dari 35 %, tidak menutup kemungkinan untuk kantor lain mengejar.</p>
    
                <p>H.&nbsp;&nbsp; &nbsp;Review Kinerja AO Berdasarkan Analisa Data MEMOL dan CMO<br />
                Kepala Pengembangan Bisnis<br />
                1)&nbsp;&nbsp; &nbsp;Data sudah dishare ke seluruh cabang melalui link dengan akses view only.<br />
                2)&nbsp;&nbsp; &nbsp;Data diambil dari Januari 2022 s.d 15 Juni 2022, addendum kredit dan restruktur dimasukkan dalam data.</p>
    
                <p>Direktur Utama<br />
                3)&nbsp;&nbsp; &nbsp;Data dapat digunakan sebagai menyusun strategi dalam meningkatkan pertumbuhan kredit.<br />
                4)&nbsp;&nbsp; &nbsp;Pertumbuhan kredit dari pengajuan AO yang paling bagus presentasi cair dari Kudus, Semarang, Sragen dan Weleri. Untuk cabang lain masih rendah presentasi cairnya.<br />
                5)&nbsp;&nbsp; &nbsp;Cabang Surakarta, Klaten, Tegal dan Pati presentasi tolak tinggi, memunculkan hipotesis pra survey kurang, update pengetahuan analisa AO yang kurang, marketnya salah.<br />
                6)&nbsp;&nbsp; &nbsp;Menjadi perhatian Kantor Cabang Klaten agar kreditnya tumbuh sesuai dengan target.<br />
                7)&nbsp;&nbsp; &nbsp;Perlunya meningkatkan rata-rata realisasi Rp. 100 juta dan kedepan menjadi Rp. 250 juta.<br />
                8)&nbsp;&nbsp; &nbsp;Komposisi ulang aktif 40 % s.d 45 % ideal, dengan hipotesis AO melakukan maintenance, komposisi ulang lunas maksimum 10 % s.d 20 %. AO baru wajar apabila dipenuhi dengan nasabah baru.<br />
                9)&nbsp;&nbsp; &nbsp;Menjadi perhatian pula untuk AO yang NPL nya tinggi.<br />
                10)&nbsp;&nbsp; &nbsp;Komposisi jenis agunan ideal adalah tanah dan bangunan lebih besar dari kendaraan, karena saat ini fokus pada tanah dan bangunan.</p>
    
                <p>I.&nbsp;&nbsp; &nbsp;Seragam untuk Karyawan Baru<br />
                Direktur Utama<br />
                1)&nbsp;&nbsp; &nbsp;Untuk seragam Senin, Selasa dan Kamis apabila ada sisa dapat diberikan untuk front liner akan tetapi tidak untuk AO baru karena belum teruji lanjut atau tidak maka seragam diberikan saat AO tersebut telah lolos atau sesuai dengan ketentuan.<br />
                2)&nbsp;&nbsp; &nbsp;Untuk seragam promosi dapat diberikan untuk AO baru.<br />
                &nbsp;</p>
                </td>
            </tr>
        </tbody>
    </table>
    
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Semarang,&nbsp;</p>
    
    <p style="width:17cm; margin-left: 2cm">Pemimpin Rapat,&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Notulis,</p>
    
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
    
    <p style="width:17cm; margin-left: 2cm"><?php $kode = 'KERRY THAMRIM'."/".date("d-m-Y")."/".'DIREKTUR UTAMA'."";
        require_once('../assets/phpqrcode/qrlib.php');
        if(empty($id)){
            $id = '';
        }else{
            QRcode::png("$kode","kode".$id.".png","M",4,4);
        }
       
        ?>
        <img src="kode<?php $no ?>.png" alt="">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        <?php $kode = 'FIKRINA AZIZAH'."/".date("d-m-Y")."/".'SEKRETARIS'."";
        require_once('../assets/phpqrcode/qrlib.php');
        if(empty($id)){
            $id = '';
        }else{
            QRcode::png("$kode","kode1".$id.".png","M",4,4);
        }
       
        ?>
    </p>
    
    
    <p style="width:17cm; margin-left: 2cm"><u>KERRY THAMRIM</u>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <u>FIKRINA AZIZAH</u></p>
    
    <p style="width:17cm; margin-left: 2cm">Direktur Utama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Sekretaris</p>
</table>
</body>
</html>
<?php } ?>
			</div>
			</div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->



