<?php include '../konek.php';?>
<?php
    if(isset($_GET['id_request_skd'])){
        $id=$_GET['id_request_skd'];
        $sql = "SELECT * FROM data_request_skd natural join data_pemohon WHERE id_request_skd='$id'";
        $query = mysqli_query($konek,$sql);
        $data = mysqli_fetch_array($query,MYSQLI_BOTH);
        $id=$data['id_request_skd'];
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
        $lingkungan = $data['lingkungan'];
        $keperluan = $data['keperluan'];
        $request = $data['request'];
        $acc = $data['acc'];
        $bangsa = $data['kebangsaan'];
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
            $nosurat= $id."/KL/".$romawi."/".date('Y', strtotime($tgl2));
            //echo $nosurat;
;

?>
<?php
$html='
<!DOCTYPE html>
<html lang="en">

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
                            <font size="3"><b>SURAT KETERANGAN DOMISILI</b></font><br>
                            <hr style="margin:0px" color="black">
                        <span>NOMOR :'.$nosurat.'</span>
                        </center>
                    </td>
                </tr>
                </table>
                <br>


<table class=MsoTableGrid border="0" cellspacing="0" cellpadding="1" align="center" width="650px">
 <tr>
  <td>
        <table class=MsoTableGrid border="0" cellspacing="0" cellpadding="0" width="220px">
        <tr>
                <td colspan="3">
                <p> Saya yang bertandatangan di bawah ini :</P>
                </td>
        </tr>
        <tr >
            <td width="2px"><font size="2">Nama </font></td>
            <td width="2px">:</td>
            <td width="2px"><font size="2">'.$nama.'</font></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td>:</td>
            <td ><font size="2">'. $alamat.'</font></td>
        </tr>
        <tr>
            <td><font size="2">NO.KTP</font></td>
            <td>:</td>
            <td ><font size="2">'.$nik.'</font></td>
        </tr>
            <tr>
            <td><br></td>
            <td></td>
            <td></td>
        </tr>
            <tr>
            <td colspan="3" width="2px" align="justify" style="text-indent: 45px;">
                <p> selaku pemohon /kuasa pemohon/  sponsor bertanggung jawab mutlak terhadap semua data dan informasi yang diberikan sehingga terbitnya surat keterangan ini. 
                Apabila dikemudian hari data dan informasi yang pemohon sampaikan ini tidak benar , 
                pemohon bersedia dituntut sesuai hukum yang berlaku dengan tidak melibatkan pejabat yang menandatangani surat keterangan ini.  
            </p>
        </tr>
            <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
            <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td><br><br> <br></td>
            <td></td>
        </tr>
            <tr>
            <td colspan="3">'. $nama.'</td>
            </tr>
        </table>

</td> <td>

        <table class=MsoTableGrid border="0" cellspacing="0" cellpadding="1" style="border-left: 1px black solid" width="420px">
            <tr>
            <td colspan = "3" width ="400px" align="justify" style="text-indent: 45px;">
                <p >Yang bertanda tangan di bawah ini kami Kepala Lingkungan '.$lingkungan.' , Kelurahan Jimbaran, Kecamatan Kuta Selatan, Kabupaten Badung, 
                Berdasarkan data dan informasi dari pemohon, dengan ini menerangkan bahwa:
            </p>
            </td>
        </tr>
        <tr>
        <td><br></td>
        <td></td>
        <td></td>
         </tr>
        <tr>
            <td width="150">Nama</td>
            <td>:</td>
            <td>'.$nama.'</td>
        </tr>
            <tr>
                <td>Tempat/ Tgl Lahir</td>
            <td>:</td>
            <td>'.$tempat.','.$format2.'</td>
                </tr>
            <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>'.$jekel.'</td>
        </tr>
        </tr>
            <tr>
            <td>Kebangsaan</td>
            <td>:</td>
            <td>'.$bangsa.'</td>

            <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td>'.$pekerjaan.'</td>
        </tr>
            <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>'.$alamat.'</td>
        </tr>
        </tr>
        <tr>
        <td><br></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
            <td colspan="35" width="400" align="justify" style="text-indent: 45px;">
                    <p> Sepanjang pengetahuan kami bahwa memang benar orang tersebut diatas sampai saat ini bertempat tinggal pada alamat tersebut diatas, 
                    dan Surat Keterangan ini dibuat untuk  melengkapi administrasi '.$keperluan.'.
                    </p>
                    <br>
                    <p>
                Demikian surat keterangan ini kami berikan untuk dapat dipergunakan sebagaimana mestinya. Apabila dikemudian hari ternyata data dan informasi yang disampaikan pemohon tidak 
                benar maka surat keterangan ini dinyatakan tidak berlaku/batal dan apabila terdapat kekeliruan maka akan dilakukan perbaikan sebagaimana mestinya.
                <p>
                </td>
        </tr>
        </table>
</td>
</tr>
</table>

                                    <br>
                                    <br>
                                    <br>
                                    <br>

<table class=MsoTableGrid border="0" cellspacing="0" cellpadding="1">
 <tr>
  <td >
  <table class=MsoTableGrid border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td colspan="3">Jimbaran, '.$format3.'</td>
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
  <table class=MsoTableGrid border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td width="300"><br></td>
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
    <td style="text-transform: capitalize">Kepala Lingkungan '.$lingkungan.'</td>
    <td></td>
   </tr>
      <tr>
    <td>
      <br>
    <br>
    <br>
    <br>
  </td>
    <td></td>
   </tr>
     <tr>
    <td> '.$kaling.'</td>
    <td></td>
   </tr>
  </table>
  <p><o:p></o:p></p>
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
$mpdf->WriteHTML($html);
$mpdf->Output("Surat Keterangan Domisili $nama.pdf",'I');
