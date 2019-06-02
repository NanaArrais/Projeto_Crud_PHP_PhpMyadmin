<?php
session_start();
include_once 'conexao.php';
$NomeCoquetel = filter_input(INPUT_POST, 'NomeCoquetel', FILTER_SANITIZE_SPECIAL_CHARS);
$PrecoCoquetel = filter_input(INPUT_POST, 'PrecoCoquetel', FILTER_SANITIZE_SPECIAL_CHARS);


$sql = "insert into coqueteis values ";
$sql = "('$NomeCoquetel', '$PrecoCoquetel')";
mysqli_query($link,$sql) or die("Erro");
mysqli_close($link);
echo "Cadastrado com sucesso";
?>