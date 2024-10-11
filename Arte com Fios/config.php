<?php

define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DATABASE", "crocheteria"); 

$conn = new mysqli(HOST, USER, PASS, DATABASE);
 

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . $conn->connect_error);
}
 


?>
 
