<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Farmácia</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
<a class="navbar-brand" href="#">Cursos Profissionais</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav ms-auto">

<li class="nav-item"><a class="nav-link" href="{{ route('pagina-principal') }}">Home</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('pagina-ds') }}">Desenvolvimento de Sistemas</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('pagina-adm') }}">Administração</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('pagina-mb') }}">Meio Ambiente</a></li>
<li class="nav-item"><a class="nav-link active" href="{{ route('pagina-farm') }}">Farmácia</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('pagina-sobre') }}">Sobre</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('pagina-contato') }}">Contato</a></li>

</ul>
</div>
</div>
</nav>

<div class="container mt-5">

<h1>Curso de Farmácia</h1>

<p>
O curso de Farmácia prepara profissionais para atuar com medicamentos,
laboratórios e atendimento farmacêutico.
</p>

<h3 class="mt-4">Conteúdos do curso</h3>

<ul>
<li>Farmacologia</li>
<li>Medicamentos</li>
<li>Laboratório</li>
<li>Controle farmacêutico</li>
<li>Atendimento em farmácia</li>
</ul>

<img src="https://images.unsplash.com/photo-1588776814546-ec7e88dfe1b3" class="img-fluid mt-4">

</div>

<footer class="bg-dark text-white text-center mt-5 p-4">
<p>© 2026 Portal de Cursos</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>