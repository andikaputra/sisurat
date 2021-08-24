<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<?php
	$tampil_nik = "SELECT * FROM data_user NATURAL JOIN data_pemohon WHERE nik=$_SESSION[nik]";
	$query = mysqli_query($konek,$tampil_nik);
	$data = mysqli_fetch_array($query,MYSQLI_BOTH);
	$nik = $data['nik'];
	$nama = $data['nama'];
	// $bedadata = $data['bedadata'];
	// $ktrbedadata = $data['ktrbedadata'];
?>
<div class="page-inner">
					<div class="row">
						<div class="col-md-12">	
						<form method="POST" enctype="multipart/form-data">
							<div class="card">
								<div class="card-header">
									<div class="card-title">FORM TAMBAH REQUEST SURAT KETERANGAN BEDA DATA</div>
								</div>
								<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<label>NIK</label>
													<input type="text" name="keterangan" class="form-control" value="<?= $nik.' - '.$nama;?>" readonly>
												</div>
												<div class="form-group">
													<input type="hidden" name="nik" class="form-control" value="<?= $nik;?>" readonly>
												</div>
												<div class="form-group">
													<label>Data yang Bermasalah</label>
													<select name="databermasalah" class="form-control">
														<option  value="">Pilih Data yang Berbeda</option>
														<option  value='nama'>Nama</option>
														<option  value='tempat/tanggal lahir'>Tempat/Tanggal Lahir</option>
														<option  value='alamat'>Alamat</option>
														<option  value='nik ktp'>NIK KTP</option>
														<option  value='agama'>Agama</option>
													</select>
												</div>
												<div class="form-group">
													<label>Masukkan Data yang Salah</label>
													<input type="text" name="datasalahinput" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Data Salah</label>
													<select name="datasalah" class="form-control">
														<option  value="">Pilih Data yang Salah</option>
														<option  value='data ktp'>DATA KTP</option>
														<option  value='data ktp lama'>DATA KTP LAMA</option>
														<option  value='data ktp baru'>DATA KTP BARU</option>
														<option  value='data kk'>DATA KK</option>
														<option  value='data akta'>DATA AKTA KELAHIRAN</option>
														<option  value='data ijazah'>DATA IJAZAH</option>
														<option  value='data bpum'>DATA BPUM</option>
														<option  value='data sertifikat'>DATA SERTIFIKAT</option>
														<option  value='data shm'>DATA SERTIFIKAT HAK MILIK</option>
														<option  value='data buku tabungan'>DATA BUKU TABUNGAN</option>
													</select>
												</div>
												<div class="form-group">
													<label>Keterangan Data Salah</label>
													<input type="text" name="ktrdatasalah" class="form-control" size="37" placeholder="Boleh Di Kosongkan" >
												</div>

												<div class="form-group">
													<label>Data Rujukan yang Benar</label>
													<select name="databenar" class="form-control">
														<option  value="">Pilih Data Rujukan yang Benar</option>
														<option  value='data ktp'>DATA KTP</option>
														<option  value='data ktp lama'>DATA KTP LAMA</option>
														<option  value='data ktp baru'>DATA KTP BARU</option>
														<option  value='data kk'>DATA KK</option>
														<option  value='data akta kelahiran'>DATA AKTA KELAHIRAN</option>
														<option  value='data ijazah'>DATA IJAZAH</option>
													</select>
												</div>
												<div class="form-group">
													<label>Inputkan Data yang Benar</label>
													<input type="text" name="databenarinput" class="form-control" size="37" required>
												</div>
											</div>

											<div class="col-md-6 col-lg-6">		
												<div class="form-group">
													<label>Scan KTP</label>
													<input type="file" name="ktp" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Scan KK</label>
													<input type="file" name="kk" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Scan Berkas Data yang Berbeda</label>
													<input type="file" name="berkasbeda" class="form-control" size="37" required>
												</div>
											</div>
									</div>
								</div>
								<div class="card-action">
									<button name="kirim" class="btn btn-success">Kirim</button>
									<a href="?halaman=beranda" class="btn btn-default">Batal</a>
								</div>
							</div>
										<div class="card">
											<br>
											<br>

											<p style="color:red; text-indent: 45px;"><b>KETERANGAN</b></p>
												<ul>
													<li>Contoh Format Penulisan Kolom "Keterangan Data Salah" : </li>
													<li>Untuk Data KTP, DATA KTP LAMA, DATA KTP BARU, DATA KK, DATA IJAZAH, DATA BPUM "BOLEH DIKOSONGKAN"</li>
													<li>Untuk Data Sertifikat Masukkan Nomor Sertifikat. Contoh : NO. 014/BL. TG/AK.204/SPB/1.XII/2021</li>
													<li>Untuk Data Sertifikat Hak Milik Masukkan Nomor Sertifikat Hak Milik (SHM). Contoh : NO. 9270</li>
													<li>Untuk Data Buku Tabungan Masukkan Nama Bank & Nomor Rekening. Contoh : BANK BRI, NO REK : 4325-01-019765-34-2</li>
												</ul>
											<p style="color:red; text-indent: 45px;"><b>CATATAN !!!</b></p>
												<ul>
													<li><b>GUNAKAN HURUF KAPITAL UNTUK PENGISIAN KETERANGAN</b></li>
													<li><b>PASTIKAN DATA YANG DI INPUTKAN PADA KOLOM "KETERANGAN DATA YANG BERBEDA" TIDAK ADA YANG SALAH KETIK/TYPO</b></li>
												</ul>
											
										</div>
						</div>
						</form>
					</div>
</div>

<?php
if(isset($_POST['kirim'])){
		$nik = $_POST['nik'];
		$file_databermasalah = $_POST['databermasalah'];
		$file_datasalahinput = $_POST['datasalahinput'];
		$file_datasalah = $_POST['datasalah'];
		$file_ktrdatasalah = $_POST['ktrdatasalah'];
		$file_databenarinput = $_POST['databenarinput'];
		$file_databenar = $_POST['databenar'];
		

		$nama_ktp = isset($_FILES['ktp']);
		$file_ktp = $_POST['nik']."_".".jpg";
		$nama_kk = isset($_FILE['kk']);
    	$file_kk = $_POST['nik']."_".".jpg";
    	$nama_berkasbeda = isset($_FILES['berkasbeda']);
    	$file_berkasbeda = $_POST['nik']."_".".jpg";
	$sql = "INSERT INTO data_request_skbd (nik,databermasalah,datasalahinput,datasalah,ktrdatasalah,databenarinput,databenar,scan_ktp,scan_kk,berkasbeda) VALUES ('$nik','$file_databermasalah','$file_datasalahinput','$file_datasalah','$file_ktrdatasalah','$file_databenarinput','$file_databenar','$file_ktp','$file_kk','$file_berkasbeda')";
	
	$query = mysqli_query($konek,$sql) or die (mysqli_error());

	if($query){
		copy($_FILES['ktp']['tmp_name'],"../dataFoto/scan_ktp/".$file_ktp);
		copy($_FILES['kk']['tmp_name'],"../dataFoto/scan_kk/".$file_kk);
		copy($_FILES['berkasbeda']['tmp_name'],"../dataFoto/scan_berkasbeda/".$file_berkasbeda);
		echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil', 'success');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	  }else{
		echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal', 'error');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=request_skbd">';
	  }
}
	
?>