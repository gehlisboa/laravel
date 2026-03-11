<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contato - Portal de Cursos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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

    <!-- TÍTULO -->
    <div class="container mt-5">

      <h1>Entre em Contato</h1>
      <p>Envie sua dúvida ou solicite informações sobre nossos cursos.</p>

      <div class="row">

        <!-- FORMULÁRIO -->
        <div class="col-md-6">

          <form>

            <div class="mb-3">
              <label class="form-label">Nome</label>
              <input type="text" class="form-control" placeholder="Digite seu nome">
            </div>

            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" placeholder="Digite seu email">
            </div>

            <div class="mb-3">
              <label class="form-label">Curso de interesse</label>
              <select class="form-select">
                <option>Selecione</option>
                <option>Desenvolvimento de Sistemas</option>
                <option>Administração</option>
                <option>Meio Ambiente</option>
                <option>Farmácia</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label">Mensagem</label>
              <textarea class="form-control" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>

          </form>

        </div>

        <!-- INFORMAÇÕES -->
        <div class="col-md-6">

          <h4>Informações</h4>

          <p><strong>Endereço:</strong><br>
          Rua Exemplo, 123 - São Paulo</p>

          <p><strong>Telefone:</strong><br>
          (11) 99999-9999</p>

          <p><strong>Email:</strong><br>
          contato@portalcursos.com</p>

          <p><strong>Horário:</strong><br>
          Segunda a Sexta - 08h às 18h</p>

        </div>

      </div>

    </div>

    <!-- FOOTER -->
    <footer class="text-center mt-5 p-3 bg-light">
      <p>© 2026 Portal de Cursos</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

  </body>
</html>