<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<?php
if(isset($_GET['id_request_skbd'])){
    $id=$_GET['id_request_skbd'];
	$tampil_nik = "SELECT * FROM data_request_skbd NATURAL JOIN data_pemohon WHERE id_request_skbd=$id";
	$query = mysqli_query($konek,$tampil_nik);
	$data = mysqli_fetch_array($query,MYSQLI_BOTH);
	$nik = $data['nik'];
	$id = $data['id_request_skbd'];
    $nama = $data['nama'];
    $tgl = $data['tanggal_request'];
    $format1 = date('d-m-Y',strtotime($tgl));
    $ktp = $data['scan_ktp'];
    $kk = $data['scan_kk'];
    $berkasbeda = $data['berkasbeda'];
}
?>
<div class="page-inner">
					<div class="row">
						<div class="col-md-12">	
						<form method="POST" enctype="multipart/form-data">
							<div class="card">
								<div class="card-header">
									<div class="card-title">UBAH DATA REQUEST SURAT KETERANGAN BEDA DATA</div>
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
														<label>Data Yang Salah</label>
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
														<label>Keterangan Data Yang Salah</label>
														<input type="date" name="ktrdatasalah" class="form-control" size="37" required>
													</div>
													<div class="form-group">
														<label>Data Yang Benar</label>
														<input type="text" name="databenarinput" class="form-control" size="37" required>
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
											</div>

												<div class="col-md-6 col-lg-6">		
													<div class="form-group">
														<label>Scan KTP</label><br>
														<img src="../dataFoto/scan_ktp/<?=$ktp;?>" width="200" height="100" alt="">
													</div>
													<div class="form-group">
														<input type="file" name="ktp" class="form-control" size="37" required>
													</div>	
													<div class="form-group">
														<label>Scan KK</label><br>
														<img src="../dataFoto/scan_kk/<?=$kk;?>" width="200" height="100" alt="">
													</div>
													<div class="form-group">
														<input type="file" name="kk" class="form-control" size="37" required>
													</div>		
													<div class="form-group">
														<label>Scan Berkas Data Yang Berbeda</label><br>
														<img src="../dataFoto/scan_berkasbeda/<?=$berkasbeda;?>" width="200" height="100" alt="">
													</div>
													<div class="form-group">
														<input type="file" name="berkasbeda" class="form-control" size="37" required>
													</div>
												</div>
										</div>
									</div>
								</div>
								<div class="card-action">
									<button name="ubah" class="btn btn-success">Ubah</button>
									<a href="?halaman=tampil_status" class="btn btn-default">Batal</a>
								</div>
							</div>
						</div>
						</form>
					</div>
</div>

<?php
if(isset($_POST['ubah'])){
		$nama_ktp = isset($_FILES['ktp']);
		$file_ktp = $_POST['nik']."_".".jpg";
		$nama_kk = isset($_FILES['kk']);
    	$file_kk = $_POST['nik']."_".".jpg";
    	$nama_berkasbeda = isset($_FILES['berkasbeda']);
    	$file_berkasbeda = $_POST['nik']."_".".jpg";

	$sql = "UPDATE data_request_skbd SET scan_ktp='$file_ktp',scan_kk='$file_kk',scan_berkasbeda='$file_berkasbeda' WHERE id_request_skbd=$id";
	$query = mysqli_query($konek,$sql)or die (mysqli_error());;

	if($query){
		copy($_FILES['ktp']['tmp_name'],"../dataFoto/scan_ktp/".$file_ktp);
		copy($_FILES['kk']['tmp_name'],"../dataFoto/scan_kk/".$file_kk);
		copy($_FILES['berkasbeda']['tmp_name'],"../dataFoto/scan_berkasbeda/".$file_berkas);
		echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	  }else{
		echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=request_skbd">';
	  }
}
	
?>