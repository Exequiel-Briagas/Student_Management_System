<?php  
session_start();

// Unset the 'UserLogin' session variable to log out the user
unset($_SESSION['UserLogin']);

// Unset the 'Access' session variable to remove access level information
unset($_SESSION['Access']);

// Redirect the user to the login page
echo header ("Location: login.php");
?>
