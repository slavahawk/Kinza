lozad('.lozad', {
    load: function (el) {
        el.src = el.dataset.src;
        el.onload = function () {
            if (window.location.pathname !== "/") {
                el.classList.add('fade')
            }

        }
    }
}).observe()
