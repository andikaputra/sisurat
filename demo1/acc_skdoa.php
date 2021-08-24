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
										<h4 class="fw-bold text-uppercase">TAMPIL ACC REQUEST SURAT KETERANGAN DOMISILI ORANG ASING</h4>
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
                                                    	<th>Nama Sponsor</th>
                                                    	<th>Nama Orang Asing</th>
														<th>Tempat Lahir</th>
														<th>Tanggal Lahir</th>
														<th>Pekerjaan</th>
														<th>Kebangsaan</th>
														<th>Tempat Tinggal</th>
														<th>No Paspor</th>
														<th>Masa Berlaku Paspor</th>
														<th>No KITAS</th>
														<th>Masa Berlaku KITAS</th>
														<th>Surat Laporan Kepolisian</th>
														<th>Status</th>
														<th>Keterangan</th>
														<th style="width: 10%">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
														$i=1;
														$sql = "SELECT * FROM data_request_skdoa natural join data_pemohon WHERE status=1";
														$query = mysqli_query($konek,$sql);
														while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
															$id_request_skdoa=$data['id_request_skdoa'];
															$tgl = $data['tanggal_request'];
															$format = date('d F Y', strtotime($tgl));
															$nik = $data['nik'];
                                                        	$nama = $data['nama'];
															$status = $data['status'];
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
                                                    	<td><?php echo $norangasing;?></td>
                                                    	<td><?php echo $tmpl;?></td>
                                                    	<td><?php echo $tgllahir;?></td>
                                                    	<td><?php echo $kerja;?></td>
                                                    	<td><?php echo $bangsa;?></td>
                                                   		<td><?php echo $tinggal;?></td>
                                                    	<td><?php echo $nopaspor;?></td>
														<!--<td><img src="../dataFoto/scan_paspor/<?php echo $paspor;?>" width="50" height="50" alt=""></td>-->
														<td><?php echo $masapaspor;?></td>
														<td><?php echo $nokitas;?></td>
														<!--<td><img src="../dataFoto/scan_kitas/<?php echo $kitas;?>" width="50" height="50" alt=""></td>-->
														<td><?php echo $masakitas;?></td>
														
														<!--<td><img src="../dataFoto/scan_sponsor/<?php echo $sponsor;?>" width="50" height="50" alt=""></td>-->
														
														<td><img src="../dataFoto/scan_kepolisian/<?php echo $kepolisian;?>" width="50" height="50" alt=""></td>
														<td><?php echo $status;?></td>
														<td><?php echo $keterangan;?></td>

														<td>	
															<input type="checkbox" name="check[$i]" value="<?php echo $id_request_skdoa;?>">
															<input type="submit" name="acc" class="btn btn-primary btn-sm" value="ACC">
															<div class="form-button-action">
																<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Cek Data" href="?halaman=detail_skdoa&id_request_skdoa=<?= $id_request_skdoa;?>">
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
                        $ubah = "UPDATE data_request_skdoa set status =2 where id_request_skdoa = $value"; 

                        $query = mysqli_query($konek,$ubah);

                        if($query) {
                            echo "<script language='javascript'>swal('Selamat...', 'ACC Staf Berhasil!', 'success');</script>" ;
                            echo '<meta http-equiv="refresh" content="3; url=?halaman=sudah_acc_skdoa">';
                        }else{
                            echo "<script language='javascript'>swal('Gagal...', 'ACC Staf Gagal!', 'error');</script>" ;
                            echo '<meta http-equiv="refresh" content="3; url=?halaman=sudah_acc_skdoa">';
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
										<h4 class="fw-bold text-uppercase">TAMPIL ACC REQUEST SURAT KETERANGAN DOMISILI ORANG ASING</h4>
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
                                                    	<th>Nama Sponsor</th>
                                                    	<th>Nama Orang Asing</th>
														<th>Tempat Lahir</th>
														<th>Tanggal Lahir</th>
														<th>Pekerjaan</th>
														<th>Kebangsaan</th>
														<th>Tempat Tinggal</th>
														<th>No Paspor</th>
														<th>Masa Berlaku Paspor</th>
														<th>No KITAS</th>
														<th>Masa Berlaku KITAS</th>
														<th>Surat Laporan Kepolisian</th>
														<th>Status</th>
														<th>Keterangan</th>
														<th style="width: 10%">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
														$i=1;
														$sql = "SELECT * FROM data_request_skdoa natural join data_pemohon WHERE status=0 and lingkungan = '$lingkungan_tgs'";
														$query = mysqli_query($konek,$sql);
														while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
															$id_request_skdoa=$data['id_request_skdoa'];
															$tgl = $data['tanggal_request'];
															$format = date('d F Y', strtotime($tgl));
															$nik = $data['nik'];
                                                        	$nama = $data['nama'];
															$status = $data['status'];
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
                                                    	<td><?php echo $norangasing;?></td>
                                                    	<td><?php echo $tmpl;?></td>
                                                    	<td><?php echo $tgllahir;?></td>
                                                    	<td><?php echo $kerja;?></td>
                                                    	<td><?php echo $bangsa;?></td>
                                                   		<td><?php echo $tinggal;?></td>
                                                    	<td><?php echo $nopaspor;?></td>
														<!--<td><img src="../dataFoto/scan_paspor/<?php echo $paspor;?>" width="50" height="50" alt=""></td>-->
														<td><?php echo $masapaspor;?></td>
														<td><?php echo $nokitas;?></td>
														<!--<td><img src="../dataFoto/scan_kitas/<?php echo $kitas;?>" width="50" height="50" alt=""></td>-->
														<td><?php echo $masakitas;?></td>
														<!--<td><img src="../dataFoto/scan_sponsor/<?php echo $sponsor;?>" width="50" height="50" alt=""></td>-->
														<td><img src="../dataFoto/scan_kepolisian/<?php echo $kepolisian;?>" width="50" height="50" alt=""></td>
														<td><?php echo $status;?></td>
														<td><?php echo $keterangan;?></td>
														<td>
															
															<input type="checkbox" name="check[$i]" value="<?php echo $id_request_skdoa;?>">
															<input type="submit" name="acc" class="btn btn-primary btn-sm" value="ACC">
															<div class="form-button-action">
																<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Cek Data" href="?halaman=detail_skdoa&id_request_skdoa=<?= $id_request_skdoa;?>">
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
                        $ubah = "UPDATE data_request_skdoa set status =1 where id_request_skdoa = $value"; 

                        $query = mysqli_query($konek,$ubah);

                        if($query) {
                            echo "<script language='javascript'>swal('Selamat...', 'ACC Kaling Berhasil!', 'success');</script>" ;
                            echo '<meta http-equiv="refresh" content="5; url=?halaman=sudah_acc_skdoa">';
                        }else{
                            echo "<script language='javascript'>swal('Gagal...', 'ACC Kaling Gagal!', 'error');</script>" ;
                            echo '<meta http-equiv="refresh" content="5; url=?halaman=sudah_acc_skdoa">';
                        }

                    }
        }
    }
?>
 <?php
    }
 ?>