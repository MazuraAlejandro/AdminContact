<?php

session_start();
session_destroy();
header("location:../controllers/index.php");

?>