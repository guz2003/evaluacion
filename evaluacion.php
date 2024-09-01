<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion-01</title>
</head>
<body>
<h1>Resultados</h1>

<?php 
// Ingresar precios y cantidades
$precio1 = 100.00; 
$precio2 = 80.00; 
$precio3 = 25.00; 

$cantidad1 = 1; 
$cantidad2 = 2; 
$cantidad3 = 4; 

//Calcular el subtotal
$subtotal = ($precio1 * $cantidad1) + ($precio2 * $cantidad2) + ($precio3 * $cantidad3);

// Calcular el impuesto (10% del subtotal)
$impuesto = $subtotal * 0.10;

// Calcular el descuento (S/5 de descuento fijo)
$descuento = 10.00;

// Calcular el total final de la compra
$total = $subtotal + $impuesto - $descuento;

// Mostrar los resultados
echo "Subtotal de la compra: S/" .$subtotal . "<br>";
echo "Monto de Impuestos: S/" . $impuesto . "<br>";
echo "Descuento aplicado: S/" . $descuento . "<br>";
echo "Total final de la compra: S/" . $total . "<br>";
?>
</body>
</html>

