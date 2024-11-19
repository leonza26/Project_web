<?php

require_once __DIR__ . '/vendor/autoload.php';

require "functions.php";
$rekap = query("SELECT * FROM tb_smarphone");

$mpdf = new \Mpdf\Mpdf();


$html = '<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Penjualan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>TABEL REKAP PEMESANAN SMARTPHONE</h1>


<table class="tabrow"  border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Merek</th>
      <th>Type</th>
      <th>Versi</th>
      <th>Os</th>
      <th>Gambar</th>


    </tr>';


    $i = 1;
    foreach($rekap  as $rekapan) {
    $html.= '<tr>
      <td>'.$i++.'</td>
      <td>'.$rekapan["merek"].'</td>
      <td>'.$rekapan["type"].'</td>
      <td>'.$rekapan["versi"].'</td>
      <td>'.$rekapan["os"].'</td>
      <td>
        <img src="img/'.$rekapan["gambar"].'" alt="Gambar" width="80">
        </td>
    </tr>';
    }


$html .= '</table>
</body>
</html>';



$mpdf->WriteHTML($html);

$mpdf->Output('rekap_penjualan.pdf', \Mpdf\Output\Destination::INLINE);

?>

