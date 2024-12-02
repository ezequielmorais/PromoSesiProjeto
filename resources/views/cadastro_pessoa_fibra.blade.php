@extends('template.template')
@section('title', 'Cadastro de pessoa FIBRA')
@section('Conteudo')

<div class="div-principal">
    <div class="ctn-titulo">Cadastro de dados pessoais - FIBRA SEGURANÇA</div>

    <div class="painel">
        <div class="mb-3">
            <label for="login-usuario" class="col-forms sub-titulo">Login do usuário</label>
            <span>Login do usuário dentro do FIBRA SEGURANÇA</span>
            
            <div class="botoes-alinhados mt-2">
                <input id="login-usuario" class="form-control">
                <button class="ctn-botoes-verde">@if (isset($usuario)) Pesquisar Novamente @else Pesquisar

                    @endif</button>
            </div>
        </div>
    </div>

    <div class="painel">
        <div class="mb-3">
            <label class="form-label sub-titulo">Usuário selecionado</label>
            <input class="form-control" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label sub-titulo">Nome</label>
            <input class="form-control" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label sub-titulo">Perfil</label>
            <select class="form-control" required>
                <option>Teste 1</option>
                <option>Teste 2</option>
            </select>
        </div>
        
        <div class="ctn-botoes mt-4">
            <button class="ctn-botoes-verde">Enviar</button>
            <button class="ctn-botoes-verde">Salvar e cadastrar novo</button>
        </div>
    </div>

</div>


@endsection