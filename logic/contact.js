 new WOW().init(); 
jQuery(document).ready(function($) {
  $('ul.tabs').tabs('select_tab', 'test1');
  $('select').material_select();
  read();
});

$("#btn_add").click(function(event) {
  $("#modal_add").css({
    display: 'block',
    opacity: '1',
    transform:'scaleX(1)',
    top:'10%'
  });
  $("#materialize-modal-overlay-2").css({
    display: 'block',
    opacity: '0.5'
  });
});

function consult(codigo){
  var id = codigo;
  var parametros = {"id":id,"option":"consult"};
   if (id != "") {
    $.ajax({
      url: 'models/contact.php',
      type: 'post',
      data: parametros,
    })
    .done(function(data) {
      console.log(data);

      $("#Contact_Edit").css({
        display: 'block',
        opacity: '1',
        transform:'scaleX(1)',
        top:'10%'
      });
      $("#materialize-modal-overlay-2").css({
        display: 'block',
        opacity: '0.5'
      });
      // var $toastContent = $('<span>Petición realizada correctamente</span>');
      // Materialize.toast($toastContent, 2000);
    })
    .fail(function(data_error) {
      console.log(data_error);
       var $toastContent = $('<span>Error al realizar la petición</span>');
      Materialize.toast($toastContent, 2000);
    });
  }else{
    var $toastContent = $('<span>Codigo del contacto incorrecto</span>');
    Materialize.toast($toastContent, 2000);
  }
  
}

function read(){
  var parametros = {"option":"read"};
  $.ajax({
    url: 'models/contact.php',
    type: 'post',
    data: parametros,
  })
  .done(function(data) {
    console.log(data);
    $("#body_contact").append(data);
  })
  .fail(function(data_error) {
    console.log(data_error);
  });
  
}