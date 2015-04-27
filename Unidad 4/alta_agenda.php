<h1>Alta de Contacto</h1>
<?php
 ?>
 <form id="frm1" action="graba_contacto.php" method="POST">
   Nombre: <input type="text" name="nombre" id="nombre" placeholder="Nombre de Contacto"><br>
    Telefono: <input type="text" name="tel1" id="tel1" placeholder="telefono de Contacto"><br>
    Telefono2: <input type="text" name="tel2" id="tel2" placeholder="Telefono2 de Contacto"><br>
    Correo_electronico: <input type="text" name="email" id="email" placeholder="Correo electronico de Contacto"><br>
    Fecha_de_nacimiento: <input type="text" name="fnac" id="fnac" placeholder="Fecha de nacimiento de Contacto"><br>
    <button type="button" onclick="envia();">Guardar contacto</button>
    <button type="button" onclick="limpia();">Salir</button>
 </form>

