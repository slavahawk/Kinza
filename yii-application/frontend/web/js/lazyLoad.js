lozad(".lozad", {
    load: function (el) {
        el.src = el.dataset.src;

        if (window.location.pathname !== "/") {
            el.onload = function () {
                el.classList.add("fade");
            };
        }
    },
}).observe();
