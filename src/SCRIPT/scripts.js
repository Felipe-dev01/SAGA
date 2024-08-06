function updateRM() {
    let roleSelect = document.getElementById("role");
    let rmLabel = document.getElementById("rm-label");

    if (roleSelect.value === "professor" || roleSelect.value === "responsavel") {
        rmLabel.textContent = "Login:";
    } else {
        rmLabel.textContent = "RM:";
    }
}

function updateCPF() {
    let roleSelect = document.getElementById("role");
    let cpfLabel = document.getElementById("cpf-label");

    if (roleSelect.value === "professor" || roleSelect.value === "responsavel") {
        cpfLabel.textContent = "CPF:";
    } else {
        cpfLabel.textContent = "CPF do aluno:";
    }
}

// Adiciona ouvintes de evento para atualizar os rótulos ao mudar a seleção
document.getElementById("role").addEventListener("change", function() {
    updateRM();
    updateCPF();
});

// Chama as funções ao carregar a página para garantir que os valores iniciais sejam configurados corretamente
updateRM();
updateCPF();