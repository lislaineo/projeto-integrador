<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cursos</title>
  <link rel="icon" href="img/favicon.ico">
  <!-- Fontes -->
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- Header -->
  <?php include_once("header.php"); ?>
  
  <!-- Breadcrumb  -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cursos</li>
    </ol>
  </nav>

  <main>
    <div class="row justify-content-around">
      <!-- Banner -->
      <section class="pages-title-bg d-flex justify-content-center align-items-center">
        <h1>Cursos</h1>
      </section>
 
      <!-- Conteúdo Central da Página -->
      <section class="col-md-7 col-lg-8 order-2">
      
        <!-- Categorias de Cursos Imagens - Flip Cards -->
        <div class="row justify-content-center mb-4">
          <div class="col-lg-5 col-md-12 col-sm-6 align-items-center d-flex flex-column mt-5 mb-4">
            <div class="courses-bg-cards">
              <div class="flip-card flip-card-front">
                <h5 class="card-title text-center py-2">Hotelaria</h5>
                <img src="img/courses-g-hospitality.jpg" aria-hidden="true" alt="" class="course-img card-img-bottom">
              </div>
              <div class="flip-card flip-card-back">
                <div class="card-back-body">
                  <h5 class="card-title text-center py-2">Hotelaria</h5>
                  <img src="img/courses-g-hospitality.jpg" aria-hidden="true" alt="" class="course-img card-img-bottom">
                  <ul>
                    <a href="/curso-detalhe"><li>Atendente</li></a>
                    <a href="#"><li>Camareiro</li></a>
                    <a href="#"><li>Recepcionista</li></a>
                    <a href="#"><li>Garçom</li></a>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-sm-6 align-items-center d-flex flex-column mt-5 mb-4">
            <div class="courses-bg-cards">
              <div class="flip-card flip-card-front">
                <h5 class="card-title text-center py-2">Idiomas</h5>
                <img src="img/courses-g-languages.jpg" aria-hidden="true" alt="" class="course-img card-img-bottom">
              </div>
              <div class="flip-card flip-card-back">
                <div class="card-back-body">
                  <h5 class="card-title text-center py-2">Idiomas</h5>
                  <img src="img/courses-g-languages.jpg" aria-hidden="true" alt="" class="course-img card-img-bottom">
                  <ul>
                    <a href="#"><li>Português</li></a>
                    <a href="#"><li>Inglês</li></a>
                    <a href="#"><li>Espanhol</li></a>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-sm-6 align-items-center d-flex flex-column mt-5 mb-4">
            <div class="courses-bg-cards">
              <div class="flip-card flip-card-front">
                <h5 class="card-title text-center py-2">Programação</h5>
                <img src="img/courses-g-programming.jpg" aria-hidden="true" alt="" class="course-img card-img-bottom">
              </div>
              <div class="flip-card flip-card-back">
                <div class="card-back-body">
                  <h5 class="card-title text-center py-2">Programação</h5>
                  <img src="img/courses-g-programming.jpg" aria-hidden="true" alt="" class="course-img card-img-bottom">
                  <ul>
                    <a href="#"><li>CSS + HTML</li></a>
                    <a href="#"><li>Phyton</li></a>
                    <a href="#"><li>Lógica de Programação</li></a>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-sm-6 align-items-center d-flex flex-column mt-5 mb-4">
            <div class="courses-bg-cards">
              <div class="flip-card flip-card-front">
                <h5 class="card-title text-center py-2">Saúde</h5>
                <img src="img/courses-g-health.jpg" aria-hidden="true" alt="" class="course-img card-img-bottom">
              </div>
              <div class="flip-card flip-card-back">
                <div class="card-back-body">
                  <h5 class="card-title text-center py-2">Saúde</h5>
                  <img src="img/courses-g-health.jpg" aria-hidden="true" alt="" class="course-img card-img-bottom">
                  <ul>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-sm-6 align-items-center d-flex flex-column mt-5 mb-4">
            <div class="courses-bg-cards">
              <div class="flip-card flip-card-front">
                <h5 class="card-title text-center py-2">Beleza</h5>
                <img src="img/courses-g-beauty.jpg" aria-hidden="true" alt="" class="course-img card-img-bottom">
              </div>
              <div class="flip-card flip-card-back">
                <div class="card-back-body">
                  <h5 class="card-title text-center py-2">Beleza</h5>
                  <img src="img/courses-g-beauty.jpg" aria-hidden="true" alt="" class="course-img card-img-bottom">
                  <ul>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Barra de Navegação Lateral -->      
      <aside class="complete-menu col-md-4 col-lg-3 order-1 mt-5">
        <button type="button" class="col-lg-12 btn rounded-0 filter-title-bg text-white text-left font-weight-bold m-0 py-3 visible-xs visible-sm collapsed" data-toggle="collapse" data-target="#collapseFilter">Filtros <span class="fa fa-angle-down px-1"></span></button>

        <!-- Iníco collapse -->
        <div id="collapseFilter" class="collapse">
          <button type="button" class="col-lg-12 text-white btn rounded-0 collapse-bg font-weight-bold text-left m-0 py-3" data-toggle="collapse" data-target="#collapseCategory">Área de Atuação <i class="fa fa-caret-square-o-down px-1"></i></button>
        
          <div id="collapseCategory" class="collapse list-group-item bg-light">

            <!-- Collapse do primeiro tópico de busca -->
            <div>
              <a data-toggle="collapse" href="#collapseHotel">Hotelaria<i class="fa fa-angle-down px-1"></i></a>
                <ul id="collapseHotel" class="collapse list-group">
                  <li class="list-group-item"><a href="#atendente">Atendente</a></li>
                  <li class="list-group-item"><a href="#camareiro">Camareiro</a></li>
                  <li class="list-group-item"><a href="#recepcionista">Recepcionista</a></li>
                </ul>
            </div>
            
            <!-- Collapse do segundo tópico de busca -->
            <div>
              <a data-toggle="collapse" href="#collapseLanguages">Idiomas<i class="fa fa-angle-down px-1"></i></a>
                <ul id="collapseLanguages" class="collapse list-group">
                  <li class="list-group-item"><a href="#portugues">Português</a></li>
                  <li class="list-group-item"><a href="#ingles">Inglês</a></li>
                  <li class="list-group-item"><a href="#espanhol">Espanhol</a></li>
                </ul>
            </div>

            <!-- Collapse do terceiro tópico de busca -->
            <div>
              <a data-toggle="collapse" href="#collapseProgramming">Programação<i class="fa fa-angle-down px-1"></i></a>
                <ul id="collapseProgramming" class="collapse list-group">
                  <li class="list-group-item"><a href="#csshtlm">CSS + HTML</a></li>
                  <li class="list-group-item"><a href="#phyton">Phyton</a></li>
                  <li class="list-group-item"><a href="#logica">Lógica de Programação</a></li>
                </ul>
            </div>
          </div>

        <!-- Campo de busca por palavra -->
        <div class="list-group-item row form-group p-3 bg-secondary">
          <div class="form-group ">
            <label class="font-weight-bold text-light" for="busca">Busca por Palavra Chave</label>
            <input type="text" class="form-control" id="busca" placeholder="Procurar...">
          </div>
          <button type="button" class="btn btn-secondary col-lg-12" onclick="location.href='course-detail.php'"><i class="fa fa-search"></i> Buscar</button>
        </div>
        </div>
      </aside>
    </div>
  </main>

  <!-- Footer -->
  <?php include_once("footer.php") ?>

  <!-- JS files: jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>