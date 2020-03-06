<<<<<<< HEAD
/**
 * Service Worker
 */

const _version = 'v2';
const cacheName = 'v1';
const cacheList = [
  '/images/1.jpg',
  '/images/2.jpg'
]

const log = msg => {
  console.log(`[ServiceWorker ${_version}] ${msg}`);
}

// Life cycle: INSTALL
self.addEventListener('install', event => {
  log('INSTALL');
});

// Life cycle: ACTIVATE
self.addEventListener('activate', event => {
  log('Activate');
});

// Functional: FETCH
self.addEventListener('fetch', event => {
  log('Fetch ' + event.request.url);
  if (event.request.url.indexOf('.jpg') !== -1) {
    event.respondWith(fetch('/images/2.jpg'))
  }
});
=======
/**
 * Service Worker
 */

const _version = 'v2';
const cacheName = 'v1';
const cacheList = [
  '/images/1.jpg',
  '/images/2.jpg'
]

const log = msg => {
  console.log(`[ServiceWorker ${_version}] ${msg}`);
}

// Life cycle: INSTALL
self.addEventListener('install', event => {
  log('INSTALL');
});

// Life cycle: ACTIVATE
self.addEventListener('activate', event => {
  log('Activate');
});

// Functional: FETCH
self.addEventListener('fetch', event => {
  log('Fetch ' + event.request.url);
  if (event.request.url.indexOf('.jpg') !== -1) {
    event.respondWith(fetch('/images/2.jpg'))
  }
});
>>>>>>> 78f73c664159341f41233d9d1aff2c31be21e3a9
