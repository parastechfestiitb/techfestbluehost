importScripts('https://storage.googleapis.com/workbox-cdn/releases/3.3.1/workbox-sw.js');

if (workbox) {
    console.log(`Yay! Workbox is loaded 🎉`);
    workbox.routing.registerRoute(
        // Cache CSS files
        /.*\.css/,
        workbox.strategies.staleWhileRevalidate({
            cacheName: 'css-cache',
        })
    );

    workbox.routing.registerRoute(
        new RegExp('^https://s3.ap-south-1.amazonaws.com/techfest/public/'),
        workbox.strategies.staleWhileRevalidate({
            cacheName: 'image-cache',
            plugins: [
                new workbox.cacheableResponse.Plugin({
                    statuses: [0, 200],
                }),
                new workbox.expiration.Plugin({
                    maxAgeSeconds: 7 * 24 * 60 * 60,
                })
            ]
        })
    );
} else {
    console.log(`Boo! Workbox didn't load 😬`);
}
