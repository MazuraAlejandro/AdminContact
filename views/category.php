<?php session_start();
if(!isset($_SESSION["urhptc2017"])){header("location:controllers/index.php");}?>
<?php $icon ="loyalty"; $title = "Categorias"; $category = "active"; $id_btn = "btn_add";?>
<?php include('overalls/header.php'); ?>
	<body>
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
      <div class="row" id="body_category">
                
      </div>
		</div>	

        <div id="modal_add_contact" class="modal card wow animated zoomIn" style="z-index: 1003; opacity: 0; transform: scaleX(0.7); top: 250.516px;">
            <div class="card-image">
                <img src="views/libs/images/contact-header-0.jpg">
                <span class="card-title">Registrar Categoria</span>
            </div>
            <div class="row card-content">
                <div class="section">
                    <form class="col s12" onsubmit="return false" autocomplete="off">
                        <div class="row">
                            <div class="input-field col s12 m12 l12">
                              <input id="category" type="text" class="validate">
                              <label for="icon_prefix">Categoria</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat " id="btn_cancel">Cancelar</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat " id="btn_save">Guardar</a>
            </div>
        </div> 
         <div class="modal-overlay" id="materialize-modal-overlay-2" style="z-index: 1002; display: none; opacity: 0;"></div>

		<?php include('overalls/footer.php'); ?>
		<?php include('overalls/scripts.php'); ?>
		<script type="text/javascript" src="logic/category.js"></script>
	</body>
</html>