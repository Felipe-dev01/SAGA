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

if ('serviceWorker' in navigator) {
      navigator.serviceWorker.register('/service-worker.js')
      .then(function(registration) {
        console.log('Service Worker registrado com sucesso:', registration);
      }).catch(function(error) {
        console.log('Falha ao registrar o Service Worker:', error);
      });
    }
self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open('my-pwa-cache').then(function(cache) {
      return cache.addAll([
        '/',
        '/../../index.html',
        '/../CSS/styles.css'
      ]);
    })
  );
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request).then(function(response) {
      return response || fetch(event.request);
    })
  );
});

