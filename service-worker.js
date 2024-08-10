self.addEventListener('install', (event) => {
    event.waitUntil(
        caches.open('login-app-cache').then((cache) => {
            return cache.addAll([
                '/',
                '/index.html',
                '/src/CSS/styles.css',
                '/src/SCRIPT/scripts.js',
                '/src/imagens/SagaLogo.png'
            ]);
        })
    );
});

self.addEventListener('fetch', (event) => {
    event.respondWith(
        caches.match(event.request).then((response) => {
            return response || fetch(event.request);
        })
    );
});
