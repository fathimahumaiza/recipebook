<?php
session_start();

// Destroy all session data
session_unset();
session_destroy();

// Redirect to login/register page
header("Location: Login_Register.html");
exit();
?>
