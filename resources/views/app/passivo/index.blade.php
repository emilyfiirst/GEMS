<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Passivo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header, .menu, .content, footer {
            padding: 20px;
        }

        header {
            background-color: #003366;
            color: white;
            text-align: center;
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
            background-color: #f0f0f0;
            text-align: center;
        }

        .form-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 20px auto;
        }

        .form-box h2 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group button {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group button {
            background-color: #003366;
            color: white;
            border: none;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #002244;
        }

         .excluido {
            background-color: #4CAF50;
            color: white; 
            padding: 10px; 
            margin-bottom: 10px; 
            border-radius: 5px; 
        }

        footer {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        @include('app.layouts._partials.topo')
    </header>

     @if(session('success'))
        <div class="excluido">Passivo excluido</div>
    @endif

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.passivo.cadastro') }}">Cadastrar</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="form-box">
            <h2>Pesquisa de Passivo</h2>
            <form action="{{ route('app.passivo.listar')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome">
                </div>
                <div class="form-group">
                    <button type="submit">Pesquisar</button>
                </div>
            </form>
        </div>
    </div>

    <footer>
        @include('app.layouts._partials.rodape')
    </footer>
</body>
</html>
