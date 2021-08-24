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
	$lingkungan = $data['lingkungan'];
?>
<div class="page-inner">
					<div class="row">
						<div class="col-md-12">	
						<form method="POST" enctype="multipart/form-data">
							<div class="card">
								<div class="card-header">
									<div class="card-title">FORM TAMBAH REQUEST SURAT KETERANGAN DOMISILI ORANG ASING</div>
								</div>
								<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<label>Data Sponsor</label>
													<input type="text" name="keterangan" class="form-control" value="<?= $nik.' - '.$nama;?>" readonly>
												</div>
												<div class="form-group">
													<input type="text" name="nik" class="form-control" value="<?= $nik;?>" readonly>
												</div>
												<div class="form-group">
													<input type="hidden" name="lingkungan" class="form-control" value="<?= $lingkungan;?>" readonly>
												</div>
											</div>	
											<div class="col-md-6 col-lg-6">	

												<div class="form-group">
													<label>Nama Orang Asing</label>
													<input type="text" name="norangasing" class="form-control" size="37" required>
												</div>

												<div class="form-group">
													<label>Tempat Lahir</label>
													<input type="text" name="tmpl" class="form-control" size="37" required>
												</div>

												<div class="form-group">
													<label>Tanggal Lahir</label>
													<input type="date" name="tgllahir" class="form-control" size="37" required>
												</div>

												<div class="form-group">
													<label>Pekerjaan</label>
													<input type="text" name="kerja" class="form-control" size="37" required>
												</div>

												<div class="form-group">
													<label>Kebangsaan</label>
													<input type="text" name="bangsa" class="form-control" size="37" required>
												</div>

												<div class="form-group">
													<label>Tempat Tinggal</label>
													<input type="text" name="tinggal" class="form-control" size="37" required>
												</div>

												<div class="form-group">
													<label>Keperluan</label>
													<input type="text" name="keperluan" class="form-control" size="37" required>
												</div>

												<div class="form-group">
													<label>No Paspor</label>
													<input type="text" name="nopaspor" class="form-control" size="37" required>
												</div>
												
												<!--<div class="form-group">
													<label>Scan Foto Copy Passport</label>
													<input type="file" name="paspor" class="form-control" size="37" required>
												</div> -->
														
												<div class="form-group">
													<label>Masa Berlaku Paspor</label>
													<input type="date" name="masapaspor" class="form-control form-control-lg"  required>
												</div>

												<div class="form-group">
													<label>No KITAS</label>
													<input type="text" name="nokitas" class="form-control" size="37" required>
												</div>

												<!--<div class="form-group">
													<label>Scan Foto Copy KITAS</label>
													<input type="file" name="kitas" class="form-control" size="37" required>
												</div>-->
	
												<div class="form-group">
													<label>Masa Berlaku KITAS</label>
													<input type="date" name="masakitas" class="form-control form-control-lg"  required>
												</div>

												<!--<div class="form-group">
													<label>Nama Sponsor</label>
													<input type="text" name="nsponsor" class="form-control" size="37" required>
												</div>-->

												<!--<div class="form-group">
													<label>Scan Foto Copy Sponsor (wajib KTP Kuta Selatan)</label>
													<input type="file" name="sponsor" class="form-control" size="37" required>
												</div>-->

												<!--<div class="form-group">
													<label>No Telp Sponsor</label>
													<input type="text" name="tlpsponsor" class="form-control" size="37" required>
												</div>-->

												<!--<div class="form-group">
													<label>Alamat Sponsor</label>
													<input type="text" name="alamat_sponsor" class="form-control" size="37" required>
												</div>-->

												<div class="form-group">
													<label>Scan Surat Laporan Kepolisian</label>
													<input type="file" name="kepolisian" class="form-control" size="37" required>
												</div>
											</div>
									</div>
								</div>
								<div class="card-action">
									<button name="kirim" class="btn btn-success">Kirim</button>
									<a href="?halaman=beranda" class="btn btn-default">Batal</a>
								</div>
							</div>
						</div>
						</form>
					</div>
</div>

<?php
if(isset($_POST['kirim'])){
	$nik = $_POST['nik'];
		$masapaspor = $_POST['masapaspor'];
		$nopaspor = $_POST['nopaspor'];
    	$masakitas = $_POST['masakitas'];
    	$nokitas = $_POST['nokitas'];
    	$norangasing = $_POST['norangasing'];
    	$tmpl = $_POST['tmpl'];
    	$tgllahir = $_POST['tgllahir'];
    	$kerja = $_POST['kerja'];
    	$bangsa = $_POST['bangsa'];
    	$tinggal = $_POST['tinggal'];
    	$keperluan = $_POST['keperluan'];
		$nama_kepolisian = isset($_FILES['kepolisian']);
    	$file_kepolisian = $_POST['nik']."_".".jpg";
	$sql = "INSERT INTO data_request_skdoa (nik,masapaspor,nopaspor,masakitas,nokitas,norangasing,tmpl,tgllahir,kerja,bangsa,tinggal,keperluan,scan_kepolisian) 
	VALUES ('$nik','$masapaspor','$nopaspor','$masakitas','$nokitas','$norangasing','$tmpl','$tgllahir','$kerja','$bangsa','$tinggal','$keperluan','$file_kepolisian')";
	$query = mysqli_query($konek,$sql) or die (mysqli_error());

	if($query){
		copy($_FILES['paspor']['tmp_name'],"../dataFoto/scan_paspor/".$file_paspor);
		copy($_FILES['kitas']['tmp_name'],"../dataFoto/scan_kitas/".$file_kitas);
		copy($_FILES['sponsor']['tmp_name'],"../dataFoto/scan_sponsor/".$file_sponsor);
		copy($_FILES['kepolisian']['tmp_name'],"../dataFoto/scan_kepolisian/".$file_kepolisian);
		echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil', 'success');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	  }else{
		echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal', 'error');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=request_skdoa">';
	  }
}
	
?>