<?php

$tanggalHariIni = new DateTime();
?>

<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>  
<?php
if(isset($_GET['id_request_skkm'])){
    $id=$_GET['id_request_skkm'];
	$tampil_nik = "SELECT * FROM data_request_skkm NATURAL JOIN data_pemohon WHERE id_request_skkm=$id";
	$query = mysqli_query($konek,$tampil_nik);
    $data = mysqli_fetch_array($query,MYSQLI_BOTH);
    $id=$data['id_request_skkm'];

	$nikjenazah = $data['nikjenazah'];
 	$namajenazah = $data['namajenazah'];
    $tempatlahirjenazah = $data['tempatlahirjenazah'];
    $tgllahirjenazah = $data['tgllahirjenazah'];
    $alamatjenazah = $data['alamatjenazah'];
    $agamajenazah = $data['agamajenazah'];
    $tglmeninggal = $data['tglmeninggal'];
    $ktp = $data['scan_ktp'];
    $kk = $data['scan_kk'];
	$rumahsakit = $data['scan_rumahsakit'];
	$ahliwaris = $data['scan_ahliwaris'];

	$ktp1 = $data['ktp1'];
	$nama1 = $data['nama1'];
	$nik1 = $data['nik1'];
	$tmplhr1 = $data['tmplhr1'];
	$tgllhr1 = $data['tgllhr1'];
														

	$ktp2= $data['ktp2'];
	$nama2 = $data['nama2'];
	$nik2 = $data['nik2'];
	$tmplhr2 = $data['tmplhr2'];
	$tgllhr2 = $data['tgllhr2'];
	$keperluan = $data['keperluan'];


														

}
?>
<div class="page-inner">
					<div class="row">
						<div class="col-md-12">	
						<form method="POST" enctype="multipart/form-data">
							<div class="card">
								<div class="card-header">
									<div class="card-title">UBAH STATUS KETERANGAN KEMATIAN</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-6">
                                                <div class="form-group">
													<label><b>NIK & Nama Yang Menyatakan</b></label>
													<input type="text" name="nik" class="form-control" value="<?= $nik.'-'.$nama;?>" readonly>
												</div>


											<div class="col-md-6 col-lg-6">
												<label><b>DATA JENAZAH</b></label>
												<div class="form-group">
													<label>NIK Jenazah</label>
													<input type="text" name="nikjenazah" class="form-control" value ="<?=$nikjenazah;?>" size="37" >
												</div>
												<div class="form-group">
													<label>Nama Jenazah</label>
													<input type="text" name="namajenazah" class="form-control" value ="<?=$namajenazah;?>" size="37" >
												</div>
												<div class="form-group">
													<label>Tempat Lahir Jenazah</label>
													<input type="text" name="tempatlahirjenazah" class="form-control" value ="<?=$tempatlahirjenazah;?>" size="37" >
												</div>
												<div class="form-group">
													<label>Tanggal Lahir Jenazah</label>
													<input type="date" name="tgllahirjenazah" class="form-control" value ="<?=$tgllahirjenazah;?>" size="37" >
												</div>
												<div class="form-group">
													<label>Alamat  Jenazah</label>
													<input type="text" name="alamatjenazah" class="form-control" value ="<?=$alamatjenazah;?>" size="37" >
												</div>
												<div class="form-group">
													<label>Agama Jenazah</label>
													<select name="agamajenazah"  class="form-control">
														<option  value ="<?=$agamajenazah;?>"><?=$agamajenazah;?></option>
														<option  value='Islam'>Islam</option>
														<option  value='Kristen'>Katolik</option>
														<option  value='Kristen'>Kristen</option>
														<option  value='Hindu'>Hindu</option>
														<option  value='Budha'>Budha</option>
													</select>
												</div>
												<div class="form-group">
													<label>Tanggal Meninggal</label>
													<input type="date" name="tglmeninggal" class="form-control" value ="<?=$tglmeninggal;?>" size="37" >
												</div>
												<div class="form-group">
													<label>Keperluan</label>
													<input type="text" name="keperluan" class="form-control" value ="<?=$keperluan;?>" size="37" >
												</div>
												<div class="form-group">
													<label>Scan KTP Jenazah</label><br>
													<img src="../dataFoto/scan_ktp/<?= $ktp;?>" width="200" height="100" alt="">
												</div>
                                                <div class="form-group">
													<input type="file" name="ktp" class="form-control" size="37">
												</div>
												<div class="form-group">
													<label>Scan KK Jenazah</label><br>
													<img src="../dataFoto/scan_kk/<?= $kk;?>" width="200" height="100" alt="">
												</div>
                                                <div class="form-group">
													<input type="file" name="kk" class="form-control" size="37">
												</div>
												<div class="form-group">
													<label>Scan Surat Keterangan Rumah Sakit</label><br>
													<img src="../dataFoto/scan_rumahsakit/<?= $rumahsakit;?>" width="200" height="100" alt="">
												</div>
												<div class="form-group">
													<input type="file" name="rumahsakit" class="form-control" size="37">
												</div>
												<div class="form-group">
													<label>Scan Surat Keterangan Ahliwaris</label><br>
													<img src="../dataFoto/scan_ahliwaris/<?= $ahliwaris;?>" width="200" height="100" alt="">
												</div>
												<div class="form-group">
													<input type="file" name="ahliwaris" class="form-control" size="37">
												</div>
											</div>

										</div>
										<div class="col-md-6 col-lg-6">
											<label><b>DATA SAKSI</b></label>	
                                                <div class="form-group">
													<label>Scan KTP Saksi 1</label><br>
                                                    <img src="../dataFoto/scan_ktp1/<?= $ktp1;?>" width="200" height="100" alt="">
												</div>
												<div class="form-group">
													<input type="file" name="ktp1" class="form-control" size="37">
												</div>	
												<div class="form-group">
													<label>Nama Saksi 1</label>
													<input type="text" name="nama1" class="form-control" value ="<?=$nama1;?>" size="37" >
												</div>
												<div class="form-group">
													<label>NIK Saksi 1</label>
													<input type="text" name="nik1" class="form-control" value ="<?=$nik1;?>" size="37" >
												</div>
												<div class="form-group">
													<label>Tempat Lahir Saksi 1</label>
													<input type="text" name="tmplhr1" class="form-control" value ="<?=$tmplhr1;?>" size="37" >
												</div>
												<div class="form-group">
													<label>Tanggal Lahir Saksi 1</label>
													<input type="date" name="tgllhr1" class="form-control" value ="<?=$tgllhr1;?>" size="37" >
												</div>

												<div class="form-group">
													<label>Scan KTP Saksi 2</label><br>
                                                    <img src="../dataFoto/scan_ktp2/<?= $ktp2;?>" width="200" height="100" alt="">
												</div>
												<div class="form-group">
													<input type="file" name="ktp2" class="form-control" size="37">
												</div>	
												<div class="form-group">
													<label>Nama Saksi 2</label>
													<input type="text" name="nama2" class="form-control" value ="<?=$nama2;?>" size="37" >
												</div>
												<div class="form-group">
													<label>NIK Saksi 2</label>
													<input type="text" name="nik2" class="form-control" value ="<?=$nik2;?>" size="37" >
												</div>
												<div class="form-group">
													<label>Tempat Lahir Saksi 2</label>
													<input type="text" name="tmplhr2" class="form-control" value ="<?=$tmplhr2;?>" size="37" >
												</div>
												<div class="form-group">
													<label>Tanggal Lahir Saksi 2</label>
													<input type="date" name="tgllhr2" class="form-control" value ="<?=$tgllhr2;?>" size="37" >
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
		$file_rumahsakit = $_POST['nikjenazah']."_".".jpg";
		$nama_ahliwaris = isset($_FILES['ahliwaris']);
		$file_ahliwaris = $_POST['nik']."_".".jpg";

    $sql = "UPDATE data_request_skkm SET
	    namajenazah='$namajenazah',
	    nikjenazah='$nikjenazah',
	    tempatlahirjenazah='$tempatlahirjenazah',
	    tgllahirjenazah='$tgllahirjenazah',
	    alamatjenazah='$alamatjenazah',
	    agamajenazah='$agamajenazah',
	    tglmeninggal='$tglmeninggal',

	    nama1='$nama1',
	    nik1='$nik1',
	    tmplhr1='$tmplhr1',
	    tgllhr1='$tgllhr1',

	    nama2='$nama2',
	    nik2='$nik2',
	    tmplhr2='$tmplhr2',
	    tgllhr2='$tgllhr2',

	    keperluan='$keperluan',

	    scan_ktp='$file_ktp',
	    ktp1='$file_ktp1',
	    ktp2='$file_ktp2',
	    scan_kk='$file_kk',
	    scan_ahliwaris='$file_ahliwaris',
	    scan_rumahsakit='$file_rumahsakit'WHERE id_request_skkm=$id";
    
	$query = mysqli_query($konek,$sql);

	if($query){
		copy($_FILES['ktp']['tmp_name'],"../dataFoto/scan_ktp/".$file_ktp);
		copy($_FILES['ktp1']['tmp_name'],"../dataFoto/scan_ktp1/".$file_ktp1);
		copy($_FILES['ktp2']['tmp_name'],"../dataFoto/scan_ktp2/".$file_ktp2);
		copy($_FILES['kk']['tmp_name'],"../dataFoto/scan_kk/".$file_kk);
		copy($_FILES['rumahsakit']['tmp_name'],"../dataFoto/scan_rumahsakit/".$file_rumahsakit);
		copy($_FILES['ahliwaris']['tmp_name'],"../dataFoto/scan_ahliwaris/".$file_ahliwaris);
		echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	  }else{
		echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_skkm">';
	  }
}
	
?>