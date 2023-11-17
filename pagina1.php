<<<<<<< HEAD
<?php

// Start the session
session_start();

// Set session variables for 'nombre' and 'apellido'
$_SESSION['nombre'] = "Angel";
$_SESSION['apellido'] = "Patiño";

// Display a link to navigate to page 2 (pagina2.html)
echo '<a href="pagina2.html"> Go to page 2 </a>';


=======
<?php

session_start();
$_SESSION ['nombre'] = "Angel";
$_SESSION ['apellido'] = "Patiño";
echo '<a href="pagina2.html"> Ir a pagina 2 </a>';

>>>>>>> 7d0ca9484f6f92200dafac47c50a4f7a05ff711d
?>