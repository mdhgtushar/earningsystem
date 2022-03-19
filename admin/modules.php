<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require_once "./header.php";
$smarty->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);







$dir = "../modules";
$list=scandir($dir);


$dataArray = [];
foreach($list as $value){
    if($value!='..' &&  $value!="."){
         $directories[]=$value;
    }
    if($value!='..' &&  $value!="." && !is_file($dir.'/'.$value) ){
	$dirname1 = $directories[]=$value;
    $dir = "../modules"."/".$dirname1;
    $status = "Deactivated";
    $list=scandir($dir);
    $moduleName = "";
    $moduleDescription ="";
        foreach($list as $value){
            if($value!='..' &&  $value!="."){
                $dirname = $directories[]=$value;
                if($dirname == "config.json"){
                $dirr = "../modules"."/".$dirname1.'/'.$dirname;
                
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


$smarty->assign('contacts', $dataArray);





if (file_exists('templates/'.$adminTemplateName.'/modules.tpl')) {
    $smarty->display($adminTemplateName.'/modules.tpl');
} else {
    $smarty->display('twenty_one_admin/modules.tpl');
}

