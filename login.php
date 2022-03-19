<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require_once './init.php';
require_once './header.php';
$smarty->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);

if(isset($_SESSION['userId'])){
    header('Location: index.php');
}
if(isset($_POST['login_action'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $data = $b->select("tbl_user","userId","userEmail='".$email."'");
    $tatalBal = $b->dataArray;
   if($tatalBal){
    header('Location: index.php');
       $_SESSION["userId"] = $tatalBal[0]['userId'];
   }else{
       echo "Incorrect";
   }

   // $smarty->assign("totalBal", $tatalBal);
}

$viewfilename = "login.tpl";
if (file_exists('templates/'.$templateName.$viewfilename)) {
    $smarty->display($templateName.$viewfilename);
} else {
    $smarty->display('twenty_one/'.$viewfilename);
}

