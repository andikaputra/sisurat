<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<?php
    if(isset($_GET['id_pegawai'])){
        $id_pegawai = $_GET['id_pegawai'];
        $sql = "SELECT * FROM data_pegawai WHERE id_pegawai='$id_pegawai'";
        $query = mysqli_query($konek,$sql);
        $data=mysqli_fetch_array($query,MYSQLI_BOTH);
        $user = $data['user'];
        $password = $data['password'];
        $level = $data['hak_akses'];
    }
?>
<div class="page-inner">
					<div class="row">
						<div class="col-md-12">	
						<form method="POST">
							<div class="card">
								<div class="card-header">
									<div class="card-title">FORM UBAH USER</div>
								</div>
								<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-6">
                                                <div class="form-group">
													<input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai;?>" class="form-control">
												</div>
												<div class="form-group">
													<label>Username</label>
													<input type="text" name="user" value="<?php echo $user;?>" class="form-control" autofocus>
												</div>
												<div class="form-group">
													<label>Password</label>
													<input type="text" name="password" value="<?php echo $password;?>" class="form-control">
                                                </div>
                                          		<div class="form-group">
													<label>Hak_Akses</label>
													<select name="hak_akses" class="form-control">
														<option  value="<?php echo $hak_akses;?>"><?php echo $hak_akses;?></option>
														<option  value='Staf'>Staf</option>
														<option  value='Lurah'>Lurah</option>
														<option  value='kaling'>Kaling</option>
													</select>
												</div>
											</div>
									</div>
								</div>
								<div class="card-action">
									<button name="ubah" class="btn btn-success btn-sm">Ubah</button>
									<a href="?halaman=tampil_user" class="btn btn-default btn-sm">Batal</a>
								</div>
							</div>
						</div>
						</form>
					</div>
</div>

<?php
if(isset($_POST['ubah'])){
    $id_pegawai = $_POST['id_pegawai'];
    $user = $_POST['user'];
    $password = $_POST['password'];
    $hak_akses = $_POST['hak_akses'];

    $sql = "UPDATE data_pegawai SET
    user='$user',
    password='$password',
    hak_akses='$hak_akses' WHERE id_pegawai='$id_pegawai'";
    $query = mysqli_query($konek,$sql);

	if($query){
		echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_pegawai">';
	  }else{
		echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_pegawai">';
	  }
}
?>