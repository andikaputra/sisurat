<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<?php
	if(isset($_GET['id_request_skl'])){
		$id_request_skl=$_GET['id_request_skl'];
		$sql = "SELECT * FROM data_request_skl natural join data_pemohon WHERE id_request_skl='$id_request_skl'";
		$query = mysqli_query($konek,$sql);
		$data = mysqli_fetch_array($query,MYSQLI_BOTH);
		$nik = $data['nik'];
		$nama = $data['nama'];
		$tempat = $data['tempat_lahir'];
		$tgl = $data['tanggal_lahir'];
		$agama = $data['agama'];
		$jekel = $data['jekel'];
		$alamat = $data['alamat'];
		$pekerjaan = $data['pekerjaan'];
		$nama = $data['nama'];
		$id = $data['id_request_skl'];
		$nik_ayah = $data['nik_ayah'];
        $nama_ayah = $data['nama_ayah'];
        $tmpl_ayah = $data['tmpl_ayah'];
        $tgll_ayah = $data['tgll_ayah'];
        $scan_ktp1 = $data['scan_ktp1'];
        $nama_ibu = $data['nama_ibu'];
		$nik_ibu = $data['nik_ibu'];
		$tmpl_ibu = $data['tmpl_ibu'];
		$tgll_ibu = $data['tgll_ibu'];
		$scan_ktp2 = $data['scan_ktp2'];
		$saksi1 = $data['saksi1'];
		$nik_saksi1 = $data['nik_saksi1'];
		$umur_saksi1 = $data['umur_saksi1'];
		$saksi2 = $data['saksi2'];
		$nik_saksi2 = $data['nik_saksi2'];
		$umur_saksi2 = $data['umur_saksi2'];
		$nama_anak = $data['nama_anak'];
		$tmpl_anak = $data['tmpl_anak'];
		$tgllahir_anak = $data['tgllahir_anak'];
		$alamat_anak = $data['alamat_anak'];
		$keperluan = $data['keperluan'];
		$kk = $data['scan_kk'];
    	$rumahsakit = $data['scan_rumahsakit'];
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
												<a href="?halaman=sudah_acc_skl" class="btn btn-info btn-border btn-round btn-sm">
													Batal
												</a>
												</div>
									</div>
									<div class="card-body">
										<div class="row">
										<div class="col-md-6 col-lg-6">
													<div class="form-group">
														<label>NIK Ayah</label>
														<input type="number" name="nik" value="<?php echo $nik;?>" class="form-control" placeholder="NIK Anda.." autofocus readonly>
													</div>
													<div class="form-group">
														<label>Nama Lengkap Ayah</label>
														<input type="text" name="nama_ayah" value="<?php echo $nama_ayah;?>" class="form-control" autofocus readonly>
													</div>
													<div class="form-group">
														<label>Tempat Lahir</label>
														<input type="text" name="tmpl_ayah" value="<?php echo $tmpl_ayah;?>" class="form-control" autofocus readonly>
													</div>
													<div class="form-group">
														<label>Tanggal Lahir</label>
														<input type="date" name="tgll_ayah" value="<?php echo $tgll_ayah;?>" class="form-control" autofocus readonly>
													</div>
													<div class="card">
														<div class="card-header">
															<h4 class="card-title">KTP Ayah</h4>
														</div>
														<div class="card-body">
														<div class="row justify-content-md-center">
														<img src="../dataFoto/scan_ktp/scan_ktp_lahir/<?php echo $scan_ktp1;?>" width="250" height="150" alt="">
														</div>
													</div>
									</div>
												</div>
												<div class="col-md-6 col-lg-6">
													<div class="form-group">
														<label>NIK Ibu</label>
														<input type="number" name="nik_ibu" value="<?php echo $nik_ibu;?>" class="form-control" placeholder="NIK Anda.." autofocus readonly>
													</div>
													<div class="form-group">
														<label>Nama Lengkap Ayah</label>
														<input type="text" name="nama_ibu" value="<?php echo $nama_ibu;?>" class="form-control" autofocus readonly>
													</div>
													<div class="form-group">
														<label>Tempat Lahir</label>
														<input type="text" name="tmpl_ibu" value="<?php echo $tmpl_ibu;?>" class="form-control" autofocus readonly>
													</div>
													<div class="form-group">
														<label>Tanggal Lahir</label>
														<input type="date" name="tgll_ibu" value="<?php echo $tgll_ibu;?>" class="form-control" autofocus readonly>
													</div>
													<div class="card">
														<div class="card-header">
															<h4 class="card-title">KTP Ibu</h4>
														</div>
														<div class="card-body">
														<div class="row justify-content-md-center">
														<img src="../dataFoto/scan_ktp/scan_ktp_lahir/<?php echo $scan_ktp2;?>" width="250" height="150" alt="">
														</div>
													</div>
													<div class="form-group">
														<label>Nama Saksi I</label>
														<input type="text" name="saksi1" value="<?php echo $saksi1;?>" class="form-control" autofocus readonly>
													</div>
													<div class="form-group">
														<label>NIK Saksi I</label>
														<input type="text" name="nik_saksi1" value="<?php echo $nik_saksi1;?>" class="form-control" autofocus readonly>
													</div>
													<div class="form-group">
														<label>Umur Saksi I</label>
														<input type="text" name="umur_saksi1" value="<?php echo $umur_saksi1;?>" class="form-control" autofocus readonly>
													</div>
													<div class="form-group">
														<label>Nama Saksi II</label>
														<input type="text" name="saksi2" value="<?php echo $saksi2;?>" class="form-control" autofocus readonly>
													</div>
													<div class="form-group">
														<label>NIK Saksi II</label>
														<input type="text" name="nik_saksi2" value="<?php echo $nik_saksi2;?>" class="form-control" autofocus readonly>
													</div>
													<div class="form-group">
														<label>Umur Saksi II</label>
														<input type="text" name="umur_saksi2" value="<?php echo $umur_saksi2;?>" class="form-control" autofocus readonly>
													</div>
									</div>

												</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5">
													<div class="form-group">
														<label>Nama Anak</label>
														<input type="text" name="nama_anak" value="<?php echo $nama_anak;?>" class="form-control" autofocus readonly>
													</div>
													<div class="form-group">
													<label>Tempat Lahir Anak</label>
														<input type="text" name="tmpl_anak" value="<?php echo $tmpl_anak;?>" class="form-control" autofocus readonly>
													</div>
													<div class="form-group">
													<label>Tanggal Lahir Anak</label>
														<input type="date" name="tgllahir_anak" value="<?php echo $tgllahir_anak;?>" class="form-control" autofocus readonly>
													</div>
													<div class="form-group">
													<label>Alamat Anak</label>
														<input type="text" name="alamat_anak" value="<?php echo $alamat_anak;?>" class="form-control" autofocus readonly>
													</div>
													<div class="form-group">
													<label>Keperluan</label>
														<input type="text" name="keperluan" value="<?php echo $keperluan;?>" class="form-control" autofocus readonly>
													</div>
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Foto Copy Kartu Keluarga</h4>
									</div>
									<div class="card-body">
										<div class="row justify-content-md-center">
														<img src="../dataFoto/scan_kk/<?php echo $kk;?>" width="350" height="250" alt="">
													
										</div>
									</div>
								</div>
								
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Surat Lahir Rumah Sakit</h4>
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

