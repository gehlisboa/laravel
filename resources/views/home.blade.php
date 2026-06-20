<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>FashionLink</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<nav class="navbar-fashion">
    <div class="logo">FashionLink</div>

    <input type="text" placeholder="Buscar projetos, tendências, estilistas...">

    <div class="nav-buttons">
        <a href="#" class="btn-login">Explorar</a>
        <a href="#" class="btn-register">Publicar Projeto</a>
    </div>
</nav>

<!-- PERFIS EM DESTAQUE -->
<section class="stories">

    <h2>Perfis em Destaque</h2>

    <div class="stories-container">

        @foreach($users as $user)
            <a href="/usuario/{{ $user['username'] }}" class="story">
                <img src="{{ $user['photo'] }}">
                <span>{{ $user['name'] }}</span>
            </a>
        @endforeach

    </div>

</section>

<!-- HERO -->
<section class="featured-profile">

    <div class="profile-left">
        <img src="https://i.pinimg.com/736x/54/14/7d/54147d2cc993d216221eb806d9cfbb1b.jpg">
    </div>

    <div class="profile-right">

        <h2>FashionLink Community</h2>

        <p>Compartilhe • Inspire • Conecte</p>

        <p>
            Descubra projetos criativos, editoriais e tendências da moda.
        </p>

        <div class="stats">
            <div><h3>500+</h3><span>Projetos</span></div>
            <div><h3>2k+</h3><span>Criadores</span></div>
            <div><h3>150+</h3><span>Novidades</span></div>
        </div>

    </div>

</section>

<!-- POSTS COM LIKE -->
<section class="feed-section">

    <h2>Tendências da Semana</h2>

    <div class="masonry">

        @foreach($posts as $post)
            <div style="position:relative;">

                <img src="{{ $post['image'] }}">

                <form method="POST" action="{{ route('like.post', $post['id']) }}">
                    @csrf

                    <button type="submit" style="
                        position:absolute;
                        top:10px;
                        right:10px;
                        background:white;
                        border:none;
                        border-radius:50%;
                        padding:8px;
                    ">
                        @if(isset($likes[$post['id']]))
                            ❤️
                        @else
                            🤍
                        @endif
                    </button>
                </form>

            </div>
        @endforeach

    </div>

</section>

<!-- CATEGORIAS -->
<section class="moodboards">

    <h2>Categorias Populares</h2>

    <div class="mood-grid">

        <div class="mood-grid">

    <div class="mood-card">
        <a href="/tendencias/y2k">Y2K</a>
    </div>

    <div class="mood-card">
        <a href="/tendencias/paris-fashion">Paris Fashion</a>
    </div>

    <div class="mood-card">
        <a href="/tendencias/streetwear">Streetwear</a>
    </div>

    <div class="mood-card">
        <a href="/tendencias/luxo">Luxury Fashion</a>
    </div>

    <div class="mood-card">
        <a href="/tendencias/editorial">Editorial</a>
    </div>

    <div class="mood-card">
        <a href="/tendencias/runway">Runway</a>
    </div>

</div>

    </div>

</section>

<footer>

    <h3>FashionLink</h3>
    <p>Conectando criadores de moda.</p>

</footer>

</body>
</html>