{{-- <table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Ações</th>
    </tr>
    @foreach ($produtos as $produto)
    <tr>
        <td>{{ $produto['id'] }}</td>
        <td>{{ $produto['nome'] }}</td>
        <td>{{ $produto['preco'] }}</td>
        <td>
            <button>remover</button>
            <button>editar</button>
        </td>
    </tr>
    @endforeach

</table> --}}


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(180deg, #fff7fa, #fff);
            font-family: 'Inter', sans-serif;
        }

        .card {
            border: none;
            border-radius: 18px;
        }

        .header-top {
            margin-bottom: 20px;
        }

        .title {
            color: #d63384;
            font-weight: 600;
        }

        .subtitle {
            color: #999;
            font-size: 14px;
        }

        .stat-box {
            background: #fff0f5;
            border-radius: 12px;
            padding: 10px 15px;
            font-size: 14px;
        }

        .btn-pink {
            background: #f8d7e3;
            color: #b03060;
            border-radius: 12px;
            border: none;
        }

        .btn-pink:hover {
            background: #f1bfd2;
        }

        .search-input {
            border-radius: 12px;
            border: 1px solid #f3d6df;
        }

        .table thead {
            background: #fff0f5;
        }

        .table tbody tr:hover {
            background: #fff5f8;
        }

        .badge-soft {
            background: #ffe4ec;
            color: #d63384;
            border-radius: 10px;
            padding: 5px 10px;
        }

        .avatar {
            width: 35px;
            height: 35px;
            background: #f8d7e3;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #b03060;
        }

        .pagination .page-link {
            border-radius: 10px;
            color: #d63384;
        }

    </style>
</head>
<body>

<div class="container mt-5">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center header-top">
        <div>
            <h4 class="title mb-0">Produtos</h4>
        </div>

        <button class="btn btn-pink">+ Novo Produto</button>
    </div>

    <!-- STATS -->
    <div class="d-flex gap-3 mb-3">
        <div class="stat-box">📦 Total: {{ count($produtos) }}</div>
        <div class="stat-box">💰 Valor médio: R$ 500</div>
        <div class="stat-box">🔥 Mais caro: R$ 3500</div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <!-- FILTROS -->
            <div class="d-flex justify-content-between mb-3">
                <input type="text" class="form-control w-50 search-input" placeholder="🔍 Buscar produto...">

                <select class="form-select w-25 search-input">
                    <option>Ordenar por</option>
                    <option>Preço</option>
                    <option>Nome</option>
                </select>
            </div>

            <!-- TABELA -->
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Produto</th>
                            <th>Status</th>
                            <th>Preço</th>
                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($produtos as $produto)
                        <tr>
                            <td>
                                <div class="avatar">
                                    {{ strtoupper(substr($produto['nome'], 0, 1)) }}
                                </div>
                            </td>

                            <td>{{ $produto['id'] }}</td>

                            <td>{{ $produto['nome'] }}</td>

                            <td>
                                <span class="badge-soft">Ativo</span>
                            </td>

                            <td style="color:#d63384; font-weight:500;">
                                R$ {{ number_format($produto['preco'], 2, ',', '.') }}
                            </td>

                            <td class="text-end">
                                <button class="btn btn-sm btn-outline-dark me-2">
                                    Editar
                                </button>

                                <button class="btn btn-sm btn-pink">
                                    Apagar
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

            <!-- PAGINAÇÃO -->
            <nav class="mt-3">
                <ul class="pagination justify-content-end">
                    <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
                </ul>
            </nav>

        </div>
    </div>

</div>

</body>
</html>