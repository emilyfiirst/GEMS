<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .login-form {
            margin: 0 auto;
            width: 300px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
            width: 80%; 
            margin: 0 auto; 
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
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
        <!-- Exibir mensagem de boas-vindas se o usuário estiver autenticado -->
        @auth
            <p>Bem-vindo, {{ Auth::user()->name }}!</p>
        @endauth
    </header>

    <div class="content">
        <div class="login-form">
            <h2>Login</h2>
            <form action="{{ route('login') }}" method="POST">
            @csrf 
                <div class="form-group">
                    <label for="username">Nome de Usuário</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit">Entrar</button>
                </div>
            </form>


        </div>
    </div>

    <footer>
        <p>© 2024 GEMS. Todos os direitos reservados.</p>
    </footer>
</body>
</html>