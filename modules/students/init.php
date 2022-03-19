<?php 

include "index.php";


if(isset($_GET['admit'])){
    $smarty->display("../modules/students/template/insert.tpl");
}else{
    
$smarty->display("../modules/students/template/index.tpl");
}


?>