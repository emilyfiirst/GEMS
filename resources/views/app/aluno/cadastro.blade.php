<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
        }

        label {
            font-weight: bold;
            text-align: left;
        }

        .content, .menu {
            background-color: #e6f3ff;
            padding: 20px;
            text-align: center;
            flex-grow: 1; /* Faz com que a coluna de conteúdo ocupe o espaço restante */
        }
        .bold {
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 10px;
            width: 80%;
            margin: 0 auto;
            display: flex;
            align-items: center;
        }

        .form-group label {
            flex: 1; 
            max-width: 200px; 
        }

        .form-group input[type="checkbox"] {
            margin-left: 10px; 
            flex: 0 0 auto;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group button {
            width: 80%; 
            margin: 0 auto; 
            padding: 10px;
            background-color: #003366;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px; 
        }
        .form-group button:hover {
            background-color: #002244;
        }

        div button {
            font-size: 17px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    
    @include('app.layouts._partials.topo')

    <div class="menu">
        <ul>
        <li><a href="{{ route('app.aluno') }}">Consultar</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="form-box">
            <h2>Cadastro de Aluno</h2>
            <form action="{{ route('app.aluno.cadastro')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" >
                </div>
                <div class="form-group">
                    <label for="cod_sgde">Cod SGDE:</label>
                    <input type="text" id="cod_sgde" name="cod_sgde" >
                </div>
                <div class="form-group">
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" id="data_nascimento" name="data_nascimento" >
                </div>
                <div class="form-group">
                    <label for="ativo">Ativo:</label>
                    <input type="checkbox" id="ativo" name="ativo" value="1">
                </div>
                <div class="form-group">
                    <label for="numero_pasta">Número Pasta:</label>
                    <input type="number" id="numero_pasta" name="numero_pasta" >
                </div>
                <div class="form-group">
                    <label>Documentos:</label><br>
                    <label><input type="checkbox" name="certidao_nascimento" value="1"> Certidão de Nascimento</label><br>
                    <label><input type="checkbox" name="historico" value="1"> Histórico</label><br>
                    <label><input type="checkbox" name="cartao_sus" value="1"> Cartão SUS</label><br>
                    <label><input type="checkbox" name="doc_responsavel" value="1"> Documento do Responsável</label><br>
                    <label><input type="checkbox" name="comp_endereco" value="1"> Comprovante de Endereço</label><br>
                    <label><input type="checkbox" name="doador_medula" value="1"> Doador de Medula</label><br>
                    <label><input type="checkbox" name="doador_sangue" value="1"> Doador de Sangue</label><br>
                </div>
   
                <div class="form-group">
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>

    @include('app.layouts._partials.rodape')
</body>
</html>
