@extends('template.template')
@section('title', 'Cadastro de Eventos')
@section('Conteudo')

<div>
    <h2 class="ctn-titulo">Cadasto de Eventos</h2>
</div>
<div class="container-eventos">

    <form class="col-forms">
        <div class="painel-eventos">
            <div class="form-group">
                <span class="titulo_bolder"><label for="nome">Nome do evento</label></span>
                <label class="form-group label">Insira o nome do evento</label>
                <input type="text" id="nome" name="nome">
            </div>

            <div class="form-group">
                <span class="titulo_bolder"><label for="descricao">Descrição</label></span>
                <label class="form-group label">Insira a descrição do evento</label>
                <input type="text" id="descricao" name="descricao">
            </div class="form-group">

            <div class="form-group">
                <span class="titulo_bolder"><label for="local">Local do evento</label></span>
                <label class="form-group label">Insira o local do evento</label>
                <input type="text" id="local" name="local">
            </div>
            
            <div class="painel-data">
                <div class="form-group">
                    <span class="titulo_bolder"><label for="publico" for="empresarial">Tipo de público do evento</label></span>
                    <label class="form-group label">Insira o público do evento</label>
                    <input type="radio" id="publico" name="publico"> Público
                    <input type="radio" id="empresarial" name="empresarial">Empresarial
                </div>
                
                    <div class="form-group">
                        <span class="titulo_bolder"><label for="tipoevento">Tipo do evento</label></span>
                        <label class="form-group label">Insira o tipo do evento</label>
                        <input type="text" id="tipoevento" name="tipoevento">
                    </div>
            </div>
            
            <div class="form-group">
                <span class="titulo_bolder"><label for="sim" for="nao">O evento é recorrente</label></span>
                <label class="form-group label">Insira o público do evento</label>
                <input type="radio" id="sim" name="sim">Sim 
                <input type="radio" id="não" name="não">Não
            </div>
        </div>
    </form>
    <form action="" class="col-forms">
        <div class="painel-eventos">
            <div class="form-group">
                <span class="titulo_bolder"><label >Imagem</label></span>
                <label class="form-group label">Insira o banner do evento</label>
                <input type="file" style="height: 270px;">
                <p>A dimensão recomendada é de X por X</p>
            </div>

            <div class="painel-data">
                <div class="form-group">
                    <span class="titulo_bolder"><label >Data de início</label></span>
                    <label class="form-group label">Insira o período de ocorrência do evento</label>
                    <input type="date">
                </div>
                <div class="form-group">
                    <span class="titulo_bolder"><label >Data de término</label></span>
                    <label class="form-group label">Insira o período de ocorrência do evento</label>
                    <input type="time">
                </div>
            </div>

            <div class="painel-data">
                <div class="form-group">
                    <span class="titulo_bolder"><label >Hora de inicío</label></span>
                    <label class="form-group label">Insira o período de ocorrência do evento</label>
                    <input type="time">
                </div>
                <div class="form-group">
                    <span class="titulo_bolder"><label >Hora de término</label></span>
                    <label class="form-group label">Insira o período de ocorrência do evento</label>
                    <input type="time">
                </div>
            </div>
        </div>
    </form>

</div>
<div class="ctn-botoes">
    <button type="submit" class="ctn-botoes-cadastrar">Salvar</button>
    <button type="button" class="ctn-botoes-cancelar">Cancelar</button>
</div>
@endsection