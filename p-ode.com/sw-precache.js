importScripts('https://storage.googleapis.com/workbox-cdn/releases/6.3.0/workbox-sw.js');

if (workbox) {
  console.log(`Workbox Yüklendi!`);

 
  workbox.routing.registerRoute(
    /\.(?:png|jpg|jpeg|svg|gif)$/,
    new workbox.strategies.CacheFirst({
      cacheName: 'images-cache',
      plugins: [
        new workbox.expiration.ExpirationPlugin({
          maxEntries: 50, // Önbellekte en fazla 50 öğe bulunsun
          maxAgeSeconds: 30 * 24 * 60 * 60, // 30 gün
        }),
      ],
    })
  );

  
  workbox.routing.registerRoute(
    /\.(?:js|css|html|json)$/,
    new workbox.strategies.NetworkFirst()
  );

  workbox.routing.registerRoute(
    /\.(?:js|css)$/,
    new workbox.strategies.StaleWhileRevalidate({
      cacheName: 'css-js-cache',
      plugins: [
        new workbox.expiration.ExpirationPlugin({
          maxAgeSeconds: 2 * 60 * 60, // 2 saat
        }),
      ],
    })
  );
} else {
  console.log(`Workbox yüklenemedi.`);
}
