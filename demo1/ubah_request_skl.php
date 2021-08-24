<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<?php
if(isset($_GET['id_request_skl'])){
    $id=$_GET['id_request_skl'];
	$tampil_nik = "SELECT * FROM data_request_skl NATURAL JOIN data_pemohon WHERE id_request_skl=$id";
	$query = mysqli_query($konek,$tampil_nik);
	$data = mysqli_fetch_array($query,MYSQLI_BOTH);
	$nik = $data['nik'];
	$id = $data['id_request_skl'];
    $nama = $data['nama'];
    $tgl = $data['tanggal_request'];
    $format1 = date('d-m-Y',strtotime($tgl));
	$nama_ayah = $data['nama_ayah'];
	$nik_ayah = $data['nik_ayah'];
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
}
?>
<div class="page-inner">
					<div class="row">
						<div class="col-md-12">	
						<form method="POST" enctype="multipart/form-data">
							<div class="card">
								<div class="card-header">
									<div class="card-title">UBAH DATA REQUEST SURAT KETERANGAN KELAHIRAN</div>
								</div>
								<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-6">
                                                <div class="form-group">
													<label>NIK</label>
													<input type="text" name="nik" class="form-control" value="<?= $nik;?>" readonly>
												</div>
											</div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="form-group">
													<label>Tanggal Request</label>
													<input type="text" readonly="" class="form-control" value="<?= $format1;?>" readonly>
												</div>
											</div>
											<div class="col-md-6 col-lg-6">
												<label><b>DATA ORANG TUA</b></label>
												<div class="form-group">
													<label>Nama Ayah</label>
													<input type="text" name="nama_ayah" class="form-control" size="37" value="<?= $nama_ayah;?>">
												</div>
												<div class="form-group">
													<label>NIK Ayah</label>
													<input type="text" name="nik_ayah" class="form-control" size="37" value="<?= $nik_ayah;?>">
												</div>	
												<div class="form-group">
													<label>Tempat Lahir Ayah</label>
													<input type="text" name="tmpl_ayah" class="form-control" size="37" value="<?= $tmpl_ayah;?>">
												</div>	
												<div class="form-group">
													<label>Tanggal Lahir Ayah</label>
													<input type="date" name="tgll_ayah" class="form-control" size="37" value="<?= $tgll_ayah;?>">
												</div>			
												<div class="form-group">
													<label>Scan Foto KTP Ayah</label><br>
													<img src="../dataFoto/scan_ktp/scan_ktp_lahir/<?=$scan_ktp1;?>" width="200" height="100" alt="">
												</div>
												<div class="form-group">
													<input type="file" name="scan_ktp1" class="form-control" size="37">
												</div>

												<div class="form-group">
													<label>Nama Ibu</label>
													<input type="text" name="nama_ibu" class="form-control" size="37" value="<?= $nama_ibu;?>">
												</div>	
												<div class="form-group">
													<label>NIK Ibu</label>
													<input type="text" name="nik_ibu" class="form-control" size="37" value="<?= $nik_ibu;?>">
												</div>
												<div class="form-group">
													<label>Tempat Lahir Ibu</label>
													<input type="text" name="tmpl_ibu" class="form-control" size="37" value="<?= $tmpl_ibu;?>">
												</div>
												<div class="form-group">
													<label>Tanggal Lahir Ibu</label>
													<input type="date" name="tgll_ibu" class="form-control" size="37" value="<?= $tgll_ibu;?>">
												</div>
												<div class="form-group">
													<label>Scan Foto KTP Ibu</label><br>
													<img src="../dataFoto/scan_ktp/scan_ktp_lahir/<?=$scan_ktp2;?>" width="200" height="100" alt="">
												</div>
												<div class="form-group">
													<input type="file" name="scan_ktp2" class="form-control" size="37" >
												</div>
												<div class="form-group">
													<label>Nama Saksi I</label>
													<input type="text" name="saksi1" class="form-control" size="37" value="<?= $saksi1;?>">
												</div>
												<div class="form-group">
													<label>NIK Saksi I</label>
													<input type="text" name="nik_saksi1" class="form-control" size="37" value="<?= $nik_saksi1;?>">
												</div>
												<div class="form-group">
													<label>Umur Saksi I</label>
													<input type="text" name="umur_saksi1" class="form-control" size="37" value="<?= $umur_saksi1;?>">
												</div>
												<div class="form-group">
													<label>Nama Saksi II</label>
													<input type="text" name="saksi2" class="form-control" size="37" value="<?= $saksi2;?>">
												</div>
												<div class="form-group">
													<label>NIK Saksi II</label>
													<input type="text" name="nik_saksi2" class="form-control" size="37" value="<?= $nik_saksi2;?>">
												</div>
												<div class="form-group">
													<label>Umur Saksi II</label>
													<input type="text" name="umur_saksi2" class="form-control" size="37" value="<?= $umur_saksi2;?>">
												</div>


											</div>
                                            <div class="col-md-6 col-lg-6">	
                                            	<label><b>DATA ANAK</b></label>
                                            	<div class="form-group">
													<label>Nama Anak</label>
													<input type="text" name="nama_anak" class="form-control" size="37" value="<?= $nama_anak;?>">
												</div>	
												<div class="form-group">
													<label>Tempat lahir Anak</label>
													<input type="text" name="tmpl_anak" class="form-control" size="37" value="<?= $tmpl_anak;?>">
												</div>	
												<div class="form-group">
													<label>Tanggal Lahir Anak</label>
													<input type="date" name="tgllahir_anak" class="form-control" size="37" value="<?= $tgllahir_anak;?>">
												</div>	
												<div class="form-group">
													<label>Alamat Anak</label>
													<input type="text" name="alamat_anak" class="form-control" size="37" value="<?= $alamat_anak;?>">
												</div>
												<div class="form-group">
													<label>Keperluan</label>
													<input type="text" name="keperluan" class="form-control" size="37" value="<?= $keperluan;?>">
												</div>			
												<div class="form-group">
													<label>Scan Kartu Keluarga</label><br>
													<img src="../dataFoto/scan_kk/<?=$kk;?>" width="200" height="100" alt="">
												</div>
												<div class="form-group">
													<input type="file" name="kk" class="form-control" size="37">
												</div>
												<div class="form-group">
													<label>Scan Surat Lahir Rumah Sakit</label><br>
													<img src="../dataFoto/scan_rumahsakit/<?=$rumahsakit;?>" width="200" height="100" alt="">
												</div>
												<div class="form-group">
													<input type="file" name="rumahsakit" class="form-control" size="37">
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

	$sql = "UPDATE data_request_skl SET scan_kk='$file_kk',
										scan_ktp1='$scan_ktp1',
										scan_ktp2='$scan_ktp2',
										scan_rumahsakit='$file_rumahsakit',
										nama_ayah='$nama_ayah',
										nik_ayah='$nik_ayah',
										tmpl_ayah='$tmpl_ayah',
										tgll_ayah='$tgll_ayah',
										nama_ibu='$nama_ibu',
										nik_ibu='$nik_ibu',
										tmpl_ibu='$tmpl_ibu',
										tgll_ibu='$tgll_ibu',
										saksi1='$saksi1',
										nik_saksi1='$nik_saksi1',
										umur_saksi1='$umur_saksi1',
										saksi2='$saksi2',
										nik_saksi2='$nik_saksi2',
										umur_saksi2='$umur_saksi2',
										nama_anak='$nama_anak',
										tmpl_anak='$tmpl_anak',
										tgllahir_anak='$tgllahir_anak',
										alamat_anak='$alamat_anak',
										keperluan='$keperluan'
										WHERE id_request_skl=$id";
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