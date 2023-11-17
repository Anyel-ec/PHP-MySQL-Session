<<<<<<< HEAD
<?php
// receive form data
$user = $_POST['usuario'];
$contra = $_POST['contrasena'];

// check if user and password are set and not empty
if ((isset($user) && isset($contra)) &&
    ($user != '' && $contra != '')) {

    // define database connection parameters
    define('SEVERMAME', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', 'root');
    define('DBNAME', 'login');

    // create connection with MySQL
    $conn = new mysqli(SEVERMAME, USERNAME, PASSWORD, DBNAME);
    
    // check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // display a message if the connection is successful
    echo "Connected successfully";

    // start a session
    session_start();

    // generate the query to check if data in the database exists
    $sql = "SELECT * FROM usuario WHERE usuario=? AND contra=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user, $contra);
    $stmt->execute();

    // run query and get results
    $resultados = $stmt->get_result();

    // check for query errors
    if (!$resultados) {
        die("Error en la consulta: " . $conn->error);
    }

    // fetch data from the results into an array
    $filas = mysqli_fetch_array($resultados);

    // check if the user exists in the database
    if ($filas['IDUsuario'] == null) {
        header("location:index.html");
    } else {
        // save user data in session variables
        $_SESSION["id"] = $filas['IDUsuario'];
        $_SESSION["usuario"] = $filas['usuario'];
        // redirect to a user-specific page
        header("location: paginausuario.php");
    }

} else {
    // redirect to the index.html if user or password is not provided
    header("location: index.html");
}

=======
<?php
// receive form data
$user = $_POST ['usuario'];
$contra = $_POST ['contrasena'];

if ((isset ($user) && isset ($contra)) &&
    ($user!='' && $contra!='')){
        define  ('SEVERMAME', 'localhost');
        define ('USERNAME', 'root');
        define ('PASSWORD', 'root');
        define ('DBNAME', 'login');

        // create connection with MySQL
        $conn = new mysqli(SEVERMAME, USERNAME, PASSWORD, DBNAME);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        session_start();

        // ...

        // generate the query to check if data in the database exists
        $sql = "SELECT * FROM usuario WHERE usuario=? AND contra=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $user, $contra);
        $stmt->execute();

        // run query
        $resultados = $stmt->get_result();

        // ...


        if (!$resultados) {
            die("Error en la consulta: " . $conn->error);
        }

        if (!$resultados) {
            die("Error en la consulta: " . mysqli_error($conn));
        }

        // save data in array 
        $filas = mysqli_fetch_array($resultados);
        

        if ($filas['IDUsuario']== null){
            header("location:index.html");
        }
        else{
            $_SESSION["id"]=$filas['IDUsuario'];
            $_SESSION["usuario"]=$filas['usuario'];
            header("location: paginausuario.php");
        }

    }
    else{
        header("location: index.html");
    }
    
>>>>>>> 7d0ca9484f6f92200dafac47c50a4f7a05ff711d
?>