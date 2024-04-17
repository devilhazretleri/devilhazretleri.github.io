`use strict`;
importScripts('sw-toolbox.js');
toolbox.precache(['/']);
toolbox.router.get('/uploads/*', toolbox.cacheFirst);
toolbox.router.get('/cat/*', toolbox.cacheFirst);
toolbox.router.get('/girl/*', toolbox.cacheFirst);
toolbox.router.get('/*', toolbox.networkFirst, {
    networkTimeoutSeconds: 5
});
