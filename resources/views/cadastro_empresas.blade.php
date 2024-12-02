@extends('template.template')
@section('title', 'Cadastro de empresa')
@section('Conteudo')

<div class="div-principal">
    <div class="ctn-titulo">Cadastro de empresa</div>

    <div class="painel">
        <div class="mb-3">
            <label class="form-label">CNPJ</label>
            <div class="botoes-alinhados">
                <input class="form-control" placeholder="Insira o CNPJ da empresa" name="CPNJ">
                <button class="ctn-botoes-cadastrar">@if (isset($usuario)) Pesquisar Novamente @else Pesquisar

                    @endif</button>
            </div>
        </div>
    </div>

    <div class="painel">
        <div class="mb-3">
            <label class="form-label">CNPJ selecionado</label>
            <input class="form-control" name="CPNJ" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input class="form-control" name="Nome" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Razão Social</label>
            <input class="form-control" name="Razao Social" readonly>
        </div>
        
        <div class="ctn-botoes mt-4">
            <button class="ctn-botoes-cadastrar">Enviar</button>
            <button class="ctn-botoes-cadastrar">Salvar e cadastrar novo</button>
        </div>
    </div>

</div>

<!-- <script>
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
</script> -->


@endsection