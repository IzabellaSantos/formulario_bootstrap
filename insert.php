<?php
include_once('db_connection.php'); //require_once gives an fatal error

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];

$sql_insert = "INSERT INTO `people`(`first_name`, 
                                    `last_name`, 
                                    `zip`, 
                                    `street`, 
                                    `neighbour`, 
                                    `city`)
                VALUES('" . $nome . "',
                    '" . $sobrenome . "', 
                    '" . $cep . "', 
                    '" . $rua . "', 
                    '" . $bairro . "',
                    '" . $cidade . "')";

$pdo->query($sql_insert);

// echo $sql_insert;
header('Location: index.php');
exit;
