
<?php

echo "<h1>Resumen de paquete turístico</h1>";

echo "<h2>Datos del cliente:</h2>";
echo "Nombre: " . $_POST['nombre'] . "<br>";
echo "Correo: " . $_POST['correo'] . "<br>";


echo "<h2>Destinos elegidos:</h2>";
$destinos = $_POST['destinos'] ?? [];
if(count($destinos) > 0){
    foreach($_POST['destinos'] as $de){
        echo $de . "<br>";
    }
}else{
    echo "No seleccionaste ningún elemento";
}
echo "<br>Total de destinos: " . count($destinos);


echo "<h2>Actividades elegidas:</h2>";
$actividades = $_POST['actividades'] ?? [];
if(count($actividades) > 0){
    foreach($_POST['actividades'] as $ac){
        echo $ac . "<br>";
    }
}else{
    echo "No seleccionaste ningún elemento";
}
echo "<br>Total de actividades: " . count($actividades);


echo "<h2>Servicios adicionales:</h2>";
$servicios = $_POST['servicios'] ?? [];
if(count($servicios) > 0){
    foreach($_POST['servicios'] as $se){
        echo $se . "<br>";
    }
}else{
    echo "No seleccionaste ningún elemento";
}
echo "<br>Total de servicios: " . count($servicios);


echo "<h2>Total general de elementos seleccionados:</h2>";
$total = count($destinos) + count($actividades) + count($servicios);
echo $total;

?>

<br><br>
<form action="opciones.php" method="POST">
    <input type="submit" value="Regresar">
</form>
