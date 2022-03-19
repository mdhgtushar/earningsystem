<?php 
include "libs/dbsqlqr/conn.php";
session_start();
$b = new database();
$b->select("settings","set_value","id=1");
$adminTempArr = $b->dataArray;
if(isset($_SESSION["userId"])){
$userid = $_SESSION["userId"];
}else{
    $userid = null; 
}
$templateName = "twenty_one";
$adminTemplateName = $adminTempArr[0]['set_value'];

?>