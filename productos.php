	$productos=array("mango"=>"35","pepino"=>"37","naranja"=>"43","uvas"=>"20","manzana"=>"90");

	echo "<table border='1' cellspacing='0' cellpadding='5'><tr><td>Producto</td><td>Precio normal</td><td>Precio Iva</td></tr>";

	foreach($productos as $llave => $producto)
	{
		echo "<tr><td>".$llave."</td><td>".$producto."</td><td>".(($producto*.16) + $producto)."</td></tr>";
		$sumatoria += $producto;
	}
	
	
	echo "<tr><td colspan='2'>Subtotal</td><td>".$sumatoria."</td></tr>";
	echo "<tr><td colspan='2'>Iva</td><td>".($sumatoria*.16)."</td></tr>";
	echo "<tr><td colspan='2'>Total</td><td>".(($sumatoria*.16)+$sumatoria)."</td></tr>";
	echo "</table>";

