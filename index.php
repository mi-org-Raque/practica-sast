<?php
// Ya no hardcoded
$password = getenv("PASSWORD"); 

// Evitar SQL Injection (validando el dato)
$id = intval($_GET['id']); 
$query = "SELECT * FROM users WHERE id = $id";

?>
