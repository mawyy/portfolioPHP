document.addEventListener("DOMContentLoaded", function() {

    /** Taken from Underscore.js : https://underscorejs.org/#debounce
    *  - func : la fonction à `debouncer`
    *  - wait : le nombre de millisecondes à attendre avant d'appeler func()
    *  - immediate (optionnel) : appelle func() à la première invocation au lieu de la dernière (Faux par défaut)
    */
    function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this, args = arguments;
            var later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            // Tant que la fonction est appelée, on reset le timeout
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    }

    function loadImages() {

        function loadImage(img) {
            const loadingMarginPx = 300; // marge permettant d'anticiper le chargement des images
            const imgTopPx = img.getBoundingClientRect().top; //hauteur entre le bord haut de la fenêtre et le bord haut de img
            if (imgTopPx < (window.innerHeight + loadingMarginPx) && imgTopPx !== 0) {

                if (img.hasAttribute("data-src")) {
                    img.src = img.dataset.src;
                } else if (img.hasAttribute("data-srcset")) {
                    img.srcset = img.dataset.srcset;
                }
                if (img.dataset.alt !== undefined) {
                    img.addEventListener('load', () => {img.alt = img.dataset.alt;});
                }
                img.classList.remove('img-lazy');
            }
        }

        document.querySelectorAll(".img-lazy").forEach(loadImage);
    }

    return function() {
        const refreshImages = debounce(loadImages, 50);
        refreshImages();
        document.addEventListener("scroll", refreshImages);
        window.addEventListener("resize", refreshImages);
        window.addEventListener("orientationChange", refreshImages);
    };
}());
