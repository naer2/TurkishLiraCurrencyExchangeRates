<?php
// **author**
// naer (http://github.com/naer2/)
header('Content-Type: text/html; charset=utf-8');
include_once('src/simple_html_dom.php');
$link = 'http://bigpara.hurriyet.com.tr';
$html = file_get_html($link.'/doviz');

$usd = $html->find('div.tableCnt div.tBody ul',0);
$eur = $html->find('div.tableCnt div.tBody ul',1);
$gbp = $html->find('div.tableCnt div.tBody ul',2);

foreach($html->find('div.tableCnt div.tableBox.srbstPysDvz div.tBody ul') as $article) {
    $item['name'] = $article->find('li',0)->plaintext;
    $item['buying']     = $article->find('li', 2)->plaintext;
    $item['selling']     = $article->find('li', 3)->plaintext;
    $item['change']    = $article->find('li', 4)->plaintext;
    $item['time']     = $article->find('li', 5)->plaintext;
    $kur[] = $item;
}
$usdBuying = $kur[0]['buying'];
$usdSelling = $kur[0]['selling'];
$usdChange = $kur[0]['change'];
$usdTime = $kur[0]['time'];
$usdChange = str_replace(',', '.', $usdChange);

$eurBuying = $kur[1]['buying'];
$eurSelling = $kur[1]['selling'];
$eurChange = $kur[1]['change'];
$eurTime = $kur[1]['time'];
$eurChange = str_replace(',', '.', $eurChange);

$gbpBuying = $kur[2]['buying'];
$gbpSelling = $kur[2]['selling'];
$gbpChange = $kur[2]['change'];
$gbpTime = $kur[2]['time'];
$gbpChange = str_replace(',', '.', $gbpChange);

$chfBuying = $kur[3]['buying'];
$chfSelling = $kur[3]['selling'];
$chfChange = $kur[3]['change'];
$chfTime = $kur[3]['time'];
$chfChange = str_replace(',', '.', $chfChange);

$jpyBuying = $kur[4]['buying'];
$jpySelling = $kur[4]['selling'];
$jpyChange = $kur[4]['change'];
$jpyTime = $kur[4]['time'];
$jpyChange = str_replace(',', '.', $jpyChange);

$sarBuying = $kur[5]['buying'];
$sarSelling = $kur[5]['selling'];
$sarChange = $kur[5]['change'];
$sarTime = $kur[5]['time'];
$sarChange = str_replace(',', '.', $sarChange);

$nokBuying = $kur[6]['buying'];
$nokSelling = $kur[6]['selling'];
$nokChange = $kur[6]['change'];
$nokTime = $kur[6]['time'];
$nokChange = str_replace(',', '.', $nokChange);

$dkkBuying = $kur[7]['buying'];
$dkkSelling = $kur[7]['selling'];
$dkkChange = $kur[7]['change'];
$dkkTime = $kur[7]['time'];
$dkkChange = str_replace(',', '.', $dkkChange);

$ausBuying = $kur[8]['buying'];
$ausSelling = $kur[8]['selling'];
$ausChange = $kur[8]['change'];
$ausTime = $kur[8]['time'];
$ausChange = str_replace(',', '.', $ausChange);

$cadBuying = $kur[9]['buying'];
$cadSelling = $kur[9]['selling'];
$cadChange = $kur[9]['change'];
$cadTime = $kur[9]['time'];
$cadChange = str_replace(',', '.', $cadChange);

$sekBuying = $kur[10]['buying'];
$sekSelling = $kur[10]['selling'];
$sekChange = $kur[10]['change'];
$sekTime = $kur[10]['time'];
$sekChange = str_replace(',', '.', $sekChange);

$usdFlag = $html->find('div.tableCnt div.tBody ul li img',0);
$eurFlag = $html->find('div.tableCnt div.tBody ul li img',1);
$gbpFlag = $html->find('div.tableCnt div.tBody ul li img',2);
$chfFlag = $html->find('div.tableCnt div.tBody ul li img',3);
$jpyFlag = $html->find('div.tableCnt div.tBody ul li img',4);
$sarFlag = $html->find('div.tableCnt div.tBody ul li img',5);
$nokFlag = $html->find('div.tableCnt div.tBody ul li img',6);
$dkkFlag = $html->find('div.tableCnt div.tBody ul li img',7);
$ausFlag = $html->find('div.tableCnt div.tBody ul li img',8);
$cadFlag = $html->find('div.tableCnt div.tBody ul li img',9);
$sekFlag = $html->find('div.tableCnt div.tBody ul li img',10);
?>
