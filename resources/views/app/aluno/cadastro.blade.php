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

.form-group input[type="checkbox"] {
    width: auto;
    margin-left: 10px;
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

.form-group .documentos label {
    display: block;
    margin-bottom: 5px;
}

footer {
    background-color: #003366;
    color: white;
    text-align: center;
    padding: 10px;
}

/* Estilo para os radio buttons e rótulos */
.form-group input[type="radio"] {
    display: none;
}

/* Estilo para as etiquetas dos radio buttons */
.form-group label {
    display: inline-block;
    margin-right: 10px;
    cursor: pointer;
}

/* Estilo para os radio buttons marcados */
.form-group input[type="radio"]:checked + label {
    font-weight: bold;
    color: #FF0000; /* cor vermelha */
}

    </style>
    
</head>
<body>
    <header>
        @include('app.layouts._partials.topo')
    </header>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.aluno') }}">Consultar</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="form-box">
            <h2>{{ isset($aluno) ? 'Editar Aluno' : 'Cadastro de Aluno' }}</h2>
            <form action="{{ route('app.aluno.cadastro') }}" method="post">
                <input type="hidden" name="id" value="{{ $aluno->id ?? ''}}" >
                @csrf
                
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="{{ $aluno->nome ?? old('nome') }}" required>
                </div>
               
                <div class="form-group">
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" id="data_nascimento" name="data_nascimento" value="{{ $aluno->data_nascimento ?? old('data_nascimento') }}" required>
                </div>
                <div class="form-group">
                    <label for="ativo">Status:</label>
                    <input type="radio" id="ativo" name="ativo" value="1" {{ (isset($aluno) && $aluno->ativo == 1) || old('ativo') == 1 ? 'checked' : '' }}>
                    <label for="ativo">Ativo</label>
                    <input type="radio" id="inativo" name="ativo" value="0" {{ (isset($aluno) && $aluno->ativo == 0) || old('ativo') == 0 ? 'checked' : '' }}>
                    <label for="inativo">Passivo</label>
                </div>

                <div class="form-group">
                    <label for="numero_pasta">Número Pasta:</label>
                    <input type="number" id="numero_pasta" name="numero_pasta" value="{{ $aluno->numero_pasta ?? old('numero_pasta') }}" required>
                </div>
                <div class="form-group documentos">
                    <label>Documentos:</label>
                    <label>
                    <input type="hidden" name="certidao_nascimento" value="0"> 
                    <input type="checkbox" name="certidao_nascimento" value="1" {{ old('certidao_nascimento', $aluno->certidao_nascimento ?? false) ? 'checked' : '' }}> Certidão de Nascimento</label>
                    <label>
                    <input type="hidden" name="historico" value="0">
                    <input type="checkbox" name="historico" value="1" {{ old('historico', $aluno->historico ?? false) ? 'checked' : '' }}> Histórico</label>
                    <label>
                    <input type="hidden" name="cartao_sus" value="0">
                    <input type="checkbox" name="cartao_sus" value="1" {{ old('cartao_sus', $aluno->cartao_sus ?? false) ? 'checked' : '' }}> Cartão SUS</label>
                    <label>
                    <input type="hidden" name="doc_responsavel" value="0">
                    <input type="checkbox" name="doc_responsavel" value="1" {{ old('doc_responsavel', $aluno->doc_responsavel ?? false) ? 'checked' : '' }}> Documento do Responsável</label>
                    <label>
                    <input type="hidden" name="comp_endereco" value="0">
                    <input type="checkbox" name="comp_endereco" value="1" {{ old('comp_endereco', $aluno->comp_endereco ?? false) ? 'checked' : '' }}> Comprovante de Endereço</label>
                    <label>
                    <input type="hidden" name="doador_medula" value="0">
                    <input type="checkbox" name="doador_medula" value="1" {{ old('doador_medula', $aluno->doador_medula ?? false) ? 'checked' : '' }}> Doador de Medula</label>
                    <label>
                    <input type="hidden" name="doador_sangue" value="0">
                    <input type="checkbox" name="doador_sangue" value="1" {{ old('doador_sangue', $aluno->doador_sangue ?? false) ? 'checked' : '' }}> Doador de Sangue</label>

                </div>
                <div class="form-group">
                    <button type="submit">{{ isset($aluno) ? 'Editar' : 'Cadastrar' }}</button>
                </div>
            </form>
        </div>
    </div>

    <footer>
        @include('app.layouts._partials.rodape')
    </footer>
</body>
</html>
