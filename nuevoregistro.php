<?php 
	
	
	if (isset($_POST['submitted'])) {
		include('mysqlconnect.php');
		
		$nombreproducto = $_POST['nombre_Producto'];
		$ubicacion = $_POST['ubicacion'];
		$medida = $_POST['medida'];
		$preciocompra = $_POST['precio_Compra'];
		$sqlinsert = "INSERT INTO Inventario_fmachete (nombre_Producto, ubicacion, medida, precio_Compra) 
		VALUES ('$nombreproducto','$ubicacion', '$medida', '$preciocompra')";
		
		if (!mysqli_query($conn, $sqlinsert)) {
			die("Error agregando nuevo producto");
		}
		$newrecord = "Se agregó el producto de manera exitosa";
		$fail = "No puedes dejar el nombre o la ubicación en blanco! Intentalo de nuevo";
		
		header("Location: http://fmachete.net76.net/index.php");
	} /* fin del if principal */
	else {
		echo $fail;
	}
?>
<html lang="es">
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="stylesheet.css" media="all"/>
		<title>Ferretería Machete</title>
	</head>
	<body>
		<div class="wrapper">
			<div class="header">
				<a href="http://fmachete.net76.net"><h1>Ferretería Machete</h1></a>
			</div>
			<FORM METHOD="LINK" ACTION="index.php">
				<INPUT class="navbutton" TYPE="submit" VALUE="Inicio">
			</FORM>
			<a href="#" class="back-to-top">Llévame al cielo</a>
			<div class="agregaform">
				<p style="font-size: 20px"> Recuerda utilizar comillas simples ' para expresar pulgadas!</p>
				<p> Si utilizas comillas dobles " ocurrirá un error en la matrix</p>
				<br />
				<br />
				<form method="post" action="nuevoregistro.php">
					<input type="hidden" name="submitted" value="true" />
					<fieldset>
						<legend>Nuevo Registro</legend> <br />
						<label>Nombre: <br /><input type="text" name="nombre_Producto" required /></label> <br /><br />
						<label>Ubicación: <br /><input type="text" name="ubicacion" required /></label> <br /><br />
						<label>Medida: <br /><input type="text" name="medida" /></label> <br /><br />
						<label>Precio de Compra: <br /><input type="number" step="0.01" name="precio_Compra" /></label> <br /><br />
					</fieldset>
					<br />
					<input type="submit" value="Agrega nuevo registro" id="search_box"/>
				</form>
			</div>
			<?php 
				echo $newrecord;
			?>
			<script>
				jQuery(document).ready(function() {
					var offset = 220;
					var duration = 500;
					jQuery(window).scroll(function() {
						if (jQuery(this).scrollTop() > offset) {
							jQuery('.back-to-top').fadeIn(duration);
							} else {
							jQuery('.back-to-top').fadeOut(duration);
						}
					});
					
					jQuery('.back-to-top').click(function(event) {
						event.preventDefault();
						jQuery('html, body').animate({scrollTop: 0}, duration);
						return false;
					})
				});
			</script>
		</div>
	</body>
	<footer>
		<h3>Clavos Costeños S.A de C.V</h3>
	</footer>
</html>		