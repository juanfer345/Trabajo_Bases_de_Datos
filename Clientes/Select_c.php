<?php
 
// Creación de conexión
require('../Conexion.php');

// Asignación de query
$query = "SELECT * FROM cliente";

// Mostrado de todos los clientes
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
mysqli_close($conn);

?>