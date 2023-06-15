  
<?php
session_start(); 
session_unset(); 
session_destroy(); 
//echo "you have been successful logout" ; 
header("location: login.php")
?>
