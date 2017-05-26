<?php session_start();
if(!isset($_SESSION["urhptc2017"])){header("location:controllers/index.php");}?>
<?php $icon ="people"; $title = "Usuarios"; $user = "active"; $id_btn = "btn_add";?>
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
            <div class="row" id="body_users">
                
            </div>  
        </div>

        <div id="modal_add_user" class="modal card wow animated zoomIn" style="z-index: 1003; opacity: 0; transform: scaleX(0.7); top: 250.516px;">
              <div class="card-image">
                <img src="views/libs/images/contact-header-0.jpg">
                <span class="card-title">Registrar Usuario</span>
              </div>
              <div class="row card-content">
                <div class="section">
                    <form class="col s12" onsubmit="return false" autocomplete="off">
                        <div class="row">
                            <div class="input-field col s12 m6 l6">
                              <input id="identification" type="text" class="validate">
                              <label for="icon_prefix">identification</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                              <input id="name" type="text" class="validate">
                              <label for="icon_prefix">Nombres</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                              <input id="lastname" type="text" class="validate">
                              <label for="icon_prefix">Apellidos</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                              <input id="address" type="text" class="validate">
                              <label for="icon_prefix">Correo electronico</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                              <input id="user" type="text" class="validate">
                              <label for="icon_prefix">Usuario</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                              <input id="pass" type="password" class="validate">
                              <label for="icon_prefix">Contraseña</label>
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
        <div id="modal_edit_user" class="modal card wow animated zoomIn" style="z-index: 1003; opacity: 0; transform: scaleX(0.7); top: 250.516px;">
              <div class="card-image">
                <img src="views/libs/images/contact-header-0.jpg">
                <span class="card-title">Modificar Usuario</span>
              </div>
              <div class="row card-content">
                <div class="section">
                    <form class="col s12" onsubmit="return false" autocomplete="off">
                        <div class="row">
                            <div class="input-field col s12 m6 l6 hiddendiv">
                              <input id="id" type="text" class="validate">
                              <label for="icon_prefix">id</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                              <input id="identification_edit" type="text" class="validate" placeholder="">
                              <label for="icon_prefix">identification</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                              <input id="name_edit" type="text" class="validate" placeholder="">
                              <label for="icon_prefix">Nombres</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                              <input id="lastname_edit" type="text" class="validate" placeholder="">
                              <label for="icon_prefix">Apellidos</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                              <input id="address_edit" type="text" class="validate" placeholder="">
                              <label for="icon_prefix">Correo electronico</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                              <input id="user_edit" type="text" class="validate" placeholder="">
                              <label for="icon_prefix">Usuario</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                              <input id="pass_edit" type="password" class="validate" placeholder="">
                              <label for="icon_prefix">Contraseña</label>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
              <div class="modal-footer center">
                  <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat " id="btn_save_edit">Guardar</a>
                  <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat " id="btn_delet">Eliminar</a>
                  <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat " id="btn_cancel_edit">Cancelar</a>
              </div>
        </div>  
       
         <div class="modal-overlay" id="materialize-modal-overlay-2" style="z-index: 1002; display: none; opacity: 0;"></div>
        <?php include('overalls/footer.php'); ?>
        <?php include('overalls/scripts.php'); ?>
        <script type="text/javascript" src="logic/user.js"></script>
    </body>
</html>