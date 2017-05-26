<?php 
	include('connection.php');
	$option = $_POST['option'];

	switch ($option) {
		case 'read':
			$sql = 'SELECT * FROM contact';
			$result = $con->prepare($sql);
			$result->execute();
			while ($data = $result->fetch()) {
			    echo 	'<div class="col s12 m6 l4 ">
					        <div class="card horizontal ">
						      	<div class="card-image">
						        	<img src="views/libs/images/user1.jpg" class="circle responsive-img ">
						      	</div>
						      	<div class="card-stacked">
							        <div class="card-content">
							        <span class="card-title">'.$data['name'].'</span>
							         	<p>'.$data['email'].'</p>
							         	<p>'.$data['phones'].'</p>
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
				 $sql = 'SELECT * FROM contact WHERE id = :id';
				  $result = $con->prepare($sql);
				  $result->execute(array(':id'=>$id));
				  while ($rpt = $result->fetch()) {
				    print_r(json_encode($rpt));
				  }
			}else{

			}
			break;
		default:
			# code...
			break;
	}


 ?>