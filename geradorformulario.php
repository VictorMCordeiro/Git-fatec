<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Código</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .column {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .tab-content {
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Gerador de Formulários e Tabelas para CRUDs com Bootstrap 5.3.0 </h1>
        <h2 class="mb-2"> Vanessa dos Anjos Borges</h2>
        <h3 class="mb-2 mb-2">Contato: vanessa.borges2@fatec.sp.gov.br</h3>
        <!-- Abas -->
        <ul class="nav nav-tabs" id="tabMenu">
            <li class="nav-item">
                <a class="nav-link active" id="form-tab" data-bs-toggle="tab" href="#form-generator">Formulários</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="table-tab" data-bs-toggle="tab" href="#table-generator">Tabelas</a>
            </li>
        </ul>

        <!-- Conteúdo das abas -->
        <div class="tab-content">
            <!-- Gerador de Formulários -->
            <div class="tab-pane fade show active" id="form-generator">
                <div class="row">
                    <!-- Configuração dos campos -->
                    <div class="col-md-6 column">
                        <div id="field-configurator" class="p-3 border rounded">
                            <h4>Adicionar Campo</h4>
                            <div class="mb-3">
                                <label for="field-type" class="form-label">Tipo de Campo</label>
                                <select id="field-type" class="form-select">
                                    <option value="text">Texto</option>
                                    <option value="number">Número</option>
                                    <option value="date">Data</option>
                                    <option value="select">Seleção</option>
                                    <option value="textarea">Texto Longo</option>
                                    <option value="checkbox">Checkbox</option>
                                    <option value="radio">Radio</option>
                                    <option value="email">Email</option>
                                    <option value="password">Senha</option>
                                    <option value="file">Arquivo</option>
                                    <option value="hidden">Oculto</option>
                                    <option value="range">Intervalo</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="field-label" class="form-label">Label e Placeholder</label>
                                <input type="text" id="field-label" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="field-id" class="form-label">ID e Name</label>
                                <input type="text" id="field-id" class="form-control">
                            </div>
                            <div id="field-options" class="mb-3" style="display: none;">
                                <label for="select-options" class="form-label">Opções (separadas por vírgula)</label>
                                <input type="text" id="select-options" class="form-control">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" id="field-required" class="form-check-input">
                                <label for="field-required" class="form-check-label">Obrigatório (Required)</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" id="field-disabled" class="form-check-input">
                                <label for="field-disabled" class="form-check-label">Desabilitado (Disabled)</label>
                            </div>
                            <button id="add-field" class="btn btn-success">Adicionar Campo</button>
                        </div>
                    </div>

                    <!-- Pré-visualização -->
                    <div class="col-md-6 column">
                        <div class="p-3 border rounded">
                            <h4>Pré-visualização</h4>
                            <div id="form-preview" class="border p-3 bg-light"></div>
                        </div>
                    </div>
                </div>

                <!-- Gerar Código -->
                <div class="mt-4">
                    <button id="generate-code" class="btn btn-primary w-100 mb-3">Gerar Código</button>
                    <textarea id="generated-code" class="form-control" rows="10" readonly></textarea>
                    <button id="copy-form-code" class="btn btn-secondary w-100 mt-2 mb-5">Copiar Código</button>
                </div>
            </div>

            <!-- Gerador de Tabelas -->
            <div class="tab-pane fade" id="table-generator">
                <div class="p-3 border rounded">
                    <h4>Configuração da Tabela</h4>
                    <div class="mb-3">
                        <label for="table-title" class="form-label">Título da Tabela</label>
                        <input type="text" id="table-title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="table-columns" class="form-label">Colunas (separadas por vírgula)</label>
                        <input type="text" id="table-columns" class="form-control">
                    </div>
                    <button id="generate-table" class="btn btn-success">Gerar Tabela</button>
                </div>

                <!-- Pré-visualização e código da tabela -->
                <div class="mt-4">
                    <h4>Pré-visualização da Tabela</h4>
                    <div id="table-preview" class="border p-3 bg-light"></div>
                    <textarea id="generated-table-code" class="form-control mt-3" rows="10" readonly></textarea>
                    <button id="copy-table-code" class="btn btn-secondary w-100 mt-2 mb-5">Copiar Código da Tabela</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const fieldType = document.getElementById('field-type');
            const fieldLabel = document.getElementById('field-label');
            const fieldId = document.getElementById('field-id');
            const fieldOptions = document.getElementById('field-options');
            const selectOptions = document.getElementById('select-options');
            const addFieldButton = document.getElementById('add-field');
            const formPreview = document.getElementById('form-preview');
            const generateCodeButton = document.getElementById('generate-code');
            const generatedCode = document.getElementById('generated-code');

            fieldType.addEventListener('change', () => {
                fieldOptions.style.display = fieldType.value === 'select' ? 'block' : 'none';
            });

            function clearConfiguratorFields() {
                fieldType.value = 'text';
                fieldLabel.value = '';
                fieldId.value = '';
                selectOptions.value = '';
                document.getElementById('field-required').checked = false;
                document.getElementById('field-disabled').checked = false;
                fieldOptions.style.display = 'none';
            }

            addFieldButton.addEventListener('click', () => {
                const type = fieldType.value;
                const label = fieldLabel.value;
                const id = fieldId.value;
                const required = document.getElementById('field-required').checked ? 'required' : '';
                const disabled = document.getElementById('field-disabled').checked ? 'disabled' : '';
                let fieldHTML = '';

                switch (type) {
                    case 'text':
                    case 'number':
                    case 'date':
                    case 'email':
                    case 'password':
                    case 'file':
                    case 'hidden':
                    case 'range':
                        fieldHTML = `
                            <div class="mb-3">
                                <label for="${id}" class="form-label">${label}</label>
                                <input type="${type}" id="${id}" name="${id}" class="form-control" ${required} ${disabled}>
                            </div>
                        `;
                        break;

                    case 'textarea':
                        fieldHTML = `
                            <div class="mb-3">
                                <label for="${id}" class="form-label">${label}</label>
                                <textarea id="${id}" name="${id}" class="form-control" rows="4" ${required} ${disabled}></textarea>
                            </div>
                        `;
                        break;

                    case 'checkbox':
                        fieldHTML = `
                            <div class="form-check">
                                <input type="checkbox" id="${id}" name="${id}" class="form-check-input" ${disabled}>
                                <label for="${id}" class="form-check-label">${label}</label>
                            </div>
                        `;
                        break;

                    case 'radio':
                        fieldHTML = `
                            <div class="form-check">
                                <input type="radio" id="${id}" name="radio-group" class="form-check-input" ${disabled}>
                                <label for="${id}" class="form-check-label">${label}</label>
                            </div>
                        `;
                        break;

                    case 'select':
                        const options = selectOptions.value.split(',').map(opt => `<option value="${opt.trim()}">${opt.trim()}</option>`).join('');
                        fieldHTML = `
                            <div class="mb-3">
                                <label for="${id}" class="form-label">${label}</label>
                                <select id="${id}" name="${id}" class="form-select" ${required} ${disabled}>
                                    ${options}
                                </select>
                            </div>
                        `;
                        break;

                    default:
                        alert('Tipo de campo não suportado!');
                }

                formPreview.insertAdjacentHTML('beforeend', fieldHTML);

                clearConfiguratorFields();
            });

            generateCodeButton.addEventListener('click', () => {
                const formHTML = `
                    <form method="post">
                        ${formPreview.innerHTML}
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                `;
                generatedCode.value = formHTML;
            });

            const tableTitle = document.getElementById('table-title');
            const tableColumns = document.getElementById('table-columns');
            const generateTableButton = document.getElementById('generate-table');
            const tablePreview = document.getElementById('table-preview');
            const generatedTableCode = document.getElementById('generated-table-code');

            generateTableButton.addEventListener('click', () => {
                const title = tableTitle.value;
                const columns = tableColumns.value.split(',').map(col => col.trim());
                const tableHTML = `
                        <h2>${title}</h2>
                        <a href="#" class="btn btn-success mb-3">Novo Registro</a>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    ${columns.map(col => `<th>${col}</th>`).join('')}
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                ${Array.from({ length: 5 }).map((_, i) => `
                                    <tr>
                                        <td>${i + 1}</td>
                                        ${columns.map(() => `<td>Exemplo</td>`).join('')}
                                        <td>
                                            <a href="#" class="btn btn-warning">Editar</a>
                                            <a href="#" class="btn btn-info">Consultar</a>
                                        </td>
                                    </tr>
                                `).join('')}
                            </tbody>
                        </table>
                `;
                tablePreview.innerHTML = tableHTML;
                generatedTableCode.value = tableHTML;
            });

            const copyFormCodeButton = document.getElementById('copy-form-code');
            const copyTableCodeButton = document.getElementById('copy-table-code');

            function copyToClipboard(textarea, button) {
                navigator.clipboard.writeText(textarea.value).then(() => {
                    button.textContent = 'Copiado!';
                    setTimeout(() => {
                        button.textContent = 'Copiar Código';
                    }, 2000);
                }).catch(err => {
                    console.error('Erro ao copiar o texto: ', err);
                    button.textContent = 'Erro!';
                    setTimeout(() => {
                        button.textContent = 'Copiar Código';
                    }, 2000);
                });
            }

            copyFormCodeButton.addEventListener('click', () => {
                copyToClipboard(generatedCode, copyFormCodeButton);
            });

            copyTableCodeButton.addEventListener('click', () => {
                copyToClipboard(generatedTableCode, copyTableCodeButton);
            });
        });
    </script>
</body>
</html>