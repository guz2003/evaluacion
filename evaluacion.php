<?php
// Paso 1: Solicitar precios y cantidades
$precio1 = 10.00; // Precio del primer producto
$precio2 = 15.00; // Precio del segundo producto
$precio3 = 20.00; // Precio del tercer producto

$cantidad1 = 2; // Cantidad comprada del primer producto
$cantidad2 = 1; // Cantidad comprada del segundo producto
$cantidad3 = 3; // Cantidad comprada del tercer producto

// Paso 2: Calcular el subtotal
$subtotal = ($precio1 * $cantidad1) + ($precio2 * $cantidad2) + ($precio3 * $cantidad3);

// Paso 3: Calcular el impuesto (10% del subtotal)
$impuesto = $subtotal * 0.10;

// Paso 4: Calcular el descuento ($5 de descuento fijo)
$descuento = 5.00;

// Paso 5: Calcular el total final
$total = $subtotal + $impuesto - $descuento;

// Paso 6: Mostrar los resultados
echo "El Subtotal de la compra  : $". $subtotal . "\n";
echo "El monto de Impuestos : $" . $impuesto . "\n";
echo "El descuento aplicado: $" . $descuento . "\n";
echo "El Total final de la comprar: $" . $total . "\n";
?>