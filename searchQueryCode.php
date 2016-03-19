<?php 
	
	$searchQuery = mysqli_real_escape_string ($conn, $_POST['searchQuery']);
	$searchQuery2 = mysqli_real_escape_string ($conn, $_POST['searchQuery2']);
	
	$sql = "";
	
	if (isset($_POST['searchQuery2']) && $_POST['searchQuery2'] != "") {
		$sql= "SELECT * FROM Inventario_fmachete WHERE
		medida LIKE ('%".$searchQuery2."%') AND
		nombre_Producto LIKE ('%".$searchQuery."%')";
	}
	else	{
		$sql = "SELECT * FROM Inventario_fmachete WHERE 
		nombre_Producto LIKE ('%".$searchQuery."%')
		OR nombre_Producto LIKE ('%".$searchQuery."')
		OR ubicacion LIKE ('%".$searchQuery."%')";
	}	
	
	$resultado = $conn->query($sql);
?>	
