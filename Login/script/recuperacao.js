document.getElementById('tipoUserRecuperacao').addEventListener('change', function () {
    const userType = this.value;
    const cpfLabel = document.getElementById('cpfLabel');
    const cpfInput = document.getElementById('cpf');

    if (userType === 'professor') {
        cpfLabel.textContent = 'CPF do professor:';
        cpfInput.placeholder = 'Digite o CPF do professor';
    } else {
        cpfLabel.textContent = 'CPF do aluno:';
        cpfInput.placeholder = 'Digite o CPF do aluno';
    }
});
