
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Postagens - Pixelift</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
<section class="featured-profile">

    <div class="profile-left">

        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=800">

    </div>

    <div class="profile-right">

        <h2>Feed de Postagens</h2>

        <p class="profession">
            Compartilhe ideias, notícias e inspirações
        </p>

        <p>
            Explore todas as publicações criadas pelos usuários da plataforma.
        </p>

        <div class="stats">

            <div>
                <h3>{{ $postagens->count() }}</h3>
                <span>Posts</span>
            </div>

            <div>
                <h3>24h</h3>
                <span>Online</span>
            </div>

            <div>
                <h3>100%</h3>
                <span>Conectado</span>
            </div>

        </div>

    </div>

</section>

<section class="feed-section">

    <h2>Todas as Postagens</h2>

    <div class="posts-grid">

        @forelse($postagens as $post)

            <div class="post-card">

                <img
                    src="{{ $post->Imagem ?: 'https://picsum.photos/600/400' }}"
                    class="post-img">

                <div class="post-content">

                    <span class="post-author">
                        {{ $post->User }}
                    </span>

                    <h3>
                        {{ $post->Titulo }}
                    </h3>

                    <p>
                        {{ $post->Conteudo }}
                    </p>

                    <div class="post-buttons">

                        <a
                            href="/editar-postagem?id={{ $post->CodPostagem }}"
                            class="btn-edit">
                            Editar
                        </a>

                        <a
                            href="#"
                            class="btn-delete">
                            Remover
                        </a>

                    </div>

                </div>

            </div>

        @empty

            <h3>Nenhuma postagem encontrada.</h3>

        @endforelse

    </div>

</section>

<footer>

    <h3>Pixelift</h3>

    <p>
        Compartilhando ideias e conectando pessoas.
    </p>

</footer>

</body>
</html>
