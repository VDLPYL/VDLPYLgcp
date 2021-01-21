<?php 
$inc = include("con_db.php");
if ($inc) {
	$consulta = "SELECT * FROM usuarios";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['id'];
	    $nombre = $row['nombre'];
		$email = $row['email'];
		$usuario = $row['usuario'];
		$text = $row['text'];
		$desde = $row['desde'];
		$hasta = $row['hasta'];
		$valor = $row['valor'];
	    $fechareg = $row['fecha_reg'];
	    ?>
        <div>
        	<h2><?php echo $nombre; ?></h2>
        	<div>
        		<p>
        			<b>ID: </b> <?php echo $id ?><br>
        		    <b>Email: </b> <?php echo $email ?><br>
					<b>usuario: </b> <?php echo $usuario ?><br>
					<b>text: </b> <?php echo $text ?><br>
					<b>desde: </b> <?php echo $desde ?><br>
					<b>hasta: </b> <?php echo $hasta ?><br>
					<b>valor: </b> <?php echo $valor ?><br>
        		    <b>Fecha de envío: </b> <?php echo $fechareg ?><br>
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
}
?>