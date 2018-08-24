<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body class="filter-light">
  <nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="cadastrarPessoas.php">
        <i class="fa d-inline fa-lg fa-male"></i>
        <b>&nbsp;Pessoas.com
          <br> </b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item bg-primary">
            <a class="nav-link active" href="cadastrarPessoas.php">Cadastrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="visualizarPessoas.php">Visualizar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">
            <b>Editar</b>
          </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form class="">
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" placeholder="Digite o nome" id="nome" name="nome"> </div>
            <div class="form-group">
              <label for="estado">Estado</label>
              <select class="custom-control custom-select" for="estado">
                <option selected="">Abra e selecione o estado</option>
                <option value="1">RS</option>
                <option value="2">SC</option>
                <option value="3">PR</option>
              </select>
            </div>
            <div class="form-group">
              <label for="cidade" id="cidade">Cidade</label>
              <select class="custom-control custom-select" id="cidade">
                <option selected="">Abra e selecione a cidade</option>
                <option value="1">Santa Maria</option>
                <option value="2">Porto Alegre</option>
                <option value="3">São Gabriel</option>
              </select>
            </div>
            <button type="submit" class="btn btn-secondary">Alterar
              <br> </button>
            <button type="submit" class="btn btn-danger">Excluir
              <br> </button>
            <a class="btn btn-warning" href="visualizarPesssoas.php">Cancelar
              <br> </a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>