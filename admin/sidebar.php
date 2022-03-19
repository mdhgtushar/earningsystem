<?php
/**
 * Example Application
 *
 * @package Example-application
 */





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

                            if(isset($shipments[$dirname1."_menus"])){
                            $moduleName = $shipments[$dirname1."_menus"];
                            }else{
                                $moduleName = null;
                            }
                            }
                }
               
            }
        }
        array_push($dataArray, $moduleName);

	}
}







// $smarty->assign('sidebar', [
//     [ 'getmodule.php' => 'IP Manager'],
//     ]);

    
$smarty->assign('sidebar', $dataArray);





