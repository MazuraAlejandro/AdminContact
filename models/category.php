<?php 
	include('connection.php');
	$option = $_POST['option'];

	switch ($option) {
		case 'read':
			$sql = 'SELECT * FROM category';
			$result = $con->prepare($sql);
			$result->execute();
			while ($data = $result->fetch()) {
			    echo 	'<div class="col s12 m6 l3 ">
					        <div class="card horizontal ">
						      	<div class="card-image">
						        	<img src="views/libs/images/user2.jpg" class="circle responsive-img ">
						      	</div>
						      	<div class="card-stacked">
							        <div class="card-content">
							        	<p class="p">'.$data['category'].'</p>
							        	<p>'.$data['creator'].'</p>
							        </div>
						      	</div>
						      	<a onclick="delet('.$data['id'].')" class="activator btn-floating halfway-fab waves-effect waves-light blue darken-2"><i class="material-icons">delete</i></a>
						    </div>
		      			</div>';		 
			}
			break;
		case 'create':
			$category = $_POST['category'];
			$creator = date("Y-m-d");
			$sql = "INSERT INTO category VALUES(null,:category,:creator)";
			$result = $con->prepare($sql);
			$result->execute(array(":category"=>$category,":creator"=>$creator));
			if ($result) {
				echo 1;
			}else{
				echo 2;
			}
			break;
		case 'delet':
			$id = $_POST['id'];
			$sql = 'DELETE FROM category WHERE id = :id';
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