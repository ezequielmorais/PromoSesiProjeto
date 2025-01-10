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
                <input style="height: 100px" type="text" id="descricao" name="descricao">
            </div class="form-group">

            <div style="margin-top: 20px;" class="form-group">
                <span class="form-label sub-titulo"><label for="local">Local do evento</label></span>
                <label class="label-info">Insira o local do evento</label>
                <input type="text" id="local" name="local">
            </div>

            <div style="margin-top: 20px">
                <div class="painel-data">
                    <div class="form-group">
                        <span class="form-label sub-titulo-evento"><label for="publico" for="empresarial">Tipo de público</label></span>
                        <label class="label-info">Insira o público do evento</label>
                        <div style="display: flex"><input class="input-radio" type="radio" id="publico" name="publico"><span style="margin-left: 0.4rem;">Público</span></div>
                        <div style="display: flex"><input class="input-radio" type="radio" id="empresarial" name="empresarial"><span style="margin-left: 0.4rem;">Empresarial</span></div>
                    </div>
                    <div class="form-group">
                        <span class="form-label sub-titulo-evento"><label for="tipoevento">Tipo do evento</label></span>
                        <label class="label-info-eventos">Insira o tipo do evento</label>
                        <input type="text" id="tipoevento" name="tipoevento">
                    </div>
                </div>
                <div class="painel-data">
                    <div class="form-group">
                        <span class="form-label sub-titulo-evento"><label for="sim" for="nao">Evento é recorrente ?</label></span>
                        <label class="label-info-eventos">Insira o público do evento</label>
                        <div style="display: flex"><input class="input-radio" type="radio" id="sim" name="sim"><span style="margin-left: 0.4rem;" for="sim">Sim </span></div>
                        <div style="display: flex"><input class="input-radio" type="radio" id="não" name="não"><span style="margin-left: 0.4rem;" for="nao">Não</span></div>
                    </div>
                    <div class="form-group">
                        <span class="form-label sub-titulo-evento"><label for="sim" for="nao">Dias de evento</label></span>
                        <label class="label-info-eventos">Selecione os dias que ocorrem os eventos</label>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form action="" class="col-forms">
        <div class="painel-eventos">
            <div class="form-group">
                <span class="form-label sub-titulo"><label>Imagem</label></span>
                <label class="label-info">Insira o banner do evento</label>
                <input type="file" style="height: 200px;">
                <p>A dimensão recomendada é de X por X</p>
            </div>

            <div class="painel-data">
                <div class="form-group">
                    <span class="form-label sub-titulo-evento"><label>Data de início</label></span>
                    <label class="label-info">Insira o período de ocorrência do evento</label>
                    <input type="date">
                </div>
                <div class="form-group">
                    <span class="form-label sub-titulo-evento"><label>Data de término</label></span>
                    <label class="label-info">Insira o período de ocorrência do evento</label>
                    <input type="time">
                </div>
            </div>

            <div class="painel-data">
                <div class="form-group">
                    <span class="form-label sub-titulo-evento"><label>Hora de inicío</label></span>
                    <label class="label-info">Insira o período de ocorrência do evento</label>
                    <input type="time">
                </div>
                <div class="form-group">
                    <span class="form-label sub-titulo-evento"><label>Hora de término</label></span>
                    <label class="label-info-eventos">Insira o período de ocorrência do evento</label>
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