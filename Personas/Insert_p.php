<?php
 
// Creación de conexión
require('../Conexion.php');

$identificacion = $_POST["numeroId"];
$tipoDocumento = $_POST["tipoDoc"];

// Asignación de query
$query = "INSERT INTO PERSONA VALUES('$tipoDocumento', '$identificacion', '$_POST[nombreCompleto]', '$_POST[fechaNac]', '$_POST[ciudadNac]', 
                                     '$_POST[direcRes]', '$_POST[ciudadRes]', '$_POST[nacionalidad]', '$_POST[telefono]')";

$result = mysqli_query($conn, $query);

// Condicional según resultado obtenido
if ($result) {
	header("Location: Personas.php?msgs=" . "El cliente con identificación " . $identificacion .  " (" . $tipoDocumento . ")" . ", fue insertado correctamente.");
}
else {
	header("Location: Personas.php?msge=" . mysqli_error($conn));
}
mysqli_close($conn);
?>