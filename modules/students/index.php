<?php 

function getdata($b){
   $b->select("tbl_user","*");
 return $studens = $b->dataArray;
}
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $result = $b->delete("students","id=".$id);
  $smarty->assign("deleteRes",  $result);
  getdata($b);
}
if(isset($_GET['submit'])){
  $result = $b->insert("students",$_POST);
  $smarty->assign("insertData",  $result);
  header('Location: getmodule.php?moduleName=students');
}
$smarty->assign("students", getdata($b));
$smarty->assign("adminTemplateName", $adminTemplateName);
?>