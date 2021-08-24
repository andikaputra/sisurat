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
	$agama = $data['agama'];

?>
<div class="page-inner">
					<div class="row">
						<div class="col-md-12">	
						<form method="POST" enctype="multipart/form-data">
							<div class="card">
								<div class="card-header">
									<div class="card-title">FORM SURAT KETERANGAN KEMATIAN</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
													<label>NIK & NAMA YANG MENYATAKAN</label>
													<input type="text" name="keterangan" class="form-control" value="<?= $nik.'-'.$nama;?>" readonly>
												</div>
												<div class="form-group">
													<input type="hidden" name="nik" class="form-control" value="<?= $nik;?>" readonly>
												</div>
												<div></div>
												<div></div>
												<label><b>DATA JENAZAH</b></label>
												<div class="form-group">
													<label>Nama Lengkap Jenazah</label>
													<input type="text" name="namajenazah" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>NIK Jenazah</label>
													<input type="text" name="nikjenazah" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Tempat Lahir Jenazah</label>
													<input type="text" name="tempatlahirjenazah" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Tanggal Lahir Jenazah</label>
													<input type="date" name="tgllahirjenazah" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Alamat Jenazah</label>
													<input type="text" name="alamatjenazah" class="form-control" size="37" required>
												</div>
												<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<label>Agama Jenazah</label>
													<select name="agamajenazah" class="form-control">
														<option  value="">Pilih Agama Jenazah</option>
														<option  value='Islam'>Islam</option>
														<option  value='Kristen'>Katolik</option>
														<option  value='Kristen'>Kristen</option>
														<option  value='Hindu'>Hindu</option>
														<option  value='Budha'>Budha</option>
													</select>
												</div>
												<div class="form-group">
													<label>Tanggal Meninggal Jenazah</label>
													<input type="date" name="tglmeninggal" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Keperluan</label>
													<input type="text" name="keperluan" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Scan KTP Jenazah</label>
													<input type="file" name="ktp" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Scan KK Jenazah</label>
													<input type="file" name="kk" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Scan Kematian Rumah Sakit</label>
													<input type="file" name="rumahsakit" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Scan KTP Ahli Waris</label>
													<input type="file" name="ahliwaris" class="form-control" size="37" required>
												</div>
											</div>
										</div>

											
											<div class="col-md-6 col-lg-6">	
											<label><b>DATA SAKSI</b></label>	
												<div class="form-group">
													<label><b>Scan KTP Saksi 1</b></label>
													<input type="file" name="ktp1" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Nama Saksi 1</label>
													<input type="text" name="nama1" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>NIK1</label>
													<input type="text" name="nik1" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Tempat Lahir Saksi 1</label>
													<input type="text" name="tmplhr1" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Tanggal Lahir Saksi 1</label>
													<input type="date" name="tgllhr1" class="form-control" size="37" required>
												</div>

												<div class="form-group">
													<label><b>Scan KTP Saksi 2</b></label>
													<input type="file" name="ktp2" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Nama Saksi 2</label>
													<input type="text" name="nama2" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>NIK2</label>
													<input type="text" name="nik2" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Tempat Lahir Saksi 2</label>
													<input type="text" name="tmplhr2" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Tanggal Lahir Saksi 2</label>
													<input type="date" name="tgllhr2" class="form-control" size="37" required>		
												</div>
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

		$namajenazah = $_POST['namajenazah'];
		$nikjenazah = $_POST['nikjenazah'];
		$tempatlahirjenazah = $_POST['tempatlahirjenazah'];
		$tgllahirjenazah = $_POST['tgllahirjenazah'];
		$alamatjenazah = $_POST['alamatjenazah'];
		$agamajenazah = $_POST['agamajenazah'];
		$tglmeninggal = $_POST['tglmeninggal'];

		$nama1 = $_POST['nama1'];
		$nik1 = $_POST['nik1'];
		$tmplhr1 = $_POST['tmplhr1'];
		$tgllhr1 = $_POST['tgllhr1'];

		$nama2 = $_POST['nama2'];
		$nik2 = $_POST['nik2'];
		$tmplhr2 = $_POST['tmplhr2'];
		$tgllhr2 = $_POST['tgllhr2'];

		$keperluan = $_POST['keperluan'];

		$nama_ktp = isset($_FILES['ktp']);
		$file_ktp = $_POST['nikjenazah']."_".".jpg";
		$nama_ktp1 = isset($_FILES['ktp1']);
		$file_ktp1 = $_POST['nik1']."_".".jpg";
		$nama_ktp2 = isset($_FILES['ktp2']);
		$file_ktp2 = $_POST['nik2']."_".".jpg";
		$nama_kk = isset($_FILES['kk']);
    	$file_kk = $_POST['nikjenazah']."_".".jpg";
    	$nama_rumahsakit = isset($_FILES['rumahsakit']);
		$file_rumahsakit = $_POST['rumahsakit']."_".".jpg";
		$nama_ahliwaris = isset($_FILES['ahliwaris']);
		$file_ahliwaris = $_POST['nik']."_".".jpg";
	$sql = "INSERT INTO data_request_skkm (nik,namajenazah,nikjenazah,tempatlahirjenazah,tgllahirjenazah,alamatjenazah,agamajenazah,tglmeninggal,nama1,nik1,tmplhr1,tgllhr1,nama2,nik2,tmplhr2,tgllhr2,keperluan,scan_ktp,ktp1,ktp2,scan_kk,scan_rumahsakit,scan_ahliwaris) VALUES ('$nik','$namajenazah','$nikjenazah','$tempatlahirjenazah','$tgllahirjenazah','$alamatjenazah','$agamajenazah','$tglmeninggal','$nama1','$nik1','$tmplhr1','$tgllhr1','$nama2','$nik2','$tmplhr2','$tgllhr2','$keperluan','$file_ktp','$file_ktp1','$file_ktp2','$file_kk','$file_rumahsakit','$file_ahliwaris')";
	$query = mysqli_query($konek,$sql) or die (mysqli_error());
	
	if($query){
		copy($_FILES['ktp']['tmp_name'],"../dataFoto/scan_ktp/".$file_ktp);
		copy($_FILES['ktp1']['tmp_name'],"../dataFoto/scan_ktp1/".$file_ktp1);
		copy($_FILES['ktp2']['tmp_name'],"../dataFoto/scan_ktp2/".$file_ktp2);
		copy($_FILES['kk']['tmp_name'],"../dataFoto/scan_kk/".$file_kk);
		copy($_FILES['rumahsakit']['tmp_name'],"../dataFoto/scan_rumahsakit/".$file_rumahsakit);
		copy($_FILES['ahliwaris']['tmp_name'],"../dataFoto/scan_ahliwaris/".$file_ahliwaris);
		echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil', 'success');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	  }else{
		echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal', 'error');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=request_skkm">';
	  }
}
	
?>