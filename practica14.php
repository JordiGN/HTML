<!DOCTYPE html>
<html>
<head>
  <title> </title>
  <script src="js/jquery-2.1.3.min.js"></script>
  <script>



      $.ajax({
          url : "opciones.php",
          dataType : "json",
          success : function(data){
            data.forEach(function(x)
            {
              //alert("entro");
              var opcion="<option value='"+x.Id+"'>"+x.nombre+"</option>";
              $('#colonia').append(opcion);
            });
          }
        });

      function ajx1()
      {
        $.ajax({
          url:'practica14b.php',
          type : 'POST',
          data : 'nom='+$('#nom').val(),
          success:function(data)
            {
              //Se ejecuta si NO hubo errores
              $('#contenido').html(data);
            },
          error:function(xhr,status)
            {
              //Se ejecuta SI hubo errores
            },
          complete:function(xhr,status)
            {
              //Se ejecuta SIEMPRE
              alert('Petición terminada');
            }
        })
      }
  </script>
</head>
<body>
    nombre:
    <input type="text" name="nom" id="nom" placeholder="Nombre"></br>
    </br>
    colonia:<select id="colonia"></select>

    <button id="btn1" onclick="ajx1();">Saludo</button>
    <button id="btn2" onclick="">Confirmar datos enviados </button>
    <div id="contenido"> </div>
</body>
</html>
