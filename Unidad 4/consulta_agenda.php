<h1 id="tit1">Consulta contactos</h1>
<form action="actualizar_contacto.php" method="POST" id="frm1">
    <label class="etq" for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" placeholder="nombre de contacto"><br>
    <label class="etq" for="tel1">Telefono1:</label><br>
        <input type="text" name="tel1" id="tel1" size="12"placeholder="Telefono 1"><br>
    <label class="etq" for="tel2">Telefono2: </label><br>
        <input type="text" name="tel2" id="tel2" size="12"placeholder="Telefono 2"><br>
    <label class="etq" for="email">Correo electronico:</label><br>
        <input type="text" name="email" id="email" placeholder="Correo electronico"><br>
    <label class="etq" for="fnac">Fecha nacimiento:</label><br>
        <input type="text" name="fnac" id="fnac" size="30"placeholder="Fecha nacimiento"><br>
    <input type="hidden" name="id" id="id">

    <button id="btnguardar" type="button" onclick="envia(1);">Guardar</button>
    <button id="btneditar" type="button" onclick="conf_editar();">Editar</button>
    <button id="btneliminar" type="button" onclick="envia(2);">Eliminar</button>
    <button id="btnsalir"type="button" onclick="limpia()">Salir</button>
</form>
<script id="autocomp">
eval($('#btneditar').prop('disabled',true));
eval($('#btneliminar').prop('disabled',true));

  eval(
      $('#nombre').autocomplete({
        source: 'buscaContacto.php',
        minLength:2,
        select: function(event,ui){

          $.post('get_contacto.php',{id:ui.item.id},function(data){
            alert(data.nombre);
            $('#tel1').val(data.tel1);
            $('#tel2').val(data.tel2);
            $('#email').val(data.email);
            $('#fnac').val(data.fnac);
            $('#id').val(data.idcontacto);
            $('#btneditar').prop('disabled',false);
            $('#btneliminar').prop('disabled',false);


          },"json")
        }
      })
  );
</script>
<?php

?>
