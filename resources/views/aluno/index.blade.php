<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #fdf6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background: #ffffff;
            padding: 35px;
            border-radius: 20px;
            width: 320px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid #f3d6df;
        }

        h2 {
            text-align: center;
            color: #222;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-size: 14px;
            color: #444;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            border: 1px solid #e5c7d0;
            border-radius: 10px;
            background: #fff;
            transition: 0.3s;
        }

        input:focus {
            border-color: #f4a6b8;
            box-shadow: 0 0 0 3px rgba(244, 166, 184, 0.2);
            outline: none;
        }

        button {
            width: 100%;
            margin-top: 25px;
            padding: 13px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #f8c8dc, #f4a6b8);
            color: #222;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: linear-gradient(135deg, #f4a6b8, #f08aa5);
            transform: translateY(-2px);
        }

        .sucesso {
            margin-top: 18px;
            text-align: center;
            font-size: 14px;
            color: #222;
            background: #f8e4ea;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #f3c6d3;
        }
    </style>
</head>
<body>

<form action="{{ route('aluno.add') }}" method="post">
    @csrf

    <h2>Cadastro</h2>

    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" placeholder="Digite seu nome">

    <button type="submit">Salvar</button>

    @isset($sucesso)
        <div class="sucesso">{{ $sucesso }}</div>
    @endisset     
</form>

    @isset($alunos)
        @foreach($alunos as $aluno)
        <h3>{{ $aluno->nome }}</h3>
        @endforeach
    @endisset     
</form>

</body>
</html>