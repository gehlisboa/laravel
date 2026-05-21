<div>
    <form action="{{ route('professor.add') }}" method="post">
        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">


        <label for="email">Email</label>
        <input type="email" name="email" id="email">


        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone">


        <button type="submit">Salvar</button>

        @isset($success)
            <h2>{{ $success }}</h2>
        @endisset
    </form>

    <hr>

    <h1>Professores cadastrados</h1>

    @isset($professores)
        @foreach($professores as $professor)

            <h3>Nome: {{ $professor->nome }}</h3>
            <h3>Email: {{ $professor->email }}</h3>
            <h3>Telefone: {{ $professor->telefone }}</h3>

            <hr>

        @endforeach
    @endisset

</div>
