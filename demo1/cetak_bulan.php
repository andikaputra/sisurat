<?php
include '../konek.php';
date_default_timezone_set('Asia/Jakarta');
$tglhariini = date('d F Y');
?>

<!-- CSS Files -->
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/atlantis.min.css">

<!-- CSS Just for demo purpose, don't include it in your project -->
<link rel="stylesheet" href="../assets/css/demo.css">
<?php
if (isset($_GET['bulan'])) {
    $bln = $_GET['bulan'];
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
                                                WHERE data_request_skb.status = 3 and month(data_request_skb.acc) = '$bln'
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
                                                WHERE data_request_skbd.status = 3 and month(data_request_skbd.acc) = '$bln'
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
                                                WHERE data_request_skbpk.status = 3 and month(data_request_skbpk.acc) = '$bln'
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
                                                WHERE data_request_skd.status = 3 and month(data_request_skd.acc) = '$bln'
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
                                                WHERE data_request_skdoa.status = 3 and month(data_request_skdoa.acc) = '$bln'
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
                                                WHERE data_request_skkm.status = 3 and month(data_request_skkm.acc) = '$bln'
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
                                                WHERE  data_request_skl.status = 3 and month(data_request_skl.acc) = '$bln'";
}

if ($bln == "1") {
    $bln = "JANUARI";
} elseif ($bln == "2") {
    $bln = "FEBRUARI";
} elseif ($bln == "3") {
    $bln = "MARET";
} elseif ($bln == "4") {
    $bln = "APRIL";
} elseif ($bln == "5") {
    $bln = "MEI";
} elseif ($bln == "6") {
    $bln = "JUNI";
} elseif ($bln == "7") {
    $bln = "JULI";
} elseif ($bln == "8") {
    $bln = "AGUSTUS";
} elseif ($bln == "9") {
    $bln = "SEPTEMBER";
} elseif ($bln == "10") {
    $bln = "OKTOBER";
} elseif ($bln == "11") {
    $bln = "NOVEMBER";
} elseif ($bln == "12") {
    $bln = "DESEMBER";
}


?>
<?php
$html = '
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
                <font size="3"><b>LAPORAN PEMBUATAN SURAT BULAN ' . $bln . '</b></font><br>
                <hr style="margin:0px" color="black">
            </center>
        </td>
    </tr>
</table>
<br>
        <br>
        <br>
        <center>
            <table border="1" cellpadding="3" cellspacing="0">
                <tr>
                    <th>No.</th>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>TANGGAL PEMBUATAN</th>
                    <th>REQUEST</th>
                </tr>
        <center>';
$no = 0;
$query = mysqli_query($konek, $sql);
while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
    $no++;
    $nik = $data['nik'];
    $nama = $data['nama'];
    $tanggal = $data['acc'];
    $tgl = date('d F Y', strtotime($tanggal));
    $status = $data['status'];
    //$keperluan = $data['keperluan'];
    $request = $data['request'];

    $html .= ' 
                        <tr>
                            <td>' . $no . '</td>
                            <td>' . $nik . '</td>
                            <td>' . $nama . '</td>
                            <td>' . $tgl . '</td>
                            <td>' . $request . '</td>
                        </tr>
                    
                    ';
}



$html .= '         </table>

<br>
<br>

<table class=MsoTableGrid border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
<td >
<table border="0">
   <tr>
   <td colspan="3"></td>
   <td rowspan="7" width="200px"></td>
</tr>
   <tr>
   <td colspan="3"></td>
</tr>
   <tr>
   <td colspan="3"></td>
</tr>
   <tr>
   <td ></td>
   <td></td>
   <td></td>
</tr>
<tr>
   <td colspan="2"> </td>
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
   <td colspan="3"></td>
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
   <td></td>
   <td>Jimbaran,' . $tglhariini . '</td>
</tr>
   <tr>
   <td> </td>
   <td>Lurah Jimbaran,</td>
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
   <td></td>
   <td width="200px">I Ketut Rimbawan, SSTP</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
';


require_once  '../vendor/autoload.php';
ob_clean();
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output("LAporan Bulan $bln.pdf", 'I');
?>