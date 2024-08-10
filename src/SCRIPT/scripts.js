function updateRM() {
    // Obtém o elemento select com id "role"
    let roleSelect = document.getElementById("role");
    // Obtém o elemento de label com id "rm-label"
    let rmLabel = document.getElementById("rm-label");

    // Verifica se o valor selecionado é "professor" ou "responsavel"
    if (roleSelect.value === "professor" || roleSelect.value === "responsavel") {
        // Se for, altera o texto do label para "Login:"
        rmLabel.textContent = "Login:";
    } else {
        // Caso contrário, altera o texto do label para "RM:"
        rmLabel.textContent = "RM:";
    }
}

function updateCPF() {
    // Obtém o elemento select com id "role"
    let roleSelect = document.getElementById("role");
    // Obtém o elemento de label com id "cpf-label"
    let cpfLabel = document.getElementById("cpf-label");

    // Verifica se o valor selecionado é "professor" ou "responsavel"
    if (roleSelect.value === "professor" || roleSelect.value === "responsavel") {
        // Se for, altera o texto do label para "CPF:"
        cpfLabel.textContent = "CPF:";
    } else {
        // Caso contrário, altera o texto do label para "CPF do aluno:"
        cpfLabel.textContent = "CPF do aluno:";
    }
}

// Adiciona um evento ao elemento select com id "role"
// que chama as funções updateRM e updateCPF quando o valor selecionado muda
document.getElementById("role").addEventListener("change", function() {
    updateRM();
    updateCPF();
});

// Chama as funções updateRM e updateCPF para configurar os labels corretamente
// quando a página é carregada pela primeira vez
updateRM();
updateCPF();
