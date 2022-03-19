<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require_once './init.php';
require_once './header.php';
$smarty->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);
$data = $b->select("tbl_ads_count","clickId","userId=".$userid."");
$tatalBal = count($b->dataArray);
$smarty->assign("totalBal", $tatalBal);
if(!isset($_SESSION["userId"])){
    header('Location: login.php');
}
$data = $b->select("tbl_rfr","userRfrName","refferedId=".$userid."");
$totalRef = count($b->dataArray);
$smarty->assign("totalRef", $totalRef);

$data2 = $b->select("tbl_payment","paymentAmmount","userId=".$userid."");
$totalPay = 0;
foreach($b->dataArray as $payment){
    $totalPay += $payment['paymentAmmount'];
}
$smarty->assign("totalPayment", $totalPay);
$carrentBal = $tatalBal - $totalPay;
$smarty->assign("carrentBal", $carrentBal);

$data = $b->select("tbl_ads_count","clickId","userId='".$userid."' AND date(taskViewTime) = CURDATE()");
$todayEarn = count($b->dataArray);
$smarty->assign("todayEarn", $todayEarn);

if (file_exists('templates/'.$templateName.'/index.tpl')) {
    $smarty->display($templateName.'/index.tpl');
} else {
    $smarty->display('twenty_one/index.tpl');
}

