<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<?php
	if(isset($_GET['id_request_skb'])){
		$id_request_skb=$_GET['id_request_skb'];
		$sql = "SELECT * FROM data_request_skb natural join data_pemohon WHERE id_request_skb='$id_request_skb'";
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
		$id = $data['id_request_skb'];
		$ktp = $data['scan_ktp'];
		$kk = $data['scan_kk'];
		$keperluan = $data['keperluan'];
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
												<a href="?halaman=sudah_acc_skb" class="btn btn-info btn-border btn-round btn-sm">
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
														<label>Nama Lengkap</label>
														<input type="text" name="nama" value="<?php echo $nama;?>" class="form-control" placeholder="Nama Lengkap Anda.." readonly>
													</div>
													<div class="form-group">
														<label>Jenis Kelamin</label><br/>
															<input type="text" name="jekel" value="<?php echo $jekel;?>" class="form-control" placeholder="Jenis Kelamin Anda.." readonly>
													</div>
													<div class="form-group">
														<label>Tempat Lahir</label>
														<input type="text" name="tempat" value="<?php echo $tempat;?>" class="form-control" placeholder="Tempat Lahir Anda.." readonly>
													</div>
													<div class="form-group">
														<label>Tanggal Lahir</label>
														<input type="date" name="tgl" value="<?php echo $tgl;?>" class="form-control" readonly>
													</div>
												</div>
												<div class="col-md-6 col-lg-6">
													<div class="form-group">
														<label>Agama</label>
														<input type="text" name="agama" value="<?php echo $agama;?>" class="form-control" readonly>
													</div>
													<div class="form-group">
														<label for="comment">Alamat</label>
														<input type="text" name="alamat" value="<?php echo $alamat;?>" class="form-control" readonly>
													</div>	
													<div class="form-group">
														<label>Pekerjaan</label>
														<input type="text" name="pekerjaan" value="<?php echo $pekerjaan;?>" class="form-control" placeholder="Pekerjaan Anda.. " readonly>
													</div>			
													<div class="form-group">
														<label>Keperluan</label>
														<input type="text" name="telepon" value="<?php echo $keperluan;?>" class="form-control" placeholder="Telepon Anda.." readonly="">
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
							</div>
						</div>
					</form>
				</div>

<?php
	if(isset($_POST['ubah'])){
		$nama = $_POST['nama'];
		$tempat = $_POST['tempat'];
		$tgl = $_POST['tgl'];
		$jekel = $_POST['jekel'];
		$agama = $_POST['agama'];
		$alamat = $_POST['alamat'];
		$pekerjaan = $_POST['pekerjaan'];
		$keperluan = $_POST['keperluan'];
		$keterangan = $_POST['keterangan'];

		$ubah = "UPDATE data_pemohon SET
		nama='$nama',
		tanggal_lahir='$tgl',
		tempat_lahir='$tempat',
		jekel='$jekel',
		agama='$agama',
		alamat='$alamat' WHERE nik='$nik'";
		$query = mysqli_query($konek,$ubah);

		if($query==1){
			$keterangan = $_POST['keterangan'];
			$ubah = "UPDATE data_request_skb SET
		keterangan='$keterangan' WHERE id_request_skb='$id_request_skb'";
		$quey = mysqli_query($konek,$ubah);
		if($quey==1){
			echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>" ;
			echo '<meta http-equiv="refresh" content="3; url=?halaman=sudah_acc_skb">';

		}
		  }else{
			echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>" ;
			echo '<meta http-equiv="refresh" content="3; url=?halaman=detail_skb">';
		  }
	}
?>