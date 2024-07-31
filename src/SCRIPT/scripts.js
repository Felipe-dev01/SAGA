function updateRM() {
    let roleSelect = document.getElementById("role");
    let rmLabel = document.getElementById("rm-label");

    if (roleSelect.value === "professor") {
        rmLabel.textContent = "Login:";
    } else {
        rmLabel.textContent = "RM:";
    }
}

function updateCPF() {
    let roleSelect = document.getElementById("role");
    let cpflabel= document.getElementById("cpf-label");

    if (roleSelect.value === "professor") {
        cpflabel.textContent = "CPF:";
    } else {
        cpflabel.textContent = "CPF do aluno:";
    }
}