<?php
// **author**
// naer (http://github.com/naer2/)
header('Content-Type: text/html; charset=utf-8');
include_once('src/simple_html_dom.php');
include('doviz.php');
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
        <td><?echo '<img src="'.$usdFlag->src . '"/>';?>USD</td>
        <td><?echo $usdBuying;?></td>
        <td><?echo $usdSelling;?></td>
        <td><?
        if (floatval($usdChange)>0)
        echo '<i style="color:green;">'.$usdChange.'</i>';
        else if (floatval($usdChange)==0)
        echo '<i style="color:yellow;">'.$usdChange.'</i>';
        else
          echo '<i style="color:red;">'.$usdChange.'</i>';
        ?>
        </td>
        <td><?echo $usdTime;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$eurFlag->src . '"/>';?>EUR</td>
        <td><?echo $eurBuying;?></td>
        <td><?echo $eurSelling;?></td>
        <td><?
        if (floatval($eurChange)>0)
        echo '<i style="color:green;">'.$eurChange.'</i>';
        else if (floatval($eurChange)==0)
        echo '<i style="color:yellow;">'.$eurChange.'</i>';
        else
          echo '<i style="color:red;">'.$eurChange.'</i>';
        ?>
        </td>
        <td><?echo $eurTime;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$gbpFlag->src . '"/>';?>GBP</td>
        <td><?echo $gbpBuying;?></td>
        <td><?echo $gbpSelling;?></td>
        <td><?
        if (floatval($gbpChange)>0)
        echo '<i style="color:green;">'.$gbpChange.'</i>';
        else if (floatval($gbpChange)==0)
        echo '<i style="color:yellow;">'.$gbpChange.'</i>';
        else
          echo '<i style="color:red;">'.$gbpChange.'</i>';
        ?>
        </td>
        <td><?echo $gbpTime;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$nokFlag->src . '"/>';?>NOK</td>
        <td><?echo $nokBuying;?></td>
        <td><?echo $nokSelling;?></td>
        <td><?
        if (floatval($nokChange)>0)
        echo '<i style="color:green;">'.$nokChange.'</i>';
        else if (floatval($nokChange)==0)
        echo '<i style="color:yellow;">'.$nokChange.'</i>';
        else
          echo '<i style="color:red;">'.$nokChange.'</i>';
        ?>
        </td>
        <td><?echo $nokTime;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$sekFlag->src . '"/>';?>SEK</td>
        <td><?echo $sekBuying;?></td>
        <td><?echo $sekSelling;?></td>
        <td><?
        if (floatval($sekChange)>0)
        echo '<i style="color:green;">'.$sekChange.'</i>';
        else if (floatval($sekChange)==0)
        echo '<i style="color:yellow;">'.$sekChange.'</i>';
        else
          echo '<i style="color:red;">'.$sekChange.'</i>';
        ?>
        </td>
        <td><?echo $sekTime;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$dkkFlag->src . '"/>';?>DKK</td>
        <td><?echo $dkkBuying;?></td>
        <td><?echo $dkkSelling;?></td>
        <td><?
        if (floatval($dkkChange)>0)
        echo '<i style="color:green;">'.$dkkChange.'</i>';
        else if (floatval($dkkChange)==0)
        echo '<i style="color:yellow;">'.$dkkChange.'</i>';
        else
          echo '<i style="color:red;">'.$dkkChange.'</i>';
        ?>
        </td>
        <td><?echo $dkkTime;?></td>
      </tr>
      <tr>
        <td><?  echo '<img src="'.$chfFlag->src . '"/>';?>CHF</td>
        <td><?echo $chfBuying;?></td>
        <td><?echo $chfSelling;?></td>
        <td><?
        if (floatval($chfChange)>0)
        echo '<i style="color:green;">'.$chfChange.'</i>';
        else if (floatval($chfChange)==0)
        echo '<i style="color:yellow;">'.$chfChange.'</i>';
        else
          echo '<i style="color:red;">'.$chfChange.'</i>';
        ?>
        </td>
        <td><?echo $chfTime;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$jpyFlag->src . '"/>';?>JPY</td>
        <td><?echo $jpyBuying;?></td>
        <td><?echo $jpySelling;?></td>
        <td><?
        if (floatval($jpyChange)>0)
        echo '<i style="color:green;">'.$jpyChange.'</i>';
        else if (floatval($jpyChange)==0)
        echo '<i style="color:yellow;">'.$jpyChange.'</i>';
        else
          echo '<i style="color:red;">'.$jpyChange.'</i>';
        ?>
        </td>
        <td><?echo $jpyTime;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$sarFlag->src . '"/>';?>SAR</td>
        <td><?echo $sarBuying;?></td>
        <td><?echo $sarSelling;?></td>
        <td><?
        if (floatval($sarChange)>0)
        echo '<i style="color:green;">'.$sarChange.'</i>';
        else if (floatval($sarChange)==0)
        echo '<i style="color:yellow;">'.$sarChange.'</i>';
        else
          echo '<i style="color:red;">'.$sarChange.'</i>';
        ?>
        </td>
        <td><?echo $sarTime;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$ausFlag->src . '"/>';?>AUS</td>
        <td><?echo $ausBuying;?></td>
        <td><?echo $ausSelling;?></td>
        <td><?
        if (floatval($ausChange)>0)
        echo '<i style="color:green;">'.$ausChange.'</i>';
        else if (floatval($ausChange)==0)
        echo '<i style="color:yellow;">'.$ausChange.'</i>';
        else
          echo '<i style="color:red;">'.$ausChange.'</i>';
        ?>
        </td>
        <td><?echo $ausTime;?></td>
      </tr>
      <tr>
        <td><?echo '<img src="'.$cadFlag->src . '"/>';?>CAD</td>
        <td><?echo $cadBuying;?></td>
        <td><?echo $cadSelling;?></td>
        <td><?
        if (floatval($cadChange)>0)
        echo '<i style="color:green;">'.$cadChange.'</i>';
        else if (floatval($cadChange)==0)
        echo '<i style="color:yellow;">'.$cadChange.'</i>';
        else
          echo '<i style="color:red;">'.$cadChange.'</i>';
        ?>
        </td>
        <td><?echo $cadTime;?></td>
      </tr>
    </tbody>
  </table>
