@extends('template.template')
@section('title', 'cadastro_dados')
@section('Conteudo')

<body>
    <div>
        <h2>Cadastro de Dados Pessoais</h2>
    </div>
    <div class="conteiner_cadastro">
        <form class="form-grid">
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <label class="description">Insira o nome do participante</label>
                <input type="descricao-nome" id="nome" name="nome">
            </div>

            <div class="form-group">
                <label for="cpf">CPF</label>
                <label class="description">Adicione uma breve descrição sobre o nome</label>
                <input type="text" id="cpf" maxlenght="14">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <label class="description">Insira o e-mail do participante</label>
                <input type="email" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <label class="description">Insira o telefone do participante</label>
                <input type="text" id="telefone" name="telefone">
            </div>

            <div class="form-group">
                <label for="usuario">Usuário</label>
                <label class="description">Insira o nome de usuário desejado</label>
                <input type="text" id="usuario" name="usuario">
            </div>

            <div class="form-group">
                <label for="senha">Senha</label>
                <label class="description">Crie uma senha segura</label>
                <input type="password" id="senha" name="senha">
            </div>

            <div class="form-group">
                <label for="confirmacao-senha">Confirmação de Senha</label>
                <label class="description">Repita a senha criada</label>
                <input type="password" id="confirmacao-senha" name="confirmacao-senha">
            </div>

            <div class="form-group">
                <label for="data-nascimento">Data de Nascimento</label>
                <label class="description">Insira a data de nascimento do participante</label>
                <input type="date" id="data-nascimento" name="data-nascimento">
            </div>
            
            <div class="conteiner_cadastro2">
            <input type="text" id="campo_pequisa" placeholder="Pesquisar empresas vinculadas">
            
            </div>

        </form>
    </div>

</body>
@endsection