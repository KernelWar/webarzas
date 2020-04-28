AFRAME.registerComponent('marcador', {
    init: function() {
        const marker = this.el;
        marker.addEventListener("markerFound", () => {
            var markerId = marker.id;
            //console.log('Marker Found: ', markerId);
            document.getElementById("herramientas").style.visibility = "visible";
        });
        marker.addEventListener("markerLost", () => {
            var markerId = marker.id;
            //console.log('Marker Lost: ', markerId);
            document.getElementById("herramientas").style.visibility = "hidden";
        });
    },
});
AFRAME.registerComponent('iluminacion', {
    init: function() {
        var btn = document.getElementById("btn-siguiente");
        btn.addEventListener('click', () => {
            this.trigger();
        });
    },

    trigger: function() {
        this.el.emit('particleplayerstart', {
            position: new THREE.Vector3(
                (Math.random() - 0.5) * 7,
                Math.random() * 2,
                -5 - Math.random() * 2
            ),
            rotation: new THREE.Euler(Math.random() * 1 - .5, 0, 0)
        });
    }
});