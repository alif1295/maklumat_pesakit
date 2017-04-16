<?php

// Finally, destroy the session.
session_start();

// Unset all of the session variables.
//$_SESSION = array();

session_destroy();

header('Location: index.php');
?>