<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sobre - Portal de Cursos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Cursos Profissionais</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-principal') }}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-ds') }}">Desenvolvimento de Sistemas</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-adm') }}">Administração</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-mb') }}">Meio Ambiente</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-farm') }}">Farmácia</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-sobre') }}">Sobre</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-contato') }}">Contato</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
    <!-- CONTEÚDO -->
    <div class="container mt-5">

      <h1>Sobre o Portal de Cursos</h1>

      <p class="mt-3">
        O Portal de Cursos é uma plataforma educacional dedicada a oferecer
        formação profissional de qualidade para estudantes que desejam
        desenvolver habilidades e se preparar para o mercado de trabalho.
      </p>

      <p>
        Nossa instituição busca proporcionar ensino acessível, moderno e
        alinhado com as necessidades das empresas e da sociedade. Através
        de cursos técnicos e profissionalizantes, os alunos podem adquirir
        conhecimentos práticos e teóricos em diversas áreas.
      </p>


      <h3 class="mt-4">Nossos Cursos</h3>

      <div class="row mt-3">

        <div class="col-md-3">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Desenvolvimento de Sistemas</h5>
              <p class="card-text">Curso voltado para programação, banco de dados e criação de sistemas.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Administração</h5>
              <p class="card-text">Formação em gestão empresarial, marketing e organização administrativa.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Meio Ambiente</h5>
              <p class="card-text">Curso focado em sustentabilidade e preservação ambiental.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1588776814546-ec7e88dfe1b3" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Farmácia</h5>
              <p class="card-text">Conhecimento sobre medicamentos e práticas farmacêuticas.</p>
            </div>
          </div>
        </div>

      </div>

    </div>


    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center mt-5 p-4">
      <div class="container">
        <p class="mb-1">© 2026 Portal de Cursos</p>
        <p class="mb-0">Todos os direitos reservados</p>
      </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>