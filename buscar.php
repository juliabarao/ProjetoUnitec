<?php
include_once "conexao.php";
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
<body >

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

<div class="mt-5"></div>
<?php
			$nome = filter_input(INPUT_GET, 'nome', FILTER_UNSAFE_RAW);
			$result_usuario = "SELECT * FROM basepesq WHERE nome LIKE '%$nome%'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			?>

<div class="col-lg-12 me-5 ">
 <table class="rounded-2 border-dark table table-bordered table-hover table-sm caption-top align-middle">
        <thead>         
        <tr style="background-color: #ffdb58;">
            <th colspan="2" style="text-align: center;">RESULTADO</th>
        </tr>
        </thead>
        <?php while ($row_usuario = mysqli_fetch_array($resultado_usuario)){ ?>
        <tr>
            <td><?php echo $row_usuario["nome"]; ?></td>
            <td><?php echo $row_usuario["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
	
		
    
		</body>
    <script src="./Bootstrap/js/bootstrap.js"></script>
</html>
