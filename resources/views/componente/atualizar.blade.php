<div>
    <form action="{{ route('componente.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $comonente->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $componente->nome }}">

        <label for="hora_inicio">Hora  Início</label>
        <input type="time" name="hora_inicio" id="hora_inicio" value="{{ $componente->nome }}">

        <label for="hora_fim">Hora Fim</label>
        <input type="time" name="hora_fim" id="hora_fim" value="{{ $componente->nome }}">


        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>
</div>

