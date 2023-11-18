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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
</head>
<body>
    <!-- Display a welcome message with the user's name and city -->
    <h1>Welcome, <?php echo $nombre . ' ' . $ciudad; ?>!</h1>

    <!-- Provide a link to a script (cerrar.php) to close the session -->
    <a href="cerrar.php">Logout</a>
</body>
</html>

