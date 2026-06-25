
<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Perfil - {{ $usuario['username'] }}</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700&family=Pinyon+Script&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Prata&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/cecilia.css') }}">

</head>

<body>

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

<section class="banner-perfil" id="bannerPerfil">

    <div class="banner-overlay"></div>

    <div class="banner-text">
        <h1>Cecília Valença</h1>
        <p>Perfil do Usuário</p>
    </div>

</section>

<section class="featured-profile">

    <div class="profile-left">
        <img src="{{ $usuario['foto'] }}" alt="Foto de perfil">
    </div>

    <div class="profile-right">

        <h2 class="username">{{ $usuario['username'] }}</h2>

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

      <div class="profile-buttons">

    <a href="{{ route('criar-postagem') }}" class="btn-style">
        Criar Post
    </a>

   <a href="{{ route('pins.index') }}" class="btn-style">
    Pins Salvos
</a>
    <div class="theme-dropdown">

        <button type="button"
                class="btn-style"
                onclick="toggleThemes()">
            Personalizar
        </button>

        <div id="themeMenu" class="theme-menu">

            <button onclick="setTheme('rose')">Rosé Fashion</button>

            <button onclick="setTheme('dark')">Dark Fashion</button>

            <button onclick="setTheme('vintage')">Vintage</button>

            <button onclick="setTheme('cyber')">Cyber</button>

        </div>

    </div>

</div>
</section>

<section class="favoritas">

    <h2>Tendências Favoritas</h2>

    <div class="mood-grid">

        <div class="mood-card y2k">
            <a href="/tendencias/y2k">
                Y2K
            </a>
        </div>

        <div class="mood-card animal">
            <a href="/tendencias/animal-print">
                Animal Print
            </a>
        </div>

        <div class="mood-card cool">
            <a href="/tendencias/cool-culture">
                Cool Culture
            </a>
        </div>

        <div class="mood-card vintage">
            <a href="/tendencias/vintage">
                Vintage
            </a>
        </div>

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

<section class="trabalhos">

    <h2>Trabalhos & Interesses</h2>

    <div class="masonry">

        @foreach($usuario['trabalhos/interesses'] as $trabalho)
            <img src="{{ $trabalho }}" alt="Trabalho">
        @endforeach

    </div>

</section>

<footer>

    <h3>Atelie De Mode</h3>

    <p>Conectando profissionais da moda.</p>

</footer>


<script>

function setTheme(theme) {
    const root = document.documentElement;
    const banner = document.querySelector('#bannerPerfil');

    document.body.style.transition = "all 0.3s ease";

    const themes = {
        rose: {
            principal: '#c97c8a',
            fundo: '#fff6f8',
            texto: '#4a3a3d',
            banner: 'linear-gradient(135deg,#ff9a9e,#fad0c4,#fbc2eb,#a18cd1)'
        },

       dark: {
            principal: '#ff2e93',
            fundo: '#1a0f1c',
            texto: '#ffe6f2',
            banner: 'linear-gradient(135deg,#ff2e93,#ff6adf,#ff8fd6,#ffb3e6)'
        },

        vintage: {
            principal: '#9a7a60',
            fundo: '#fff8e9',
            texto: '#3d2f26',
            banner: 'linear-gradient(135deg,#d2b49c,#a7866b,#f0e2d2)'
        },

        cyber: {
          principal: '#9200c7ff',
            fundo: '#f5fff8ff',
            texto: '#31001aff',
            banner: 'linear-gradient(135deg,#00e5ff,#7c4dff,#ff3d81,#00ff95,#ffd600)'
        }
    };

    const t = themes[theme] || themes.rose;

    root.style.setProperty('--principal', t.principal);
    root.style.setProperty('--fundo', t.fundo);
    root.style.setProperty('--texto', t.texto);

    if (banner) {
        banner.style.background = t.banner;
    }

    localStorage.setItem('temaPerfil', theme);
}
  

function toggleThemes(){
    document
        .getElementById('themeMenu')
        .classList.toggle('active');
}

window.onload = () => {

    const tema = localStorage.getItem('temaPerfil');

    if(tema){
        setTheme(tema);
    }else{
        setTheme('rose');
    }
}

</script>



</body>
</html>

