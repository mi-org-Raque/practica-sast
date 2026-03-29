<?php
// ❌ Hardcoded secret
$password = "123456";

// ❌ SQL Injection
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = " . $id;

// ❌ Uso inseguro
eval($_GET['code']);
?>
