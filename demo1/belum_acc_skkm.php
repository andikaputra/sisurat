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
										<h4 class="fw-bold text-uppercase">BELUM ACC REQUEST SURAT KETERANGAN KEMATIAN</h4>
									</div>
								</div>
								<div class="card-body">
									<form action="" method="POST">
										<div class="table-responsive">
											<table id="add1" class="display table table-striped table-hover" >
												<thead>
													<tr>
														<th>Tanggal Request</th>
														<th>NIK Yang Menyatakan </th>
														<th>Nama Yang Menyatakan</th>
														<th>NIK Jenazah</th>
														<th>Nama Jenazah</th>
														<th>Tempat Lahir Jenazah</th>
														<th>Tanggal Lahir Jenazah</th>
														<th>Alamat Jenazah</th>
														<th>Agama Jenazah</th>
														<th>Tanggal Meninggal</th>
														<th>Scan KTP Jenazah</th>
														<th>Scan KK Jenazah</th>
														<th>Scan Surat Keterangan Rumah Sakit</th>
														<th>Scan KTP Ahliwaris</th>

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

														<th>Keterangan</th>
														<th style="width: 10%">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
														$sql = "SELECT * FROM data_request_skkm natural join data_pemohon where status=2";
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
															
															$ktp2 = $data['ktp2'];
															$nama2 = $data['nama2'];
															$nik2 = $data['nik2'];
															$tmplhr2 = $data['tmplhr2'];
															$tgllhr2 = $data['tgllhr2'];

															$status = $data['status'];
															$id= $data['id_request_skkm'];
															
															
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

														<td class="fw-bold text-uppercase text-success op-8"><?php echo $status;?></td>
														
														<td><i><?php echo $keterangan;?></i></td>
														<!-- <td>
															<input type="checkbox" name="check[$i]" value="<?php echo $id;?>">
															<input type="submit" name="acc" class="btn btn-primary btn-sm" value="ACC">
															<div class="form-button-action">
																<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Lihat Surat" href="?halaman=detail_sktm&id_request_sktm=<?= $id_request_sktm;?>">
																<i class="fa fa-edit"></i></a>
															</div>
														</td> -->
														<td>
															<div class="form-button-action">
																<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Surat" href="?halaman=view_skkm&id_request_skkm=<?= $id;?>">
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