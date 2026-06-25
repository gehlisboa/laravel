<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Editar Postagem</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700&family=Pinyon+Script&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

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
<section class="publish-hero">

    <h1>Editar Postagem</h1>

    <p>
        Atualize suas ideias, refine o conteúdo e mantenha sua publicação sempre atual.
    </p>

</section>

<!-- ================= FORM ================= -->
<section class="publish-section">

    <div class="publish-card">

        @if(session('sucesso'))
            <p style="color:#d89ca8;font-weight:600;margin-bottom:10px;">
                {{ session('sucesso') }}
            </p>
        @endif

        @if(session('erro'))
            <p style="color:#b86f81;font-weight:600;margin-bottom:10px;">
                {{ session('erro') }}
            </p>
        @endif

     <form action="{{ route('atualizar-postagem', $postagem->CodPostagem) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Título</label>
    <input type="text" name="Titulo" value="{{ $postagem->Titulo }}" required>

    <label>Conteúdo</label>
    <textarea name="Conteudo" rows="6" required>{{ $postagem->Conteudo }}</textarea>

    <label>Usuário</label>
    <input type="text" name="User" value="{{ $postagem->User }}">

    <label>URL da Imagem</label>
    <input type="text" name="Imagem" value="{{ $postagem->Imagem }}">

    <button type="submit" class="btn-style">
        Salvar Alterações
    </button>

</form>

    </div>

</section>

<!-- ================= FOOTER ================= -->
<footer class="feed-footer">

    <h3>Ateliê de Mode</h3>

    <p>Conectando profissionais da moda.</p>

</footer>

</body>
</html>