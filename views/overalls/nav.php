<nav class=" blue darken-2">
    <div class="nav-wrapper">
    <a href="#" class="brand-logo center ">Agenda</a>
    <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="models/logout.php"><i class="material-icons">settings_power</i></a></li>
    </div>
</nav>
<ul id="slide-out" class="side-nav">
    <li>
      <div class="userView">
        <div class="background">
          <img src="views/libs/images/contact2.jpg">
        </div>
        <a href="#!user"><img class="circle" src="views/libs/images/user.jpg"></a>
        <a href="#!name"><span class="white-text name"><?php echo $_SESSION["name"] ?></span></a>
        <a href="#!email"><span class="white-text email"><?php echo $_SESSION["email"] ?></span></a>
      </div>
    </li>
    <li class="<?php echo $dashboard?>">
      <a href="controllers/dashboard.php"><i class="material-icons">dashboard</i>Dashboard</a>
    </li>
    <li class="<?php echo $user?>">
      <a href="controllers/user.php"><i class="material-icons">people</i>Usuarios</a>
    </li>
    <li class="<?php echo $contact?>">
      <a href="controllers/contact.php"><i class="material-icons">contact_mail</i>Contactos</a>
    </li>
    <li class="<?php echo $category?>">
      <a href="controllers/category.php"><i class="material-icons">loyalty</i>Categorias</a>
    </li>
    <li class="<?php echo $email?>">
      <a href="#!"><i class="material-icons">email</i>Enviar Correos</a>
    </li>
    <li class="<?php echo $import?>">
      <a href="#!"><i class="material-icons">cloud_upload</i>Importar</a>
    </li>
    <li class="<?php echo $export?>">
      <a href="#!"><i class="material-icons">cloud_download</i>Exportar</a>
    </li>
    <li>
      <a href="models/logout.php"><i class="material-icons">settings_power</i>Cerrar Sesión</a>
    </li>
</ul>
<div class="card margin-none">
  <div class="card-image card-img">
    <img src="views/libs/images/47038907-laptop-wallpaper1.jpg">
    <span class="card-title "><i class="material-icons small m-top"><?php echo $icon ?> </i> <?php echo $title ?></span> 
    <a id="<?php echo $id_btn ?>" class="btn-floating btn-large halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
  </div>
</div>
