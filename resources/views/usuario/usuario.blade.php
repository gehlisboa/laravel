<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Perfil - {{ $usuario['username'] }}</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<nav class="navbar-fashion">
    <div class="logo">FashionLink</div>

    <input type="text" placeholder="Buscar estilistas, modelos, fotógrafos...">

    <div class="nav-buttons">
        <button class="btn-login">Entrar</button>
        <button class="btn-register">Criar Perfil</button>
    </div>
</nav>

<section class="featured-profile">

    <div class="profile-left">
        <img src="{{ $usuario['foto'] }}" alt="Foto de perfil">
    </div>

    <div class="profile-right">

        <h2>{{ $usuario['username'] }}</h2>

        <p class="profession">{{ $usuario['profissao'] }}</p>

        <p>{{ $usuario['bio'] }}</p>

        <div class="stats">

            <div>
                <h3>{{ $usuario['stats']['projetos'] }}</h3>
                <span>Projetos</span>
            </div>

            <div>
                <h3>{{ $usuario['stats']['seguidores'] }}</h3>
                <span>Seguidores</span>
            </div>

            <div>
                <h3>{{ $usuario['stats']['conexoes'] }}</h3>
                <span>Conexões</span>
            </div>

        </div>

        <button class="follow-btn">Seguir Perfil</button>

    </div>

</section>

<section class="feed-section">

    <h2>Posts</h2>

    <div class="masonry">

        @foreach($usuario['posts'] as $post)
            <img src="{{ $post }}" alt="Post">
        @endforeach

    </div>

</section>

<section class="moodboards">

    <h2>Moodboards Populares</h2>

    <div class="masonry">

        @foreach($usuario['moodboards'] as $mood)
            <img src="{{ $mood }}" alt="Moodboard">
        @endforeach

    </div>

</section>

<footer>

    <h3>FashionLink</h3>
    <p>Conectando profissionais da moda.</p>

</footer>

</body>
</html>