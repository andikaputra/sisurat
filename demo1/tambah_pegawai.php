<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<div class="page-inner">
					<div class="row">
						<div class="col-md-12">	
						<form method="POST">
							<div class="card">
								<div class="card-header">
									<div class="card-title">FORM TAMBAH PEGAWAI</div>
								</div>
								<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<label>Nama</label>
													<input type="text" name="nama" class="form-control" placeholder="Nama.." autofocus>
												</div>
												<div class="form-group">
													<label>Username</label>
													<input type="text" name="username" class="form-control" placeholder="Username.." autofocus>
												</div>
												<div class="form-group">
													<label>Password</label>
													<input type="password" name="password" class="form-control" placeholder="Password..">
												</div>

												 <div class="form-group">
												 <label>Lingkungan Tugas</label>
								                  <select name="lingkungan" id="" class="form-control">
								                  	<option value="">Pilih Lingkungan Tugas</option>
								                    <option value="Ubung">Lingkungan Ubung</option>
								                    <option value="Pantai Sari">Lingkungan Pantai Sari</option>
								                    <option value="Menega">Lingkungan Menega</option>
								                    <option value="Pesalakan">Lingkungan Pesalakan</option>
								                    <option value="Teba">Lingkungan Teba</option>
								                    <option value="Jerokuta">Lingkungan Jerokuta</option>
								                    <option value="Kalanganyar">Lingkungan Kalanganyar</option>
								                    <option value="Tegal">Lingkungan Tegal</option>
								                    <option value="Perarudan">Lingkungan Perarudan</option>
								                    <option value="Taman Griya">Lingkungan Taman Griya</option>
								                    <option value="Anggaswara">Lingkungan Anggaswara</option>
								                    <option value="Mekar Sari">Lingkungan Mekar Sari</option>
								                    <option value="Bhuana Gubug">Lingkungan Bhuana Gubug</option>
								                    <option value="Cengiling">Lingkungan Cengiling</option>
								                    <option value="Jimbaran">Lingkungan Jimbaran</option>
								                  </select>
								                </div>
												<div class="form-group">
													<label>Hak_Akses</label>
													<select name="hak_akses" class="form-control">
														<option  value="">Pilih Hak Akses</option>
														<option  value='Staf'>Staf</option>
														<option  value='Lurah'>Lurah</option>
														<option  value='kaling'>Kaling</option>
													</select>
												</div>
											</div>
									</div>
								</div>
								<div class="card-action">
									<button name="simpan" class="btn btn-success btn-sm">Simpan</button>
									<a href="?halaman=tampil_pegawai" class="btn btn-default btn-sm">Batal</a>
								</div>
							</div>
						</div>
						</form>
					</div>
</div>

<?php
if(isset($_POST['simpan'])){
	$nama = $_POST['nama'];
	$user= $_POST['username'];
	$password = $_POST['password'];
	$lingkungan = $_POST['lingkungan'];
	$hak_akses = $_POST['hak_akses'];

	$sql = "INSERT INTO data_pegawai (nama,user,password,lingkungan_tgs,hak_akses) VALUES ('$nama','$user','$password','$lingkungan','$hak_akses')";
	echo $sql;
	$query = mysqli_query($konek,$sql);

	if($query){
		echo "<script language='javascript'>swal('Selamat...', 'Simpan Berhasil', 'success');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_pegawai">';
	  }else{
		echo "<script language='javascript'>swal('Gagal...', 'Simpan Gagal', 'error');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tambah_pegawai">';
	  }
}
?>