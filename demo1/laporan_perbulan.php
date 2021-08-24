<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.js"></script>
<?php 

include '../konek.php';
date_default_timezone_set('Asia/Jakarta');
?>
<?php

	if(isset($_POST['tampilkan'])){
	$bulan = $_POST['bulan'];


		                                     $sql = "SELECT
                                                    data_pemohon.nik,
                                                    data_pemohon.nama,
                                                    data_request_skb.tanggal_request,
                                                    data_request_skb.acc,
                                                    data_request_skb.request,
                                                    data_request_skb.status
                                                FROM
                                                    data_pemohon
                                                INNER JOIN data_request_skb ON data_request_skb.nik = data_pemohon.nik
                                                WHERE data_request_skb.status = 3 and month(data_request_skb.acc) = '$bulan'
                                                UNION
                                                SELECT
                                                    data_pemohon.nik,
                                                    data_pemohon.nama,
                                                    data_request_skbd.tanggal_request,
                                                    data_request_skbd.acc,
                                                    data_request_skbd.request,
                                                    data_request_skbd.status
                                                FROM
                                                    data_pemohon
                                                INNER JOIN data_request_skbd ON data_request_skbd.nik = data_pemohon.nik
                                                WHERE data_request_skbd.status = 3 and month(data_request_skbd.acc) = '$bulan'
                                                UNION
                                                SELECT
                                                    data_pemohon.nik,
                                                    data_pemohon.nama,
                                                    data_request_skbpk.tanggal_request,
                                                    data_request_skbpk.acc,
                                                    data_request_skbpk.request,
                                                    data_request_skbpk.status
                                                FROM
                                                    data_pemohon
                                                INNER JOIN data_request_skbpk ON data_request_skbpk.nik = data_pemohon.nik
                                                WHERE data_request_skbpk.status = 3 and month(data_request_skbpk.acc) = '$bulan'
                                                UNION
                                                SELECT
                                                    data_pemohon.nik,
                                                    data_pemohon.nama,
                                                    data_request_skd.tanggal_request,
                                                    data_request_skd.acc,
                                                    data_request_skd.request,
                                                    data_request_skd.status
                                                FROM
                                                    data_pemohon
                                                INNER JOIN data_request_skd ON data_request_skd.nik = data_pemohon.nik
                                                WHERE data_request_skd.status = 3 and month(data_request_skd.acc) = '$bulan'
                                                UNION
                                                SELECT
                                                    data_pemohon.nik,
                                                    data_pemohon.nama,
                                                    data_request_skdoa.tanggal_request,
                                                    data_request_skdoa.acc,
                                                    data_request_skdoa.request,
                                                    data_request_skdoa.status
                                                FROM
                                                    data_pemohon
                                                INNER JOIN data_request_skdoa ON data_request_skdoa.nik = data_pemohon.nik
                                                WHERE data_request_skdoa.status = 3 and month(data_request_skdoa.acc) = '$bulan'
                                                UNION
                                                SELECT
                                                    data_pemohon.nik,
                                                    data_pemohon.nama,
                                                    data_request_skkm.tanggal_request,
                                                    data_request_skkm.acc,
                                                    data_request_skkm.request,
                                                    data_request_skkm.status
                                                FROM
                                                    data_pemohon
                                                INNER JOIN data_request_skkm ON data_request_skkm.nik = data_pemohon.nik
                                                WHERE data_request_skkm.status = 3 and month(data_request_skkm.acc) = '$bulan'
                                                UNION
                                                SELECT
                                                    data_pemohon.nik,
                                                    data_pemohon.nama,
                                                    data_request_skl.tanggal_request,
                                                    data_request_skl.acc,
                                                    data_request_skl.request,
                                                    data_request_skl.status
                                                FROM
                                                    data_pemohon
                                                INNER JOIN data_request_skl ON data_request_skl.nik = data_pemohon.nik
                                                WHERE  data_request_skl.status = 3 and month(data_request_skl.acc) = '$bulan'";
                                               
              }       elseif(!isset($_POST['tampilkan'])){
           
              	 $sql = "SELECT
                                                    data_pemohon.nik,
                                                    data_pemohon.nama,
                                                    data_request_skb.tanggal_request,
                                                    data_request_skb.acc,
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
                                                    data_request_skbd.acc,
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
                                                    data_request_skbpk.acc,
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
                                                    data_request_skd.acc,
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
                                                    data_request_skdoa.acc,
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
                                                    data_request_skkm.acc,
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
                                                    data_request_skl.acc,
                                                    data_request_skl.request,
                                                    data_request_skl.status
                                                FROM
                                                    data_pemohon
                                                INNER JOIN data_request_skl ON data_request_skl.nik = data_pemohon.nik
                                                WHERE  data_request_skl.status = 3";
              }                       

?>
			    <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">LAPORAN PERBULAN REQUEST SURAT KETERANGAN</h2>
							</div>
						</div>
					</div>
                </div>
                <div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-tools">
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <select name="bulan" id="bulan" class="form-control">
													<option value="">Pilih</option>
                                                    <option value="1">Januari</option>
                                                    <option value="2">Februari</option>
                                                    <option value="3">Maret</option>
                                                    <option value="4">April</option>
                                                    <option value="5">Mei</option>
                                                    <option value="6">Juni</option>
                                                    <option value="7">Juli</option>
                                                    <option value="8">Agustus</option>
                                                    <option value="9">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">Nopember</option>
                                                    <option value="12">Desember</option>
												</select>
                                                <div class="form-group">
                                                    <input type="submit" name="tampilkan" value="Tampilkan" class="btn btn-primary btn-sm">
													<a href="?halaman=laporan_perbulan">
													<input type="submit" value="Reload" class="btn btn-primary btn-sm">
													</a>
                                                </div>
                                            </div>
                                        </form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-tools">
											<a href="cetak_bulan.php?bulan=<?php echo $bulan;?>" target="_blank" class="btn btn-info btn-border btn-round btn-sm">
												<span class="btn-label">
													<i class="fa fa-print"></i>
												</span>
												Print
											</a>
										</div>
								</div>
								<div class="card-body">
									<table class="display table table-striped table-hover data">
										<thead>
											<tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Tanggal ACC</th>
                                                <th scope="col">Nik</th>
												<th scope="col">Nama</th>
												<th scope="col">Request</th>
											</tr>
										</thead>
										<tbody>
											<?php
												$no=0;
												 $query = mysqli_query($konek,$sql);
												while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
													$no++;
													$nik = $data['nik'];	
													$nama = $data['nama'];
													$tanggal = $data['acc'];
													$tgl = date('d F Y', strtotime($tanggal));
													$status = $data['status'];
													//$keperluan = $data['keperluan'];
													$request = $data['request'];
												
											?>
											<tr>
												<td><?php echo $no;?></td>
												<td><?php echo $tgl;?></td>
												<td><?php echo $nik;?></td>
												<td><?php echo $nama;?></td>
												
												<td><?php echo $request;?></td>
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
				</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.data').DataTable();
    });
</script>