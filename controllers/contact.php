<?php
$var = base64_encode('contact');
$error = base64_encode('error');
if(file_exists('../views/index.php')){
   header("location:../default.php?view=".$var."");
}else{
    header("location:../default.php?view=".$var."");
}
?>