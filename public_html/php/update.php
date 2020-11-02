<?php

include "conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];

$imagem = addslashes(file_get_contents($_FILES['imagem']['tmp_name']));

if ($imagem == '') {

    $query = mysqli_query($link, "UPDATE produto SET nome = '$nome',preco = '$preco',descricao = '$descricao' WHERE idproduto = $id");
    
    
} else {

    $query = mysqli_query($link, "UPDATE produto SET nome = '$nome',preco = '$preco',descricao = '$descricao',imagem = '$imagem' WHERE idproduto = $id");

}

  mysqli_close($link);



header('location:consulta.php');

?>