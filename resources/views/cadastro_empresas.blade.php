@extends('template.template')
@section('title', 'Cadastro de empresa')
@section('Conteudo')

<div>
    <div class="ctn-titulo">Cadastro de empresa</div>
    <div>
        <div class="mb-3">
            <label class="form-label">CNPJ</label>
            <input class="form-control" placeholder="Insira o CNPJ da empresa" id="identification">
        </div>
    </div>
    
    <div class="container ctn-botoes">
        <button class="btn ctn-botoes-cadastrar">Pesquisar</button>
    </div>
    
    <!-- <div class="col-forms">
        <div>
            <div class="mb-3">
                <label class="form-label">Nome da empresa</label>
                <input class="form-control" placeholder="Insira o nome da empresa">
            </div>

            <div class="mb-3">
                <label class="form-label">CNPJ</label>
                <input class="form-control" placeholder="Insira o CNPJ da empresa">
            </div>
        </div>

        <div>
            <div class="mb-3">
                <label class="form-label">Descrição</label>
                <input class="form-control" placeholder="Insira a descrição da empresa">
            </div>
        </div>

    </div>
    <div class="container ctn-botoes">
        <button class="ctn-botoes-cadastrar">Cadastrar</button>
        <button class="ctn-botoes-cancelar">Cancelar</button>
    </div> -->
</div>

<script>
    document.getElementById('identification').addEventListener('input', function(e) {
    
        let x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,3})(\d{0,3})(\d{0,4})(\d{0,2})/);
        e.target.value = !x[2] ? x[1] : x[1] + '.' + x[2] + (x[3] ? '.' : '') + x[3] + (x[4] ? '/' : x[4]) + x[4] + (x[5] ? '-' + x[5] : '');
        
        if(e.target.value.length < 15) {
            x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,3})(\d{0,2})/);
            e.target.value = !x[2] ? x[1] : x[1] + '.' + x[2] + (x[3] ? '.' : '') + x[3] + (x[4] ? '-' + x[4] : '');
        }
        
        //Caso queira pegar apenas os números use essa função para remover todos os caracteres menos os números em Javascript
        let valor = e.target.value.replace(/[^0-9]/g, '');
    });
</script>


@endsection