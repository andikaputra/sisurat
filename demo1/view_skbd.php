<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
	if(isset($_GET['id_request_skbd'])){
		$id=$_GET['id_request_skbd'];
		$sql = "SELECT * FROM data_request_skbd natural join data_pemohon WHERE id_request_skbd='$id'";
		$query = mysqli_query($konek,$sql);
        $data = mysqli_fetch_array($query,MYSQLI_BOTH);
        $id=$data['id_request_skbd'];
        $nik = $data['nik'];
    		$nama = $data['nama'];
    		$tempat = $data['tempat_lahir'];
        $tgl = $data['tanggal_lahir'];
        $tgl2 = $data['tanggal_request'];
        $format1 = date('Y', strtotime($tgl2));
        $format2 = date('d-m-Y', strtotime($tgl));
        $format3 = date('d F Y', strtotime($tgl2));
        $databermasalah = $data['databermasalah'];
        $datasalahinput = $data['datasalahinput'];
        $datasalah = $data['datasalah'];
        $ktrdatasalah = $data['ktrdatasalah'];
        $databenarinput = $data['databenarinput'];
        $databenar = $data['databenar'];
    		$agama = $data['agama'];
    		$jekel = $data['jekel'];
        $kebangsaan = $data['kebangsaan'];
    		$nama = $data['nama'];
    		$alamat = $data['alamat'];
        $pekerjaan = $data['pekerjaan'];
        $lingkungan = $data['lingkungan'];
        // $keperluan = $data['keperluan'];
        $request = $data['request'];
        $acc = $data['acc'];
        $format4 = date('d F Y', strtotime($acc));
        $format5 = date( 'Y', strtotime($tgl2));
        if($acc==2){
            $acc="BELUM TTD";
        }elseif($acc==4){
           $acc;
        }
	}
?>
<?php
$sql = "SELECT * FROM data_pegawai WHERE lingkungan_tgs='$lingkungan'";
$query = mysqli_query($konek,$sql);
$data = mysqli_fetch_array($query,MYSQLI_BOTH);
$kaling = $data['nama'];
?>
<!-- untuk pengaturan bln penomoran -->
<?php

     function getRomawi($bln){

          switch ($bln){

                    case 1:

                        return "I";

                        break;

                    case 2:

                        return "II";

                        break;

                    case 3:

                        return "III";

                        break;

                    case 4:

                        return "IV";

                        break;

                    case 5:

                        return "V";

                        break;

                    case 6:

                        return "VI";

                        break;

                    case 7:

                        return "VII";

                        break;

                    case 8:

                        return "VIII";

                        break;

                    case 9:

                        return "IX";

                        break;

                    case 10:

                        return "X";

                        break;

                    case 11:

                        return "XI";

                        break;

                    case 12:

                        return "XII";

                        break;

              }

       }

?>
<?php

            $bulan  =date('m', strtotime($acc));

            $romawi = getRomawi($bulan);
            $nosurat= $id."/KL/".$romawi."/".$format5;
            //echo $nosurat;
;

?>
 <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold"></h2>
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
                                                <input type="date" name="tgl_acc" class="form-control">
                                                <div class="form-group">
                                                    <input type="submit" name="ttd" value="ACC" class="btn btn-primary btn-sm">
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                        if(isset($_POST['ttd'])){
                                            $ket="Surat sedang dalam proses cetak";
                                            $tgl = $_POST['tgl_acc'];
                                            $update = mysqli_query($konek,"UPDATE data_request_skbd SET acc='$tgl', status=4, keterangan='$ket' WHERE id_request_skbd=$id");
                                            if($update){
                                                echo "<script language='javascript'>swal('Selamat...', 'ACC Lurah Berhasil', 'success');</script>" ;
                                                echo '<meta http-equiv="refresh" content="3; url=?halaman=belum_acc_skbd">';
                                            }else{
                                                echo "<script language='javascript'>swal('Gagal...', 'ACC Lurah Gagal', 'error');</script>" ;
                                                echo '<meta http-equiv="refresh" content="3; url=?halaman=view_skbd">';
                                            }

                                        }
                                        ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					 <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                <table border="1" align="center">
                                    <table border="0" align="center">
                                        <tr>
                                        <td><img src="img/Badung.png" width="90" height="90" alt=""></td>
                                            <td width="600">
                                                <center>
                                                    <font size="4"><b>PEMERINTAHAN KABUPATEN BADUNG</b></font><br>
                                                    <font size="4"><b>KECAMATAN KUTA SELATAN</b></font><br>
                                                    <font size="5"><b>KELURAHAN JIMBARAN</b></font><br>
                                                    <font size="4"><b style="text-transform: uppercase">LINGKUNGAN <?php echo $lingkungan;?></b></font>
                                                    
                                                </center>
                                            </td>
                                        <tr>
                                       <td colspan="2"> <hr style="margin:0px" color="black"> </td>
                                       </tr>
                                        </tr>
                                <!--         <tr>
                                            <td colspan="6"><hr color="black"></td>
                                        </tr> -->
                                    </table>
                                    <br>
                                    <table border="0" align="center">
                                        <tr>
                                            <td>
                                                <center>
                                                    <font size="4"><b>SURAT KETERANGAN BEDA DATA</b></font><br>
                                                    <hr style="margin:0px" color="black">
                                                   <span>NOMOR : <?php echo $nosurat;?></span>
                                                </center>
                                            </td>
                                        </tr>
                                    </table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=1 align="center" width="600px">
 <tr >
  <td >
  <table class=MsoTableGrid border=0cellspacing=0 cellpadding=1 align="center" width="200px">
   <tr>
      <td colspan="3">
        <p> Saya yang bertandatangan di bawah ini :
        </P>
        </td>
   </tr>
   <tr >
      <td><font size="2">Nama</font></td>
      <td>:</td>
      <td width="130px"><font size="3"><?php echo $nama;?></font></td>
    </tr>
   <tr>
      <td>alamat</td>
      <td>:</td>
      <td ><font size="3"><?php echo $alamat;?></font></td>
   </tr>
   <tr>
      <td><font size="3">NO.KTP</font></td>
      <td>:</td>
      <td><font size="3"><?php echo $nik;?></font></td>
   </tr>
      <tr>
      <td></td>
      <td></td>
      <td></td>
   </tr>
      <tr>
      <td colspan="3" width="2px" align ="justify">
        <p> selaku pemohon/kuasa pemohon bertanggung jawab mutlak terhadap semua data dan informasi yang saya berikan sehingga 
        terbitnya surat keterangan ini. apabila dikemudian hari data dan informasi yang saya berikan tidak benar, 
        saya siap dituntut sesuai hukum yang berlaku dengan tidak melibatkan pejabat yang menandatangani surat keterangan ini. 
    </p>
      </td>
      <td>
      </td>
      <td>
      </td>
   </tr>
      <tr>
      <td>
      </td>
      <td>       </td>
      <td>
      </td>
   </tr>
      <tr>
      <td colspan ="3">Yang Menyatakan</td>
   </tr>
   <tr>
      <td></td>
      <td>
        <br>
        <br>
      </td>
      <td></td>
   </tr>
      <tr>
      <td colspan = "3"><?php echo $nama;?></td>
   </tr>
  </table>

  </td>
  <td>

  <table class=MsoTableGrid border=0 cellspacing=0 cellpadding=1 width="450px"
   style="border-left: 1px black solid" >
   <tr>
      <td  align="justify" style="text-indent: 45px;" width="550px">
      Yang bertanda tangan di bawah ini kami Kepala Lingkungan <?php echo $lingkungan;?> , Kelurahan Jimbaran, Kecamatan Kuta Selatan, Kabupaten Badung, 
        Berdasarkan data dan informasi dari pemohon, dengan ini menerangkan bahwa:
      </td>
<tr>

<table border=1 width="500px" style="border-collapse:collapse;">
   <tr>
      <tr>
      <td width="150">Nama</td>
      <td>:</td>
      <td><?php echo $nama;?></td>
   </tr>
      <tr>
        <td width="100">Tempat/ Tgl Lahir</td>
      <td>:</td>
      <td><?php echo $tempat;?>, <?php echo $tgl;?></td>
   </tr>
      <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><?php echo $alamat;?></td>
   </tr>
      </tr>
     <tr>
      <td>Pekerjaan</td>
      <td>:</td>
      <td><?php echo $pekerjaan?></td>
   </tr>
    </tr>
      <tr>
      <td>Agama</td>
      <td>:</td>
      <td><?php echo $agama;?></td>

</tr>
</table>
<table border=1 width="500px" style="border-collapse:collapse;">
     <tr>
      <td colspan="4" ><b> DATA YANG BEDA</b></td>
  </tr>
  <tr>
      <td width="150px" ><b>Penulisan <?php echo $databermasalah;?></b></td>
      <td>:</td>
      <td width="400px"><p><?php echo $datasalahinput;?>(<?php echo $datasalah; ?>)</p>
                        <p><?php echo $databenarinput;?>(<?php echo $databenar?>)</p>
      </td>
</table>
<table style="border-left: 1px black solid" >
      <tr>
        <td> <b>Data yang benar adalah data yang tercantum dalam <?php echo $databenar?>, yaitu <?php echo $databenarinput;?></b>
        </td>
    </tr>
    <tr>
      <td colspan="35" width="500"align="justify" style="text-indent: 45px;">

        <p>
         Berdasarkan data dan keterangan pemohon bahwa yang bersangkutan adalah orangnya satu dan sama 
           Demikian surat keterangan ini kami berikan untuk dapat dipergunakan sebagaimana mestinya. 
           Apabila dikemudian hari ternyata data dan informasi yang disampaikan pemohon tidak benar maka surat keterangan 
           ini dinyatakan tidak berlaku/batal dan apabila terdapat kekeliruan maka akan dilakukan perbaikan sebagaimana mestinya

        <p>
        </td>

      <td></td>
   </tr>
  </table>
</table>
  </td>
 </tr>
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
  align="center">
 <tr>
  <td >
  <table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
    <tr>
    <td colspan="3">Jimbaran, -</td>
   </tr>
    <tr>
    <td colspan="3">Mengetahui, </td>
   </tr>
    <tr>
    <td colspan="3">Diregistrasi sesuai permintaan pemohon</td>
   </tr>
    <tr>
    <td >No. reg : masih di coba</td>
    <td></td>
    <td></td>
   </tr>
   <tr>
    <td>Lurah Jimbaran, </td>
    <td></td>
    <td width="200"></td>
   </tr>
   <tr>
    <td>
       <br></br>
    <br></br>
    </td>
    <td></td>
    <td></td>
   </tr>
   <tr>
    <td>I Ketut Rimbawan, SSTP</td>
    <td></td>
    <td></td>
   </tr>
  </table>
  </td>
  <td>
  <table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
    <tr>
    <td width="200"><p></p></td>
    <td></td>
   </tr>
    <tr>
    <td><p></p></td>
    <td></td>
   </tr>
   <tr>
    <tr>
    <td><p></p></td>
    <td></td>
   </tr>
    <tr>
    <tr>
    <td><p></p></td>
    <td></td>
   </tr>
    <tr>
    <td style="text-transform: capitalize">Kepala Lingkungan <?php echo $lingkungan;?></td>
    <td></td>
   </tr>
      <tr>
    <td>
      <br></br>
    <br></br>
  </td>
    <td></td>
   </tr>
     <tr>
    <td><?php echo $kaling;?></td>
    <td></td>
   </tr>
  </table>
  </td>
 </tr>
</table>

								</div>
							</div>
						</div>
					</div>
			</div>