<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<?php
	if(isset($_GET['id_request_skdoa'])){
		$id_request_skdoa=$_GET['id_request_skdoa'];
		$sql = "SELECT * FROM data_request_skdoa natural join data_pemohon WHERE id_request_skdoa='$id_request_skdoa'";
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
		$id = $data['id_request_skdoa'];
		$nopaspor = $data['nopaspor'];
   		$masapaspor = $data['masapaspor'];
    	$nokitas = $data['nokitas'];
    	$masakitas = $data['masakitas'];
    	$norangasing = $data['norangasing'];
    	$tmpl = $data['tmpl'];
    	$tgllahir = $data['tgllahir'];
    	$kerja = $data['kerja'];
    	$bangsa = $data['bangsa'];
    	$tinggal = $data['tinggal'];
    	$kepolisian = $data['scan_kepolisian'];
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
												<a href="?halaman=sudah_acc_skdoa" class="btn btn-info btn-border btn-round btn-sm">
													Batal
												</a>
												</div>
									</div>
									<div class="card-body">
										<div class="row">
										<div class="col-md-6 col-lg-6">
													<div class="form-group">
														<label>NIK</label>
														<input type="number" name="nik" value="<?php echo $nik;?>" class="form-control" placeholder="NIK Anda.." autofocus readonly>
													</div>
													<div class="form-group">
														<label>Nama Lengkap Sponsor</label>
														<input type="text" name="nama" value="<?php echo $nama;?>" class="form-control" autofocus readonly>
													</div>
													<div class="form-check">
														<label>Jenis Kelamin</label><br/>
														<label class="form-radio-label">
															<input class="form-radio-input" type="radio" name="jekel"  value="Laki-Laki" <?php if($jekel=="Laki-Laki") echo 'checked'?>>
															<span class="form-radio-sign">Laki-Laki</span>
														</label>
														<label class="form-radio-label ml-3">
															<input class="form-radio-input" type="radio" name="jekel" value="Perempuan" <?php if($jekel=="Perempuan") echo 'checked'?>>
															<span class="form-radio-sign">Perempuan</span>
														</label>
													</div>
													<div class="form-group">
														<label>Tempat Lahir</label>
														<input type="text" name="tempat" value="<?php echo $tempat;?>" class="form-control" autofocus readonly>
													</div>
													<div class="form-group">
														<label>Tanggal Lahir</label>
														<input type="date" name="tgl" value="<?php echo $tgl;?>" class="form-control" autofocus readonly>
													</div>
												</div>
												<div class="col-md-6 col-lg-6">
													<div class="form-group">
														<label>Agama</label>
														<input name="agama" value="<?php echo $agama;?>" class="form-control" readonly>
														</input>
													</div>
													<div class="form-group">
														<label for="comment">Alamat</label>
														<textarea class="form-control" name="alamat" rows="5" autofocus readonly><?php echo $alamat;?></textarea>
													</div>	
													<div class="form-group">
														<label>Pekerjaan</label>
														<input type="text" name="pekerjaan" value="<?php echo $pekerjaan;?>" class="form-control" autofocus readonly>
													</div>	
													<div class="card">
									<div class="card-header">
										<h4 class="card-title">Kepolisian</h4>
									</div>
									<div class="card-body">
										<div class="row justify-content-md-center">
														<img src="../dataFoto/scan_kepolisian/<?php echo $kepolisian;?>" width="350" height="250" alt="">
													
										</div>
									</div>
								</div>
												</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
										<label>Nama Orang Asing</label>
										<input type="text" name="norangasing" value="<?php echo $norangasing;?>" class="form-control" size="37" autofocus readonly>
									</div>

									<div class="card">
									
									<div class="form-group">
													<label>Tempat Lahir</label>
													<input type="text" name="tmpl" value="<?php echo $tmpl;?>" class="form-control" size="37" autofocus readonly>
												</div>
									<div class="form-group">
													<label>Tanggal Lahir</label>
													<input type="text" name="tgllahir" value="<?php echo $tgllahir;?>" class="form-control" size="37" autofocus readonly>
												</div>	
									<div class="form-group">
													<label>Pekerjaan</label>
													<input type="text" name="kerja" value="<?php echo $kerja;?>" class="form-control" size="37" autofocus readonly>
												</div>
												<div class="form-group">
													<label>Kebangsaan</label>
													<input type="text" name="bangsa" value="<?php echo $bangsa;?>" class="form-control" size="37" autofocus readonly>
												</div>
												<div class="form-group">
													<label>Tempat Tinggal</label>
													<input type="text" name="tinggal" value="<?php echo $tinggal;?>" class="form-control" size="37" autofocus readonly>
												</div>
	
								</div>
												<div class="form-group">
													<label>No Passport</label>
													<input type="text" name="nopaspor" value="<?php echo $nopaspor;?>" class="form-control" size="37" autofocus readonly >
												</div>

								<div class="card">
												<div class="form-group">
													<label>Masa Berlaku Passport</label>
													<input type="date" name="masapaspor" value="<?php echo $masapaspor;?>" class="form-control form-control-lg" autofocus readonly>
												</div>
								</div>
												<div class="form-group">
													<label>No KITAS</label>
													<input type="text" name="nokitas" value="<?php echo $nokitas;?>" class="form-control" size="37" autofocus readonly>
												</div>	
								<div class="card">									
												<div class="form-group">
													<label>Masa Berlaku KITAS</label>
													<input type="date" name="masakitas" value="<?php echo $masakitas;?>" class="form-control form-control-lg"  autofocus readonly>
												</div>
							</div>
						</div>
					</form>
				</div>

