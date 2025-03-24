// JavaScript para interatividade dos botões
const botoes = document.querySelectorAll('button');
botoes.forEach(botao => {
    botao.addEventListener('click', () => {
        alert('Você clicou em: ' + botao.textContent);
    });
});