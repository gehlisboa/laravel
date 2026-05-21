<div>
    <form action="{{ route('curso.add') }}" method="post">
        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="periodo">Período</label>
        <input type="text" name="periodo" id="periodo">

        <button type="submit">Salvar</button>

        @isset($success)
            <h2>{{ $success }}</h2>
        @endisset
    </form>

    <hr>

    <h1>Cursos cadastrados</h1>

    @isset($cursos)
        @foreach($cursos as $curso)
            <h3>{{ $curso->nome }}</h3>
            <h3>{{ $curso->periodo }}</h3>
        @endforeach
    @endisset

</div>