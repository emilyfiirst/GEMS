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
        header {
            background-color: #003366; 
            color: white;
            padding: 20px;
            text-align: center;
        }
        header img {
            height: 50px;
            vertical-align: middle;
        }
        header h1 {
            display: inline;
            margin-left: 10px;
            vertical-align: middle;
        }
        label {
            font-weight: bold;
            text-align: left;
        }

        .content {
            background-color: #e6f3ff;
            padding: 20px;
            text-align: center;
            flex-grow: 1; /* Faz com que a coluna de conteúdo ocupe o espaço restante */
        }
        .bold {
            font-weight: bold;
        }
        footer {
            background-color: #003366;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 10px;
            width: 80%;
            margin: 0 auto;
            display: flex;
            align-items: center;
        }

        .form-group label {
            flex: 1; /* Ocupa o máximo de espaço possível */
            max-width: 200px; /* Define uma largura máxima para o rótulo */
        }

        .form-group input[type="checkbox"] {
            margin-left: 10px; /* Adiciona um espaço entre o texto e a caixa de seleção */
            flex: 0 0 auto; /* Não cresce nem encolhe, mantendo seu tamanho original */
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
    <header>
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <h1>GEMS</h1>
    </header>

    <div class="content">
        <div class="form-box">
            <h2>Cadastro de Aluno</h2>
            <form action="#" method="post">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="cod_sgde">Cod SGDE:</label>
                    <input type="text" id="cod_sgde" name="cod_sgde" required>
                </div>
                <div class="form-group">
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" id="data_nascimento" name="data_nascimento" required>
                </div>
                <div class="form-group">
                    <label for="ativo">Ativo:</label>
                    <input type="checkbox" id="ativo" name="ativo" value="1">
                </div>
                <div class="form-group">
                    <label for="numero_pasta">Número Pasta:</label>
                    <input type="number" id="numero_pasta" name="numero_pasta" required>
                </div>
                <div class="form-group">
                    <label>Documentos:</label><br>
                    <label><input type="checkbox" name="documentos[]" value="CertNascimento"> Certidão de Nascimento</label><br>
                    <label><input type="checkbox" name="documentos[]" value="Historico"> Histórico</label><br>
                    <label><input type="checkbox" name="documentos[]" value="SUS"> Cartão SUS</label><br>
                    <label><input type="checkbox" name="documentos[]" value="DocResponsavel"> Documento do Responsável</label><br>
                    <label><input type="checkbox" name="documentos[]" value="CompEndereco"> Comprovante de Endereço</label><br>
                    <label><input type="checkbox" name="documentos[]" value="DoadorMedula"> Doador de Medula</label><br>
                    <label><input type="checkbox" name="documentos[]" value="DoadorSangue"> Doador de Sangue</label><br>
                </div>
   
                <div class="form-group">
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>

    <footer>
        <p>© 2024 GEMS. Todos os direitos reservados.</p>
    </footer>
</body>
</html>