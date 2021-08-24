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
$html='
<!DOCTYPE html>
<html lang="en">

</head>

<body>

                                    <table border="0" align="center">
                                        <tr>
                                        <td><img src="../demo1/img/badung.png" width="90" height="90"/></td>
                                            <td width="600">
                                                <center>
                                                    <font size="4"><b>PEMERINTAHAN KABUPATEN BADUNG</b></font><br>
                                                    <font size="4"><b>KECAMATAN KUTA SELATAN</b></font><br>
                                                    <font size="5"><b>KELURAHAN JIMBARAN</b></font><br>
                                                    <font size="4"><b style="text-transform: uppercase">LINGKUNGAN '. $lingkungan.'</b></font>
                                                    
                                                </center>
                                            </td>
                                        <tr>
                                       <td colspan="2"> <hr style="margin:0px" color="black"> </td>
                                       </tr>
                                        </tr>
                              
                                     </table>
                                    <br>
                                    <table border="0" align="center">
                                        <tr>
                                            <td>
                                                <center>
                                                    <font size="3"><b>SURAT KETERANGAN KELAKUAN BAIK</b></font><br>
                                                    <hr style="margin:0px" color="black">
                                                   <span>NOMOR :'.$nosurat.'</span>
                                                </center>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
<table class=MsoTableGrid border="0" cellspacing="0" cellpadding="1" align="center" width="650px">
 <tr >
  <td >
  <table class=MsoTableGrid border="0" cellspacing="0" cellpadding="0" width="220px">
   <tr>
      <td colspan="3" >
        <p> Saya yang bertandatangan di bawah ini :
        </P>
        </td>
   </tr>
   <tr >
      <td width="10px">Nama </td>
      <td width="1">:</td>
      <td width="110px">'.$nama.'</td>
    </tr>
   <tr>
      <td width="10px">alamat</td>
      <td>:</td>
      <td width="110px" >'. $alamat.'</td>
   </tr>
   <tr>
      <td width="10px">NO.KTP</td>
      <td>:</td>
      <td width="110px">'.$nik.'</td>
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
      <td colspan="3">'.$nama.'</td>
   </tr>
  </table>

  </td>
  <td>

  <table class=MsoTableGrid border="0" cellspacing="0" cellpadding="0" style="border-left: 1px black solid" width="420px">
      <tr>
      <td colspan = "3"  width ="400px" align="justify" style="text-indent: 45px;" >
        <p>Yang bertanda tangan di bawah ini kami Kepala Lingkungan '.$lingkungan.', Kelurahan Jimbaran, Kecamatan Kuta Selatan, Kabupaten Badung, 
        Berdasarkan data dan informasi dari pemohon, dengan ini menerangkan bahwa:
            <br>
    </p>
      </td>
        
   </tr>
      <tr>
      <td width="100">Nama</td>
      <td>:</td>
      <td>'.$nama.'</td>
   </tr>
      <tr>
        <td width="100">Tempat/ Tgl Lahir</td>
      <td>:</td>
      <td>'.$tempat.','.$format1.'</td>
   </tr>
      <tr>
      <td>Kebangsaan</td>
      <td>:</td>
      <td>'.$kebangsaan.'</td>
   </tr>
     <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td>'.$jekel.'</td>
   </tr>
      <tr>
      <td>Agama</td>
      <td>:</td>
      <td>'.$agama.'</td>
   </tr>
      <tr>
      <td>Pekerjaan</td>
      <td>:</td>
      <td>'.$pekerjaan.'</td>
   </tr>
      <tr>
      <td>NO. KTP</td>
      <td>:</td>
      <td>'.$nik.'</td>
   </tr>
      <tr>
      <td>Alamat</td>
      <td>:</td>
      <td>'.$alamat.'</td>
   </tr>
   <tr>
      <td>Keperluan</td>
      <td>:</td>
      <td>'.$keperluan.'</td>
   </tr>
      <tr>
      <td colspan="35" width="400" align="justify" style="text-indent: 45px;">
            <p> Sepanjang pengetahuan kami adalah memang benar orang tersebut di atas berkelakuan baik, tidak pernah dihukum 
            penjara atau kurungan berdasarkan keputusan pengadilan yang sudah 
            mempunyai kekuatan hukum atau pidana lainnya, tidak terikat minuman keras, candu dan obat terlarang
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
  <p ><o:p></o:p></p>
  </td>
 </tr>';
 $html.='</table>

         <br>
         <br>

<table class=MsoTableGrid border="0" cellspacing="0" cellpadding="0" align="center">
 <tr>
  <td >
        <table border="0">
            <tr>
            <td colspan="3">Jimbaran,'.$format3.'</td>
            <td rowspan="7" width="100px"></td>
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
            <td></td>
        </tr>
        <tr>
            <td>
            <br>
            <br>
            <br>
            <br>
            <br>
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
        <table border="0">
        <tr>
            <td width="250px"><br></td>
            <td></td>
        </tr>
            <tr>
            <td><br></td>
            <td></td>
        </tr>
        <tr>
            <tr>
            <td><br></td>
            <td></td>
        </tr>
            <tr>
            <td><br></td>
            <td></td>
        </tr>
            <tr>
            <td>Kepala Lingkungan '.$lingkungan.'</td>
            <td></td>
        </tr>
            <tr>
            <td><br>
            <br>
            <br>
            <br>
            <br>
            </td>
            
            <td></td>
        </tr>
            <tr>
            <td>'.$kaling.'</td>
            <td></td>
        </tr>
        </table>
  </td>
 </tr>
</table>

    
</body>
</html>
';
?>

<?php

require_once  '../vendor/autoload.php';
ob_clean();
$mpdf = new \Mpdf\Mpdf();
$mpdf->Image('img/Badung.png', 0, 0, 210, 297, 'png', '', true, false);
$mpdf->WriteHTML($html);
$mpdf->Output("Surat Keterangan Kelakuan Baik $nama.pdf",'I');

?>