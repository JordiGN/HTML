function carga(item)
{
  $.ajax({
      url:item,
      success: function(data){
        $('#contenido').html(data);
      }
  });
}

function envia()
{
  $.ajax({
    type : 'POST',
    url: $('#frm1').attr('action'),
    data: $('#frm1').serialize(),
    success:function(data)
    {
      alert('Contacto Guardado');
      $('#frm1')[0].reset();
    }
  });
}
 function limpia()
 {
    $('#contenido').html('');
 }

function conf_editar()
{
  $("#tit1").html("Editar contacto");
  $("#btneditar").hide();
  $("#btnguardar").show();
  $("#nombre").autocomplete({
    disabled:true
  });

  eval($("#fnac").mask("99/99/9999",{placeholder:"dd/mm/yyyy"}));
  eval($("#tel1").mask("(999)-99-999-99",{placeholder:"(999)-99-999-99"}));
  eval($("#tel2").mask("(999)-99-999-99",{placeholder:"(999)-99-999-99"}));
  $("#tel1").removeAttr("disabled");
  $("#tel2").removeAttr("disabled");
  $("#email").removeAttr("disabled");
  $("#fnac").removeAttr("disabled");
}
