<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Passivo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        header, footer {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1, footer p {
            margin: 0;
        }

        .menu {
            background-color: #e6f3ff;
            text-align: center;
            padding: 10px;
        }

        .menu ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .menu li {
            display: inline;
            margin: 0 10px;
        }

        .menu a {
            text-decoration: none;
            color: #003366;
            font-weight: bold;
        }

        .content {
            flex-grow: 1;
            background-color: #ffffff;
            text-align: center;
            padding: 20px;
            display: flex;
            justify-content: center; 
            align-items: center; 
        }

        .form-box {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 50%;
            overflow-x: auto; 
            margin: 0 auto;
        }

        .form-box h2 {
            margin-bottom: 20px;
            color: #003366;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
            background-color: #f8f9fa; 
        }

        th {
            background-color: #003366;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .btn-excluir, .btn-editar {
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-right: 5px;
        }

        .btn-excluir a, .btn-editar a{
            text-decoration: none;
            color: white;
        }

        .btn-excluir {
            background-color: #dc3545;
        }

        .btn-editar {
            background-color: #28a745; 
        }

        .btn-excluir:hover, .btn-editar:hover {
            background-color: #558cd9; 
        }

        footer {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 10px;
        }

        .pagination {
            display: flex;
            justify-content: center;
            padding: 20px 0;
            margin-top: 20px;
        }

        .pagination a, .pagination span {
            color: #003366;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid #ddd;
            margin: 0 4px;
            border-radius: 5px;
        }

        .pagination a.active, .pagination span.current {
            background-color: #003366;
            color: white;
            border: 1px solid #003366;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }

        .pagination svg {
            width: 20px;
            height: 20px;
            vertical-align: middle;
        }

        .pagination .hidden {
            display: none;
        }
    </style>


</head>
<body>
    
    @include('app.layouts._partials.topo')

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.passivo') }}">Consultar</a></li>
            <li><a href="{{ route('app.passivo.cadastro') }}">Cadastrar</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="form-box">
            <h2>Consultar Passivo</h2>
            <form action="#" method="post">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Caixa</th>
                            <th>Pasta</th>
                            <th>Nome</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($passivos as $passivo)
                            <tr>
                                <td>{{ $passivo->caixa }}</td>
                                <td>{{ $passivo->pasta }}</td>
                                @foreach($alunos as $aluno)
                                    @if($aluno->id == $passivo->nome)
                                        <td>{{ $aluno->nome }}</td>
                                    @endif
                                @endforeach
                                <td class="btn-excluir"><a href="{{ route('app.passivo.excluir', $passivo->id) }}">Excluir</a></td>
                                <td class="btn-editar"><a href="{{ route('app.passivo.editar', $passivo->id) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination">
                    {{ $passivos->links() }}
                </div>
            </form>
        </div>
    </div>

    @include('app.layouts._partials.rodape')
</body>
</html>
