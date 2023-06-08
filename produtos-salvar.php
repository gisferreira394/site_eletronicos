<?php

$id = $_POST["id"];
$nome = $_POST["produto"];



$bd_usuario = "root";
$bd_senha = "";
$bd_nome_do_banco ="bd_eletronico";
$bd_servidor = "localhost";


$conexao = mysqli_connect($bd_servidor, $bd_usuario, $bd_senha, $bd_nome_do_banco);

$sql = "insert into t_produtos(id, nome_do_produto) values($id, '$nome')";

mysqli_query($conexao, $sql);

mysqli_close($conexao);

header('location:produtos_eletronicos.php');
?>