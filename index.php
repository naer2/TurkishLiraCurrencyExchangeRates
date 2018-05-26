<?php
// **author**
// naer (http://github.com/naer2/)
header('Content-Type: text/html; charset=utf-8');
include_once('src/simple_html_dom.php');
$link = 'http://www.bloomberght.com';
$html = file_get_html($link.'/doviz');


$usdBuying = $html->find('div.table-responsive table tbody tr td',7);
$usdSelling = $html->find('div.table-responsive table tbody tr td',8);
$usdChange = $html->find('div.table-responsive table tbody tr td',9);
$usdTime = $html->find('div.table-responsive table tbody tr td',10);

$eurBuying = $html->find('div.table-responsive table tbody tr td',12);
$eurSelling = $html->find('div.table-responsive table tbody tr td',13);
$eurChange = $html->find('div.table-responsive table tbody tr td',14);
$eurTime = $html->find('div.table-responsive table tbody tr td',15);

$gbpBuying = $html->find('div.table-responsive table tbody tr td',17);
$gbpSelling = $html->find('div.table-responsive table tbody tr td',18);
$gbpChange = $html->find('div.table-responsive table tbody tr td',19);
$gbpTime = $html->find('div.table-responsive table tbody tr td',20);

$sekBuying = $html->find('div.table-responsive table tbody tr td',57);
$sekSelling = $html->find('div.table-responsive table tbody tr td',58);
$sekChange = $html->find('div.table-responsive table tbody tr td',59);
$sekTime = $html->find('div.table-responsive table tbody tr td',60);

$cadBuying = $html->find('div.table-responsive table tbody tr td',52);
$cadSelling = $html->find('div.table-responsive table tbody tr td',53);
$cadChange = $html->find('div.table-responsive table tbody tr td',54);
$cadTime = $html->find('div.table-responsive table tbody tr td',55);

$ausBuying = $html->find('div.table-responsive table tbody tr td',47);
$ausSelling = $html->find('div.table-responsive table tbody tr td',48);
$ausChange = $html->find('div.table-responsive table tbody tr td',49);
$ausTime = $html->find('div.table-responsive table tbody tr td',50);

$jpyBuying = $html->find('div.table-responsive table tbody tr td',27);
$jpySelling = $html->find('div.table-responsive table tbody tr td',28);
$jpyChange = $html->find('div.table-responsive table tbody tr td',29);
$jpyTime = $html->find('div.table-responsive table tbody tr td',30);

$sarBuying = $html->find('div.table-responsive table tbody tr td',32);
$sarSelling = $html->find('div.table-responsive table tbody tr td',33);
$sarChange = $html->find('div.table-responsive table tbody tr td',34);
$sarTime = $html->find('div.table-responsive table tbody tr td',35);

$dkkBuying = $html->find('div.table-responsive table tbody tr td',42);
$dkkSelling = $html->find('div.table-responsive table tbody tr td',43);
$dkkChange = $html->find('div.table-responsive table tbody tr td',44);
$dkkTime = $html->find('div.table-responsive table tbody tr td',45);

$nokBuying = $html->find('div.table-responsive table tbody tr td',37);
$nokSelling = $html->find('div.table-responsive table tbody tr td',38);
$nokChange = $html->find('div.table-responsive table tbody tr td',39);
$nokTime = $html->find('div.table-responsive table tbody tr td',40);

$chfBuying = $html->find('div.table-responsive table tbody tr td',22);
$chfSelling = $html->find('div.table-responsive table tbody tr td',23);
$chfChange = $html->find('div.table-responsive table tbody tr td',24);
$chfTime = $html->find('div.table-responsive table tbody tr td',25);

$usdFlag = $html->find('div.table-responsive img',0);
$eurFlag = $html->find('div.table-responsive img',1);
$gbpFlag = $html->find('div.table-responsive img',2);
$chfFlag = $html->find('div.table-responsive img',3);
$jpyFlag = $html->find('div.table-responsive img',4);
$sarFlag = $html->find('div.table-responsive img',5);
$nokFlag = $html->find('div.table-responsive img',6);
$dkkFlag = $html->find('div.table-responsive img',7);
$ausFlag = $html->find('div.table-responsive img',8);
$cadFlag = $html->find('div.table-responsive img',9);
$sekFlag = $html->find('div.table-responsive img',10);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<table class="table table-dark">
    <thead>
      <tr>
        <th>Currency</th>
        <th>Buying</th>
        <th>Selling</th>
        <th>Change%</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?echo '<img src="'.$link.$usdFlag->src . '"/>';?>USD</td>
        <td><?echo $usdBuying->innertext;?></td>
        <td><?echo $usdSelling->innertext;?></td>
        <td><?echo $usdChange->innertext;?></td>
        <td><?echo $usdTime->innertext;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$link.$eurFlag->src . '"/>';?>EUR</td>
        <td><?echo $eurBuying->innertext;?></td>
        <td><?echo $eurSelling->innertext;?></td>
        <td><?echo $eurChange->innertext;?></td>
        <td><?echo $eurTime->innertext;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$link.$gbpFlag->src . '"/>';?>GBP</td>
        <td><?echo $gbpBuying->innertext;?></td>
        <td><?echo $gbpSelling->innertext;?></td>
        <td><?echo $gbpChange->innertext;?></td>
        <td><?echo $gbpTime->innertext;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$link.$nokFlag->src . '"/>';?>NOK</td>
        <td><?echo $nokBuying->innertext;?></td>
        <td><?echo $nokSelling->innertext;?></td>
        <td><?echo $nokChange->innertext;?></td>
        <td><?echo $nokTime->innertext;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$link.$sekFlag->src . '"/>';?>SEK</td>
        <td><?echo $sekBuying->innertext;?></td>
        <td><?echo $sekSelling->innertext;?></td>
        <td><?echo $sekChange->innertext;?></td>
        <td><?echo $sekTime->innertext;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$link.$dkkFlag->src . '"/>';?>DKK</td>
        <td><?echo $dkkBuying->innertext;?></td>
        <td><?echo $dkkSelling->innertext;?></td>
        <td><?echo $dkkChange->innertext;?></td>
        <td><?echo $dkkTime->innertext;?></td>
      </tr>
      <tr>
        <td><?  echo '<img src="'.$link.$chfFlag->src . '"/>';?>CHF</td>
        <td><?echo $chfBuying->innertext;?></td>
        <td><?echo $chfSelling->innertext;?></td>
        <td><?echo $chfChange->innertext;?></td>
        <td><?echo $chfTime->innertext;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$link.$jpyFlag->src . '"/>';?>JPY</td>
        <td><?echo $jpyBuying->innertext;?></td>
        <td><?echo $jpySelling->innertext;?></td>
        <td><?echo $jpyChange->innertext;?></td>
        <td><?echo $jpyTime->innertext;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$link.$sarFlag->src . '"/>';?>SAR</td>
        <td><?echo $sarBuying->innertext;?></td>
        <td><?echo $sarSelling->innertext;?></td>
        <td><?echo $sarChange->innertext;?></td>
        <td><?echo $sarTime->innertext;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$link.$ausFlag->src . '"/>';?>AUS</td>
        <td><?echo $ausBuying->innertext;?></td>
        <td><?echo $ausSelling->innertext;?></td>
        <td><?echo $ausChange->innertext;?></td>
        <td><?echo $ausTime->innertext;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$link.$cadFlag->src . '"/>';?>CAD</td>
        <td><?echo $cadBuying->innertext;?></td>
        <td><?echo $cadSelling->innertext;?></td>
        <td><?echo $cadChange->innertext;?></td>
        <td><?echo $cadTime->innertext;?></td>
      </tr>
    </tbody>
  </table>
