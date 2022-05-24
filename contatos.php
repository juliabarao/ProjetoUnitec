<?php

include "conexao.php";
// $css = file_get_contents('Bootstrap/custom/styles.php');

$consulta = "SELECT * FROM contatos";
$con = $mysqli -> query($consulta) or die($mysqli -> error);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UNITEC</title>
  <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./assets/Bootstrap/css/bootstrap.css">
    
</head>

<body>
  <!-- menu --> 
  <nav class="navbar navbar-expand-lg navbar-dark static-top" id="nav" style="background-color: black;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img style="margin-left: 70px;" src="assets/img/logo.svg" alt="logo" width="150" height="50">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Serviços</a>
          </li>
          <li class="nav-item">
            <a style="margin-right: 70px;" class="nav-link" href="./contatos.php">Contatos</a>
          </li>
        </ul>
      </div>
    </div>
    
    <form class="d-flex from-inline" action="buscar.php" method="GET" >
      <input class="form-control me-2" type="text" name="nome" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success">ok</button>
      </form>
  </nav>

  <!-- home -->
 <div>

 </div>
 <div></div>
  <table class= "altura rounded-2 border-dark table table-bordered table-hover table-sm caption-top align-middle">
        <thead>
        <tr style="background-color: #ffdb58;">
            <th colspan="2" style="text-align: center;">Nosso Time!</th>
        </tr>
        </thead>
        <?php while ($dado = $con -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
     </table>
     </div>
     <!-- contato -->
  <div class="contato" id="conteudo-contato">
    <h2>Atendimento</h2>
    <a href="#"><i class="fa-solid fa-envelope" aria-hidden="true"></i></a>
    <a href="#"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
    <a href="#"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a>
    <br>
    <br>
    
    <p class="atend">Horário de Atendimento:<br>De Segunda à Sexta das 9:00hs às 18:00hs<br>Sábados das 9:00hs
      às 13:00hs.</p>
  </div>

  <!-- footer -->
  <div class="footer-copyright text-center py-3" style="background-color: black;">
    <span class="text-light">Todos os direitos reservados ao grupo Unitec <i class="fa fa-copyright" aria-hidden="true"></i></span>
  </div>

  <script src="index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
