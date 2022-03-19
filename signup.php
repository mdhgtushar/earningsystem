<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require_once './init.php';
require_once './header.php';
$smarty->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);



$viewfilename = "signup.tpl";
if (file_exists('templates/'.$templateName.$viewfilename)) {
    $smarty->display($templateName.$viewfilename);
} else {
    $smarty->display('twenty_one/'.$viewfilename);
}

