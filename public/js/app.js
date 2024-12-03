document.addEventListener('DOMContentLoaded', function() {
    let empresaCounter = 1;  // Contador para acompanhar a ordem das empresas

    // Função que cria um novo campo de "Empresa Vinculada"
    function addEmpresaVinculada(valorPesquisa) {
        if (empresaCounter <= 3) {
            const empresaDiv = document.createElement('div');
            empresaDiv.classList.add('empresa-container');
            empresaDiv.id = 'empresa-' + empresaCounter;

            // Adiciona o label com a numeração
            const label = document.createElement('label');
            label.textContent = 'Empresa Vinculada nº ' + empresaCounter;

            // Cria o input com o valor da pesquisa
            const input = document.createElement('input');
            input.type = 'text';
            input.value = valorPesquisa;
            input.classList.add('form-group', 'input');

            // Cria o botão de remover
            const removeButton = document.createElement('button');
            removeButton.textContent = '-';
            removeButton.classList.add('btn-remover');
            removeButton.onclick = function() {
                empresaDiv.remove();
                empresaCounter--;  // Decrementa o contador quando um campo for removido
            };

            empresaDiv.appendChild(label);
            empresaDiv.appendChild(input);
            empresaDiv.appendChild(removeButton);
            
            // Adiciona o novo campo de empresa vinculada na div com id 'empresas-vinculadas'
            document.getElementById('empresas-vinculadas').appendChild(empresaDiv);

            empresaCounter++;  // Incrementa o contador quando um novo campo for adicionado
        }
    }

    // Adicionando o listener ao botão de adicionar empresa
    const btnAddEmpresa = document.getElementById('btn-add-empresa');
    if (btnAddEmpresa) {
        btnAddEmpresa.addEventListener('click', function() {
            const pesquisaValue = document.getElementById('campo_pequisa').value.trim();

            // Verifica se o campo de pesquisa não está vazio
            if (pesquisaValue) {
                addEmpresaVinculada(pesquisaValue);
                document.getElementById('campo_pequisa').value = ''; // Limpa o campo pesquisa após adicionar
            } else {
                // Exibe um alerta caso o campo de pesquisa esteja vazio
                alert("Por favor, preencha o campo de pesquisa antes de adicionar uma empresa vinculada.");
            }
        });
    }
});
