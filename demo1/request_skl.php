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
									<div class="card-title">FORM TAMBAH REQUEST SURAT KETERANGAN KELAHIRAN</div>
								</div>
								<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<label>NIK</label>
													<input type="text" name="keterangan" class="form-control" value="<?= $nik.' - '.$nama;?>" readonly>
												</div>
												<div class="form-group">
													<input type="text" name="nik" class="form-control" value="<?= $nik;?>" readonly>
												</div>
												<label><b>DATA ORANG TUA</b></label>
												<div class="form-group">
													<label>Nama Ayah</label>
													<input type="text" name="nama_ayah" class="form-control" size="37" required>
												</div>	
												<div class="form-group">
													<label>NIK Ayah</label>
													<input type="text" name="nik_ayah" class="form-control" size="37" required>
												</div>	
												<div class="form-group">
													<label>Tempat Lahir Ayah</label>
													<input type="text" name="tmpl_ayah" class="form-control" size="37" required>
												</div>	
												<div class="form-group">
													<label>Tanggal Lahir Ayah</label>
													<input type="date" name="tgll_ayah" class="form-control" size="37" required>
												</div>	
												<div class="form-group">
													<label>Scan Foto KTP Ayah</label>
													<input type="file" name="scan_ktp1" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Nama Ibu</label>
													<input type="text" name="nama_ibu" class="form-control" size="37" required>
												</div>	
												<div class="form-group">
													<label>NIK Ibu</label>
													<input type="text" name="nik_ibu" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Tempat Lahir Ibu</label>
													<input type="text" name="tmpl_ibu" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Tanggal Lahir Ibu</label>
													<input type="date" name="tgll_ibu" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Scan Foto KTP Ibu</label>
													<input type="file" name="scan_ktp2" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Nama Saksi I</label>
													<input type="text" name="saksi1" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>NIK Saksi I</label>
													<input type="text" name="nik_saksi1" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Umur Saksi I</label>
													<input type="number" name="umur_saksi1" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Nama Saksi II</label>
													<input type="text" name="saksi2" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>NIK Saksi II</label>
													<input type="text" name="nik_saksi2" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Umur Saksi II</label>
													<input type="number" name="umur_saksi2" class="form-control" size="37" required>
												</div>


											</div>
											<div class="col-md-6 col-lg-6">
											<label><b>DATA ANAK</b></label>	
												<div class="form-group">
													<label>Nama Anak</label>
													<input type="text" name="nama_anak" class="form-control" size="37" required>
												</div>	
												<div class="form-group">
													<label>Tempat lahir Anak</label>
													<input type="text" name="tmpl_anak" class="form-control" size="37" required>
												</div>	
												<div class="form-group">
													<label>Tanggal Lahir Anak</label>
													<input type="date" name="tgllahir_anak" class="form-control" size="37" required>
												</div>	
												<div class="form-group">
													<label>Alamat Anak</label>
													<input type="text" name="alamat_anak" class="form-control" size="37" required>
												</div>	
												<div class="form-group">
													<label>Keperluan</label>
													<input type="text" name="keperluan" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Scan Foto Copy Kartu Keluarga</label>
													<input type="file" name="kk" class="form-control" size="37" required>
												</div>
												<div class="form-group">
													<label>Scan Surat Lahir Rumah Sakit</label>
													<input type="file" name="rumahsakit" class="form-control" size="37" required>
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
		$nama_kk = isset($_FILES['kk']);
		$file_kk = $_POST['nik']."_".".jpg";
		$nama_ktp1 = isset($_FILES['scan_ktp1']);
    	$file_ktp1 = $_POST['nik_ayah']."_".".jpg";
    	$nama_ktp2 = isset($_FILES['scan_ktp2']);
    	$file_ktp2 = $_POST['nik_ibu']."_".".jpg";
    	$nama_rumahsakit = isset($_FILES['rumahsakit']);
		$file_rumahsakit = $_POST['nik']."_".".jpg";

    	$nama_ayah = $_POST['nama_ayah'];
    	$nik_ayah = $_POST['nik_ayah'];
    	$tmpl_ayah = $_POST['tmpl_ayah'];
    	$tgll_ayah = $_POST['tgll_ayah'];

    	$nama_ibu = $_POST['nama_ibu'];
    	$nik_ibu = $_POST['nik_ibu'];
    	$tmpl_ibu = $_POST['tmpl_ibu'];
    	$tgll_ibu = $_POST['tgll_ibu'];

    	$saksi1 = $_POST['saksi1'];
    	$nik_saksi1 = $_POST['nik_saksi1'];
    	$umur_saksi1 = $_POST['umur_saksi1'];
    	$saksi2 = $_POST['saksi2'];
    	$nik_saksi2 = $_POST['nik_saksi2'];
    	$umur_saksi2 = $_POST['umur_saksi2'];

		$nama_anak = $_POST['nama_anak'];
		$tmpl_anak = $_POST['tmpl_anak'];
		$tgllahir_anak = $_POST['tgllahir_anak'];
		$alamat_anak = $_POST['alamat_anak'];
		$keperluan = $_POST['keperluan'];

    	
	$sql = "INSERT INTO data_request_skl (nik,scan_kk,scan_ktp1,scan_ktp2,scan_rumahsakit,nama_ayah,nik_ayah,tmpl_ayah,tgll_ayah,nama_ibu,nik_ibu,tmpl_ibu,tgll_ibu,saksi1,nik_saksi1,umur_saksi1,saksi2,nik_saksi2,umur_saksi2,nama_anak,tmpl_anak,tgllahir_anak,alamat_anak, keperluan) 
	VALUES ('$nik','$file_kk','$file_ktp1','$file_ktp2','$file_rumahsakit','$nama_ayah','$nik_ayah','$tmpl_ayah','$tgll_ayah','$nama_ibu','$nik_ibu','$tmpl_ibu','$tgll_ibu','$saksi1','$nik_saksi1','$umur_saksi1','$saksi2','$nik_saksi2','$umur_saksi2','$nama_anak','$tmpl_anak','$tgllahir_anak','$alamat_anak','$keperluan')";
	$query = mysqli_query($konek,$sql) or die (mysqli_error());

	if($query){
		copy($_FILES['kk']['tmp_name'],"../dataFoto/scan_kk/".$file_kk);
		copy($_FILES['scan_ktp1']['tmp_name'],"../dataFoto/scan_ktp/scan_ktp_lahir/".$file_ktp1);
		copy($_FILES['scan_ktp2']['tmp_name'],"../dataFoto/scan_ktp/scan_ktp_lahir/".$file_ktp2);
		copy($_FILES['rumahsakit']['tmp_name'],"../dataFoto/scan_rumahsakit/".$file_rumahsakit);
		echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil', 'success');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	  }else{
		echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal', 'error');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=request_skl">';
	  }
}
	
?>