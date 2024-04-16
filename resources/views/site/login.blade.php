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
            width: 100%;
            padding: 10px;
            background-color: #003366;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #002244;
        }
    </style>
</head>
<body>
    <header>
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <h1>GEMS</h1>
    </header>

    <div class="content">
        <div class="login-form">
            <h2>Login</h2>
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Senha:</label>
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
