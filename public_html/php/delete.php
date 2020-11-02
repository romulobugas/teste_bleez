<?php

include "conexao.php";

$id = $_GET["idproduto"];

mysqli_query($link,"delete from produto where idproduto = $id");


header('location:consulta.php');

?>


