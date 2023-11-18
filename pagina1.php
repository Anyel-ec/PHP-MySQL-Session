<?php
// Start the session
session_start();
// Set session variables for 'nombre' and 'apellido'
$_SESSION['nombre'] = "Angel";
$_SESSION['apellido'] = "Patiño";
// Display a link to navigate to page 2 (pagina2.html)
echo '<a href="pagina2.html"> Go to page 2 </a>';
?>