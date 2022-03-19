<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require_once './init.php';
require_once './header.php';
$smarty->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);
$b->select("tbl_task","*");
$tasks = $b->dataArray;
$smarty->assign("tasks", $tasks);

$viewfilename = "tasks.tpl";
if (file_exists('templates/'.$templateName.$viewfilename)) {
    $smarty->display($templateName.$viewfilename);
} else {
    $smarty->display('twenty_one/'.$viewfilename);
}

