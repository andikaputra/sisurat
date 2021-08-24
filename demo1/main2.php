<?php
ob_start();
 session_start();
 ?>
 <?php
 if (isset($_SESSION['password'])=="" || ($_SESSION['user'])=="")  {
 header('location:pegawai.php');
 }
 else{
 $hak_akses = $_SESSION['hak_akses'];
 $nama = $_SESSION['nama'];
 $user = $_SESSION['user'];
 $lingkungan_tgs = $_SESSION['lingkungan_tgs'];
 }
 ?>
<?php include 'header.php'; ?>
<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="main2.php">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">fitur</h4>
						</li>
						<?php
							if($hak_akses=="Staf"){
						?>
						<li class="nav-item">
							<a href="?halaman=tampil_pegawai">
								<i class="fas fa-user-alt"></i>
								<p>Data Pegawai</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?halaman=tampil_user">
								<i class="fas fa-user-alt"></i>
								<p>Data User</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?halaman=permohonan_surat">
								<i class="far fa-calendar-check"></i>
								<p>Cetak Surat</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?halaman=surat_dicetak">
								<i class="far fa-calendar-check"></i>
								<p>Surat Selesai</p>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p>Laporan</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="?halaman=laporan_perbulan">
											<span class="sub-item">Perbulan</span>
										</a>
									</li>
									<li>
										<a href="?halaman=laporan_pertahun">
											<span class="sub-item">Pertahun</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<?php
							 }elseif($hak_akses=="Lurah"){
						?>>
						<li clas
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p>Laporan</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="?halaman=laporan_perbulan">
											<span class="sub-item">Perbulan</span>
										</a>
									</li>
									<li>
										<a href="?halaman=laporan_pertahun">
											<span class="sub-item">Pertahun</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<?php
							 }elseif($hak_akses=="kaling"){
						?>
						<li class="nav-item">
							<a href="?halaman=permohonan_surat">
								<i class="far fa-calendar-check"></i>
								<p>Cetak Surat</p>
							</a>
						</li>
							<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p>Laporan</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="?halaman=laporan_perbulan">
											<span class="sub-item">Perbulan</span>
										</a>
									</li>
									<li>
										<a href="?halaman=laporan_pertahun">
											<span class="sub-item">Pertahun</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<?php
							}
						?>
						<li class="mx-4 mt-2">
							<a href="logout.php" class="btn btn-danger btn-block"><span class="btn-label mr-2"> <i class="icon-logout"></i> </span>Logout</a> 
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
			<?php
          if(isset($_GET['halaman'])){
            $hal = $_GET['halaman'];
            switch($hal){
              case 'beranda';
                include 'beranda.php';
              break;
              case 'ubah_pemohon';
                include 'ubah_pemohon.php';
			  break;
			  case 'tampil_pegawai';
                include 'tampil_pegawai.php';
			  break;
			  case 'tampil_pemohon';
                include 'tampil_pemohon.php';
			  break;
			  case 'request_skbpk';
                include 'request_skbpk.php';
              break;
              case 'request_skkm';
                include 'request_skkm.php';
			  break;
			  case 'request_skb';
                include 'request_skb.php';
			  break;
			  case 'request_skbd';
                include 'request_skbd.php';
			  break;
			  case 'request_sku';
                include 'request_sku.php';
			  break;
			  case 'request_skp';
                include 'request_skp.php';
			  break;
			  case 'request_skd';
                include 'request_skd.php';
			  break;
			   case 'request_skdoa';
                include 'request_skdoa.php';
			  break;
			  case 'tampil_status';
                include 'status_request.php';
			  break;
			  case 'belum_acc_skbpk';
                include 'belum_acc_skbpk.php';
			  break;
			  case 'belum_acc_skb';
                include 'belum_acc_skb.php';
			  break;
			  case 'belum_acc_skbd';
                include 'belum_acc_skbd.php';
			  break;
			  case 'belum_acc_skkm';
                include 'belum_acc_skkm.php';
			  break;
			  case 'belum_acc_sku';
                include 'belum_acc_sku.php';
			  break;
			  case 'belum_acc_skp';
                include 'belum_acc_skp.php';
			  break;
			  case 'belum_acc_skd';
                include 'belum_acc_skd.php';
			  break;
			   case 'belum_acc_skdoa';
                include 'belum_acc_skdoa.php';
			  break;
			   case 'belum_acc_skl';
                include 'belum_acc_skl.php';
			  break;
			  case 'sudah_acc_skbpk';
                include 'acc_skbpk.php';
              break;
              case 'sudah_acc_skb';
                include 'acc_skb.php';
              break;
              case 'sudah_acc_skbd';
                include 'acc_skbd.php';
              break;
              case 'sudah_acc_skkm';
                include 'acc_skkm.php';
			  break;
			  case 'sudah_acc_sku';
                include 'acc_sku.php';
			  break;
			  case 'sudah_acc_skp';
                include 'acc_skp.php';
			  break;
			  case 'sudah_acc_skd';
                include 'acc_skd.php';
			  break;
			   case 'sudah_acc_skdoa';
                include 'acc_skdoa.php';
			  break;
			  case 'sudah_acc_skl';
                include 'acc_skl.php';
			  break;
			  case 'detail_skbpk';
                include 'detail_skbpk.php';
              break;
              case 'detail_skb';
                include 'detail_skb.php';
              break;
              case 'detail_skbd';
                include 'detail_skbd.php';
              break;
              case 'detail_skkm';
                include 'detail_skkm.php';
			  break;
			  case 'detail_sku';
                include 'detail_sku.php';
			  break;
			  case 'detail_skp';
                include 'detail_skp.php';
			  break;
			  case 'detail_skd';
                include 'detail_skd.php';
			  break;
			  case 'detail_skdoa';
                include 'detail_skdoa.php';
			  break;
			  case 'detail_skl';
                include 'detail_skl.php';
			  break;
			  case 'cetak_skbpk';
                include 'cetak_skbpk.php';
              break;
              case 'cetak_skb';
                include 'cetak_skb.php';
              break;
              case 'cetak_skbd';
                include 'cetak_skbd.php';
              break;
              case 'cetak_skkm';
                include 'cetak_skkm.php';
			  break;
			  case 'tampil_user';
                include 'tampil_user.php';
			  break;
			  case 'tambah_user';
                include 'tambah_user.php';
			  break;
			  case 'tambah_pegawai';
                include 'tambah_pegawai.php';
			  break;
			  case 'ubah_user';
                include 'ubah_user.php';
			  break;
			  	case 'ubah_pegawai';
                include 'ubah_pegawai.php';
			  break;
			  case 'view_skbpk';
                include 'view_skbpk.php';
              break;
              case 'view_skb';
                include 'view_skb.php';
              break;
              case 'view_skbd';
                include 'view_skbd.php';
              break;
              case 'view_skkm';
                include 'view_skkm.php';
			  break;
			  case 'view_sku';
                include 'view_sku.php';
			  break;
			  case 'view_skp';
                include 'view_skp.php';
			  break;
			  case 'view_skd';
                include 'view_skd.php';
			  break;
			  case 'view_skdoa';
                include 'view_skdoa.php';
			  break;
			  case 'view_skl';
                include 'view_skl.php';
			  break;
			  case 'view_cetak_skbpk';
                include 'view_cetak_skbpk.php';
              break;
              case 'view_cetak_skb';
                include 'view_cetak_skb.php';
              break;
              case 'view_cetak_skbd';
                include 'view_cetak_skbd.php';
              break;
              case 'view_cetak_skkm';
                include 'view_cetak_skkm.php';
			  break;
			  case 'view_cetak_sku';
                include 'view_cetak_sku.php';
			  break;
			  case 'view_cetak_skp';
                include 'view_cetak_skp.php';
			  break;
			  case 'view_cetak_skd';
                include 'view_cetak_skd.php';
			  break;
			   case 'view_cetak_skdoa';
                include 'view_cetak_skdoa.php';
			  break;
			  case 'view_cetak_skl';
                include 'view_cetak_skl.php';
			  break;
			  case 'cetak_skl';
                include 'cetak_skl.php';
			  break;
			  case 'surat_dicetak';
                include 'surat_dicetak.php';
              break;
			  case 'laporan_perbulan';
                include 'laporan_perbulan.php';
			  break;
			  case 'laporan_pertahun';
                include 'laporan_pertahun.php';
			  break;
			  case 'permohonan_surat';
                include 'permohonan_surat.php';
              break;
              default:
                echo "<center>HALAMAN KOSONG</center>";
              break;
            }
          }else{
            include 'beranda2.php';
          }
        ?>
			</div>
<?php include 'footer.php'; ?>