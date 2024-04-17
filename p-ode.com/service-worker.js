document.addEventListener('DOMContentLoaded', function() {
    const lazyImages = document.querySelectorAll('img[data-src]');
    const lazyVideos = document.querySelectorAll('video[data-src]');

    const lazyLoad = function(target) {
        const io = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.setAttribute('src', img.getAttribute('data-src'));
                    img.onload = function() {
                        img.removeAttribute('data-src');
                    };
                    observer.unobserve(img);
                }
            });
        });

        io.observe(target);
    };

    lazyImages.forEach(lazyLoad);
    lazyVideos.forEach(lazyLoad);
});