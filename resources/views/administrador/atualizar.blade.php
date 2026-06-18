<div>
    <form action="{{ route('administrador.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $administrador->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $administrador->nome }}">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ $administrador->nome }}">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="{{ $administrador->nome }}">

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" value="{{ $administrador->nome }}">

        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" id="usuario" value="{{ $administrador->nome }}">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" value="{{ $administrador->nome }}">

        <label for="status">Status</label>
        <input type="text" name="status" id="status" value="{{ $administrador->nome }}">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>
</div>

