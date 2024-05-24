<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo - GEMS</title>
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

        header img {
            height: 50px;
            vertical-align: middle;
        }

        header h1 {
            display: inline;
            margin-left: 10px;
            vertical-align: middle;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        nav ul li a:hover {
            text-decoration: underline;
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
            color: #003366;
        }

        .buttons {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .buttons a {
            padding: 10px 20px;
            margin: 0 10px;
            color: white;
            background-color: #003366;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .buttons a:hover {
            background-color: #002244;
        }

        .calendar {
            max-width: 600px;
            margin: 20px auto;
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
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <h1>GEMS</h1>
        <nav>
            <ul>
                <li><a href="{{ route('app.sair') }}">Sair</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="content">
        <div class="form-box">
            <h2>Bem-vindo ao GEMS</h2>
            <div class="buttons">
                <a href="{{ route('app.aluno') }}">Aluno</a>
                <a href="{{ route('app.passivo') }}">Passivo</a>
            </div>
            <div class="calendar">
                <iframe src="https://calendar.google.com/calendar/embed?src=pt.brazilian%23holiday%40group.v.calendar.google.com&ctz=America%2FSao_Paulo" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </div>
    
    <footer>
        <p>© 2024 GEMS. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
