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
