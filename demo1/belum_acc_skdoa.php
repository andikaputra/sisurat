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
									<h4 class="fw-bold text-uppercase"> tampil belum acc request surat keterangan domisili orang asing</h4>
									</div>
								</div>
								<form action="" method="POST">
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
														
														<th style="width: 10%">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
														$sql = "SELECT * FROM data_request_skdoa natural join data_pemohon where status=2";
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
														
														$id_request_skdoa = $data['id_request_skdoa'];

															if($status=="2"){
																$status = "Sudah ACC Staf";
															}elseif($status=="0"){
																$status = "BELUM ACC";
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
													<td class="fw-bold text-uppercase text-success op-8"><?php echo $status;?></td>
														<td>
															<div class="form-button-action">
																<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Surat" href="?halaman=view_skdoa&id_request_skdoa=<?= $id_request_skdoa;?>">
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
									</div>
								</form>
							</div>
                        </div>
                        
					</div>
				</div>
