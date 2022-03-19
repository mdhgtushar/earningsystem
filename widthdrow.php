<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require_once './init.php';
require_once './header.php';
$smarty->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);
$widhdrowAblity = true;
$data = $b->select("tbl_ads_count","clickId","userId=".$userid."");
$tatalBal = count($b->dataArray);

$data2 = $b->select("tbl_payment","paymentAmmount","userId=".$userid."");
$totalPay = 0;
foreach($b->dataArray as $payment){
    $totalPay += $payment['paymentAmmount'];
}
$carrentBal = $tatalBal - $totalPay;
if(isset($_GET['submit'])){
$paymentAmmu = 2;
if($paymentAmmu <= $carrentBal){
$data3 = array('userId' => $userid, 'paymentAmmount' => $paymentAmmu);
$result = $b->insert("tbl_payment",$data3);
}else{
    $widhdrowAblity = false;
}
header('Location: index.php');
}

if($carrentBal < 2){
    
$widhdrowAblity = false;
}



$smarty->assign("widhdrowAblity", $widhdrowAblity);





$viewfilename = "widthdrow.tpl";
if (file_exists('templates/'.$templateName.$viewfilename)) {
    $smarty->display($templateName.$viewfilename);
} else {
    $smarty->display('twenty_one/'.$viewfilename);
}

