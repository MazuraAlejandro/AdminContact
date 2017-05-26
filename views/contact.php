<?php session_start();
if(!isset($_SESSION["urhptc2017"])){header("location:controllers/index.php");}?>
<?php $icon ="contact_mail"; $title = "Contactos"; $contact = "active"; $id_btn = "btn_add";?>
<?php include('overalls/header.php'); ?>
	<body class="blue-grey lighten-5">
		<?php include('overalls/nav.php'); ?>
		
		
		<div class="section">
			<div class="row">
				<div class="col s12 m12 l12">
					<nav class="white">
					    <div class="nav-wrapper">
					      <form>
					        <div class="input-field">
					          <input id="search" type="search" placeholder="Buscar Contacto" required>
					          <label class="label-icon" for="search" ><i class="material-icons grey-text">search</i></label>
					          <i class="material-icons">close</i>
					        </div>
					      </form>
					    </div>
					</nav>
				</div>
			</div>
			<div class="row" id="body_contact">
      			
			</div>	
		</div>

		<div id="modal_add" class="modal card wow animated zoomIn" style="z-index: 1003; opacity: 0; transform: scaleX(0.7); top: 250.516px;">
	            <div class="card-image">
	              <img src="views/libs/images/contact-header-0.jpg">
	              <span class="card-title">Registrar Contactos</span>
	            </div>
	            <div class="row card-content">
				    <ul  class="tabs">
					    <li class="tab col s3"><a class="active" href="#test1">Datos Personales</a></li>
					    <li class="tab col s3"><a href="#test2">Telefonos</a></li>
					    <li class="tab col s3"><a href="#test2">Direcciones</a></li>
					    <li class="tab col s3"><a href="#test2">Relaciónes</a></li>
					    <li class="tab col s3"><a href="#test2">Correos</a></li>
					    <li class="tab col s3"><a href="#test2">Sitios Webs</a></li>
					</ul>
					<div id="test1" class="col s12">
						<div class="section">
							<form class="col s12" onsubmit="return false" autocomplete="off">
						      	<div class="row">
							        <div class="input-field col s12 m6 l6">
							          <input id="name" type="text" class="validate">
							          <label for="icon_prefix">Nombre Completo</label>
							        </div>
							        <div class="input-field col s12 m6 l6">
							          <input id="" type="text" class="validate">
							          <label for="password">Empresa</label>
							        </div>
							        <div class="input-field col s12 m6 l6">
							          <input id="" type="text" class="validate">
							          <label for="password">Cargo</label>
							        </div>
							        <div class="input-field col s12 m6 l6">
							          <input id="" type="text" class="validate">
							          <label for="password">Nota</label>
							        </div>
							        <div class="input-field col s12 m6 l6">
							          <input id="" type="text" class="validate">
							          <label for="password">Fecha Nacimiento</label>
							        </div>
							        <div class="input-field col s12 m6 l6">
						                <div class="select-wrapper"><span class="caret">▼</span>
							                <select class="initialized">
							                  <option value="" disabled="" selected="">Seleccione Categoria</option>
							                </select>
						                </div>
						                <label>Categoria</label>
						            </div>
						      	</div>
				    		</form>
						</div>
					</div>
					<div id="test2" class="col s12">
						<div class="section">
							<form class="col s12" onsubmit="return false" autocomplete="off">
						      	<div class="row">
							        <div class="input-field col s12 m6 l6">
							          <input id="email" type="text" class="validate">
							          <label for="icon_prefix">Email</label>
							        </div>
							        <div class="input-field col s12 m6 l6">
							          <input id="facebook" type="text" class="validate">
							          <label for="password">Facebook</label>
							        </div>
							        <div class="input-field col s12 m6 l6">
							          <input id="twitter" type="text" class="validate">
							          <label for="password">Twitter</label>
							        </div>
							        <div class="input-field col s12 m6 l6">
							          <input id="instagram" type="text" class="validate">
							          <label for="password">Instagram</label>
							        </div>
							        <div class="input-field col s12 m6 l6">
							          <input id="Google" type="text" class="validate">
							          <label for="password">Google +</label>
							        </div>
							        <div class="input-field col s12 m6 l6">
							          <input id="pass" type="text" class="validate">
							          <label for="password">Youtube</label>
							        </div>
						      	</div>
				    		</form>
						</div>
					</div>
	            </div>
	            <div class="modal-footer">
	              	<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat " id="btn_cancel">Cancelar</a>
	            	<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat " id="btn-subscribe">Guardar</a>
	            </div>
        </div>	
        <div class="modal-overlay" id="materialize-modal-overlay-2" style="z-index: 1002; display: none; opacity: 0;"></div>
		<?php include('overalls/footer.php'); ?>
		<?php include('overalls/scripts.php'); ?>
		<script type="text/javascript" src="logic/contact.js"></script>
	</body>
</html>