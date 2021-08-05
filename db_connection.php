<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=projeto_formulario;host=localhost';
$user = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
