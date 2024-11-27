@extends('template.template')
@section('title', 'Cadastro de pessoa FIBRA')
@section('Conteudo')

<div class="div-principal">
    <div class="ctn-titulo">Cadastro de dados pessoais - FIBRA SEGURANÇA</div>

    <div class="painel">
        <div class="mb-3">
            <label class="form-label">Login do usuário</label>
            <div class="botoes-alinhados">
                <input class="form-control" placeholder="Login do usuário dentro do FIBRA SEGURANÇA" name="Usuário">
                <button class="ctn-botoes-cadastrar">@if (isset($usuario)) Pesquisar Novamente @else Pesquisar

                    @endif</button>
            </div>
        </div>
    </div>

    <div class="painel">
        <div class="mb-3">
            <label class="form-label">Usuário selecionado</label>
            <input class="form-control" name="Usuário" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input class="form-control" name="Nome" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Perfil</label>
            <select class="form-control" required>
                <option>Teste 1</option>
                <option>Teste 2</option>
            </select>
            
        </div>
        
        <div class="ctn-botoes mt-4">
            <button class="ctn-botoes-cadastrar">Enviar</button>
            <button class="ctn-botoes-cadastrar">Salvar e cadastrar novo</button>
        </div>
    </div>

</div>


@endsection