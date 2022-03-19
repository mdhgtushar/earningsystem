<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require_once "./header.php";
$smarty->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);

if(isset($_GET['moduleName'])){
    $dirr = "../modules/".$_GET['moduleName']."/init.php";
    if(file_exists($dirr)){
    include_once  $dirr;
    }else{
        
if (file_exists('templates/'.$adminTemplateName.'/getmodule.tpl')) {
    $smarty->display("templates/".$adminTemplateName."/getmodule.tpl");
} else {
    $smarty->display('twenty_one_admin/getmodule.tpl');
}
    }
}


