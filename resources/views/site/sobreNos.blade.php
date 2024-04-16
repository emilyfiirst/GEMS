<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
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
        .content {
            background-color: #e6f3ff;
            padding: 20px;
            text-align: center;
        }
        .bold {
            font-weight: bold;
        }
        footer {
            background-color: #003366;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .login-button {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 10px; 
            cursor: pointer;
            transition: background-color 0.3s;
            font-family: Arial, sans-serif;
            font-weight: bold;
        }
        .login-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <h1>GEMS</h1>
        <button class="login-button" onclick="window.location.href='{{ route('site.login') }}'">Login</button>
    </header>

    <div class="content">
        <p><span class="bold">Emily Fiirst</span> e <span class="bold">Liliane Shimizo</span> - Estudantes de Sistemas de Informação e desenvolvedoras do projeto GEMS</p>
    </div>

    <footer>
        <p>© 2024 GEMS. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
