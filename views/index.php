<?php session_start(); if (isset($_SESSION["urhptc2017"])) {header("location:controllers/dashboard.php");}?>
<?php include('overalls/header.php'); ?>
	<body class="grey lighten-3">
		<main>
			<div class="section m-top">
				<div class="row">
					<div class="col s12 m6 l6 offset-m3 offset-l3">
						<div class="section">
							<div class="card">
							    <div class="card-image">
							        <img src="views/libs/images/header-contact-1.jpg">
							        <span class="card-title ">Iniciar Sesión</span>
							    </div>
							    <div class="card-content">
								  	<div class="container">
								  		<div class="row">
									    	<form class="col s12" onsubmit="return false" autocomplete="off">
										      	<div class="row">
											        <div class="input-field col s12">
											          <i class="material-icons prefix">account_circle</i>
											          <input id="user" type="text" class="validate">
											          <label for="icon_prefix">Usuario</label>
											        </div>
											        <div class="input-field col s12">
											          <i class="material-icons prefix">lock</i>
											          <input id="pass" type="password" class="validate">
											          <label for="password">Contraseña</label>
											        </div>
										      	</div>
										      	<div class="row ">
										      		<div class="col s12 m12 l12 center">
										      			<a class="waves-effect waves-light btn blue darken-2" id="login"><i class="material-icons left">check</i>Iniciar</a>
										      		</div>
										      	</div>
									    	</form>
								  		</div>
								  	</div>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
				

		<?php include('overalls/footer.php'); ?>
		<?php include('overalls/scripts.php'); ?>
		<script type="text/javascript" src="logic/index.js"></script>
	</body>
</html>