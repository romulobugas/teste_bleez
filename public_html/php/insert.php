<?php

include "conexao.php";

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];

$imagem = addslashes(file_get_contents($_FILES['imagem']['tmp_name']));


$query = mysqli_query($link, "insert into produto (nome,preco,descricao,imagem) values ('$nome','$preco','$descricao','$imagem')");

if (!$query) {
    
    echo ("Error description: " . mysqli_error($link));

  } 

mysqli_close($link);


echo "<script>window.alert(\"Produto cadastrado com sucesso!!!\");</script>";
echo "<script>window.location= '../index.php';</script>";


?>