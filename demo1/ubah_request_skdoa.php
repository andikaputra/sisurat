<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<?php
if(isset($_GET['id_request_skdoa'])){
    $id=$_GET['id_request_skdoa'];
	$tampil_nik = "SELECT * FROM data_request_skdoa NATURAL JOIN data_pemohon WHERE id_request_skdoa=$id";
	$query = mysqli_query($konek,$tampil_nik);
	$data = mysqli_fetch_array($query,MYSQLI_BOTH);
	$nik = $data['nik'];
	$id = $data['id_request_skdoa'];
    $nama = $data['nama'];
    $tgl = $data['tanggal_request'];
    $format1 = date('d-m-Y',strtotime($tgl));
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
}
?>
<div class="page-inner">
					<div class="row">
						<div class="col-md-12">	
						<form method="POST" enctype="multipart/form-data">
							<div class="card">
								<div class="card-header">
									<div class="card-title">UBAH DATA REQUEST SURAT KETERANGAN DOMISILI ORANG ASING</div>
								</div>
								<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-6">
                                                <div class="form-group">
													<label>Data Sponsor</label>
													<input type="text" name="nik" class="form-control" value="<?= $nik.' - '.$nama;?>" readonly>
												</div>
											</div>
                                            <div class="col-md-6 col-lg-6">
											<div class="col-md-6 col-lg-6">	
												<div class="form-group">
													<label>No Passport</label>
													<input type="text" name="nopaspor" class="form-control" size="37" value="<?= $nopaspor;?>">
												</div>
												
												<div class="form-group">
													<label>Masa Berlaku Passport</label>
													<input type="date" name="masapaspor" class="form-control form-control-lg"  value="<?= $masapaspor;?>">
												</div>
											</div>
                                            <div class="col-md-6 col-lg-6">	
                                            	<div class="form-group">
													<label>No KITAS</label>
													<input type="text" name="nokitas" class="form-control" size="37" value="<?= $nokitas;?>">
												</div>	
		
												<div class="form-group">
													<label>Masa Berlaku KITAS</label>
													<input type="date" name="masakitas" class="form-control form-control-lg"  value="<?= $masakitas;?>">
												</div>
											</div>
											<div class="col-md-6 col-lg-6">		
												<div class="form-group">
													<label>Nama Orang Asing</label>
													<input type="text" name="norangasing" class="form-control" size="37" value="<?= $norangasing;?>">
												</div>	
												
												<div class="form-group">
													<label>Tempat Lahir</label>
													<input type="text" name="tmpl" class="form-control" size="37" value="<?= $tmpl;?>">
												</div>
												<div class="form-group">
													<label>Tanggal Lahir</label>
													<input type="date" name="tgllahir" class="form-control" size="37" value="<?= $tgllahir;?>">
												</div>	
												<div class="form-group">
													<label>Pekerjaan</label>
													<input type="text" name="kerja" class="form-control" size="37" value="<?= $kerja;?>">
												</div>	
												<div class="form-group">
													<label>Kebangsaan</label>
													<input type="text" name="bangsa" class="form-control" size="37" value="<?= $bangsa;?>">
												</div>	
												<div class="form-group">
													<label>Tempat Tinggal</label>
													<input type="text" name="tinggal" class="form-control" size="37" value="<?= $tinggal;?>">
												</div>	
											</div>
											<div class="col-md-6 col-lg-6">		
												<div class="form-group">
													<label>Scan Surat Laporan Kepolisian</label><br>
													<img src="../dataFoto/scan_kepolisian/<?=$kepolisian;?>" width="200" height="100" alt="">
												</div>
												<div class="form-group">
													<input type="file" name="kepolisian" class="form-control" size="37" required>
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
		$masapaspor = $_POST['masapaspor'];
		$nopaspor = $_POST['nopaspor'];
    	$masakitas = $_POST['masakitas'];
    	$nokitas = $_POST['nokitas'];
    	$norangasing = $_POST['norangasing'];
    	$tmpl = $_POST['tmpl'];
    	$tgllahir = $_POST['tgllahir'];
    	$kerja = $_POST['kerja'];
    	$bangsa = $_POST['bangsa'];
    	$tinggal = $_POST['tinggal'];
		$nama_kepolisian = isset($_FILES['kepolisian']);
    	$file_kepolisian = $_POST['nik']."_".".jpg";
	$sql = "UPDATE data_request_skdoa SET nopaspor='$nopaspor', masapaspor='$masapaspor',
										  masakitas='$masakitas', nokitas='$nokitas',
										  norangasing='$norangasing', tmpl='$tmpl', tgllahir='$tgllahir', kerja='$kerja', bangsa='$bangsa', tinggal='$tinggal', 
										  scan_kepolisian='$file_kepolisian'    WHERE id_request_skdoa=$id";
	$query = mysqli_query($konek,$sql);

	if($query){
		copy($_FILES['kepolisian']['tmp_name'],"../dataFoto/scan_kepolisian/".$file_kepolisian);
		echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil', 'success');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	  }else{
		echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal', 'error');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_skdoa">';
	  }
}
	
?>