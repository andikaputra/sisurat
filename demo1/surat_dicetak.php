<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.js"></script>

<script type="js/jquery.dataTables.js"></script>
                <div class="page-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">PERMOHONAN SURAT SUDAH DICETAK</h4>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="display table table-striped table-hover data" >
											<thead>
												<tr>
                                                    <th>Tanggal Request</th>
                                                    <th>NIK</th>
                                                    <th>Nama Lengkap</th>
													<!-- <th>Keperluan</th> -->
                                                    <th>Request</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
                                                <?php
                                                    $sql = "SELECT
                                                    data_pemohon.nik,
                                                    data_pemohon.nama,
                                                    data_request_skb.tanggal_request,
                                                    
                                                    data_request_skb.request,
                                                    data_request_skb.status
                                                FROM
                                                    data_pemohon
                                                INNER JOIN data_request_skb ON data_request_skb.nik = data_pemohon.nik
                                                WHERE data_request_skb.status = 3
                                                UNION
                                                SELECT
                                                    data_pemohon.nik,
                                                    data_pemohon.nama,
                                                    data_request_skbd.tanggal_request,
                                                   
                                                    data_request_skbd.request,
                                                    data_request_skbd.status
                                                FROM
                                                    data_pemohon
                                                INNER JOIN data_request_skbd ON data_request_skbd.nik = data_pemohon.nik
                                                WHERE data_request_skbd.status = 3
                                                UNION
                                                SELECT
                                                    data_pemohon.nik,
                                                    data_pemohon.nama,
                                                    data_request_skbpk.tanggal_request,
                                                    
                                                    data_request_skbpk.request,
                                                    data_request_skbpk.status
                                                FROM
                                                    data_pemohon
                                                INNER JOIN data_request_skbpk ON data_request_skbpk.nik = data_pemohon.nik
                                                WHERE data_request_skbpk.status = 3
                                                UNION
                                                SELECT
                                                    data_pemohon.nik,
                                                    data_pemohon.nama,
                                                    data_request_skd.tanggal_request,
                                                    
                                                    data_request_skd.request,
                                                    data_request_skd.status
                                                FROM
                                                    data_pemohon
                                                INNER JOIN data_request_skd ON data_request_skd.nik = data_pemohon.nik
                                                WHERE data_request_skd.status = 3
                                                UNION
                                                SELECT
                                                    data_pemohon.nik,
                                                    data_pemohon.nama,
                                                    data_request_skdoa.tanggal_request,
                                                    
                                                    data_request_skdoa.request,
                                                    data_request_skdoa.status
                                                FROM
                                                    data_pemohon
                                                INNER JOIN data_request_skdoa ON data_request_skdoa.nik = data_pemohon.nik
                                                WHERE data_request_skdoa.status = 3
                                                UNION
                                                SELECT
                                                    data_pemohon.nik,
                                                    data_pemohon.nama,
                                                    data_request_skkm.tanggal_request,
                                                    
                                                    data_request_skkm.request,
                                                    data_request_skkm.status
                                                FROM
                                                    data_pemohon
                                                INNER JOIN data_request_skkm ON data_request_skkm.nik = data_pemohon.nik
                                                WHERE data_request_skkm.status = 3
                                                UNION
                                                SELECT
                                                    data_pemohon.nik,
                                                    data_pemohon.nama,
                                                    data_request_skl.tanggal_request,
                                                    
                                                    data_request_skl.request,
                                                    data_request_skl.status
                                                FROM
                                                    data_pemohon
                                                INNER JOIN data_request_skl ON data_request_skl.nik = data_pemohon.nik
                                                WHERE data_request_skl.status = 3

                                                ";
                                                    $query = mysqli_query($konek,$sql);
                                                    while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
														$tgl = $data['tanggal_request'];
														$format = date('d F Y', strtotime($tgl));
                                                        $nik = $data['nik'];
                                                        $nama = $data['nama'];
														$status = $data['status'];
														//$keperluan = $data['keperluan'];
														//$keterangan = $data['keterangan'];
                                                        // $id= $data['id_request_skd'];
                                                        $request= $data['request'];

                                                        if($status=="1"){
                                                            $status = "<b style='color:blue'>Sudah ACC Staf</b>";
                                                        }elseif($status=="0"){
                                                            $status = "<b style='color:red'>BELUM ACC staf</b>";
                                                        }elseif($status=="3"){
                                                            $status = "<b style='color:green'>SURAT SUDAH DICETAK</b>";
                                                        }
                                                ?>
												<tr>
													<td><?php echo $format;?></td>
                                                    <td><?php echo $nik;?></td>
                                                    <td><?php echo $nama;?></td>
													<!-- <td><?php echo $keperluan;?></td> -->
                                                    <td><?php echo $request;?></td>
													<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status;?></td>
                                                </tr>
												<!-- <?php
															if(isset($_GET['id_request_sktm'])){
																$hapus = mysqli_query($konek,"DELETE FROM data_request_sktm WHERE id_request_sktm=$id");
																if($hapus){
																	echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>" ;
																	echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
																}else{
																	echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>" ;
																	echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
																}
															}
														?> -->
                                                <?php
                                                    }
                                                ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
                        </div>
					</div>
				</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.data').DataTable();
    });
</script>