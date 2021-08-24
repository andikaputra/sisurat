<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<?php
	if(isset($_GET['id_request_skkm'])){
		$id=$_GET['id_request_skkm'];
		$sql = "SELECT * FROM data_request_skkm natural join data_pemohon WHERE id_request_skkm='$id'";
		$query = mysqli_query($konek,$sql);
        $data = mysqli_fetch_array($query,MYSQLI_BOTH);
        $id=$data['id_request_skkm'];
        $nik = $data['nik'];
        $alamat =$data['alamat'];
		$nama = $data['nama'];
        $tempat = $data['tempat_lahir'];
        $tgl = $data['tanggal_lahir'];
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
        $lingkungan = $data['lingkungan'];
	   $keperluan=$data['keperluan'];
        $tgl2 = $data['tanggal_request'];
        $format1 = date('Y', strtotime($tgl2));
        $format10 = date('m', strtotime($tgl2));
        $format2 = date('d-m-Y', strtotime($tgllahirjenazah));
        $format3 = date('d F Y', strtotime($tglmeninggal));
        $format8 = date('d F Y', strtotime($tgllhr1 ));
        $format5 = date('d F Y', strtotime($tgllhr2 ));
        $format6 = date('d F Y', strtotime($tgl));
        $request = $data['request'];
        $acc = $data['acc'];
        echo $format10;

        $format4 = date('d F Y', strtotime($acc));
        if($acc==0){
            $acc="BELUM TTD";
        }elseif($acc==1){
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

            $bulan  =date('m', strtotime($tgl2));

            $romawi = getRomawi($bulan);
            $nosurat= $id."/KL/".$romawi."/".$format1;
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
                                            $update = mysqli_query($konek,"UPDATE data_request_skkm SET acc='$tgl', status=4, keterangan='$ket' WHERE id_request_skkm=$id");
                                            if($update){
                                                echo "<script language='javascript'>swal('Selamat...', 'ACC Lurah Berhasil', 'success');</script>" ;
                                                echo '<meta http-equiv="refresh" content="3; url=?halaman=belum_acc_skkm">';
                                            }else{
                                                echo "<script language='javascript'>swal('Gagal...', 'ACC Lurah Gagal', 'error');</script>" ;
                                                echo '<meta http-equiv="refresh" content="3; url=?halaman=view_skkm">';
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
                                                    <font size="4"><b>SURAT KETERANGAN KEMATIAN</b></font><br>
                                                    <hr style="margin:0px" color="black">
                                                   <span>NOMOR : <?php echo $nosurat;?></span>
                                                </center>
                                            </td>
                                        </tr>
                                    </table>
                                    <tr>
                                        <!-- <td colspan="6"><hr color="black"></td> -->
                                    </tr>
                                    </table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=1 align="center" width="600px">
 <tr >
  <td >
  <table class=MsoTableGrid border=0cellspacing=0 cellpadding=2 align="center" width="200px">
   <tr>
      <td colspan="3">
        <p> Saya yang bertandatangan di bawah ini :
        </P>
        </td>
   </tr>
   <tr >
      <td><font size="2">Nama</font></td>
      <td>:</td>
      <td width="130px"><font size="2"><?php echo $nama;?></font></td>
    </tr>
   <tr>
      <td>alamat</td>
      <td>:</td>
      <td ><font size="2"><?php echo $alamat;?></font></td>
   </tr>
   <tr>
      <td><font size="2">NO.KTP</font></td>
      <td>:</td>
      <td><font size="2"><?php echo $nik;?></font></td>
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

  <table class=MsoTableGrid border=0 cellspacing=0 cellpadding=2 width="500px"
   style="border-left: 1px black solid">
   <tr>
      <td  align="justify" style="text-indent: 45px;" width="550px">
      Yang bertanda tangan di bawah ini kami Kepala Lingkungan <?php echo $lingkungan;?> , Kelurahan Jimbaran, Kecamatan Kuta Selatan, Kabupaten Badung, 
        Berdasarkan data dan informasi dari pemohon, dengan ini menerangkan bahwa:
      </td>
<tr>

  <tr>
      <td colspan="3"><b> DATA JENAZAH </b>
      </td>
   </tr>
<table border=1 width="500px">
   <tr>
      <tr>
      <td width="150">Nama</td>
      <td>:</td>
      <td><?php echo $namajenazah;?></td>
   </tr>
      <tr>
        <td width="100">Tempat/ Tgl Lahir</td>
      <td>:</td>
      <td><?php echo $tempatlahirjenazah;?>, <?php echo $format2;?></td>
   </tr>
      <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><?php echo $alamatjenazah;?></td>
   </tr>
    </tr>
      <tr>
      <td>Agama</td>
      <td>:</td>
      <td><?php echo $agamajenazah;?></td>
   </tr>
     <tr>
      <td>Tanggal Meninggal</td>
      <td>:</td>
      <td><?php echo $tempatlahirjenazah;?>, <?php echo $format3;?></td>
   </tr>
</tr>
</table>
<table border=1 width="500px" align= "center">
  <tr>
      <td colspan="4" ><b> YANG MENYATAKAN </b></td>
  </tr>
  <tr>
      <td width="150px" >Nama</td>
      <td>:</td>
      <td width="200px"><?php echo $nama;?></td>
      <td rowspan="3" width="200px">TTD</td>
  </tr>
    <tr>
      <td width="150px" >NIK</td>
      <td>:</td>
      <td width="200px"><?php echo $nik;?></td>
  </tr>
  <tr>
      <td width="150">Tempat/ Tgl Lahir</td>
      <td>:</td>
      <td width="200"><?php echo $tempat;?>, <?php echo $format6;?></td>
   </tr>
</table>
<table border=1 width="500px">
     <tr>
      <td colspan="4" ><b> SAKSI I </b></td>
  </tr>
  <tr>
      <td width="150px" >Nama</td>
      <td>:</td>
      <td width="200px"><?php echo $nama1;?></td>
      <td rowspan = "3" width="200px">TTD</td>
  </tr>
    <tr>
      <td width="150px" >NIK</td>
      <td>:</td>
      <td width="200px"><?php echo $nik1;?></td>
  </tr>
  <tr>
      <td width="150">Tempat /Tgl Lahir</td>
      <td>:</td>
      <td width="200"><?php echo $tmplhr1;?>,<?php echo $format8;?></td>
   </tr>
    <tr>
      <td colspan="4" ><b> SAKSI II </b></td>
  </tr>
    <tr>
      <td width="150px" >Nama</td>
      <td>:</td>
      <td width="250px"><?php echo $nama2;?></td>
      <td rowspan = "3" width="150px">TTD</td>
  </tr>
  <tr>
      <td width="150px" >NIK</td>
      <td>:</td>
      <td width="250px"><?php echo $nik2;?></td>
  </tr>
      <tr>
      <td width="150">Tempat /Tgl Lahir</td>
      <td>:</td>
       <td width="200"><?php echo $tmplhr2;?>,<?php echo $format5;?></td>
   </tr>
</table>
<table>
      <tr>
        <td> KEPERLUAN : <?php echo $keperluan;?>
        </td>
    </tr>
    <tr>
      <td colspan="35" width="500"align="justify" style="text-indent: 45px;">

        <p>
        Demikian surat keterangan ini kami berikan untuk dapat dipergunakan sebagaimana mestinya. Apabila dikemudian hari ternyata 
        data dan informasi yang disampaikan pemohon tidak benar 
        maka surat keterangan ini dinyatakan tidak berlaku/batal dan apabila terdapat kekeliruan maka akan dilakukan perbaikan sebagaimana mestinya.
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
                                    <br>
                                    <br>
                                    <br>
                                    <br>
								</div>
							</div>
						</div>
					</div>
			</div>