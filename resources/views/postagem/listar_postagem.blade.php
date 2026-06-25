<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Postagens - Ateliê de Mode</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700&family=Pinyon+Script&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prata&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="page-feed">

<!-- ================= NAVBAR ================= -->
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

<!-- ================= HERO ================= -->
<section class="feed-hero">

    <div class="profile-left">
    <img src="{{ asset('logo.png') }}">
    </div>

    <div class="feed-hero-right">

        <h1>Feed de Postagens</h1>

        <p class="feed-subtitle">
            Compartilhe ideias, notícias e inspirações
        </p>

        <p>
            Explore todas as publicações criadas pelos usuários da plataforma.
        </p>

          <a href="{{ route('criar-postagem') }}" class="btn-style">
        Criar Post
    </a>

</div>

     

</section>

<!-- ================= FEED ================= -->
<section class="feed-section">

    <h2>Todas as Postagens</h2>

    <div class="feed-grid">

     @forelse($postagens as $post)

    <div class="feed-card">

        @if($post->Imagem)
    <img src="{{ $post->Imagem }}">
@endif

        <div class="feed-content">

            <span class="feed-author">
                {{ $post->User }}
            </span>

            <h3>{{ $post->Titulo }}</h3>

            <p>{{ $post->Conteudo }}</p>

            <div class="feed-actions">

              <a href="/editar-postagem/{{ $post->CodPostagem }}" class="btn-style">
    Editar
</a>

            </div>

        </div>
    </div>

@empty
    <h3>Nenhuma postagem encontrada.</h3>
@endforelse
    </div>

</section>

<!-- ================= FOOTER ================= -->
<footer class="feed-footer">

    <h3>Ateliê de Mode</h3>

    <p>Conectando profissionais da moda.</p>

</footer>

</body>
</html>