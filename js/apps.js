
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
        window.location = desktopFallback;
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
    var desktopFallback = "https://www.instagram.com",
        app = "instagram";
    if (/Android|iPhone|iPad|iPod/i.test(navigator.userAgent)) {
        window.location = app;
    } else {
        window.location = desktopFallback;
    }
}
