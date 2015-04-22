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
