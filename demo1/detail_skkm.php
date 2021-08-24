<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<?php
	if(isset($_GET['id_request_skkm'])){
		$id_request_skkm=$_GET['id_request_skkm'];
		$sql = "SELECT * FROM data_request_skkm natural join data_pemohon WHERE id_request_skkm='$id_request_skkm'";
		$query = mysqli_query($konek,$sql);
		$data = mysqli_fetch_array($query,MYSQLI_BOTH);
		$nik = $data['nik'];
		$nama = $data['nama'];

		$nikjenazah =$data['nikjenazah'];
		$namajenazah =$data['namajenazah'];
		$tempatlahirjenazah=$data['tempatlahirjenazah'];
		$tgllahirjenazah =$data['tgllahirjenazah'];
		$alamatjenazah =$data['alamatjenazah'];
		$agamajenazah =$data['agamajenazah'];
		$tglmeninggal =$data['tglmeninggal'];
		$nama1 =$data['nama1'];
		$nik1 =$data['nik1'];
		$tmplhr1 =$data['tmplhr1'];
		$tgllhr1 =$data['tgllhr1'];
		$nama2 =$data['nama2'];
		$nik2 =$data['nik2'];
		$tmplhr2 =$data['tmplhr2'];
		$tgllhr2 =$data['tgllhr2'];
		
		$ktp =$data['scan_ktp'];
		$ktp1 =$data['ktp1'];
		$ktp2 =$data['ktp2'];
		$kk =$data['scan_kk'];
		$rumahsakit =$data['scan_rumahsakit'];
		$ahliwaris =$data['scan_ahliwaris'];

		$id = $data['id_request_skkm'];

		// $keperluan = $data['keperluan'];
		$keterangan = $data['keterangan'];
	}
?>
				<div class="page-inner">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-7">
								<div class="card">
									<div class="card-header">
												<div class="form-group">
												<label>Keterangan</label>
												<input type="text" name="keterangan" class="form-control" autofocus><br>
												<button type="submit" name="ubah" class="btn btn-info btn-border btn-round btn-sm">
												<span class="btn-label">
													<i class="fas fa-edit"></i>
												</span>
												Ubah
												</button>
												<a href="?halaman=sudah_acc_skkm" class="btn btn-info btn-border btn-round btn-sm">
													Batal
												</a>
												</div>

									</div>
									<div class="card-body">
										<div class="row">
										<div class="col-md-6 col-lg-6">
													<div class="form-group">
														<label>NIK Yang Menyatakan</label>
														<input type="number" name="nik" value="<?php echo $nik;?>" class="form-control" placeholder="NIK Anda.." autofocus readonly>
													</div>
													<div class="form-group">
														<label>Nama Yang Menyatakan</label>
														<input type="text" name="nama" value="<?php echo $nama;?>" class="form-control" placeholder="Nama Anda.." autofocus readonly>
													</div>

													
													<!-- Data Jenazah -->
													<div class="form-group">
														<label>NIK Jenazah</label>
														<input type="number" name="nikjenazah" value="<?php echo $nikjenazah;?>" class="form-control" placeholder="NIK Jenazah.." autofocus readonly>
													</div>
													<div class="form-group">
														<label>Nama Lengkap Jenazah</label>
														<input type="text" name="namajenazah" value="<?php echo $namajenazah;?>" class="form-control" placeholder="Nama Jenazah.." autofocus readonly>
													</div>
													<div class="form-group">
														<label>Tempat Lahir Jenazah</label>
														<input type="text" name="tempatlahirjenazah" value="<?php echo $tempatlahirjenazah;?>" class="form-control" placeholder="Tempat Lahir Jenazah.." autofocus readonly>
													</div>
													<div class="form-group">
														<label>Tanggal Lahir Jenazah</label>
														<input type="text" name="tgllahirjenazah" value="<?php echo $tgllahirjenazah;?>" class="form-control" placeholder="Nama Anda.." autofocus readonly>
													</div>
													<div class="form-group">
														<label>Alamat Jenazah</label>
														<input type="text" name="alamatjenazah" value="<?php echo $alamatjenazah;?>" class="form-control" placeholder="Alamat Jenazah.." autofocus readonly>
													</div>
													<div class="form-group">
														<label>Agama Jenazah</label>
														<input type="text" name="agamajenazah" value="<?php echo $agamajenazah;?>" class="form-control" placeholder="Agama Jenazah.." autofocus readonly>
													</div>
													<div class="form-group">
														<label>Tanggal Meninggal</label>
														<input type="text" name="tglmeninggal" value="<?php echo $tglmeninggal;?>" class="form-control" placeholder="Tanggal Meninggal.." autofocus readonly>
													</div>
													

													<div class="form-group">
														<label>Nama Lengkap Saksi 1</label>
														<input type="text" name="nama1" value="<?php echo $nama1;?>" class="form-control" placeholder="Nama Saksi 1.." autofocus readonly>
													</div>
													<div class="form-group">
														<label>NIK Saksi 1</label>
														<input type="text" name="nik1" value="<?php echo $nik1;?>" class="form-control" placeholder="NIK Saksi 1." autofocus readonly>
													</div>
													<div class="form-group">
														<label>Tempat Lahir Saksi 1</label>
														<input type="text" name="tmplhr1" value="<?php echo $tmplhr1;?>" class="form-control" placeholder="Tempat Lahir Saksi 1a.." autofocus readonly>
													</div>
													<div class="form-group">
														<label>Tanggal Lahir Saksi 1</label>
														<input type="text" name="tgllhr1" value="<?php echo $tgllhr1;?>" class="form-control" placeholder="Tanggal Lahir Saksi 1.." autofocus readonly>
													</div>


													<div class="form-group">
														<label>Nama Lengkap Saksi 2</label>
														<input type="text" name="nama2" value="<?php echo $nama2;?>" class="form-control" placeholder="Nama Saksi 2.." autofocus readonly>
													</div>
													<div class="form-group">
														<label>NIK Saksi 2</label>
														<input type="text" name="nik2" value="<?php echo $nik2;?>" class="form-control" placeholder="NIK Saksi 2.." autofocus readonly>
													</div>
													<div class="form-group">
														<label>Tempat Lahir Saksi 2</label>
														<input type="text" name="tmplhr2" value="<?php echo $tmplhr2;?>" class="form-control" placeholder="Tempat Lahir Saksi 2.." autofocus readonly>
													</div>
													<div class="form-group">
														<label>Tanggal Lahir Saksi 2</label>
														<input type="text" name="tgllhr2" value="<?php echo $tgllhr2;?>" class="form-control" placeholder="Tanggal Lahir Saksi 2.." autofocus readonly>
													</div>

												</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Scan KTP Saksi 1</h4>
									</div>
									<div class="card-body">
										<div class="row justify-content-md-center">
														<img src="../dataFoto/scan_ktp1/<?php echo $ktp1;?>" width="350" height="250" alt="">
													
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Scan KTP Saksi 2</h4>
									</div>
									<div class="card-body">
										<div class="row justify-content-md-center">
														<img src="../dataFoto/scan_ktp2/<?php echo $ktp2;?>" width="350" height="250" alt="">
													
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Scan KK Jenazah</h4>
									</div>
									<div class="card-body">
										<div class="row justify-content-md-center">
										<img src="../dataFoto/scan_kk/<?php echo $kk;?>" width="300" height="300" alt="">
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Scan Keterangan Rumah Sakit</h4>
									</div>
									<div class="card-body">
										<div class="row justify-content-md-center">
														<img src="../dataFoto/scan_rumahsakit/<?php echo $rumahsakit;?>" width="350" height="250" alt="">
													
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Scan KTP Ahliwaris</h4>
									</div>
									<div class="card-body">
										<div class="row justify-content-md-center">
														<img src="../dataFoto/scan_rumahsakit/<?php echo $rumahsakit;?>" width="350" height="250" alt="">
													
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>

<?php
	if(isset($_POST['ubah'])){
		$nama = $_POST['nama'];
		$nikjenazah = $_POST['nikjenazah'];
		$namajenazah = $_POST['namajenazah'];
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

		$kk = $_POST['scan_kk'];
		$rumahsakit = $_POST['scan_rumahsakit'];
		$ahliwaris = $_POST['scan_ahliwaris'];


		// $keperluan = $_POST['keperluan'];
		$keterangan = $_POST['keterangan'];


		if($query==1){
			$keterangan = $_POST['keterangan'];
			$ubah = "UPDATE data_request_skkm SET
		keterangan='$keterangan' WHERE id_request_skkm='$id_request_skkm'";
		$quey = mysqli_query($konek,$ubah);
		if($quey==1){
			echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>" ;
			echo '<meta http-equiv="refresh" content="3; url=?halaman=sudah_acc_skkm">';

		}
		  }else{
			echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>" ;
			echo '<meta http-equiv="refresh" content="3; url=?halaman=detail_skkm">';
		  }
	}
?>