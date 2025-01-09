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
                <span class="form-label sub-titulo"><label for="nome">Nome do evento</label></span>
                <label class="label-info">Insira o nome do evento</label>
                <input type="text" id="nome" name="nome">
            </div>

            <div class="form-group">
                <span class="form-label sub-titulo"><label for="descricao">Descrição</label></span>
                <label class="label-info">Insira a descrição do evento</label>
                <input type="text" id="descricao" name="descricao">
            </div class="form-group">

            <div class="form-group">
                <span class="form-label sub-titulo"><label for="local">Local do evento</label></span>
                <label class="label-info">Insira o local do evento</label>
                <input type="text" id="local" name="local">
            </div>
            
            <div class="painel-data">
                <div class="form-group">
                    <span class="form-label sub-titulo"><label for="publico" for="empresarial">Tipo de público do evento</label></span>
                    <label class="label-info">Insira o público do evento</label>
                    <input class="input-radio" type="radio" id="publico" name="publico"> <span>Público</span>
                    <input class="input-radio" type="radio" id="empresarial" name="empresarial"><span>Empresarial</span>
                </div>
                
                    <div class="form-group">
                        <span class="form-label sub-titulo"><label for="tipoevento">Tipo do evento</label></span>
                        <label class="label-info">Insira o tipo do evento</label>
                        <input type="text" id="tipoevento" name="tipoevento">
                    </div>
            </div>
            
            <div class="form-group">
                <span class="form-label sub-titulo"><label for="sim" for="nao">O evento é recorrente</label></span>
                <label class="label-info">Insira o público do evento</label>
                <input class="input-radio" type="radio" id="sim" name="sim"><span>Sim </span>
                <input class="input-radio" type="radio" id="não" name="não"><span>Não</span>
            </div>
        </div>
    </form>
    <form action="" class="col-forms">
        <div class="painel-eventos">
            <div class="form-group">
                <span class="form-label sub-titulo"><label >Imagem</label></span>
                <label class="label-info">Insira o banner do evento</label>
                <input type="file" style="height: 270px;">
                <p>A dimensão recomendada é de X por X</p>
            </div>

            <div class="painel-data">
                <div class="form-group">
                    <span class="form-label sub-titulo"><label >Data de início</label></span>
                    <label class="label-info">Insira o período de ocorrência do evento</label>
                    <input type="date">
                </div>
                <div class="form-group">
                    <span class="form-label sub-titulo"><label >Data de término</label></span>
                    <label class="label-info">Insira o período de ocorrência do evento</label>
                    <input type="time">
                </div>
            </div>

            <div class="painel-data">
                <div class="form-group">
                    <span class="form-label sub-titulo"><label >Hora de inicío</label></span>
                    <label class="label-info">Insira o período de ocorrência do evento</label>
                    <input type="time">
                </div>
                <div class="form-group">
                    <span class="form-label sub-titulo"><label >Hora de término</label></span>
                    <label class="label-info">Insira o período de ocorrência do evento</label>
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