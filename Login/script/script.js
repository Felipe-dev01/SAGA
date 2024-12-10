document.getElementById('tipoUser').addEventListener('change', function () {
    const userType = this.value;
    const rmOuLoginLabel = document.getElementById('rmOuLoginLabel');
    const rmOuLoginInput = document.getElementById('rmOuLogin');

    if (userType === 'professor') {
        rmOuLoginLabel.textContent = 'Login:';
        rmOuLoginInput.placeholder = 'Digite o Login';
    } else {
        rmOuLoginLabel.textContent = 'RM:';
        rmOuLoginInput.placeholder = 'Digite o RM';
    }
});
