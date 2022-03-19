<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require_once "./header.php";
$smarty->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);

if(isset($_GET['updateAdminTemp'])){
$b->update("settings",$_POST,"id=1");
}
if(isset($_GET['updateClientTemp'])){
    echo 'clent';
}

$dir = "../templates";
$list=scandir($dir);
$dataArray = [];
foreach($list as $value){
    if($value!='..' &&  $value!="."){
         $directories[]=$value;
    }
    if($value!='..' &&  $value!="." && !is_file($dir.'/'.$value) ){
	$dirname1 = $directories[]=$value;
    $dir = "../templates"."/".$dirname1;
    $status = "Deactivated";
    $list=scandir($dir);
    $moduleName = "";
    $moduleDescription ="";
        foreach($list as $value){
            if($value!='..' &&  $value!="."){
                $dirname = $directories[]=$value;
                if($dirname == "config.json"){
                $dirr = "../templates"."/".$dirname1.'/'.$dirname;
                
                    $status = "Actived";


                    if(file_exists($dirr))
                            {
                            $shipments = json_decode(file_get_contents($dirr), true);

                            if(isset($shipments[$dirname1."_cofig"]["name"])){
                            $moduleName = $shipments[$dirname1."_cofig"]["name"];
                            }else{
                                $moduleName = "";
                            }
                            if(isset($shipments[$dirname1."_cofig"]["description"])){
                                
                            $moduleDescription = $shipments[$dirname1."_cofig"]["description"];
                            }else{
                                $moduleDescription = "";
                            }
                            }
                            else 
                            {
                            echo "Not found";
                            }
                }
               
            }
        }
        $moduleDetils = ["moduleName" => $moduleName, "moduleDescription" => $moduleDescription];
        array_push($dataArray, $moduleDetils);

	}
}


$smarty->assign('forntedTemp', $dataArray);

$dir = "templates";
$list=scandir($dir);
$dataArray = [];
foreach($list as $value){
    if($value!='..' &&  $value!="."){
         $directories[]=$value;
    }
    if($value!='..' &&  $value!="." && !is_file($dir.'/'.$value) ){
	$dirname1 = $directories[]=$value;
    $dir = "templates"."/".$dirname1;
    $status = "Deactivated";
    $list=scandir($dir);
    $moduleName = "";
    $moduleDescription ="";
        foreach($list as $value){
            if($value!='..' &&  $value!="."){
                $dirname = $directories[]=$value;
                if($dirname == "config.json"){
                $dirr = "templates"."/".$dirname1.'/'.$dirname;
                
                    $status = "Actived";


                    if(file_exists($dirr))
                            {
                            $shipments = json_decode(file_get_contents($dirr), true);

                            if(isset($shipments[$dirname1."_cofig"]["name"])){
                            $moduleName = $shipments[$dirname1."_cofig"]["name"];
                            }else{
                                $moduleName = "";
                            }
                            if(isset($shipments[$dirname1."_cofig"]["description"])){
                                
                            $moduleDescription = $shipments[$dirname1."_cofig"]["description"];
                            }else{
                                $moduleDescription = "";
                            }
                            }
                            else 
                            {
                            echo "Not found";
                            }
                }
               
            }
        }
        $moduleDetils = ["moduleName" => $moduleName, "moduleDescription" => $moduleDescription];
        array_push($dataArray, $moduleDetils);

	}
}

$smarty->assign('adminTemp', $dataArray);

if (file_exists('templates/'.$adminTemplateName.'/settings.tpl')) {
    $smarty->display($adminTemplateName.'/settings.tpl');
} else {
    $smarty->display('twenty_one_admin/settings.tpl');
}

