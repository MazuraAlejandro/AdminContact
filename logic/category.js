 new WOW().init(); 
jQuery(document).ready(function($) {
  read();
});


$("#btn_add").click(function(event) {
  $("#modal_add_contact").css({
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


$("#btn_cancel").click(function(event) {
  $("#modal_add_contact").css({
    display: 'none',
    opacity: '0',
    transform:'scaleX(0.7)',
    top:'250.516px'
  });
  $("#materialize-modal-overlay-2").css({
    display: 'none',
    opacity: '0'
  });
});

$("#btn_save").click(function(event) {
  create();
});

$("#btn_save_edit").click(function(event) {
  update();
});


// ================================================ FUNCIONES =========================================================

function create(){
  // Obtenemos valor de los campos
  var category = $("#category").val();
  // Validamos que las variables tengan contenido
  if ($.trim(category).length > 0) {
      // Llenar variable array
      var parametros = {"category":category,"option":"create"};
      // Metodo Ajax
      $.ajax({
        url: 'models/category.php',
        type: 'post',
        data: parametros,
      })
      .done(function(data) {
        console.log(data);
        if (data == 1) {
          // Ocultar Modal
          $("#modal_add_contact").css({display: 'none',opacity: '0',transform:'scaleX(0.7)',top:'250.516px'});
          $("#materialize-modal-overlay-2").css({display: 'none',opacity: '0'});
          // Vaciar Campos
          $("#category").val("");
          // Recargar datos
          read();
          // Mostrar Mensaje Insert Correcto
          var $toastContent = $('<span>Categoria creada correctamente !</span>');
          Materialize.toast($toastContent, 2000);
        }else{
          // Mostrar Mensaje Insert Error
          var $toastContent = $('<span>Error al guardad !</span>');
          Materialize.toast($toastContent, 2000);
        }
      })
      .fail(function(data_error) {
        console.log(data_error);
        // Mostrar Mensaje Error
        var $toastContent = $('<span>Error !</span>');
        Materialize.toast($toastContent, 2000);
      });
  }else{
    // Mensaje Campos Vacios
    var $toastContent = $('<span>Debe llenar todos los campos !</span>');
    Materialize.toast($toastContent, 2000);
  }
}

// function consult(codigo){
//   // Llenamos la Variable
//   var id = codigo;
//   // validamos que la variable tenga contenido
//    if (id != "" && $.trim(id).length > 0) {
//       // Llenamos la Variable Array
//      var parametros = {"id":id,"option":"consult"};
//      // Metodo Ajax
//     $.ajax({
//       url: 'models/user.php',
//       type: 'post',
//       data: parametros,
//     })
//     .done(function(data) {
//       console.log(data);
//       // Convertimos el Resultado para Poder Extraer los Datos
//       var result = JSON.parse(data);
//       if($.trim(result.id).length > 0){
//         $("#id").val(result.id);
//         $("#identification_edit").val(result.identification);
//         $("#name_edit").val(result.name);
//         $("#lastname_edit").val(result.lastname);
//         $("#address_edit").val(result.email);
//         $("#user_edit").val(result.nick);
//         $("#pass_edit").val(result.pass);
//         $("#modal_edit_user").css({
//           display: 'block',
//           opacity: '1',
//           transform:'scaleX(1)',
//           top:'10%'
//         });
//         $("#materialize-modal-overlay-2").css({
//           display: 'block',
//           opacity: '0.5'
//         });
//       }else{
//         var $toastContent = $('<span>Identificador del usuario incorrecto</span>');
//         Materialize.toast($toastContent, 2000);
//       }
//     })
//     .fail(function(data_error) {
//       console.log(data_error);
//       var $toastContent = $('<span>Error al realizar la petición</span>');
//       Materialize.toast($toastContent, 2000);
//     });
//   }else{
//     var $toastContent = $('<span>Codigo del contacto incorrecto</span>');
//     Materialize.toast($toastContent, 2000);
//   }
// }

function read(){
  var parametros = {"option":"read"};
  $.ajax({
    url: 'models/category.php',
    type: 'post',
    data: parametros,
  })
  .done(function(data) {
    console.log(data);
    $("#body_category").empty();
    $("#body_category").append(data);
  })
  .fail(function(data_error) {
    console.log(data_error);
  });
}

// function update(){
//   // Obtenemos valor de los campos
//   var id = $("#id").val();
//   var identification = $("#identification_edit").val();
//   var name = $("#name_edit").val();
//   var lastname = $("#lastname_edit").val();
//   var address = $("#address_edit").val();
//   var user = $("#user_edit").val();
//   var pass = $("#pass_edit").val();
//   // Validamos que las variables tengan contenido
//   if ($.trim(identification).length > 0 && $.trim(name).length > 0 && $.trim(lastname).length > 0 && $.trim(address).length > 0 && $.trim(user).length > 0 && $.trim(pass).length > 0 && $.trim(id).length > 0) {
//       // Llenar variable array
//       var parametros = {"id":id,"identification":identification,"name":name,"lastname":lastname,"address":address,"user":user,"pass":pass,"option":"update"};
//       // Metodo Ajax
//       $.ajax({
//         url: 'models/user.php',
//         type: 'post',
//         data: parametros,
//       })
//       .done(function(data) {
//         console.log(data);
//         if (data == 1) {
//           // Ocultar Modal
//           $("#modal_edit_user").css({display: 'none',opacity: '0',transform:'scaleX(0.7)',top:'250.516px'});
//           $("#materialize-modal-overlay-2").css({display: 'none',opacity: '0'});
//           // Vaciar Campos
//           $("#id").val("");
//           $("#identification_edit").val("");
//           $("#name_edit").val("");
//           $("#lastname_edit").val("");
//           $("#address_edit").val("");
//           $("#user_edit").val("");
//           $("#pass_edit").val("");
//           // Recargar datos
//           read();
//           // Mostrar Mensaje Update Correcto
//           var $toastContent = $('<span>Usuario actualizado correctamente !</span>');
//           Materialize.toast($toastContent, 2000);
//         }else{
//           // Mostrar Mensaje Update Error
//           var $toastContent = $('<span>Error al actualizadar !</span>');
//           Materialize.toast($toastContent, 2000);
//         }
//       })
//       .fail(function(data_error) {
//         console.log(data_error);
//         // Mostrar Mensaje Error
//         var $toastContent = $('<span>Error !</span>');
//         Materialize.toast($toastContent, 2000);
//       });
//   }else{
//     // Mensaje Campos Vacios
//     var $toastContent = $('<span>Debe llenar todos los campos !</span>');
//     Materialize.toast($toastContent, 2000);
//   }
// }

function delet(codigo){
  // Obtenemos valor de los campos
  var id = codigo;
  if ($.trim(id).length > 0) {
    var parametros = {"id":id,"option":"delet"};
    $.ajax({
      url: 'models/category.php',
      type: 'post',
      data: parametros,
    })
    .done(function(data) {
      if (data == 1) {
        // Ocultar Modal
        $("#modal_edit_user").css({display: 'none',opacity: '0',transform:'scaleX(0.7)',top:'250.516px'});
        $("#materialize-modal-overlay-2").css({display: 'none',opacity: '0'});
        read();
        var $toastContent = $('<span>Usuario eliminado correctamente !</span>');
        Materialize.toast($toastContent, 2000);
      }else{
        var $toastContent = $('<span>Error al eliminar el usuario !</span>');
        Materialize.toast($toastContent, 2000);
      }
    })
    .fail(function(data_error) {
      var $toastContent = $('<span>Error al realizar la petición !</span>');
      Materialize.toast($toastContent, 2000);
    });
    
  }else{
    var $toastContent = $('<span>Codigo del contacto incorrecto !</span>');
    Materialize.toast($toastContent, 2000);
  }
}