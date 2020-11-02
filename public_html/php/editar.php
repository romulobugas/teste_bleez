<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste Bleez</title>


  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
  <script src="http://files.rafaelwendel.com/jquery.maskMoney.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script>
    $(document).ready(function () { 
        var $seuCampoCpf = $("#preco");
        $seuCampoCpf.mask('0000000000.00', {reverse: true});
    });
</script>

</head>
<body>

<?php

include "conexao.php";

$id = $_GET["idproduto"];

$sql = mysqli_query($link, "select * from produto where idproduto = $id");


$vetor = mysqli_fetch_array($sql);
    
$id = $vetor['idproduto'];
$nome = $vetor['nome'];
$preco = $vetor['preco'];
$descricao = $vetor['descricao'];
$imagem = $vetor['imagem'];

    echo '
    <div class="container">
        <div class="row">
          <div class="col">
          <form name="form1" action="update.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputNome1">Nome do produto</label>
              <input class="form-control" name="id" type="text" value="'.$id.'" readonly>
              <input type="text" name="nome" value ="'.$nome.'" class="form-control" id="exampleInputText1">
            </div>
            <div class="form-group">
              <label for="exampleInputPreco1">Preço</label>
                <input type="text" id="preco" name="preco" value ="'.$preco.'" class="form-control" id="exampleInputText1">
            </div>
            <div class="form-group">
              <label for="exampleInputDescricao1">Descrição</label>
              <input type="text" name="descricao" value ="'.$descricao.'" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
              <small id="nameHelp" class="form-text text-muted">Faça uma breve descrição do produto e suas características</small>
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile1">Imagem do produto</label>
              <img src="data:image/jpg;base64,'.base64_encode($vetor['imagem']).'"/>
              <input type="file" name="imagem" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Atualizar</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Deletar produto</button>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Deseja realmente deletar esse produto?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <a class="btn btn-primary" href="delete.php?idproduto='.$id.'" role="button">Deletar</a>
              </div>
            </div>
          </div>
        </div>
            <a class="btn btn-primary" href="consulta.php" role="button">Voltar</a>
          </form>
          
          </div>
        </div>
      </div>
    
    ';



    mysqli_close($link);


?>

  
    
    
  
</body>
</html>