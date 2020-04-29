
AFRAME.registerComponent('facebook-listener', {
    init: function () {
        this.el.addEventListener('click', function (event) {
            abrirFacebook();
        });
    }
});
function abrirFacebook() {
    var desktopFallback = "https://www.facebook.com/TecnologicoTlaxiaco",
        app = "fb://page/923031861166894";
    if (/Android|iPhone|iPad|iPod/i.test(navigator.userAgent)) {
        window.location = app;
    } else {
        window.open(desktopFallback, '_blank')
    }
}
AFRAME.registerComponent('instagram-listener', {
    init: function () {
        this.el.addEventListener('click', function (event) {
            abrirInstagram();
        });
    }
});

function abrirInstagram() {
    var desktopFallback = "https://www.instagram.com/nuts_about_birds",
        app = "intent://instagram.com/_u/nuts_about_birds/#Intent;package=com.instagram.android;scheme=https;end";
    if (/Android|iPhone|iPad|iPod/i.test(navigator.userAgent)) {
        window.location = app;
    } else {
        window.open(desktopFallback, '_blank')
    }
}
