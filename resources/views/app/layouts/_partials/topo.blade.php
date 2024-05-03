<div class="topo">
    <title>GEMS</title>
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
    </style>
</head>
    <header>
    <img src="{{ asset('images/logo.png') }}" alt="Logo">
    <h1>GEMS</h1>
    <nav>
        <ul>
            <li><a href="{{ route('app.home') }}">Home</a></li>
            <li><a href="{{ route('app.aluno') }}"">Aluno</a></li>
            <li><a href="{{ route('app.passivo') }}">Passivo</a></li>
            <li><a href="{{ route('app.sair') }}">Sair</a></li>
        </ul>
    </nav>
</header>

</div>