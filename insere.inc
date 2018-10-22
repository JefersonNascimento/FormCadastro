<?php

include 'conecta_mysql.inc' or (include_path='D:\xampp\php\PEAR');

$nome               = $_POST['nome'];
$email               = $_POST['email'];
$nasc               = $_POST['data'];

$sql = "INSERT INTO cadastro VALUES";
$sql .= "('$nome','$email', '$nasc')";

if ($conexao->query($sql) === TRUE) {
    echo    "Usuário incluído com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();