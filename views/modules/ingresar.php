<h1>INGRESAR</h1>

<form method="post">
	
	<input type="text" placeholder="Usuario" name="usuarioIngreso" required>

	<input type="password" placeholder="Contraseña" name="passwordIngreso" required>

	<input type="submit" value="Enviar" class="btn btn-block btn-primary mt-3">

</form>

<?php 

$ingreso = new MvcController();
$ingreso -> ingresoUsuarioController();

if (isset($_GET["action"])) {

	if ($_GET["action"] == 'fallo') {
		
		echo "Fallo al ingresar";

	}
}

?>