<?php
$var = base64_encode('index');
$code = isset($_GET['view']) ? $_GET['view'] : $var;
$view = base64_decode($code);
 if(file_exists('views/'.$view.'.php')){
    include('views/'.$view.'.php');
}else{
    include('views/error.php');
}
?>