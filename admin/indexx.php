

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="#" class="w3-bar-item w3-button">Dashbord</a>
  <a href="#" class="w3-bar-item w3-button">Modules</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<!-- Page Content -->
<div style="margin-left:25%">

<div class="w3-container w3-teal">
  <h1>My Page</h1>
</div>


<div class="w3-container">

<table>
  <tr>
    <th>Name</th>
    <th>Status</th>
  </tr>



  
<?php 


$dir = "../modules";
$list=scandir($dir);


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
    
    echo "<tr>
    <td><h4>". $moduleName ."</h4><p>". $moduleDescription ."</p></td>
    <td>". $status ."</td>
  </tr>";
	}
}

?>
  
</table>

</div>
      
</body>
</html>

