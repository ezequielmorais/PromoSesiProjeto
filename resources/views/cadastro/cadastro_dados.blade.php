@extends('template.template')
@section('title', 'cadastro_dados')
@section('Conteudo')

<body>
    <div class="container">
        <div class="ctn-titulo container">
            <h2>Cadastro de Dados Pessoais</h2>
        </div>
        <form class="col-forms">
            <div class="painel shadow" id="painel-flex-column">
                <div class="ctn" id="container_cadastro_usuario">
                    <div class="form-group">
                        <span class="titulo_bolder"><label for="nome">Nome Completo</label></span>
                        <label class="form-group label">Insira o nome do participante</label>
                        <input type="nome" id="nome" name="nome">
                    </div>
                    <div class="form-group">
                        <span class="titulo_bolder"><label for="cpf">CPF</label></span>
                        <label class="form-group label">Adicione uma breve descrição sobre o nome</label>
                        <input name="cpf" type="text" id="cpf" maxlenght="14" oninput="aplicarMascaraCPF(this)"
                            onblur="validarAoTerminar(this)">
                    </div>
                    <div class="form-group">
                        <span class="titulo_bolder"><label for="email">Email</label></span>
                        <label class="form-group label">Insira o e-mail do participante</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <span class="titulo_bolder"><label for="telefone">Telefone</label></span>
                        <label class="form-group label">Insira o telefone do participante</label>
                        <input type="text" id="telefone" name="telefone">
                    </div>
                </div>
                <div class="ctn" id="container_cadastro_usuario">
                    <div class="form-group">
                        <span class="titulo_bolder"><label for="usuario">Usuário</label></span>
                        <label class="form-group label">Insira o nome de usuário desejado</label>
                        <input type="text" id="usuario" name="usuario">
                    </div>
                    <div class="form-group">
                        <span class="titulo_bolder"><label for="senha">Senha</label></span>
                        <label class="form-group label">Crie uma senha segura</label>
                        <input type="password" id="senha" name="senha">
                    </div>
                    <div class="form-group">
                        <span class="titulo_bolder"><label for="confirmacao-senha">Confirmação de Senha</label></span>
                        <label class="form-group label">Repita a senha criada</label>
                        <input type="password" id="confirmacao-senha" name="confirmacao-senha">
                    </div>
                    <div class="form-group">
                        <span class="titulo_bolder"><label for="data-nascimento">Data de Nascimento</label></span>
                        <label class="form-group label">Insira a data de nascimento do participante</label>
                        <input type="date" id="data-nascimento" name="data-nascimento">
                    </div>
                </div>
            </div>

        </form>

        <div class="ctn-titulo-h2 container">
            <h2>Empresas Vinculadas</h2>
        </div>
        <form class="col-forms">
            <div class="painel shadow">
                <div class="mb-3">
    <input type="text" class="form-group input" id="campo_pequisa" placeholder="Pesquisar empresas vinculadas">
    <button type="button" class="btn" id="btn-add-empresa">+</button>
</div>

<div id="empresas-vinculadas"></div>
            <!-- botoes -->
                <div class="ctn-botoes">
                    <button type="submit" class="ctn-botoes-cadastrar">Salvar</button>
                    <button type="button" class="ctn-botoes-cancelar">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</body>


<script>
    // Função para aplicar a máscara ao CPF
    function aplicarMascaraCPF(cpfInput) {
        let cpf = cpfInput.value;

        cpf = cpf.replace(/\D/g, ""); // Remove todos os caracteres não numéricos
        cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2"); // Aplica o primeiro ponto
        cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2"); // Aplica o segundo ponto
        cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2"); // Aplica o traço

        cpfInput.value = cpf;
    }

    // Função para validar o CPF
    function validarCPF(cpfInput) {
        const cpf = cpfInput.value.replace(/\D/g, ""); // Remove os caracteres não numéricos

        if (cpf.length !== 11 || /^(\d)\1+$/.test(cpf)) {
            return false; // CPF inválido se todos os números forem iguais ou se não tiver 11 dígitos
        }

        // Cálculo do primeiro dígito verificador
        let soma = 0;
        for (let i = 0; i < 9; i++) {
            soma += parseInt(cpf.charAt(i)) * (10 - i);
        }
        let resto = (soma * 10) % 11;
        if (resto === 10 || resto === 11) resto = 0;
        if (resto !== parseInt(cpf.charAt(9))) return false;

        // Cálculo do segundo dígito verificador
        soma = 0;
        for (let i = 0; i < 10; i++) {
            soma += parseInt(cpf.charAt(i)) * (11 - i);
        }
        resto = (soma * 10) % 11;
        if (resto === 10 || resto === 11) resto = 0;
        if (resto !== parseInt(cpf.charAt(10))) return false;

        return true;
    }

    // Função para exibir a mensagem de validação
    function validarAoTerminar(cpfInput) {
        const mensagem = document.getElementById("mensagem");

        if (cpfInput.value === "") {
            mensagem.textContent = ""; // Limpa a mensagem se o campo estiver vazio
            return;
        }

        if (validarCPF(cpfInput)) {
            mensagem.textContent = "CPF válido!";
            mensagem.className = "success";
        } else {
            mensagem.textContent = "CPF inválido!";
            mensagem.className = "error";
        }
    }
</script>
@endsection