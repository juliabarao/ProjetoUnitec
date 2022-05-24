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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#conteudo-sobre">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#conteudo-servicos">Serviços</a>
          </li>
          <li class="nav-item">
            <a style="margin-right: 70px;" class="nav-link" href="./contatos.php">Contatos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- home -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active img-responsive">
        <img src="assets/img/UNITEC.png" width="100%" height="800px" class="d-block " alt="...">
      </div>
    </div>
  </div>

  <!-- sobre -->
  <div class="sobre" id="conteudo-sobre">
    <h1>Sobre</h1>
    <p>A Assistência Técnica Unitec atua há 5 anos no mercado paulista, oferecendo um atendimento seguro e
      personalizado para os clientes, visando um segmento fora da garantia de mercado. Combinando atenção nos
      detalhes, variedade de marcas, e preços convidativos, oferecemos a segurança que o público precisa em um momento
      que os produtos não estão mais com a proteção das marcas, em que os valores estão realmente altos.</p>
    <p>Trabalhamos com peças originais de fábrica para fazermos a melhor manutenção para seus produtos. Sabemos o
      quanto pode ser frustrante esperar pelo conserto de seus produtos, ter uma demora constante para entrega, e ter
      de volta peças que não são compatíveis, e que vão levar a novos problemas.</p>
    <p>Nossos serviços de assistência técnica visam a qualidade definitiva do produto, então sempre com fornecedores
      oficiais de peças à nossa disposição. OBS: não trabalhamos com vendas de peças. Os materiais adquiridos são de
      uso específico para nossos serviços.</p>
  </div>

  <!-- serviços -->
  <div class="banner" id="conteudo-servicos">
    <div class="banner__overlay">
      <div class="banner__container">
        <h1 class="banner__title">Serviços</h1>
        <p class="banner__text">Assistência técnica e manutenção especializada em eletrodomésticos residenciais e
          industriais.</p>

        <button type="button" class="btn btn-outline-light card1 " id="ol8V8QLNTaA" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Veja Mais
        </button>

      </div>
    </div>
    <div class="story-img"></div>
  </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="btnn">
            <button  type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
      </div>
      <div style="border-top: 20px; ;"> 
      <iframe src="" frameborder="0"></iframe>
    </div>
    </div>
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
</body>

</html>