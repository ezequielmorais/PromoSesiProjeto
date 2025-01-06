document.addEventListener('DOMContentLoaded', function() {
    let empresaCounter = 1;  // Contador para acompanhar a ordem das empresas

    // Função para atualizar a numeração das empresas
    function atualizarContagem() {
        const empresas = document.querySelectorAll('.novo-form-group');
        empresas.forEach((empresaDiv, index) => {
            const titulo = empresaDiv.querySelector('label');
            titulo.textContent = 'Empresa Vinculada nº ' + (index + 1);
        });
        empresaCounter = empresas.length + 1;  // Atualiza o contador baseado no número de empresas existentes
    }

    // Função que cria a nova estrutura de "Empresa Vinculada"
    function addEmpresaVinculada(valorPesquisa) {
        const novoContainer = document.getElementById('novo-container');
        
        if (empresaCounter <= 3) {
            // Cria a nova div para o container
            const empresaDiv = document.createElement('div');
            empresaDiv.classList.add('novo-form-group');
            
            // Cria o título da empresa
            const titulo = document.createElement('label');
            titulo.textContent = 'Empresa Vinculada nº ' + empresaCounter;
            empresaDiv.appendChild(titulo);

            const pesquisaContainer = document.createElement('div');
            pesquisaContainer.classList.add('pesquisa-container');
            
            // Cria o campo de pesquisa
            const input = document.createElement('input');
            input.type = 'text';
            input.value = valorPesquisa;
            input.classList.add('form-group', 'input');
            pesquisaContainer.appendChild(input);
            
            // Cria o botão de remover
            const removeButton = document.createElement('button');
            removeButton.textContent = '-';
            removeButton.classList.add('btn-remover');
            removeButton.onclick = function() {
                empresaDiv.remove();
                atualizarContagem();  // Atualiza a contagem das empresas após remoção
            };
            pesquisaContainer.appendChild(removeButton);

            empresaDiv.appendChild(pesquisaContainer);
            
            // Adiciona o novo campo de empresa vinculada no container
            novoContainer.appendChild(empresaDiv);
            
            // Atualiza a contagem das empresas
            atualizarContagem();
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
