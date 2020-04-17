
<DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/estilos.css">
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>
<main>
<body>
  <main>
    <header>
      <nav class="navbar navbar-expand-md bg-dark navbar-dark" navbar-expand-md fixed-top">
        <div class="container">
          <a class="navbar-brand myLogo" href="#"><img src="logo\logo_transparent.png" width="80px" /></a>
          <button type="button" class="navbar-toggler" data-target="#menuItem" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="menuItem">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="mainAdmin.php">DASHBOARD</a></li>
              <li class="nav-item"><a class="nav-link" href="tickets.php">TICKETS</a></li>
              <li class="nav-item"><a class="nav-link" href="usuario.php">USUÁRIO</a></li>
              <li class="nav-item"><a class="nav-link" href="info.php">INFO</a></li>
            </ul>
          </div>
      </nav>
      <figure id="topo" class="container-fluid"></figure>
    </header>
    <div class="container">
    <div class="container">
    <div class="span10 offset1">
                  <div class="card">
    								<div class="card-header">
                    <h3 class="well">Cadastro de Departamento:</h3>
                </div>
                <div class="card-body">
            <form class="form-horizontal" action="usuariocreatedepartamento.php"  method="post">
            <div class="control-group <?php echo !empty($nomeErro)?'error ' : '';?>">
                    <label class="control-label">Departamento:</label>
                    <div class="controls">
                        <input size="50" class="form-control" name="nome" type="text" placeholder="Nome" required="" value="<?php echo !empty($nome)?$nome: '';?>">
                        <?php if(!empty($nomeErro)): ?>
                            <span class="help-inline"><?php echo $nomeErro;?></span>
                            <?php endif;?>
                    </div>
                </div>
                <div class="form-actions">
                    <br/>
                    <button type="submit" class="btn btn-success">Adicionar</button>
                    <a href="usuario.php" type="btn" class="btn btn-default">Voltar</a>
                </div>
            </form>
            </div>
            </div>
            </div> 
        </div>
    </div>
       <div class="footer" >
        <p> © Copyright 2020 TIckets</p>
      </div>

    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/dycalendar.js"></script>
    <script src="js/script.js"></script>
  </body>
  </html>
  <?php
    require 'banco2.php';
    if(!empty($_POST))
    {
        //Acompanha os erros de validação
        $nomeErro = null;
        
        $nome = $_POST['nome'];
        
        //Validaçao dos campos:
        $validacao = true;
        if(empty($nome))
        {
            $nomeErro = 'Por favor digite o seu nome!';
            $validacao = false;
        }

        //Inserindo no Banco:
        if($validacao)
        {
            $pdo = Banco::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO departamento (nome) VALUES(?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nome));
            Banco::desconectar();
           
        }
    }
      
    
    
?>
