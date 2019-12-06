<?php
// **author**
// naer (http://github.com/naer2/)
header('Content-Type: text/html; charset=utf-8');
include_once('src/simple_html_dom.php');
$link = 'http://www.bloomberght.com';
$html = file_get_html($link.'/doviz');


$usdBuying = $html->find('div.table-responsive table tbody tr td',6);
$usdSelling = $html->find('div.table-responsive table tbody tr td',7);
$usdChange = $html->find('div.table-responsive table tbody tr td',8);
$usdChange = str_replace(',', '.', $usdChange->innertext);
$usdTime = $html->find('div.table-responsive table tbody tr td',9);

$eurBuying = $html->find('div.table-responsive table tbody tr td',11);
$eurSelling = $html->find('div.table-responsive table tbody tr td',12);
$eurChange = $html->find('div.table-responsive table tbody tr td',13);
$eurChange = str_replace(',', '.', $eurChange->innertext);
$eurTime = $html->find('div.table-responsive table tbody tr td',14);

$gbpBuying = $html->find('div.table-responsive table tbody tr td',16);
$gbpSelling = $html->find('div.table-responsive table tbody tr td',17);
$gbpChange = $html->find('div.table-responsive table tbody tr td',18);
$gbpChange = str_replace(',', '.', $gbpChange->innertext);
$gbpTime = $html->find('div.table-responsive table tbody tr td',19);

$sekBuying = $html->find('div.table-responsive table tbody tr td',56);
$sekSelling = $html->find('div.table-responsive table tbody tr td',57);
$sekChange = $html->find('div.table-responsive table tbody tr td',58);
$sekChange = str_replace(',', '.', $sekChange->innertext);
$sekTime = $html->find('div.table-responsive table tbody tr td',59);

$cadBuying = $html->find('div.table-responsive table tbody tr td',51);
$cadSelling = $html->find('div.table-responsive table tbody tr td',52);
$cadChange = $html->find('div.table-responsive table tbody tr td',53);
$cadChange = str_replace(',', '.', $cadChange->innertext);
$cadTime = $html->find('div.table-responsive table tbody tr td',54);

$ausBuying = $html->find('div.table-responsive table tbody tr td',46);
$ausSelling = $html->find('div.table-responsive table tbody tr td',47);
$ausChange = $html->find('div.table-responsive table tbody tr td',48);
$ausChange = str_replace(',', '.', $ausChange->innertext);
$ausTime = $html->find('div.table-responsive table tbody tr td',49);

$jpyBuying = $html->find('div.table-responsive table tbody tr td',26);
$jpySelling = $html->find('div.table-responsive table tbody tr td',27);
$jpyChange = $html->find('div.table-responsive table tbody tr td',28);
$jpyChange = str_replace(',', '.', $jpyChange->innertext);
$jpyTime = $html->find('div.table-responsive table tbody tr td',29);

$sarBuying = $html->find('div.table-responsive table tbody tr td',31);
$sarSelling = $html->find('div.table-responsive table tbody tr td',32);
$sarChange = $html->find('div.table-responsive table tbody tr td',33);
$sarChange = str_replace(',', '.', $sarChange->innertext);
$sarTime = $html->find('div.table-responsive table tbody tr td',34);

$dkkBuying = $html->find('div.table-responsive table tbody tr td',41);
$dkkSelling = $html->find('div.table-responsive table tbody tr td',42);
$dkkChange = $html->find('div.table-responsive table tbody tr td',43);
$dkkChange = str_replace(',', '.', $dkkChange->innertext);
$dkkTime = $html->find('div.table-responsive table tbody tr td',44);

$nokBuying = $html->find('div.table-responsive table tbody tr td',36);
$nokSelling = $html->find('div.table-responsive table tbody tr td',37);
$nokChange = $html->find('div.table-responsive table tbody tr td',38);
$nokChange = str_replace(',', '.', $nokChange->innertext);
$nokTime = $html->find('div.table-responsive table tbody tr td',39);

$chfBuying = $html->find('div.table-responsive table tbody tr td',21);
$chfSelling = $html->find('div.table-responsive table tbody tr td',22);
$chfChange = $html->find('div.table-responsive table tbody tr td',23);
$chfChange = str_replace(',', '.', $chfChange->innertext);
$chfTime = $html->find('div.table-responsive table tbody tr td',24);

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
        <td><?
        if (floatval($usdChange)>0)
        echo '<i style="color:green;">'.$usdChange.'</i>';
        else if (floatval($usdChange)==0)
        echo '<i style="color:yellow;">'.$usdChange.'</i>';
        else
          echo '<i style="color:red;">'.$usdChange.'</i>';
        ?>
        </td>
        <td><?echo $usdTime->innertext;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$link.$eurFlag->src . '"/>';?>EUR</td>
        <td><?echo $eurBuying->innertext;?></td>
        <td><?echo $eurSelling->innertext;?></td>
        <td><?
        if (floatval($eurChange)>0)
        echo '<i style="color:green;">'.$eurChange.'</i>';
        else if (floatval($eurChange)==0)
        echo '<i style="color:yellow;">'.$eurChange.'</i>';
        else
          echo '<i style="color:red;">'.$eurChange.'</i>';
        ?>
        </td>
        <td><?echo $eurTime->innertext;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$link.$gbpFlag->src . '"/>';?>GBP</td>
        <td><?echo $gbpBuying->innertext;?></td>
        <td><?echo $gbpSelling->innertext;?></td>
        <td><?
        if (floatval($gbpChange)>0)
        echo '<i style="color:green;">'.$gbpChange.'</i>';
        else if (floatval($gbpChange)==0)
        echo '<i style="color:yellow;">'.$gbpChange.'</i>';
        else
          echo '<i style="color:red;">'.$gbpChange.'</i>';
        ?>
        </td>
        <td><?echo $gbpTime->innertext;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$link.$nokFlag->src . '"/>';?>NOK</td>
        <td><?echo $nokBuying->innertext;?></td>
        <td><?echo $nokSelling->innertext;?></td>
        <td><?
        if (floatval($nokChange)>0)
        echo '<i style="color:green;">'.$nokChange.'</i>';
        else if (floatval($nokChange)==0)
        echo '<i style="color:yellow;">'.$nokChange.'</i>';
        else
          echo '<i style="color:red;">'.$nokChange.'</i>';
        ?>
        </td>
        <td><?echo $nokTime->innertext;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$link.$sekFlag->src . '"/>';?>SEK</td>
        <td><?echo $sekBuying->innertext;?></td>
        <td><?echo $sekSelling->innertext;?></td>
        <td><?
        if (floatval($sekChange)>0)
        echo '<i style="color:green;">'.$sekChange.'</i>';
        else if (floatval($sekChange)==0)
        echo '<i style="color:yellow;">'.$sekChange.'</i>';
        else
          echo '<i style="color:red;">'.$sekChange.'</i>';
        ?>
        </td>
        <td><?echo $sekTime->innertext;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$link.$dkkFlag->src . '"/>';?>DKK</td>
        <td><?echo $dkkBuying->innertext;?></td>
        <td><?echo $dkkSelling->innertext;?></td>
        <td><?
        if (floatval($dkkChange)>0)
        echo '<i style="color:green;">'.$dkkChange.'</i>';
        else if (floatval($dkkChange)==0)
        echo '<i style="color:yellow;">'.$dkkChange.'</i>';
        else
          echo '<i style="color:red;">'.$dkkChange.'</i>';
        ?>
        </td>
        <td><?echo $dkkTime->innertext;?></td>
      </tr>
      <tr>
        <td><?  echo '<img src="'.$link.$chfFlag->src . '"/>';?>CHF</td>
        <td><?echo $chfBuying->innertext;?></td>
        <td><?echo $chfSelling->innertext;?></td>
        <td><?
        if (floatval($chfChange)>0)
        echo '<i style="color:green;">'.$chfChange.'</i>';
        else if (floatval($chfChange)==0)
        echo '<i style="color:yellow;">'.$chfChange.'</i>';
        else
          echo '<i style="color:red;">'.$chfChange.'</i>';
        ?>
        </td>
        <td><?echo $chfTime->innertext;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$link.$jpyFlag->src . '"/>';?>JPY</td>
        <td><?echo $jpyBuying->innertext;?></td>
        <td><?echo $jpySelling->innertext;?></td>
        <td><?
        if (floatval($jpyChange)>0)
        echo '<i style="color:green;">'.$jpyChange.'</i>';
        else if (floatval($jpyChange)==0)
        echo '<i style="color:yellow;">'.$jpyChange.'</i>';
        else
          echo '<i style="color:red;">'.$jpyChange.'</i>';
        ?>
        </td>
        <td><?echo $jpyTime->innertext;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$link.$sarFlag->src . '"/>';?>SAR</td>
        <td><?echo $sarBuying->innertext;?></td>
        <td><?echo $sarSelling->innertext;?></td>
        <td><?
        if (floatval($sarChange)>0)
        echo '<i style="color:green;">'.$sarChange.'</i>';
        else if (floatval($sarChange)==0)
        echo '<i style="color:yellow;">'.$sarChange.'</i>';
        else
          echo '<i style="color:red;">'.$sarChange.'</i>';
        ?>
        </td>
        <td><?echo $sarTime->innertext;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$link.$ausFlag->src . '"/>';?>AUS</td>
        <td><?echo $ausBuying->innertext;?></td>
        <td><?echo $ausSelling->innertext;?></td>
        <td><?
        if (floatval($ausChange)>0)
        echo '<i style="color:green;">'.$ausChange.'</i>';
        else if (floatval($ausChange)==0)
        echo '<i style="color:yellow;">'.$ausChange.'</i>';
        else
          echo '<i style="color:red;">'.$ausChange.'</i>';
        ?>
        </td>
        <td><?echo $ausTime->innertext;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$link.$cadFlag->src . '"/>';?>CAD</td>
        <td><?echo $cadBuying->innertext;?></td>
        <td><?echo $cadSelling->innertext;?></td>
        <td><?
        if (floatval($cadChange)>0)
        echo '<i style="color:green;">'.$cadChange.'</i>';
        else if (floatval($cadChange)==0)
        echo '<i style="color:yellow;">'.$cadChange.'</i>';
        else
          echo '<i style="color:red;">'.$cadChange.'</i>';
        ?>
        </td>
        <td><?echo $cadTime->innertext;?></td>
      </tr>
    </tbody>
  </table>
