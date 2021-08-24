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
	$tahun = $_POST['tahun'];


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
                                                WHERE data_request_skb.status = 3 and year(data_request_skb.acc) = '$tahun'
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
                                                WHERE data_request_skbd.status = 3 and year(data_request_skbd.acc) = '$tahun'
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
                                                WHERE data_request_skbpk.status = 3 and year(data_request_skbpk.acc) = '$tahun'
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
                                                WHERE data_request_skd.status = 3 and year(data_request_skd.acc) = '$tahun'
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
                                                WHERE data_request_skdoa.status = 3 and year(data_request_skdoa.acc) = '$tahun'
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
                                                WHERE data_request_skkm.status = 3 and year(data_request_skkm.acc) = '$tahun'
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
                                                WHERE  data_request_skl.status = 3 and year(data_request_skl.acc) = '$tahun'";
                                               
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
								<h2 class="text-white pb-2 fw-bold">LAPORAN PERTAHUN REQUEST SURAT KETERANGAN</h2>
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
                                                <select name="tahun" class="form-control">
													<option value="">Pilih</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
													<option value="2021">2021</option>
												</select>
                                                <div class="form-group">
                                                    <input type="submit" name="tampilkan" value="Tampilkan" class="btn btn-primary btn-sm">
													<a href="?halaman=laporan_pertahun">
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
											<a href="cetak_tahun.php?tahun=<?php echo $tahun;?>" target="_blank" class="btn btn-info btn-border btn-round btn-sm">
												<span class="btn-label">
													<i class="fa fa-print"></i>
												</span>
												Print
											</a>
										</div>
								</div>
								<div class="card-body">
									<div class="card-sub">									
									</div>
									<table class="display table table-striped table-hover data" >
										<thead>
											<tr>
												<th scope="col">No</th>
												<th scope="col">Tanggal ACC</th>
												<th scope="col">Nama</th>
												<th scope="col">Nik</th>
										
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