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
										<h4 class="fw-bold text-uppercase">TAMPIL ACC REQUEST SURAT KETERANGAN BEDA DATA</h4>
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
	                                                    <th>Nama Lengkap</th>
	                                                    <th>Data Yang Bermasalah</th>
	                                                    <th>Data Yang Salah</th>
	                                                    <th>Data Rujukan Yang Salah</th>
	                                                    <th>Keterangan Data Yang Salah</th>
	                                                    <th>Data Yang Benar</th>
	                                                    <th>Data Rujukan Yang Benar</th>
														<th>Scan KTP</th>
														<th>Scan KK</th>
														<th>Scan Berkas Data Yang Berbeda</th>
														<th>Status</th>
														<th style="width: 10%">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
														$i=1;
														$sql = "SELECT * FROM data_request_skbd natural join data_pemohon WHERE status=1";
														$query = mysqli_query($konek,$sql);
														while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
															$id_request_skbd=$data['id_request_skbd'];
															$tgl = $data['tanggal_request'];
															$format = date('d F Y', strtotime($tgl));
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
															$keterangan = $data['keterangan'];
															$status = $data['status'];

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
		                                                    <td><?php echo $databermasalah;?></td>
		                                                    <td><?php echo $datasalahinput;?></td>
															<td><?php echo $datasalah;?></td>
		                                                    <td><?php echo $ktrdatasalah;?></td>
		                                                    <td><?php echo $databenarinput;?></td>
		                                                    <td><?php echo $databenar;?></td>
															<td><img src="../dataFoto/scan_ktp/<?php echo $ktp;?>" width="50" height="50" alt=""></td>
															<td><img src="../dataFoto/scan_kk/<?php echo $kk;?>" width="50" height="50" alt=""></td>
															<td><img src="../dataFoto/scan_berkasbeda/<?php echo $berkasbeda;?>" width="50" height="50" alt=""></td>
															<!-- <td><?php echo $keterangan;?></td> -->
															<td><i><?= $keterangan;?></i></td>
														<td>
															
															<input type="checkbox" name="check[$i]" value="<?php echo $id_request_skbd;?>">
															<input type="submit" name="acc" class="btn btn-primary btn-sm" value="ACC">
															<div class="form-button-action">
																<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Cek Data" href="?halaman=detail_skbd&id_request_skbd=<?= $id_request_skbd;?>">
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
                        $ubah = "UPDATE data_request_skbd set status =2 where id_request_skbd = $value"; 

                        $query = mysqli_query($konek,$ubah);

                        if($query) {
                            echo "<script language='javascript'>swal('Selamat...', 'ACC Staf Berhasil!', 'success');</script>" ;
                            echo '<meta http-equiv="refresh" content="3; url=?halaman=sudah_acc_skbd">';
                        }else{
                            echo "<script language='javascript'>swal('Gagal...', 'ACC Staf Gagal!', 'error');</script>" ;
                            echo '<meta http-equiv="refresh" content="3; url=?halaman=sudah_acc_skbd">';
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
										<h4 class="fw-bold text-uppercase">TAMPIL ACC REQUEST SURAT KETERANGAN BEDA DATA</h4>
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
	                                                    <th>Nama Lengkap</th>
	                                                    <th>Data Yang Bermasalah</th>
	                                                    <th>Data Yang Salah</th>
	                                                    <th>Data Rujukan Yang Salah</th>
	                                                    <th>Keterangan Data Yang Salah</th>
	                                                    <th>Data Yang Benar</th>
	                                                    <th>Data Rujukan Yang Benar</th>
														<th>Scan KTP</th>
														<th>Scan KK</th>
														<th>Scan Berkas Data Yang Berbeda</th>
														<th>Status</th>
														<th style="width: 10%">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
														$i=1;
														$sql = "SELECT * FROM data_request_skbd natural join data_pemohon WHERE status=0 and lingkungan = '$lingkungan_tgs'";
														$query = mysqli_query($konek,$sql);
														while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
															$id_request_skbd=$data['id_request_skbd'];
															$tgl = $data['tanggal_request'];
															$format = date('d F Y', strtotime($tgl));
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
															$keterangan = $data['keterangan'];
															$status = $data['status'];

															if($status=="1"){
																$status = "<b style='color:blue'>ACC</b>";
															}elseif($status=="0"){
																$status = "<b style='color:red'>BELUM ACC</b>";
															}
													?>
													<tr>
															<td><?php echo $format;?></td>
		                                                    <td><?php echo $nik;?></td>
		                                                    <td><?php echo $nama;?></td>
		                                                    <td><?php echo $databermasalah;?></td>
		                                                    <td><?php echo $datasalahinput;?></td>
															<td><?php echo $datasalah;?></td>
		                                                    <td><?php echo $ktrdatasalah;?></td>
		                                                    <td><?php echo $databenarinput;?></td>
		                                                    <td><?php echo $databenar;?></td>
															<td><img src="../dataFoto/scan_ktp/<?php echo $ktp;?>" width="50" height="50" alt=""></td>
															<td><img src="../dataFoto/scan_kk/<?php echo $kk;?>" width="50" height="50" alt=""></td>
															<td><img src="../dataFoto/scan_berkasbeda/<?php echo $berkasbeda;?>" width="50" height="50" alt=""></td>
															<!-- <td><?php echo $keterangan;?></td> -->
															<td><i><?= $keterangan;?></i></td>
														<td>
															
															<input type="checkbox" name="check[$i]" value="<?php echo $id_request_skbd;?>">
															<input type="submit" name="acc" class="btn btn-primary btn-sm" value="ACC">
															<div class="form-button-action">
																<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Cek Data" href="?halaman=detail_skbd&id_request_skbd=<?= $id_request_skbd;?>">
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
                        $ubah = "UPDATE data_request_skbd set status =1 where id_request_skbd = $value"; 

                        $query = mysqli_query($konek,$ubah);

                        if($query) {
                            echo "<script language='javascript'>swal('Selamat...', 'ACC Staf Berhasil!', 'success');</script>" ;
                            echo '<meta http-equiv="refresh" content="3; url=?halaman=sudah_acc_skbd">';
                        }else{
                            echo "<script language='javascript'>swal('Gagal...', 'ACC Staf Gagal!', 'error');</script>" ;
                            echo '<meta http-equiv="refresh" content="3; url=?halaman=sudah_acc_skbd">';
                        }

                    }
        }
    }
?>
 <?php
    }
 ?>