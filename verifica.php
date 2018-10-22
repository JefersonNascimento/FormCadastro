<!doctypehtml>
<html>
<head>
</head>
<body>
<?php

$nome               =   $_POST["nome"];
$email              =   $_POST["email"];
$data               =   $_POST["data"];
$erro               =   0;

//Verifica se o campo nome não está em branco
if (empty($nome) OR strstr($nome, ' ')==FALSE) {
echo "Favor digitar seu nome corretamente.<br>";
    $erro=1;
}
//Verifica se o campo email está preenchido corretamente
if (strlen($email)< 8 || strstr ($email, '@')==FALSE) {
    echo "Favor digitar o seu email corretamente.<br>";
    $erro = 1;
}
//Verificar se não houve erro - neste caso chama a include para inserir os dados
if ($erro==0){
    echo "Todos os dados foram digitados corretamente.<br>";
    include 'insere.inc';
}
?>
</body>
</html>