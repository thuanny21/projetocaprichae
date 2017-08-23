<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !


$nome = $_POST ["nome"];  //atribuição do campo "nome" vindo do formulário para variavel
$sobrenome  = $_POST ["sobrenome"]; //atribuição do campo "sobrenome" vindo do formulário para variavel 
$email  = $_POST ["email"]; //atribuição do campo "email" vindo do formulário para variavel
$ddd  = $_POST ["ddd"]; //atribuição do campo "ddd" vindo do formulário para variavel
$telefone = $_POST ["telefone"];  //atribuição do campo "telefone" vindo do formulário para variavel
$celular  = $_POST ["celular"]; //atribuição do campo "telefone" vindo do formulário para variavel
$cep = $_POST ["cep"]; //atribuição do campo "cep" vindo do formulário para variavel
$endereco = $_POST ["endereco"];  //atribuição do campo "endereco" vindo do formulário para variavel
$cidade = $_POST ["cidade"];  //atribuição do campo "cidade" vindo do formulário para variavel
$estado = $_POST ["estado"];  //atribuição do campo "estado" vindo do formulário para variavel
$bairro = $_POST ["bairro"];  //atribuição do campo "bairro" vindo do formulário para variavel
$pais = $_POST ["pais"];  //atribuição do campo "pais" vindo do formulário para variavel
$senha = $_POST['senha']; //atribuição do campo "senha" vindo do formulário para variavel
$sexo = $_POST ["sexo"];  //atribuição do campo "sexo" vindo do formulário para variavel


$I= "insert into profissional(nome,sobrenome,email,ddd,telefone,celular,cep,endereco,cidade,estado,bairro,pais,senha,sexo) value('$nome', '$sobrenome', '$email', '$ddd', '$telefone', '$celular', '$cep', '$endereco', '$cidade','$estado', '$bairro', '$pais', '$pais', '$senha', '$sexo')";

$conexao=mysql_connect("localhost","root","") or die ("Erro ao conectar ao MySQL");

$banco=mysql_select_db("caprichae", $conexao) or die ("Erro de conexão ao banco de dados");

mysql_query($I,$conexao) or die ("Erro na inserção de dados");



?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<center><h1> Bem vindo</h1></center>

</body>
</html>