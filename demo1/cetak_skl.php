<?php include '../konek.php';?>
<?php
    if(isset($_GET['id_request_skl'])){
        $id=$_GET['id_request_skl'];
        $sql = "SELECT * FROM data_request_skl natural join data_pemohon WHERE id_request_skl='$id'";
        $query = mysqli_query($konek,$sql);
        $data = mysqli_fetch_array($query,MYSQLI_BOTH);
        $id=$data['id_request_skl'];
        $nik = $data['nik'];
        $nama = $data['nama'];
        $tempat = $data['tempat_lahir'];
        $tgl = $data['tanggal_lahir'];
        $tgl2 = $data['tanggal_request'];
        $format1 = date('Y', strtotime($tgl2));
        $format2 = date('d-m-Y', strtotime($tgl));
        $format3 = date('d F Y', strtotime($tgl2));
        $agama = $data['agama'];
        $jekel = $data['jekel'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $pekerjaan = $data['pekerjaan'];
        $request = $data['request'];
        $acc = $data['acc'];
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
        $nama_anak = $data['nama_anak'];
        $tmpl_anak = $data['tmpl_anak'];
        $tgllahir_anak = $data['tgllahir_anak'];
        $alamat_anak = $data['alamat_anak'];
        $lingkungan = $data['lingkungan'];
        $keperluan = $data['keperluan'];
        $kk = $data['scan_kk'];
        $saksi1=$data['saksi1'];
        $saksi2=$data['saksi2'];
        $nik_saksi1=$data['nik_saksi1'];
        $nik_saksi2=$data['nik_saksi2'];
        $umur_saksi1=$data['umur_saksi1'];
        $umur_saksi2=$data['umur_saksi2'];
        $rumahsakit = $data['scan_rumahsakit'];
        $format4 = date('d F Y', strtotime($acc));
        $format5 = date('m', strtotime($tgl2));
        $format6 = date('d-m-Y',strtotime($tgllahir_anak));
        $format7 = date('d-m-Y',strtotime($tgll_ayah));
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

            $bulan  =date('m', strtotime($acc));

            $romawi = getRomawi($bulan);
            $nosurat= $id."/KL/".$romawi."/".$format1;
            //echo $nosurat;
;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK Surat keterangan kelahiran <?php echo $nama_anak;?></title>
    <link rel="icon" href="../main/img/logo1.png" type="image/x-icon"/>

<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }
</style>
</head>
<body>

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
                                    <table border="0" align="center">
                                        <tr>
                                            <td>
                                                <center>
                                                    <font size="4"><b>SURAT KETERANGAN KELAHIRAN</b></font><br>
                                                    <hr style="margin:0px" color="black">
                                                   <span>NOMOR : <?php echo $nosurat;?></span>
                                                </center>
                                            </td>
                                        </tr>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 align="center" width="600px">
 <tr >
  <td >
  <table class=MsoTableGrid border=0 cellspacing=0 cellpadding=1 align="center" width="170px">
   <tr>
      <td colspan="3">
        <p> Saya yang bertanda tangan di bawah ini :
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
      <td colspan ="3">Pemohon / Pelapor</td>
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

  <table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 width="500px"
   style="border-left: 1px black solid">
   <tr>
      <td  align="justify" style="text-indent: 45px;" width="550px">
     Yang bertanda tangan di bawah ini kami Kepala Lingkungan <?php echo $lingkungan;?> , Kelurahan Jimbaran, Kecamatan Kuta Selatan, Kabupaten Badung, 
        Berdasarkan data dan informasi dari pemohon, dengan ini menerangkan bahwa:
      </td>
<tr>

  <tr>
      <td colspan="3"><b> DATA ANAK </b>
      </td>
   </tr>
<table class=MsoTableGrid  border=1 width="500px" style="border-collapse:collapse;">
   <tr>
      <tr>
      <td width="150">Nama</td>
      <td>:</td>
      <td><?php echo $nama_anak;?></td>
   </tr>
      <tr>
        <td width="100">Tempat/ Tgl Lahir</td>
      <td>:</td>
      <td><?php echo $tmpl_anak;?>, <?php echo $format6;?></td>
   </tr>
      <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><?php echo $alamat;?></td>
   </tr>
     <tr>
      <td>Keperluan</td>
      <td>:</td>
      <td><?php echo $keperluan;?></td>
   </tr>
</tr>
</table>
<table class=MsoTableGrid  border=1 width="500px" align= "center" style="border-collapse:collapse;">
  <tr>
      <td colspan="4" ><b> DATA ORANG TUA </b></td>
  </tr>
  <tr>
      <td width="150px" >Nama Ayah</td>
      <td>:</td>
      <td width="250px"><?php echo $nama_ayah;?></td>
      <td rowspan="3" width="150px">TTD</td>
  </tr>
    <tr>
      <td width="150px" >NIK</td>
      <td>:</td>
      <td width="250px"><?php echo $nik_ayah;?></td>
  </tr>
  <tr>
      <td width="150">Tempat/ Tgl Lahir</td>
      <td>:</td>
      <td width="250"><?php echo $tmpl_ayah;?>, <?php echo $format7;?></td>
   </tr>
    <tr>
      <td width="150px" >Nama Ibu</td>
      <td>:</td>
      <td width="250px"><?php echo $nama_ibu;?></td>
      <td rowspan = "3" width="150px">TTD</td>
  </tr>
  <tr>
      <td width="150px" >NIK</td>
      <td>:</td>
      <td width="250px"><?php echo $nik_ibu;?></td>
  </tr>
      <tr>
      <td width="150">Tempat/ Tgl Lahir</td>
      <td>:</td>
      <td width="250"><?php echo $tmpl_ibu;?>, <?php $format8=date('d-m-Y',strtotime($tgll_ibu)); echo $format8;?></td>
   </tr>
</table>
<table border=1 width="500px">
     <tr>
      <td colspan="4" ><b> SAKSI I </b></td>
  </tr>
  <tr>
      <td width="150px" >Nama</td>
      <td>:</td>
      <td width="200px"><?php echo $saksi1;?></td>
      <td rowspan = "3" width="200px">TTD</td>
  </tr>
    <tr>
      <td width="150px" >NIK</td>
      <td>:</td>
      <td width="200px"><?php echo $nik_saksi1;?></td>
  </tr>
  <tr>
      <td width="150">Umur</td>
      <td>:</td>
      <td width="200"><?php echo $umur_saksi1;?></td>
   </tr>
    <tr>
      <td colspan="4" ><b> SAKSI II </b></td>
  </tr>
    <tr>
      <td width="150px" >Nama</td>
      <td>:</td>
      <td width="250px"><?php echo $saksi2;?></td>
      <td rowspan = "3" width="150px">TTD</td>
  </tr>
  <tr>
      <td width="150px" >NIK</td>
      <td>:</td>
      <td width="250px"><?php echo $nik_saksi2;?></td>
  </tr>
      <tr>
      <td width="150">Umur</td>
      <td>:</td>
      <td width="250"><?php echo $umur_saksi2;?></td>
   </tr>
</table>
<table style="border-left: 1px black solid">
      <tr>
      <td colspan="35" width="500"align="justify" style="text-indent: 45px;" >
        <p>
        Demikian surat keterangan ini kami berikan untuk dapat dipergunakan untuk melengkapi administrasi <?php echo $keperluan;?>. 
        Apabila dikemudian hari ternyata data dan informasi yang disampaikan pemohon tidak benar maka surat keterangan ini dinyatakan tidak berlaku/batal 
        dan apabila terdapat kekeliruan maka akan dilakukan perbaikan sebagaimana mestinya. kekeliruan maka akan dilakukan perbaikan sebagaimana mestinya.
        <p>
        </td>
      <td> 
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
    <td colspan="3">Jimbaran, <?php echo $format4;?> </td>
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


    
</body>
</html>
        <script>
            window.print();
        </script>