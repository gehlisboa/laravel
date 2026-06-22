
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Postagem</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar-fashion">
    <div class="logo">Atelie De Mode</div>

    <input type="text" placeholder="Buscar projetos, tendências, estilistas...">

    <div class="nav-buttons">
        <a href="/" class="btn-nav">Home
    </a>

    <a href="{{ route('criar-postagem') }}" class="btn-nav">
        Criar Post
    </a>

    <a href="/usuario/1" class="btn-nav">
        Perfil
    </a>
    </div>
</nav>

<section class="publish-hero">
    <h1>Criar Nova Postagem</h1>

    <p>
        Compartilhe seus projetos e inspirações com a comunidade.
    </p>
</section>

<section class="publish-section">

    <div class="publish-card">

        <form>

            <label>Título</label>
            <input
                type="text"
                class="form-control"
                placeholder="Digite o título">

            <br><br>

            <label>Conteúdo</label>
            <textarea
                class="form-control"
                rows="6"
                placeholder="Digite o conteúdo"></textarea>

            <br><br>

            <label>User</label>
            <input
                type="text"
                class="form-control"
                placeholder="Nome do User">

            <br><br>

            <label>URL da Imagem</label>
            <input
                type="text"
                class="form-control"
                placeholder="https://imagem.com/foto.jpg">

            <br><br>

            <button type="submit" class="publish-btn">
                Publicar Postagem
            </button>

        </form>

    </div>

</section>

<footer>
    <p>&copy; 2025 FashionHub</p>
</footer>

</body>
</html>
