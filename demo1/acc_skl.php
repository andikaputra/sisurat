<?php include '../konek.php';?>
<?php

 $hak_akses = $_SESSION['hak_akses'];
 $nama = $_SESSION['nama'];
 $user = $_SESSION['user'];
 $lingkungan_tgs = $_SESSION['lingkungan_tgs'];
 
 ?>
<?php
    if($hak_akses=="Staf"){
 ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
                <div class="page-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="fw-bold text-uppercase">TAMPIL ACC REQUEST SURAT KETERANGAN KELAHIRAN</h4>
									</div>
								</div>
									<div class="card-body">
									<form method="POST">
										<div class="table-responsive">
											<table id="add1" class="display table table-striped table-hover" >
												<thead>
													<tr>
														<th>Tanggal Request</th>
                                                    	<th>NIK</th>
                                                    	<th>Nama Pemohon</th>
                                                    	<th>NIK Ayah</th>
                                                    	<th>Nama Ayah</th>
                                                    	<th>Tempat Lahir Ayah</th>
                                                    	<th>Tanggal Lahir Ayah</th>
                                                    	<th>Foto Copy KTP Ayah</th>
                                                    	<th>NIK Ibu</th>
                                                    	<th>Nama Ibu</th>
                                                    	<th>Tempat Lahir Ibu</th>
                                                    	<th>Tanggal Lahir Ibu</th>
                                                    	<th>Foto Copy KTP Ibu</th>
                                                    	<th>Nama Saksi I</th>
                                                    	<th>NIK Saksi I</th>
                                                    	<th>Umur Saksi I</th>
                                                    	<th>Nama Saksi II</th>
                                                    	<th>NIK Saksi II</th>
                                                    	<th>Umur Saksi II</th>
                                                    	<th>Nama Lengkap Anak</th>
                                                    	<th>Tempat Lahir Anak</th>
                                                    	<th>Tanggal lahir Anak</th>
                                                    	<th>Alamat Anak</th>
                                                    	<th>Keperluan</th>
                                                    	<th>Scan Kartu keluarga</th>
                                                    	<th>Scan Surat Lahir Rumah Sakit</th>
														<th>Keterangan</th>
														<th>Status</th>
														<th style="width: 10%">Action</th>
														
													</tr>
												</thead>
												<tbody>
													<?php
														$i=1;
														$sql = "SELECT * FROM data_request_skl natural join data_pemohon WHERE status=1";
														$query = mysqli_query($konek,$sql);
														while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
															$id_request_skl=$data['id_request_skl'];
															$tgl = $data['tanggal_request'];
															$format = date('d F Y', strtotime($tgl));
															$nik = $data['nik'];
                                                        	$nama = $data['nama'];
                                                        	$status = $data['status'];
                                                        	$nik_ayah = $data['nik_ayah'];
                                                        	$nama_ayah = $data['nama_ayah'];
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
															$keterangan = $data['keterangan'];

															if($status=="2"){
																$status = "<b style='color:blue'>ACC</b>";
															}elseif($status=="0"){
																$status = "<b style='color:red'>BELUM ACC</b>";
															}elseif($status=="1"){
																$status = "<b style='color:green'>SUDAH ACC KALING</b>";
															}
													?>
													<tr>
														<td><?php echo $format;?></td>
                                                    	<td><?php echo $nik;?></td>
                                                    	<td><?php echo $nama;?></td>
                                                    	<td><?php echo $nik_ayah;?></td>
                                                    	<td><?php echo $nama_ayah;?></td>
                                                    	<td><?php echo $tmpl_ayah;?></td>
                                                    	<td><?php echo $tgll_ayah;?></td>
                                                    	<td><img src="../dataFoto/scan_ktp/scan_ktp_lahir/<?php echo $scan_ktp1;?>" width="50" height="50" alt=""></td>
                                                    	<td><?php echo $nik_ibu;?></td>
                                                    	<td><?php echo $nama_ibu;?></td>
                                                    	<td><?php echo $tmpl_ibu;?></td>
                                                    	<td><?php echo $tgll_ibu;?></td>
                                                    	<td><img src="../dataFoto/scan_ktp/scan_ktp_lahir/<?php echo $scan_ktp2;?>" width="50" height="50" alt=""></td>
                                                    	<td><?php echo $saksi1;?></td>
                                                    	<td><?php echo $nik_saksi1;?></td>
                                                    	<td><?php echo $umur_saksi1;?></td>
                                                    	<td><?php echo $saksi2;?></td>
                                                    	<td><?php echo $nik_saksi2;?></td>
                                                    	<td><?php echo $umur_saksi2;?></td>
														<td><?php echo $nama_anak;?></td>
														<td><?php echo $tmpl_anak;?></td>
														<td><?php echo $tgllahir_anak;?></td>
														<td><?php echo $alamat_anak;?></td>
														<td><?php echo $keperluan;?></td>
														<td><img src="../dataFoto/scan_kk/<?php echo $kk;?>" width="50" height="50" alt=""></td>
														<td><img src="../dataFoto/scan_rumahsakit/<?php echo $rumahsakit;?>" width="50" height="50" alt=""></td>
														<td><?php echo $keterangan;?></td>
														<td><?php echo $status;?></td>
														<td>	
															<input type="checkbox" name="check[$i]" value="<?php echo $id_request_skl;?>">
															<input type="submit" name="acc" class="btn btn-primary btn-sm" value="ACC">
															<div class="form-button-action">
																<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Cek Data" href="?halaman=detail_skl&id_request_skl=<?= $id_request_skl;?>">
																<i class="fa fa-edit"></i></a>
															</div>
														</td>
													</tr>
													<?php
														}
													?>
												</tbody>
											</table>
										</div>
									</form>
									</div>
							</div>
                        </div>
                        
					</div>
				</div>

				<?php
    if(isset($_POST['acc'])){
        if(isset($_POST['check']))
        {
                    foreach ($_POST['check'] as $value){
                        // echo $value;
                        $ubah = "UPDATE data_request_skl set status =2 where id_request_skl = $value"; 

                        $query = mysqli_query($konek,$ubah);

                        if($query) {
                            echo "<script language='javascript'>swal('Selamat...', 'ACC Staf Berhasil!', 'success');</script>" ;
                            echo '<meta http-equiv="refresh" content="3; url=?halaman=sudah_acc_skl">';
                        }else{
                            echo "<script language='javascript'>swal('Gagal...', 'ACC Staf Gagal!', 'error');</script>" ;
                            echo '<meta http-equiv="refresh" content="3; url=?halaman=sudah_acc_skl">';
                        }

                    }
        }
    }
?>
<?php
    }elseif($hak_akses=="kaling"){
 ?>
              <div class="page-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="fw-bold text-uppercase">TAMPIL ACC REQUEST SURAT KETERANGAN KELAHIRAN</h4>
									</div>
								</div>
									<div class="card-body">
									<form method="POST">
										<div class="table-responsive">
											<table id="add1" class="display table table-striped table-hover" >
												<thead>
													<tr>
														<th>Tanggal Request</th>
                                                    	<th>NIK</th>
                                                    	<th>Nama Pemohon</th>
                                                    	<th>NIK Ayah</th>
                                                    	<th>Nama Ayah</th>
                                                    	<th>Tempat Lahir Ayah</th>
                                                    	<th>Tanggal Lahir Ayah</th>
                                                    	<th>Foto Copy KTP Ayah</th>
                                                    	<th>NIK Ibu</th>
                                                    	<th>Nama Ibu</th>
                                                    	<th>Tempat Lahir Ibu</th>
                                                    	<th>Tanggal Lahir Ibu</th>
                                                    	<th>Foto Copy KTP Ibu</th>
                                                    	<th>Nama Saksi I</th>
                                                    	<th>NIK Saksi I</th>
                                                    	<th>Umur Saksi I</th>
                                                    	<th>Nama Saksi II</th>
                                                    	<th>NIK Saksi II</th>
                                                    	<th>Umur Saksi II</th>
                                                    	<th>Nama Lengkap Anak</th>
                                                    	<th>Tempat Lahir Anak</th>
                                                    	<th>Tanggal lahir Anak</th>
                                                    	<th>Alamat Anak</th>
                                                    	<th>Keperluan</th>
                                                    	<th>Scan Kartu keluarga</th>
                                                    	<th>Scan Surat Lahir Rumah Sakit</th>
														<th>Keterangan</th>
														<th>Status</th>
														<th style="width: 10%">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
														$i=1;
														$sql = "SELECT * FROM data_request_skl natural join data_pemohon WHERE status=0 and lingkungan = '$lingkungan_tgs'";
														$query = mysqli_query($konek,$sql);
														while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
															$id_request_skl=$data['id_request_skl'];
															$tgl = $data['tanggal_request'];
															$format = date('d F Y', strtotime($tgl));
															$nik = $data['nik'];
                                                        	$nama = $data['nama'];
                                                        	$status = $data['status'];
                                                        	$nik_ayah = $data['nik_ayah'];
                                                        	$nama_ayah = $data['nama_ayah'];
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
															$keterangan = $data['keterangan'];

															if($status=="2"){
																$status = "<b style='color:blue'>ACC</b>";
															}elseif($status=="0"){
																$status = "<b style='color:red'>BELUM ACC</b>";
															}
													?>
													<tr>
														<td><?php echo $format;?></td>
                                                    	<td><?php echo $nik;?></td>
                                                    	<td><?php echo $nama;?></td>
                                                    	<td><?php echo $nik_ayah;?></td>
                                                    	<td><?php echo $nama_ayah;?></td>
                                                    	<td><?php echo $tmpl_ayah;?></td>
                                                    	<td><?php echo $tgll_ayah;?></td>
                                                    	<td><img src="../dataFoto/scan_ktp/scan_ktp_lahir/<?php echo $scan_ktp1;?>" width="50" height="50" alt=""></td>
                                                    	<td><?php echo $nik_ibu;?></td>
                                                    	<td><?php echo $nama_ibu;?></td>
                                                    	<td><?php echo $tmpl_ibu;?></td>
                                                    	<td><?php echo $tgll_ibu;?></td>
                                                    	<td><img src="../dataFoto/scan_ktp/scan_ktp_lahir/<?php echo $scan_ktp2;?>" width="50" height="50" alt=""></td>
                                                    	<td><?php echo $saksi1;?></td>
                                                    	<td><?php echo $nik_saksi1;?></td>
                                                    	<td><?php echo $umur_saksi1;?></td>
                                                    	<td><?php echo $saksi2;?></td>
                                                    	<td><?php echo $nik_saksi2;?></td>
                                                    	<td><?php echo $umur_saksi2;?></td>
														<td><?php echo $nama_anak;?></td>
														<td><?php echo $tmpl_anak;?></td>
														<td><?php echo $tgllahir_anak;?></td>
														<td><?php echo $alamat_anak;?></td>
														<td><?php echo $keperluan;?></td>
														<td><img src="../dataFoto/scan_kk/<?php echo $kk;?>" width="50" height="50" alt=""></td>
														<td><img src="../dataFoto/scan_rumahsakit/<?php echo $rumahsakit;?>" width="50" height="50" alt=""></td>
														<td><?php echo $keterangan;?></td>
														<td><?php echo $status;?></td>
														<td>
															
															<input type="checkbox" name="check[$i]" value="<?php echo $id_request_skl;?>">
															<input type="submit" name="acc" class="btn btn-primary btn-sm" value="ACC">
															<div class="form-button-action">
																<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Cek Data" href="?halaman=detail_skl&id_request_skl=<?= $id_request_skl;?>">
																<i class="fa fa-edit"></i></a>
															</div>
														</td>
													</tr>
													<?php
														}
													?>
												</tbody>
											</table>
										</div>
									</form>
									</div>
							</div>
                        </div>
                        
					</div>
				</div>

				<?php
    if(isset($_POST['acc'])){
        if(isset($_POST['check']))
        {
                    foreach ($_POST['check'] as $value){
                        // echo $value;
                        $ubah = "UPDATE data_request_skl set status =1 where id_request_skl = $value"; 

                        $query = mysqli_query($konek,$ubah);

                        if($query) {
                            echo "<script language='javascript'>swal('Selamat...', 'ACC Staf Berhasil!', 'success');</script>" ;
                            echo '<meta http-equiv="refresh" content="3; url=?halaman=sudah_acc_skl">';
                        }else{
                            echo "<script language='javascript'>swal('Gagal...', 'ACC Staf Gagal!', 'error');</script>" ;
                            echo '<meta http-equiv="refresh" content="3; url=?halaman=sudah_acc_skl">';
                        }

                    }
        }
    }
?>
 <?php
    }
 ?>