//création des constantes pour la gestion des caches pour l'app
const staticCacheName = "cache-v1";
const assets = [
    "/",
    "/index.html"
]

//mise en cache des fichiers
self.addEventListener("install", (e)=>{
    e.waitUntil(
        caches.open(staticCacheName).then((cache) => {
            cache.addAll(assets)
        })
    )

});

self.addEventListener('fetch', (event) => {
    console.log(event.request);
})