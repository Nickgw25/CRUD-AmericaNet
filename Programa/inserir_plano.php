<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Plano</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="cadastrocliente.css">
    <link rel="stylesheet" href="TesteCores/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="RascunhoPrograma.php">Adicionar Upgrade <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listar_clientes.php">Visualizar Lista</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="inserir_plano.php">Adicionar Plano</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="inserir_funcionario.php">Adicionar Funcionário</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="listar_planos.php">Editar Planos</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="listar_funcionarios.php">Editar Funcionários</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
      </nav>
      <div id="body">
        <img src="TesteCores/Americanet-1-e1588784640627.png" id="img">
        <div id="bloco">
<div class="container" id="conPrincipal">
<form action="_inserir_plano.php" method="POST">
    <div class="form-group">
        <h4>Cadastro de Plano</h4>

        <label>Plano</label>
        <input type="text" class="form-control" id="plano" name="plano" placeholder="Insira o Nome do Plano" autocomplete="off">
      </div>

     
      <div id="btnSubmit">
      <button type="submit" class="btn btn-success">Cadastrar</button>&nbsp;
    </div>
    </form>
</div>
</div>
</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
</body>
</html>