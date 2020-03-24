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
              <li class="nav-item"><a class="nav-link" href="mainUsertickets.php">TICKETS</a></li>
              <li class="nav-item"><a class="nav-link" href="mainUserinfo.php">INFO</a></li>
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
                    <h3 class="well">Painel de Chamados:</h3>
                </div>
            </div>
            </div>
                <br>
                <br>
            <div class="row">
                <p>
                    <a href="mainUserticketscreate.php" class="btn btn-success">Criar Tickets</a>
                    <a href="mainUserticketsencerrado.php" class="btn btn-outline-dark">Tickets Encerrados</a>
                    <a href="ticketsagenda.php" class="btn btn-outline-primary">Agenda</a>
                </p>
                <div class="container">
                <h6> Lista de chamados em abertos:</h6>
                <div>
                </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Protocolo</th>
                            <th scope="col">Usuário</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                </table>
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