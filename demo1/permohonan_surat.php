<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
                <div class="page-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">STATUS REQUEST SURAT KETERANGAN BELUM PERNAH KAWIN</h4>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="add1" class="display table table-striped table-hover" >
											<thead>
												<tr>
                                                    <th>Tanggal Request</th>
                                                    <th>NIK</th>
                                                    <th>Nama Lengkap</th>
													<th>Scan KTP</th>
													<th>Scan KK</th>
													<th>Keperluan</th>
													<th>Status</th>
													<th>Keterangan</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
                                                <?php
                                                    $sql = "SELECT * FROM data_request_skbpk natural join data_pemohon WHERE status=4";
                                                    $query = mysqli_query($konek,$sql);
                                                    while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
                                                        $id_request_skbpk=$data['id_request_skbpk'];
														$tgl = $data['tanggal_request'];
														$format = date('d F Y', strtotime($tgl));
                                                        $nik = $data['nik'];
                                                        $nama = $data['nama'];
														$status = $data['status'];
														$ktp = $data['scan_ktp'];
														$kk = $data['scan_kk'];
														$keperluan = $data['keperluan'];
														$status = $data['status'];
														$keterangan = $data['keterangan'];

                                                        if($status=="1"){
                                                            $status = "<b style='color:green'>Sudah ACC Kaling</b>";
                                                        }elseif($status=="0"){
                                                            $status = "<b style='color:red'>BELUM ACC kaling</b>";
                                                        }elseif($status=="2"){
															$status = "<b style='color:blue'>Sudah ACC staff</b>";
                                                        }elseif($status=="3"){
															$status = "<b style='color:blue'>SURAT SUDAH DICETAK</b>";
														}elseif($status=="4"){
															$status = "<b style='color:green'>Sudah ACC Lurah</b>";
														}
                                                ?>
												<tr>
													<td><?php echo $format;?></td>
                                                    <td><?php echo $nik;?></td>
                                                    <td><?php echo $nama;?></td>
													<td><img src="../dataFoto/scan_ktp/<?php echo $ktp;?>" width="50" height="50" alt=""></td>
													<td><img src="../dataFoto/scan_kk/<?php echo $kk;?>" width="50" height="50" alt=""></td>
													
													<td><?php echo $keperluan;?></td>
													<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status;?></td>
													<td><?php echo $keterangan;?></td>
													<td>
														<div class="form-button-action">
															<a href="?halaman=view_cetak_skbpk&id_request_skbpk=<?=$id_request_skbpk;?>">
																<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
																	<i class="fa fa-print"></i>
																</button>
															</a>
														</div>
													</td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
                        </div>
                        
                       						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">STATUS REQUEST SURAT KETERANGAN KELAKUAN BAIK</h4>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="add3" class="display table table-striped table-hover" >
											<thead>
												<tr>
                                                    <th>Tanggal Request</th>
                                                    <th>NIK</th>
                                                    <th>Nama Lengkap</th>
													<th>Scan KTP</th>
													<th>Scan KK</th>
													<th>Keperluan</th>
													<th>Status</th>
													<th>Keterangan</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
                                                <?php
                                                    $sql = "SELECT * FROM data_request_skb natural join data_pemohon WHERE status=4";
                                                    $query = mysqli_query($konek,$sql);
                                                    while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
														$tgl = $data['tanggal_request'];
														$format = date('d F Y', strtotime($tgl));
                                                        $nik = $data['nik'];
                                                        $nama = $data['nama'];
														$status = $data['status'];
														$ktp = $data['scan_ktp'];
														$kk = $data['scan_kk'];
														$keperluan = $data['keperluan'];
														$keterangan = $data['keterangan'];
														$status = $data['status'];
														$id_request_skb=$data['id_request_skb'];
														

                                                        if($status=="1"){
                                                            $status = "<b style='color:green'>Sudah ACC Kaling</b>";
                                                        }elseif($status=="0"){
                                                            $status = "<b style='color:red'>BELUM ACC kaling</b>";
                                                        }elseif($status=="2"){
															$status = "<b style='color:blue'>Sudah ACC staff</b>";
                                                        }elseif($status=="3"){
															$status = "<b style='color:blue'>SURAT SUDAH DICETAK</b>";
														}elseif($status=="4"){
															$status = "<b style='color:green'>Sudah ACC Lurah</b>";
														}
														
                                                ?>
												<tr>
													<td><?php echo $format;?></td>
                                                    <td><?php echo $nik;?></td>
													<td><?php echo $nama;?></td>
													<td><img src="../dataFoto/scan_ktp/<?php echo $ktp;?>" width="50" height="50" alt=""></td>
													<td><img src="../dataFoto/scan_kk/<?php echo $kk;?>" width="50" height="50" alt=""></td>
													<td><?php echo $keperluan;?></td>
													<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status;?></td>
													<td><i><?php echo $keterangan;?></i></td>
													<td>
														<div class="form-button-action">
														<a href="?halaman=view_cetak_skb&id_request_skb=<?=$id_request_skb;?>">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
																<i class="fa fa-print"></i>
															</button>
														</a>
															
														</div>
													</td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">STATUS REQUEST SURAT KETERANGAN USAHA</h4>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="add2" class="display table table-striped table-hover" >
											<thead>
												<tr>
                                                    <th>Tanggal Request</th>
                                                    <th>NIK</th>
                                                    <th>Nama Lengkap</th>
													<th>Scan KTP</th>
													<th>Scan KK</th>
													<th>Status</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
                                                <?php
                                                    $sql = "SELECT * FROM data_request_sku natural join data_pemohon WHERE status=2";
                                                    $query = mysqli_query($konek,$sql);
                                                    while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
														$tgl = $data['tanggal_request'];
														$format = date('d F Y', strtotime($tgl));
                                                        $nik = $data['nik'];
                                                        $nama = $data['nama'];
														$status = $data['status'];
														$ktp = $data['scan_ktp'];
														$kk = $data['scan_kk'];
														$usaha  = $data['usaha'];
														$keperluan = $data['keperluan'];
														$keterangan = $data['keterangan'];
														$id_request_sku = $data['id_request_sku'];

														if($status=="1"){
                                                            $status = "<b style='color:green'>Sudah ACC Kaling</b>";
                                                        }elseif($status=="0"){
                                                            $status = "<b style='color:red'>BELUM ACC kaling</b>";
                                                        }elseif($status=="2"){
															$status = "<b style='color:blue'>Sudah ACC staff</b>";
                                                        }elseif($status=="3"){
															$status = "<b style='color:blue'>SURAT SUDAH DICETAK</b>";
														}elseif($status=="4"){
															$status = "<b style='color:green'>Sudah ACC Lurah</b>";
														}
                                                ?>
												<tr>
													<td><?php echo $format;?></td>
                                                    <td><?php echo $nik;?></td>
                                                    <td><?php echo $nama;?></td>
													<td><img src="../dataFoto/scan_ktp/<?php echo $ktp;?>" width="50" height="50" alt=""></td>
													<td><img src="../dataFoto/scan_kk/<?php echo $kk;?>" width="50" height="50" alt=""></td>
													<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status;?></td>
													<td>
														<div class="form-button-action">
														<a href="?halaman=view_cetak_sku&id_request_sku=<?=$id_request_sku;?>">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
																<i class="fa fa-print"></i>
															</button>
														</a>
															
														</div>
													</td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
                        </div>

                        <div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">STATUS REQUEST SURAT KETERANGAN BEDA DATA</h4>
									</div>
								</div>
								<form method="POST">
								<div class="card-body">
									<div class="table-responsive">
										<table id="add4" class="display table table-striped table-hover" >
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
														<th>Keterangan</th>
														<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
											
                                                <?php
                                                    $sql = "SELECT * FROM data_request_skbd natural join data_pemohon where status=4";
                                                    $query = mysqli_query($konek,$sql);
                                                    while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
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
															$id_request_skbd = $data['id_request_skbd'];

                                                        if($status=="1"){
                                                            $status = "<b style='color:green'>Sudah ACC Kaling</b>";
                                                        }elseif($status=="0"){
                                                            $status = "<b style='color:red'>BELUM ACC kaling</b>";
                                                        }elseif($status=="2"){
															$status = "<b style='color:blue'>Sudah ACC staff</b>";
                                                        }elseif($status=="3"){
															$status = "<b style='color:blue'>SURAT SUDAH DICETAK</b>";
														}elseif($status=="4"){
															$status = "<b style='color:green'>Sudah ACC Lurah</b>";
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
														<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status;?></td>
														<td><?php echo $keterangan;?></td>
														<td>
														<div class="form-button-action">
														<a href="?halaman=view_cetak_skbd&id_request_skbd=<?=$id_request_skbd;?>">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
																<i class="fa fa-print"></i>
															</button>
														</a>
															
														</div>
													</td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
												<?php
													if(isset($_POST['kirim'])){
														$keterangan=$_POST['keterangan'];
														$sql = mysqli_query($konek, "UPDATE data_request_skbd SET
														keterangan='$keterangan', status='3' WHERE id_request_skbd='$id_request_skbd'");
														  if($sql) {
															echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil!', 'success');</script>" ;
															echo '<meta http-equiv="refresh" content="3; url=?halaman=permohonan_surat">';
														}else{
															echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal!', 'error');</script>" ;
															echo '<meta http-equiv="refresh" content="3; url=?halaman=permohonan_surat">';
														}

													}
													?>
											</tbody>
										</table>
									</div>
								</div>
								</form>
							</div>
						</div>
                        
                        
						<!--<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">STATUS REQUEST SURAT KETERANGAN PAMIT</h4>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="add3" class="display table table-striped table-hover" >
											<thead>
												<tr>
                                                    <th>Tanggal Request</th>
                                                    <th>NIK</th>
                                                    <th>Nama Lengkap</th>
													<th>Scan KTP</th>
													<th>Scan KK</th>
													<th>Keperluan</th>
													<th>Status</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
                                                <?php
                                                    $sql = "SELECT * FROM data_request_skp natural join data_pemohon where status=2";
                                                    $query = mysqli_query($konek,$sql);
                                                    while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
														$tgl = $data['tanggal_request'];
														$format = date('d F Y', strtotime($tgl));
                                                        $nik = $data['nik'];
                                                        $nama = $data['nama'];
														$status = $data['status'];
														$ktp = $data['scan_ktp'];
														$kk = $data['scan_kk'];
														$keperluan = $data['keperluan'];
														$keterangan = $data['keterangan'];
														$id_request_skp = $data['id_request_skp'];
														

														if($status=="1"){
                                                            $status = "<b style='color:green'>Sudah ACC Kaling</b>";
                                                        }elseif($status=="0"){
                                                            $status = "<b style='color:red'>BELUM ACC kaling</b>";
                                                        }elseif($status=="2"){
															$status = "<b style='color:blue'>Sudah ACC staff</b>";
                                                        }elseif($status=="3"){
															$status = "<b style='color:blue'>SURAT SUDAH DICETAK</b>";
														}elseif($status=="4"){
															$status = "<b style='color:green'>Sudah ACC Lurah</b>";
														}
                                                ?>
												<tr>
													<td><?php echo $format;?></td>
                                                    <td><?php echo $nik;?></td>
													<td><?php echo $nama;?></td>
													<td><img src="../dataFoto/scan_ktp/<?php echo $ktp;?>" width="50" height="50" alt=""></td>
													<td><img src="../dataFoto/scan_kk/<?php echo $kk;?>" width="50" height="50" alt=""></td>
													<td><?php echo $keperluan;?></td>
													<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status;?></td>
													<td>
														<div class="form-button-action">
															<a href="?halaman=view_cetak_skp&id_request_skp=<?=$id_request_skp;?>">
																<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
																	<i class="fa fa-edit"></i>
																</button>
															</a>
														</div>
													</td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
                        </div>-->
                        
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">STATUS REQUEST SURAT KETERANGAN DOMISILI</h4>
									</div>
								</div>
								<form method="POST">
								<div class="card-body">
									<div class="table-responsive">
										<table id="add4" class="display table table-striped table-hover" >
											<thead>
												<tr>
                                                    <th>Tanggal Request</th>
                                                    <th>NIK</th>
                                                    <th>Nama Lengkap</th>
													<th>Scan KTP</th>
													<th>Scan KK</th>
													<th>Status</th>
													<th>Keperluan</th>
													<th>Keterangan</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
											
                                                <?php
                                                    $sql = "SELECT * FROM data_request_skd natural join data_pemohon where status=4";
                                                    $query = mysqli_query($konek,$sql);
                                                    while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
														$tgl = $data['tanggal_request'];
														$format = date('d F Y', strtotime($tgl));
                                                        $nik = $data['nik'];
                                                        $nama = $data['nama'];
														$status = $data['status'];
														$ktp = $data['scan_ktp'];
														$kk = $data['scan_kk'];
														$keperluan = $data['keperluan'];
														$keterangan = $data['keterangan'];
														$id_request_skd=$data['id_request_skd'];

                                                        if($status=="1"){
                                                            $status = "<b style='color:green'>Sudah ACC Kaling</b>";
                                                        }elseif($status=="0"){
                                                            $status = "<b style='color:red'>BELUM ACC kaling</b>";
                                                        }elseif($status=="2"){
															$status = "<b style='color:blue'>Sudah ACC staff</b>";
                                                        }elseif($status=="3"){
															$status = "<b style='color:blue'>SURAT SUDAH DICETAK</b>";
														}elseif($status=="4"){
															$status = "<b style='color:green'>Sudah ACC Lurah</b>";
														}
                                                ?>
												<tr>
													<td><?php echo $format;?></td>
                                                    <td><?php echo $nik;?></td>
                                                    <td><?php echo $nama;?></td>
													<td><img src="../dataFoto/scan_ktp/<?php echo $ktp;?>" width="50" height="50" alt=""></td>
													<td><img src="../dataFoto/scan_kk/<?php echo $kk;?>" width="50" height="50" alt=""></td>
													<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status;?></td>
													<td><?php echo $keperluan;?></td>
													<td><i><?= $keterangan;?></i></td>
													<td>
														<div class="form-button-action">
														<a href="?halaman=view_cetak_skd&id_request_skd=<?=$id_request_skd;?>">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
																<i class="fa fa-print"></i>
															</button>
														</a>
															
														</div>
													</td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
												<?php
				if(isset($_POST['kirim'])){
					$keterangan=$_POST['keterangan'];
					$sql = mysqli_query($konek, "UPDATE data_request_skd SET
					keterangan='$keterangan', status='3' WHERE id_request_skd='$id_request_skd'");
					  if($sql) {
						echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil!', 'success');</script>" ;
						echo '<meta http-equiv="refresh" content="3; url=?halaman=permohonan_surat">';
					}else{
						echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal!', 'error');</script>" ;
						echo '<meta http-equiv="refresh" content="3; url=?halaman=permohonan_surat">';
					}

				}
				?>
											</tbody>
										</table>
									</div>
								</div>
								</form>
							</div>
						</div>
                        
             						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">STATUS REQUEST SURAT KETERANGAN DOMISILI ORANG ASING</h4>
									</div>
								</div>
								<div class="card-body">
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
                                                   $sql = "SELECT * FROM data_request_skdoa natural join data_pemohon where status=4";
                                                    $query = mysqli_query($konek,$sql);
                                                    while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
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
														$id_request_skdoa=$data['id_request_skdoa'];

      													if($status=="1"){
                                                            $status = "<b style='color:green'>Sudah ACC Kaling</b>";
                                                        }elseif($status=="0"){
                                                            $status = "<b style='color:red'>BELUM ACC kaling</b>";
                                                        }elseif($status=="2"){
															$status = "<b style='color:blue'>Sudah ACC staff</b>";
                                                        }elseif($status=="3"){
															$status = "<b style='color:blue'>SURAT SUDAH DICETAK</b>";
														}elseif($status=="4"){
															$status = "<b style='color:green'>Sudah ACC Lurah</b>";
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
													<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status;?></td>
													<td><i><?= $keterangan;?></i></td>
													<td>
														<div class="form-button-action">
														<a href="?halaman=view_cetak_skdoa&id_request_skdoa=<?=$id_request_skdoa;?>">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
																<i class="fa fa-print"></i>
															</button>
														</a>
															
														</div>
													</td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
                                                <?php
													if(isset($_POST['kirim'])){
														$keterangan=$_POST['keterangan'];
														$sql = mysqli_query($konek, "UPDATE data_request_skdoa SET
														keterangan='$keterangan', status='3' WHERE id_request_skdoa='$id_request_skdoa'");
														  if($sql) {
															echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil!', 'success');</script>" ;
															echo '<meta http-equiv="refresh" content="3; url=?halaman=permohonan_surat">';
														}else{
															echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal!', 'error');</script>" ;
															echo '<meta http-equiv="refresh" content="3; url=?halaman=permohonan_surat">';
														}

													}
													?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
                        </div>


                        <div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">STATUS REQUEST SURAT KETERANGAN KELAHIRAN</h4>
									</div>
								</div>
								<form method="POST">
								<div class="card-body">
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
                                                    	<th>Scan Kartu keluarga</th>
                                                    	<th>Scan Surat Lahir Rumah Sakit</th>
                                                    	<th>Status</th>
														<th>Keterangan</th>
														<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
											
                                                <?php
                                                    $sql = "SELECT * FROM data_request_skl natural join data_pemohon where status=4";
                                                    $query = mysqli_query($konek,$sql);
                                                    while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
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
															$kk = $data['scan_kk'];
    														$rumahsakit = $data['scan_rumahsakit'];
    														$keterangan = $data['keterangan'];
															$id_request_skl = $data['id_request_skl'];

                                                        if($status=="1"){
                                                            $status = "<b style='color:green'>Sudah ACC Kaling</b>";
                                                        }elseif($status=="0"){
                                                            $status = "<b style='color:red'>BELUM ACC kaling</b>";
                                                        }elseif($status=="2"){
															$status = "<b style='color:blue'>Sudah ACC staff</b>";
                                                        }elseif($status=="3"){
															$status = "<b style='color:blue'>SURAT SUDAH DICETAK</b>";
														}elseif($status=="4"){
															$status = "<b style='color:green'>Sudah ACC Lurah</b>";
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
														<td><img src="../dataFoto/scan_kk/<?php echo $kk;?>" width="50" height="50" alt=""></td>
														<td><img src="../dataFoto/scan_rumahsakit/<?php echo $rumahsakit;?>" width="50" height="50" alt=""></td>
														<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status;?></td>
														<td><?php echo $keterangan;?></td>
													<td>
														<div class="form-button-action">
														<a href="?halaman=view_cetak_skl&id_request_skl=<?=$id_request_skl;?>">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
																<i class="fa fa-print"></i>
															</button>
														</a>
															
														</div>
													</td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
												<?php
													if(isset($_POST['kirim'])){
														$keterangan=$_POST['keterangan'];
														$sql = mysqli_query($konek, "UPDATE data_request_skl SET
														keterangan='$keterangan', status='3' WHERE id_request_skl='$id_request_skl'");
														  if($sql) {
															echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil!', 'success');</script>" ;
															echo '<meta http-equiv="refresh" content="3; url=?halaman=permohonan_surat">';
														}else{
															echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal!', 'error');</script>" ;
															echo '<meta http-equiv="refresh" content="3; url=?halaman=permohonan_surat">';
														}

													}
													?>
											</tbody>
										</table>
									</div>
								</div>
								</form>
							</div>
						</div>


						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">STATUS REQUEST SURAT KETERANGAN KEMATIAN</h4>
									</div>
								</div>
								<form method="POST">
								<div class="card-body">
									<div class="table-responsive">
										<table id="add4" class="display table table-striped table-hover" >
											<thead>
												<tr>
	                                                    <th>Tanggal Request</th>
	                                                    <th>NIK Yang Menyatakan</th>
	                                                    <th>Nama Yang Menyatakan</th>
	                                                    <th>NIK Jenazah</th>
	                                                    <th>Nama Lengkap Jenazah</th>
	                                                    <th>Tempat Lahir Jenazah</th>
	                                                    <th>Tanggal Lahir Jenazah</th>
	                                                    <th>Alamat Jenazah</th>
	                                                    <th>Agama Jenazah</th>
	                                                    <th>Tanggal Meninggal Jenazah</th>
	                                                    <th>KTP Jenazah</th>
	                                                    <th>KK Jenazah</th>
	                                                    <th>Surat Keterangan Rumah Sakit</th>
	                                                    <th>KTP Ahli Waris</th>

														<th>Scan KTP Saksi 1</th>
														<th>Nama Saksi 1</th>
														<th>NIK Saksi 1</th>
														<th>Tempat Lahir Saksi 1</th>
														<th>Tanggal Lahir Saksi 1</th>

														<th>Scan KTP Saksi 2</th>
														<th>Nama Saksi 2</th>
														<th>NIK Saksi 2</th>
														<th>Tempat Lahir Saksi 2</th>
														<th>Tanggal Lahir Saksi 2</th>

                                                    	<th>Status</th>
														<th>Keterangan</th>
														<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
											
                                                <?php
                                                    $sql = "SELECT * FROM data_request_skkm natural join data_pemohon where status=4";
                                                    $query = mysqli_query($konek,$sql);
                                                    while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
														$tgl = $data['tanggal_request'];
															$format = date('d F Y', strtotime($tgl));
															$nik = $data['nik'];
                                                        	$nama = $data['nama'];
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

															$keterangan = $data['keterangan'];
															$id_request_skkm = $data['id_request_skkm'];

                                                        if($status=="1"){
                                                            $status = "<b style='color:green'>Sudah ACC Kaling</b>";
                                                        }elseif($status=="0"){
                                                            $status = "<b style='color:red'>BELUM ACC kaling</b>";
                                                        }elseif($status=="2"){
															$status = "<b style='color:blue'>Sudah ACC staff</b>";
                                                        }elseif($status=="3"){
															$status = "<b style='color:blue'>SURAT SUDAH DICETAK</b>";
														}elseif($status=="4"){
															$status = "<b style='color:green'>Sudah ACC Lurah</b>";
														}
                                                ?>
												<tr>
														<td><?php echo $format;?></td>
	                                                    <td><?php echo $nik;?></td>
	                                                    <td><?php echo $nama;?></td>
	                                                    <td><?php echo $nikjenazah;?></td>
	                                                    <td><?php echo $namajenazah;?></td>
	                                                    <td><?php echo $tempatlahirjenazah;?></td>
	                                                    <td><?php echo $tgllahirjenazah;?></td>
	                                                    <td><?php echo $alamatjenazah;?></td>
	                                                    <td><?php echo $agamajenazah;?></td>
	                                                    <td><?php echo $tglmeninggal;?></td>
	                                                    <td><img src="../dataFoto/scan_ktp/<?php echo $ktp;?>" width="50" height="50" alt=""></td>
	                                                    <td><img src="../dataFoto/scan_kk/<?php echo $kk;?>" width="50" height="50" alt=""></td>
														<td><img src="../dataFoto/scan_rumahsakit/<?php echo $rumahsakit;?>" width="50" height="50" alt=""></td>
														<td><img src="../dataFoto/scan_ahliwaris/<?php echo $ahliwaris;?>" width="50" height="50" alt=""></td>

														<td><img src="../dataFoto/scan_ktp1/<?php echo $ktp1;?>" width="50" height="50" alt=""></td>
														<td><?php echo $nama1;?></td>
														<td><?php echo $nik1;?></td>
														<td><?php echo $tmplhr1;?></td>
														<td><?php echo $tgllhr1;?></td>

														<td><img src="../dataFoto/scan_ktp2/<?php echo $ktp2;?>" width="50" height="50" alt=""></td>
														<td><?php echo $nama2;?></td>
														<td><?php echo $nik2;?></td>
														<td><?php echo $tmplhr2;?></td>
														<td><?php echo $tgllhr2;?></td>
														<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status;?></td>
														<td><?php echo $keterangan;?></td>
														<td>
														<div class="form-button-action">
														<a href="?halaman=view_cetak_skkm&id_request_skkm=<?=$id_request_skkm;?>">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
																<i class="fa fa-print"></i>
															</button>
														</a>
															
														</div>
													</td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
												<?php
													if(isset($_POST['kirim'])){
														$keterangan=$_POST['keterangan'];
														$sql = mysqli_query($konek, "UPDATE data_request_skkm SET
														keterangan='$keterangan', status='3' WHERE id_request_skkm='$id_request_skkm'");
														  if($sql) {
															echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil!', 'success');</script>" ;
															echo '<meta http-equiv="refresh" content="3; url=?halaman=permohonan_surat">';
														}else{
															echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal!', 'error');</script>" ;
															echo '<meta http-equiv="refresh" content="3; url=?halaman=permohonan_surat">';
														}

													}
													?>
											</tbody>
										</table>
									</div>
								</div>
								</form>
							</div>
						</div>

					</div>
				</div>

				