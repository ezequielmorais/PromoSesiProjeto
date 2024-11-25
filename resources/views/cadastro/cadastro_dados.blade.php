@extends('template.template')
@section('title', 'cadastro_dados')
@section('Conteudo')

<body>
         <div class="titulo-container-h2 container">
           <h2 >Cadastro de Dados Pessoais</h2>
        </div>
        <form class="form-grid">
            <div class="container_cadastro_usuario container shadow">
                <div class="agrupamento">
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
            </div>

            <div class="agrupamento">
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
            </div>
             
            
        </div>
    </form>
    
    <div class="titulo-container-h2 container">
        <h2 >Empresas Vinculadas</h2>
        </div>
    <form class="form-grid">
        <div class="containar_cadastro_usuario_2 container">
            <input type="text" id="campo_pequisa" placeholder="Pesquisar empresas vinculadas">
            <button class="btn-add">+</button>
            <label for="Empresa Vinculada">Empresa Vinculada</label>
            <label class="description">Insira a empresa vinculada nº 1</label>
            <input type="text" id="empresa_vinculada">
            
            <div class="button-group">
                <button type="submit" class="btn-salvar">Salvar</button>
                <button type="button" class="btn-cancelar">Cancelar</button>
            </div>
        </div>
    </form>
</body>
<script>
function TestaCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
  if (strCPF == "00000000000") return false;

  for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
  Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;

  Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;
}
var strCPF = "12345678909";
alert(TestaCPF(strCPF));
</script>
@endsection