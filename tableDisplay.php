<?php
	if (isset ($_POST['searchQuery']) && $_POST['searchQuery'] != ""){
		if ($resultado->num_rows > 0) {
			while ($row = $resultado->fetch_assoc()) {
				echo "<table>";
				echo "<tr>";
				echo "<td style='font-weight: bold'>".Nombre."</td>";
				echo "<td  style='color:#007BB8' id='tdnombre' colspan='2'>".$row['nombre_Producto']."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>".Ubicación."</td>";
				echo "<td colspan='2' style='color:#414A4C; font-weight: bold; font-size: 21px;'>".$row['ubicacion']."</td>";
				echo "</tr>";
				echo "<td>".Medida."</td>";
				echo "<td colspan='2' style='color:#DA2C43; font-weight: bold; font-size: 21px;'>".$row['medida']."</td>";
				echo "</tr>";
				echo "<td>".Precio."</td>";
				echo "<td style='color:#779ECB;'>".'$'.$row['precio_Compra']."</td>";
				echo "<td style='color:#FF6961;'>".'$'.precio_Final."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td style='font-weight: bold'>".ID." ".Producto."</td>";
				echo "<td colspan='2'>".$row['id_Producto']."</td>";
				echo "</tr>";
				echo "</table>";
			}
			} else {
			echo "Sin resultados";
		}
	}
?>