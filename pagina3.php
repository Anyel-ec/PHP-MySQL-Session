<<<<<<< HEAD
<?php
session_start();
$nombreCompleto = $_SESSION['nombre'] . ' ' . $_SESSION['apellido'];
echo 'El nombre completo es: ' . $nombreCompleto;
echo '<a href="pagina4.php"> Ir a pagina 4 para cerrar session </a>';


=======
<?php
session_start();
$nombreCompleto = $_SESSION['nombre'] . ' ' . $_SESSION['apellido'];
echo 'El nombre completo es: ' . $nombreCompleto;
echo '<a href="pagina4.php"> Ir a pagina 4 para cerrar session </a>';


>>>>>>> 7d0ca9484f6f92200dafac47c50a4f7a05ff711d
?>