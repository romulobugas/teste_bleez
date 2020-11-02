<?php
include "conexao.php";

if('1' == '1'){

    $query = mysqli_query($link, "select * from produto where idproduto = 15");

    while($vetor = $vetor = mysqli_fetch_array($query)){

        $imageData = $vetor["imagem"];
    }
    header("content-type: image/jpeg");
    echo $imageData;

} else{
    echo "Erro!";
}


?>