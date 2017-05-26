<?php 
	session_start();
	include('connection.php');
	$option = $_POST['option'];

	switch ($option) {
		case 'login':
				if(isset($_POST["user"]) && isset($_POST["pass"])){
				  $user = $_POST["user"];
				  $pass = $_POST["pass"];

				  $sql = 'SELECT * FROM user WHERE nick=:user AND pass=:pass';
				  $result = $con->prepare($sql);
				  $result->execute(array(":user"=>$user,":pass"=>$pass));
				  while ($data = $result->fetch()) {
				  	$_SESSION["urhptc2017"] = $data["nick"];
				   	$_SESSION["user"] = $data["nick"];
				   	$_SESSION["name"] = $data["name"];
				  	$_SESSION["creation"] = $data["creation"];
				  	$_SESSION["identification"] = $data["identification"];
				  	$_SESSION["id_user"] = $data["id"];
				  	$_SESSION["email"] = $data["email"];
				      echo 1;
				  }
				} else {
				  echo 2;
				}
			break;
		
		default:
			# code...
			break;
	}


 ?>