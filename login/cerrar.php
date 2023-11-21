<?php
// Start the session
session_start();
if($_SESSION['usuario']!= null){
    // Unset all session variables
    session_unset();
    // Destroy the session
    session_destroy();
    header("location: index.html");
}else{
    header("location: index.html");
}
?>