
<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Criar Postagem | Atelie De Mode</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700&family=Pinyon+Script&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prata&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

<!-- NAVBAR IGUAL AO SITE -->
<nav class="navbar-fashion">

    <div class="logo-container">
        <span class="titulo">Atelie</span>
        <span class="subtitulo">De Mode</span>
    </div>

    <input type="text" placeholder="Buscar projetos, tendências, estilistas...">

    <div class="nav-buttons">
        <a href="/" class="btn-nav">Home</a>

        <a href="{{ route('listar-postagem') }}" class="btn-nav">
                Explorar Posts
        </a>

    <a href="{{ route('usuario.show', 'cecilia') }}" class="btn-nav">
    Perfil
</a>
</nav>

<!-- HERO (igual padrão do site) -->
<section class="publish-hero">

    <h1>Criar Nova Postagem</h1>

    <p>
        Compartilhe seus projetos e inspirações com a comunidade.
    </p>

</section>

<!-- FORM (SEU MODELO ORIGINAL, SÓ LIMPO) -->
<section class="publish-section">

    <div class="publish-card">

     <form method="POST" action="{{ route('criar-postagem.store') }}">

    @csrf

    <label>Título</label>
    <input type="text" name="titulo" placeholder="Digite o título">

    <br><br>

    <label>Conteúdo</label>
    <textarea name="conteudo" rows="6" placeholder="Digite o conteúdo"></textarea>

    <br><br>

    <label>Usuário</label>
    <input type="text" name="user" placeholder="Nome do usuário">

    <br><br>

    <label>URL da Imagem</label>
    <input type="text" name="imagem" placeholder="https://imagem.com/foto.jpg">

    <br><br>

    <button type="submit" class="btn-style">
        Publicar Postagem
    </button>

</form>

    </div>

</section>

<footer>
    <h3>Atelie De Mode</h3>
    <p>Conectando profissionais da moda.</p>
</footer>

</body>
</html>