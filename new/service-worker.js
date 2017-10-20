var cacheName = 'adishankaraCache-9';
var dataCacheName = 'slokaData-v1';


var filesToCache = [
   '/epf/new/',
  '/epf/new/index.html',
  '/epf/new/js/main.js',
   '/epf/new/js/firebase.js',
   '/epf/new/js/material.css',
   '/epf/new/js/material.js',
   '/epf/new/js/angular.js',
   /epf/new/css/angular.js'
];



self.addEventListener('install', function(e) {
  console.log('[ServiceWorker] Install');
  e.waitUntil(
    caches.open(cacheName).then(function(cache) {
      console.log('[ServiceWorker] Caching app shell');
      return cache.addAll(filesToCache);
    })
  );
});

self.addEventListener('activate', function(e) {
  
            console.log('[ServiceWorker] Activate');
           e.waitUntil(
             caches.keys().then(function(keyList) {
               return Promise.all(keyList.map(function(key) {
                 if (key !== cacheName && key !== dataCacheName) {
                   console.log('[ServiceWorker] Removing old cache', key);
                   return caches.delete(key);
                 }
               }));
             })
           );
   
  return self.clients.claim();
});



