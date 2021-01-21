<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$usuario = trim($_POST['usuario']);
		$text = trim($_POST['text']);
		$desde = trim($_POST['desde']);
		$hasta = trim($_POST['hasta']);
		$valor = trim($_POST['valor']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO usuarios(nombre, email, usuario, text, desde, hasta, valor, fecha_reg) 
		            VALUES ('$name','$email','$usuario','$text','$desde','$hasta','$valor','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡envio correcto!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>