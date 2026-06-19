
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Editar Postagem</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar-fashion">

        <div class="logo">
            Pixelift
        </div>

        <input type="text" placeholder="Buscar postagens...">

        <div class="nav-buttons">

            <button type="button" class="btn-login">
                Início
            </button>

            <button type="button" class="btn-register">
                Ver Posts
            </button>

        </div>

    </nav>

    <!-- HERO -->

    <section class="edit-header">

        <h1>Editar Postagem</h1>

        <p>
            Atualize as informações da postagem de forma rápida e organizada.
        </p>

    </section>

    <!-- FORMULÁRIO -->

    <section class="edit-section">

        <div class="edit-card">

            @if(session('sucesso'))
                <p>{{ session('sucesso') }}</p>
            @endif

            @if(session('erro'))
                <p>{{ session('erro') }}</p>
            @endif

            <form action="{{ route('atualizar-postagem') }}" method="POST">

                @csrf
                @method('PUT')

                <label>Código da Postagem</label>

                <input
                    type="number"
                    name="CodPostagem"
                    class="form-control"
                    placeholder="ID da postagem"
                    required>

                <br><br>

                <label>Título</label>

                <input
                    type="text"
                    name="Titulo"
                    class="form-control"
                    placeholder="Digite o título">

                <br><br>

                <label>Conteúdo</label>

                <textarea
                    name="Conteudo"
                    rows="6"
                    class="form-control"
                    placeholder="Digite o conteúdo"></textarea>

                <br><br>

                <label>User</label>

                <input
                    type="text"
                    name="User"
                    class="form-control"
                    placeholder="Nome do usuário">

                <br><br>

                <label>URL da Imagem</label>

                <input
                    type="text"
                    name="Imagem"
                    class="form-control"
                    placeholder="https://exemplo.com/imagem.jpg">

                <br><br>

                <button type="submit" class="save-btn">
                    Salvar Alterações
                </button>

            </form>

        </div>

    </section>

    <footer>

        <h3>Pixelift</h3>

        <p>
            Compartilhe ideias, notícias e conteúdo com a comunidade.
        </p>

    </footer>

</body>

</html>
