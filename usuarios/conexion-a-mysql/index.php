<!DOCTYPE html>
<html>
<head>
	<title>VDLPYL-Servicio-de-carreras</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Servicio de carreras</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
		<input type="text" name="usuario" placeholder="usuario">
		<input type="text" name="text" placeholder="Servicio de carreras">
		<input type="text" name="desde" placeholder="Desde">
		<input type="text" name="hasta" placeholder="Hasta">
		<input type="int" name="valor" placeholder="valor">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>