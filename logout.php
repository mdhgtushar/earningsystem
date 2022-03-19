<?php 
require_once './init.php';
if(isset($_SESSION['userId'])){
    unset($_SESSION['userId']);
    header('Location: login.php');
}else{
    header('Location: login.php');
}

?>