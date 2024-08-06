function updateRM() {
    let roleSelect = document.getElementById("role");
    let rmLabel = document.getElementById("rm-label");

    if (roleSelect.value === "professor" || "responsavel") {
        rmLabel.textContent = "Login:";
    } else {
        rmLabel.textContent = "RM:";
    }
}

function updateCPF() {
    let roleSelect = document.getElementById("role");
    let cpflabel= document.getElementById("cpf-label");

    if (roleSelect.value === "professor" || "responsavel") {
        cpflabel.textContent = "CPF:";
    } else {
        cpflabel.textContent = "CPF do aluno:";
    }
}