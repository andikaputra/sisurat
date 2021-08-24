<?php include '../konek.php';?>
<?php 
  if(isset($_GET['id_request_skb'])){
    $id=$_GET['id_request_skb'];
    $sql = "SELECT * FROM data_request_skb natural join data_pemohon WHERE id_request_skb='$id'";
    $query = mysqli_query($konek,$sql);
        $data = mysqli_fetch_array($query,MYSQLI_BOTH);
        $nik = $data['nik'];
    $nama = $data['nama'];
    $tempat = $data['tempat_lahir'];
        $tgl = $data['tanggal_lahir'];
        $tgl2 = $data['tanggal_request'];
        $format2 = date('Y', strtotime($tgl2));
        $format1 = date('d-m-Y', strtotime($tgl));
        $format5 = date('m', strtotime($tgl2));
        $format3 = date('d F Y', strtotime($tgl2));
    $agama = $data['agama'];
    $jekel = $data['jekel'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
        $lingkungan=$data['lingkungan'];
        $kebangsaan=$data['kebangsaan'];
    $pekerjaan = $data['pekerjaan'];
        $request = $data['request'];
        $keperluan = $data['keperluan'];
        $acc = $data['acc'];
        $format4 = date('d F Y', strtotime($acc));
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
            $nosurat= $id."/KL/".$romawi."/".$format2;
            //echo $nosurat;
;

?>

<?php
$content = "
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SURAT KETERANGAN KELAKUAN BAIK <?php echo $nama;?></title>
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
                                                    <font size="3"><b>SURAT KETERANGAN KELAKUAN BAIK</b></font><br>
                                                    <hr style="margin:0px" color="black">
                                                   <span>NOMOR : <?php echo $nosurat;?></span>
                                                </center>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <tr>
                                        <!-- <td colspan="6"><hr color="black"></td> -->
                                    </tr>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=1 align="center" width="600">
 <tr >
  <td >
  <table class=MsoTableGrid border=0 cellspacing=0 cellpadding=2 width="200">
   <tr>
      <td colspan="3">
        <p> Saya yang bertandatangan di bawah ini :
        </P>
        </td>
   </tr>
   <tr >
      <td width="2"><font size="2">Nama </font></td>
      <td width="1">:</td>
      <td><font size="2"><?php echo $nama;?></font></td>
    </tr>
   <tr>
      <td>alamat</td>
      <td>:</td>
      <td width="10" ><font size="2"><?php echo $alamat;?></font></td>
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
      <td colspan="3" width="2" align="justify" style="text-indent: 45px;">
        <p> selaku pemohon/kuasa pemohon bertanggung jawab mutlak terhadap semua data dan informasi yang saya berikan sehingga 
        terbitnya surat keterangan ini. apabila dikemudian hari data dan informasi yang saya berikan tidak benar, 
        saya siap dituntut sesuai hukum yang berlaku dengan tidak melibatkan pejabat yang menandatangani surat keterangan ini. 
    </p>
   </tr>
      <tr>
      <td>
      </td>
      <td>        <br>
    </td>
      <td>
      </td>
   </tr>
      <tr>
      <td solspan="3">Pemohon</td>
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
      <td colspan="3"><?php echo $nama;?></td>
   </tr>
  </table>

  </td>
  <td>

  <table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 style="border-left: 1px black solid" width="500">
      <tr>
      <td colspan = "3" width ="13px" align="justify" style="text-indent: 45px;" >
        <p>Yang bertanda tangan di bawah ini kami Kepala Lingkungan <?php echo $lingkungan;?> , Kelurahan Jimbaran, Kecamatan Kuta Selatan, Kabupaten Badung, 
        Berdasarkan data dan informasi dari pemohon, dengan ini menerangkan bahwa:
    </p>
      </td>

   </tr>
      <tr>
      <td width="100">Nama</td>
      <td>:</td>
      <td><?php echo $nama;?></td>
   </tr>
      <tr>
        <td width="100">Tempat/ Tgl Lahir</td>
      <td>:</td>
      <td><?php echo $tempat;?>, <?php echo $format2;?></td>
   </tr>
      <tr>
      <td>Kebangsaan</td>
      <td>:</td>
      <td><?php echo $kebangsaan;?></td>
   </tr>
     <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td><?php echo $jekel;?></td>
   </tr>
      <tr>
      <td>Agama</td>
      <td>:</td>
      <td><?php echo $agama;?></td>
   </tr>
      <tr>
      <td>Pekerjaan</td>
      <td>:</td>
      <td><?php echo $pekerjaan;?></td>
   </tr>
      <tr>
      <td>NO. KTP</td>
      <td>:</td>
      <td><?php echo $nik;?></td>
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
      <tr>
      <td colspan="35" width="500"align="justify" style="text-indent: 45px;">
            <p> Dengan ini menerangkan bahwa memang benar orang tersebut diatas belum pernah kawin/ menikah.
            </p>
            <p>
        Demikian surat keterangan ini kami berikan untuk dapat dipergunakan sebagaimana mestinya. Apabila dikemudian hari ternyata data dan informasi yang disampaikan pemohon tidak 
        benar maka surat keterangan ini dinyatakan tidak berlaku/batal dan apabila terdapat kekeliruan maka akan dilakukan perbaikan sebagaimana mestinya.
        <p>
        </td>
      <td> 
     </td>
      <td></td>
   </tr>
  </table>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><o:p></o:p></p>
  </td>
 </tr>
</table>

                                    <br>
                                    <br>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt' align="center">
 <tr>
  <td >
  <table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
   mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
    <tr>
    <td colspan="3">Jimbaran, <?php echo $format3;?></td>
   </tr>
    <tr>
    <td colspan="3">Mengetahui, </td>
   </tr>
    <tr>
    <td colspan="3">Diregistrasi sesuai permintaan pemohon</td>
   </tr>
    <tr>
    <td >No. registrasi</td>
    <td>:</td>
    <td>masih di coba</td>
   </tr>
   <tr>
    <td colspan="2">Lurah Jimbaran, </td>
    <td width="300"></td>
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
    <td colspan="3">I Ketut Rimbawan, SSTP</td>
   </tr>
  </table>
  </td>
  <td>
  <table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
   mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
    <tr>
    <td width="250"><p></p></td>
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
    <td>Kepala Lingkungan <?php echo $lingkungan;?></td>
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
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><o:p></o:p></p>
  </td>
 </tr>
</table>



    
</body>
</html>
      ";
      require_once "./vendor/autoload.php";
      $mpdf = new \Mpdf\Mpdf();
      $mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
      $mpdf->WriteHTML($content);
      $mpdf->Output();
?>