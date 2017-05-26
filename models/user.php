<?php 
	include('connection.php');
	$option = $_POST['option'];

	switch ($option) {
		case 'read':
			$sql = 'SELECT * FROM user';
			$result = $con->prepare($sql);
			$result->execute();
			while ($data = $result->fetch()) {
			    echo 	'<div class="col s12 m6 l4 ">
					        <div class="card horizontal ">
						      	<div class="card-image">
						        	<img src="views/libs/images/user2.jpg" class="circle responsive-img ">
						      	</div>
						      	<div class="card-stacked">
							        <div class="card-content">
							        	<p class="p">'.$data['email'].'</p>
							        	<p>'.$data['name'].'</p>
							        </div>
						      	</div>
						      	<a onclick="consult('.$data['id'].')" class="activator btn-floating halfway-fab waves-effect waves-light blue darken-2"><i class="material-icons">mode_edit</i></a>
						    </div>
		      			</div>';		 
			}
			break;
		case 'consult':
			$id = $_POST['id'];
			if ($id != "") {
				 $sql = 'SELECT * FROM user WHERE id = :id';
				  $result = $con->prepare($sql);
				  $result->execute(array(':id'=>$id));
				  while ($rpt = $result->fetch()) {
				    print_r(json_encode($rpt));
				  }
			}else{

			}
			break;
		case 'create':
			$identification = $_POST['identification'];
			$name = $_POST['name'];
			$lastname = $_POST['lastname'];
			$address = $_POST['address'];
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$creator = date("Y-m-d");
			$sql = "INSERT INTO user VALUES(null,:identification,:name,:lastname,:address,:user,:pass,:creator)";
			$result = $con->prepare($sql);
			$result->execute(array(":identification"=>$identification,":name"=>$name,":lastname"=>$lastname,":address"=>$address,":user"=>$user,":pass"=>$pass,":creator"=>$creator));
			if ($result) {
				echo 1;
			}else{
				echo 2;
			}
			break;
		case 'update':
			$id = $_POST['id'];
			$identification = $_POST['identification'];
			$name = $_POST['name'];
			$lastname = $_POST['lastname'];
			$address = $_POST['address'];
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$sql = 'UPDATE user SET identification=:identification,name=:name,lastname=:lastname,email=:address,nick=:user,pass=:pass WHERE id=:id';
			$result = $con->prepare($sql);
			$result->execute(array(":identification"=>$identification,":name"=>$name,":lastname"=>$lastname,":address"=>$address,":user"=>$user,":pass"=>$pass,":id"=>$id));
			if ($result) {
				echo 1;
			}else{
				echo 2;
			}
			break;
		case 'delet':
			$id = $_POST['id'];
			$sql = 'DELETE FROM user WHERE id = :id';
			$result = $con->prepare($sql);
			$result->execute(array(':id'=>$id));
			if ($result) {
				echo 1;
			}else{
				echo 2;
			}
			break;
		default:
			# code...
			break;
	}


 ?>