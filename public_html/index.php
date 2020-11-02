<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste Bleez</title>


  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
  <script>
    $(document).ready(function () { 
        var $seuCampoCpf = $("#preco");
        $seuCampoCpf.mask('0000000000.00', {reverse: true});
    });
</script>

</head>
<body>
 


      <div class="container">
        <div class="row">
          <div class="col">
          <form name="form1" action="php/insert.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputNome1">Nome do produto</label>
              <input type="text" name="nome" class="form-control" id="exampleInputText1">
            </div>
            <div class="form-group">
              <label for="exampleInputPreco1">Preço</label>
                <input type="text" id="preco" name="preco" class="form-control" id="exampleInputText1">
            </div>
            <div class="form-group">
              <label for="exampleInputDescricao1">Descrição</label>
              <input type="text" name="descricao" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
              <small id="nameHelp" class="form-text text-muted">Faça uma breve descrição do produto e suas características</small>
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile1">Imagem do produto</label>
              <input type="file" name="imagem" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
          </form>
          </div>
          <div class="col">
            <h1>Tela de cadastro</h1>
            <img src="img/cadastro.png" class="img-fluid" alt="Responsive image">
            <a class="btn btn-primary" href="php/consulta.php" role="button">Produtos cadastrados</a>
          </div>
        </div>
      </div>
    
    
    
    
  
</body>
</html>
