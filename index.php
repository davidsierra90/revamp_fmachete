<?php 
	include('mysqlconnect.php');
?>
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="stylesheet.css" media="all" />
		<title></title>
	</head>
	<body>
		<div class="wrapper">
			<div class="header">
				<a href="http://fmachete.net76.net"><h1>Ferretería Machete</h1></a>
			</div>
			<FORM METHOD="LINK" ACTION="secureingreso.php">
				<INPUT class="navbutton" TYPE="submit" VALUE="Agregar producto">
			</FORM>
			<div class="searchbox">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
					<label><p>Nombre: </p><br /> <input type="text" name="searchQuery" class="search_box"><br />
						<label><br /><p>Medida: </p><input type="text" name="searchQuery2" class="search_box"><br />
							<input type="submit" name="submit" id="submit_button" value="Búsqueda">
						</form>		
					</div>
					<a href="#" class="back-to-top">Llévame al cielo</a>
					<?php
						include ('searchQueryCode.php');
					?>
					<div class="tabla">
						<?php 
							include ('tableDisplay.php');
						?>
					</div>
				</div>
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
			</body>
			<footer>
				<h3>Clavos Costeños S.A de C.V</h3>
			</footer>
			</html>					