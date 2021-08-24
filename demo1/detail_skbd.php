<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<?php
	if(isset($_GET['id_request_skbd'])){
		$id_request_skbd=$_GET['id_request_skbd'];
		$sql = "SELECT * FROM data_request_skbd natural join data_pemohon WHERE id_request_skbd='$id_request_skbd'";
		$query = mysqli_query($konek,$sql);
		$data = mysqli_fetch_array($query,MYSQLI_BOTH);
		$nik = $data['nik'];
	    $nama = $data['nama'];
	    $databermasalah = $data['databermasalah'];
	    $datasalahinput = $data['datasalahinput'];
	  	$datasalah = $data['datasalah'];
	  	$ktrdatasalah = $data['ktrdatasalah'];
	    $databenarinput = $data['databenarinput'];
	  	$databenar = $data['databenar'];
															
		$ktp = $data['scan_ktp'];
		$kk = $data['scan_kk'];
		$berkasbeda = $data['berkasbeda'];
		
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
												<a href="?halaman=sudah_acc_skbpk" class="btn btn-info btn-border btn-round btn-sm">
													Batal
												</a>
												</div>
									</div>
									<div class="card-body">
										<div class="row">
										<div class="col-md-6 col-lg-6">
													<div class="form-group">
													<label>NIK</label>
													<input type="text" name="nik" class="form-control" value="<?= $nik.' - '.$nama;?>" readonly>
												</div>

													<div class="form-group">
														<label>Data Yang Bermasalah</label>
															<input type="text" name="databermasalah" class="form-control" value="<?= $databermasalah;?>" readonly>
													</div>
													<div class="form-group">
														<label>Data Yang Salah</label>
														<input type="text" name="datasalahinput" class="form-control" size="37" value="<?= $datasalahinput;?>" readonly>
													</div>
													<div class="form-group">
														<label>Data Salah</label>
															<input name="datasalah" class="form-control" value="<?= $datasalah;?>" readonly>
																
													</div>
													<div class="form-group">
														<label>Keterangan Data Yang Salah</label>
														<input type="date" name="ktrdatasalah" class="form-control" size="37" value="<?= $ktrdatasalah;?>" readonly>
													</div>
													<div class="form-group">
														<label>Data Yang Benar</label>
														<input type="text" name="databenarinput" class="form-control" size="37" value="<?= $databenarinput;?>" readonly>
													</div>
													<div class="form-group">
														<label>Data Rujukan yang Benar</label>
															<input name="databenar" class="form-control" value="<?= $databenar;?>" readonly>
																
													</div>
											</div>			
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">KTP</h4>
									</div>
									<div class="card-body">
										<div class="row justify-content-md-center">
														<img src="../dataFoto/scan_ktp/<?php echo $ktp;?>" width="350" height="250" alt="">	
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">KK</h4>
									</div>
									<div class="card-body">
										<div class="row justify-content-md-center">
										<img src="../dataFoto/scan_kk/<?php echo $kk;?>" width="300" height="300" alt="">
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">BERKAS BEDA DATA</h4>
									</div>
									<div class="card-body">
										<div class="row justify-content-md-center">
										<img src="../dataFoto/scan_berkasbeda/<?php echo $berkasbeda;?>" width="300" height="300" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>

<?php
	if(isset($_POST['ubah'])){
		$nik = $data['nik'];
	    $nama = $data['nama'];
	    $databermasalah = $data['databermasalah'];
	    $datasalahinput = $data['datasalahinput'];
	  	$datasalah = $data['datasalah'];
	  	$ktrdatasalah = $data['ktrdatasalah'];
	    $databenarinput = $data['databenarinput'];
	  	$databenar = $data['databenar'];
															
		$ktp = $data['scan_ktp'];
		$kk = $data['scan_kk'];
		$berkasbeda = $data['berkasbeda'];
		$keperluan = $_POST['keperluan'];
		$keterangan = $_POST['keterangan'];

		$ubah = "UPDATE data_pemohon SET
		nama='$nama',
		databermasalah='$databermasalah',
		datasalahinput='$datasalahinput',
		datasalah='$datasalah',
		ktrdatasalah='$ktrdatasalah',
		databenarinput='$detabenarinput',
		databenar='$databenar',
		ktp = '$ktp',
		kk = '$kk',
		berkasbeda ='$berkasbeda' WHERE nik='$nik'";
		$query = mysqli_query($konek,$ubah);

		if($query==1){
			$keterangan = $_POST['keterangan'];
			$ubah = "UPDATE data_request_skbd SET
		keterangan='$keterangan' WHERE id_request_skbd='$id_request_skbd'";
		$quey = mysqli_query($konek,$ubah);
		if($quey==1){
			echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>" ;
			echo '<meta http-equiv="refresh" content="3; url=?halaman=sudah_acc_skbd">';

		}
		  }else{
			echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>" ;
			echo '<meta http-equiv="refresh" content="3; url=?halaman=detail_skbd">';
		  }
	}
?>