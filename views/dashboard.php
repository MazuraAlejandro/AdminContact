<?php session_start();
if(!isset($_SESSION["urhptc2017"])){header("location:controllers/index.php");}?>
<?php $icon ="dashboard"; $title = "Dashboard"; $dashboard = "active"?>
<?php include('overalls/header.php'); ?>
	<body>
		<?php include('overalls/nav.php'); ?>
        <!-- <div class="card margin-none">
            <div class="card-image ">
              <img class="card-img" src="views/libs/images/blog-technical-header-0.jpg">
              <span class="card-title "><i class="material-icons small m-top">dashboard</i> Dashboard</span>
            </div>
        </div> -->
        
		<div class="section">
			<div id="card-stats">
                <div class="row">
                    <div class="col s12 m6 l3  offset-l1">
                        <div class="card">
                            <div class="card-content  green darken-2 white-text">
                                <p class="card-stats-title"><i class="mdi-social-group-add"></i> Usuarios</p>
                                <h4 class="card-stats-number">0</h4>
                                <p class="card-stats-compare LobsterTwo"><i class="mdi-hardware-keyboard-arrow-up"></i> Nuestros <span class="green-text text-lighten-5">Registrados</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-content pink darken-2 lighten-1 white-text">
                                <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Hora Actual</p>
                                <h4 class="card-stats-number" id="liveclock"></h4>
                                <p class="card-stats-compare LobsterTwo"><i class="mdi-hardware-keyboard-arrow-down"></i> Cartago, <span class="deep-purple-text text-lighten-5">Valle del cauca</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12 l3">
                        <div class="card">
                            <div class="card-content blue-grey white-text">
                                <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Contactos</p>
                                <h4 class="card-stats-number">0</h4>
                                <p class="card-stats-compare LobsterTwo"><i class="mdi-hardware-keyboard-arrow-up"></i> Nuestros <span class="blue-grey-text text-lighten-5">Registrados</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>	
		</div>	

		<?php include('overalls/footer.php'); ?>
		<?php include('overalls/scripts.php'); ?>
		<script type="text/javascript" src="logic/dashboard.js"></script>
	</body>
</html>