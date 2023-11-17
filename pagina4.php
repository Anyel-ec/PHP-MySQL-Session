<<<<<<< HEAD
<?php
// Start the session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Display a message indicating that the session has been closed successfully
echo "Session closed successfully.";
=======
<?php
session_start();
// vaciamos las variables
session_unset();
session_destroy();

echo "Se cerro la sesion correctamente";
$nombreCompleto = $_SESSION['nombre'] . ' ' . $_SESSION['apellido'];
echo 'El nombre completo es: ' . $nombreCompleto;

>>>>>>> 7d0ca9484f6f92200dafac47c50a4f7a05ff711d
?>