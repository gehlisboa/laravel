<div>
    <form action="{{ route('componente.add') }}" method="post">
        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="hora_inicio">Hora  Início</label>
        <input type="time" name="hora_inicio" id="hora_inicio">

        <label for="hora_fim">Hora Fim</label>
        <input type="time" name="hora_fim" id="hora_fim">

        <button type="submit">Salvar</button>

        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    @isset($componentes)
            @foreach($componentes as $componente)
            <h3>Nome: {{ $componente->nome }}</h3>
            <h3>Email: {{ $componente->hora_inicio }}</h3>
            <h3>Telefone: {{ $componente->hora_fim }}</h3>
            @endforeach
    @endisset
</div>
