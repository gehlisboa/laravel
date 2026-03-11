<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Site de Cursos</title>
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

    <!-- ADM -->
    <div class="col-md-3">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Administração</h5>
          <p class="card-text">
            Estude gestão empresarial, finanças, marketing e liderança.
          </p>
          <a href="#" class="btn btn-primary">Ver Curso</a>
        </div>
      </div>
    </div>

    <!-- Meio Ambiente -->
    <div class="col-md-3">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Meio Ambiente</h5>
          <p class="card-text">
            Aprenda sobre sustentabilidade, preservação ambiental e ecologia.
          </p>
          <a href="#" class="btn btn-primary">Ver Curso</a>
        </div>
      </div>
    </div>

    <!-- Farmácia -->
    <div class="col-md-3">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1588776814546-ec7e88dfe1b3" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Farmácia</h5>
          <p class="card-text">
            Conheça medicamentos, laboratório e cuidados farmacêuticos.
          </p>
          <a href="#" class="btn btn-primary">Ver Curso</a>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center p-4 mt-5">
  <p>© 2026 - Portal de Cursos | Todos os direitos reservados</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>