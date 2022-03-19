<table class="table table-dark">
<thead>
<tr>
<th scope="col">Id</th>
<th scope="col">Name</th>
</tr>
</thead>
<tbody>
<?php 
include 'conn.php';
$b = new database();
$result =$b->select("students","id,name");
 //$b->sql;
var_dump( $b->dataArray);

$data = $b->dataArray;

foreach($data as $data){
    echo $data['name'];
}
?>
</tbody>
</table>