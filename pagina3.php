<?php
// Start a new or resume an existing session
session_start();
// Concatenate the 'nombre' and 'apellido' session variables to form the full name
$nombreCompleto = $_SESSION['nombre'] . ' ' . $_SESSION['apellido'];
// Display the full name
echo 'El nombre completo es: ' . $nombreCompleto;
// Provide a link to 'pagina4.php' where the session can be closed
echo '<a href="pagina4.php"> Ir a pagina 4 para cerrar session </a>';
?>