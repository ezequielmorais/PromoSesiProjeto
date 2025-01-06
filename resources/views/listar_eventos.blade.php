@extends('template.template')
@section('title', 'Listar eventos')
@section('Conteudo')

<div class="div-principal">
    <div class="ctn-titulo">Eventos</div>

    <div>
        <table id="tabelaListarEventos">
            <thead class="thead-tabela">
                <tr>
                    <th>Nome</th>
                    <th>Data</th>
                    <th>Organizador</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 3</td>
                    <td>Row 1 Data 4</td>
                    <td>
                        <div class="ctn-botoes-tabela">
                            <button class="ctn-botoes-verde-tabela">Editar</button>
                            <button class="ctn-botoes-vermelho-tabela">Desativar</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                    <td>Row 2 Data 3</td>
                    <td>Row 2 Data 4</td>
                    <td>
                        <div class="ctn-botoes-tabela">
                            <button class="ctn-botoes-verde-tabela">Editar</button>
                            <button class="ctn-botoes-vermelho-tabela">Desativar</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
            $('#tabelaListarEventos').DataTable({
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json'
                }
            });
        });

</script>

@endsection