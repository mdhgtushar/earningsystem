<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require_once './init.php';
require_once './header.php';
$smarty->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);
$viewExist = false;
$taskId = false;
if(isset($_GET['taskid'])){
    $taskId = $_GET['taskid'];
    $data = $b->select("tbl_ads_count","taskViewTime","taskViewTime='".date('Y-m-d')."' AND userId='".$userid."' AND taskId='".$taskId."'");
    $Times = $b->dataArray;
    $data = $b->select("tbl_task","taskId","taskId=".$taskId."");
    $foundTasks = $b->dataArray;
    if($foundTasks){
         if($Times){
    $viewExist = true;
    if(isset($_GET['submit'])){
        header('Location: tasks.php');
    }
   }else{
    $viewExist = false;
    if(isset($_GET['submit'])){
   $taskId = $_GET['taskid'];
    $data = array('userId' => $userid, 'taskId' => $taskId);
    $result = $b->insert("tbl_ads_count",$data);
    $smarty->assign("insertData",  $result);
    header('Location: tasks.php');
    }
   }
    }else{
        $taskId = false;
    }
  
}

$smarty->assign("viewExist", $viewExist);
$smarty->assign("taskId", $taskId);

$viewfilename = "viewtask.tpl";
if (file_exists('templates/'.$templateName.$viewfilename)) {
    $smarty->display($templateName.$viewfilename);
} else {
    $smarty->display('twenty_one/'.$viewfilename);
}

