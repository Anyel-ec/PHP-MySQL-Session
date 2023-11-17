<?php
// Start the session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Display a message indicating that the session has been closed successfully
echo "Session closed successfully.";
?>