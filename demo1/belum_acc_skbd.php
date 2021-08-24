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
										<h4 class="fw-bold text-uppercase">BELUM ACC SURAT KETERANGAN BEDA DATA</h4>
									</div>
								</div>
								<div class="card-body">
									<form action="" method="POST">
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
														<th>Keterangan</th>
														<th style="width: 10%">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
														$sql = "SELECT * FROM data_request_skbd natural join data_pemohon where status=2";
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

															$status = $data['status'];
															$id= $data['id_request_skbd'];
															$keterangan = $data['keterangan'];

															if($status=="2"){
																$status = "<b style='color:blue'>Sudah ACC Staf</b>";
															}elseif($status=="0"){
																$status = "BELUM ACC";
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
														<td class="fw-bold text-uppercase text-success op-8"><?php echo $status;?></td>
														<td><i><?= $keterangan;?></i></td>
														
														<td>
															<div class="form-button-action">
																<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Surat" href="?halaman=view_skbd&id_request_skbd=<?= $id;?>">
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
