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

    <table border="1">
        <tr>
            <td>Nome</td>
            <td>hora_inicio</td>
            <td>hora_fim</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($componentes)
                @foreach($componentes as $componente)
                    <tr>
                        <td>
                            <h3>{{ $componente->nome }}</h3>
                            <h3>{{ $componente->hora_inicio }}</h3>
                            <h3>{{ $componente->hora_fim }}</h3>
                        </td>
                        <td>
                            <form action="{{ route('componente.remove', ['id' => $componente->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                            <button type="submit">Atualizar</button>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>


    @isset($componentes)
            @foreach($componentes as $componente)
            <h3>Nome: {{ $componente->nome }}</h3>
            <h3>Email: {{ $componente->hora_inicio }}</h3>
            <h3>Telefone: {{ $componente->hora_fim }}</h3>
            @endforeach
    @endisset
</div>
