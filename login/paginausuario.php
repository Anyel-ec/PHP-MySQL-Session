<?php
// Start the session
session_start();

// Retrieve user information from session variables
$id = $_SESSION['id'];
$nombre = $_SESSION['usuario'];

// Define database connection parameters
define('SEVERMAME', 'localhost');
define('USERNAME', 'anyel');
define('PASSWORD', 'anyel');
define('DBNAME', 'lab1');

// Create a new MySQLi connection using previously defined constants
$conn = new mysqli(SEVERMAME, USERNAME, PASSWORD, DBNAME);

// Generate a query to retrieve the 'ciudad' (city) from the 
// 'usuario' table based on the user's ID
$sql = "SELECT ciudad from usuario where IDUsuario = $id";

// Execute the query and handle errors if any
$resultado = mysqli_query($conn, $sql) or die(mysqli_error($conn));

// Fetch the result row as an associative array
$row = mysqli_fetch_array($resultado);

// Retrieve the 'ciudad' from the result
$ciudad = $row['ciudad'];
$cedula = $row['cedula'];
$nombreCompleto = $row['nombre'];
$telefono = $row['telefono'];
$fotoPath = $row['foto_path'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de usuario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: black; /* Fondo negro */
            color: white; /* Texto blanco */
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        img {
            
            width: 10%;
            height: auto;
            display: block;
            margin-bottom: 20px;
        }
    </style>
</head>

<body class= "bg-dark">
    <div class="container">
        <h1 class="mt-4">Bienvenido, <?php echo $nombre . ' ' . $ciudad; ?>!</h1>
        <div style="text-align: center;">
            <?php
            // Verificar si la ruta de la imagen está presente
            if (!empty($fotoPath)) {
                echo '<img src="'.$fotoPath. '" alt="Imagen de perfil" class="img-fluid rounded">';
            } else {
                echo '<p class="text-danger">Imagen no disponible</p>';
            }
            ?>
        </div>
 
        <p><strong>Cédula: </strong><?php echo $cedula; ?></p>
        <p><strong>Nombre Completo: </strong><?php echo $nombreCompleto; ?></p>
        <p><strong>Teléfono: </strong> <?php echo $telefono; ?></p>

        <a href="cerrar.php" class="btn btn-primary">Cerrar Sesión</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>