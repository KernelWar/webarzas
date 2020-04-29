<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="logo.png" />
    <title>WebAR-zas</title>
    <!--
        
        
    <script src="https://aframe.io/releases/0.8.2/aframe.js"></script>
    -->
    <script src="aframe/aframe.min.js"></script>
    <script src="aframe/aframe-ar.js"></script>
    <script src="aframe/aframe-particleplayer-component.js"></script>
    <script src="aframe/aframe-spe-particles-component.js"></script>
    <script src="aframe/animaciones/parser.js"></script>
    <script src="aframe/animaciones/aframe-parametric-path-follow.js"></script>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/disparadores.js"></script>
    <script src="js/apps.js"></script>

</head>

<body style="margin: 0; overflow: hidden;">
    <div id="herramientas" class="buttons">
        <button class="btn" id="btn-facebook"> Facebook</button>
        <button class="btn" id="btn-siguiente"> haga click!!</button>
        <button class="btn" id="btn-instagram"> Instagram</button>
    </div>
    <a-scene id="escenario" embedded arjs="debugUIEnabled: false;">
        <a-assets>
            <a-asset-item id="particlesJson" src="aframe/particles-fireworks.json"></a-asset-item>
            <img id="particleTex" src="aframe/sprite.png">
            <img id="zas-bienvenido" src="img/zas-bienvenido.jpg">
            <img id="info-img-1" src="img/negocio_1.png">
            <img id="info-img-2" src="img/imagen.jpg">
            <a-gltf-model id="avion-papel" src="objetos/avion.gltf"></a-gltf-model>
            <a-asset-item id="facebook-obj" src="objetos/facebook/facebook.obj"></a-asset-item>
            <a-asset-item id="facebook-mtl" src="objetos/facebook/facebook.mtl"></a-asset-item>
            <a-asset-item id="instagram-obj" src="objetos/instagram/instagram.obj"></a-asset-item>
            <a-asset-item id="instagram-mtl" src="objetos/instagram/instagram.mtl"></a-asset-item>
        </a-assets>
        <a-marker emitevents="true" marcador preset="hiro" visible="false">

            <a-entity rotation="-50 0 0" position="0 0.169 1">
                <a-entity id="lluvia-zas" spe-particles="texture: logo.png; color: #ccc; size: 1.5; radius: 1; velocity: 0 -0.5 0; maxAge: 6; positionSpread: 2 0 2; randomizePosition: true; particleCount: 16; velocitySpread: 0.1 0.2 0.1; wiggleSpread: 1" position="0 2 0.900" scale="1 1 1"> </a-entity>

                <a-entity id="area-textos" geometry="primitive: plane; height: 0.3; width: 1.25; skipCache: true" material="" position="0 0.166 -0.571" rotation="-40 0 0"></a-entity>
                <a-entity id="info-0">
                    <a-image src="#zas-bienvenido" width="3" height="1.5" position="0 0.671 -1" material="" geometry="width: 1.26; height: 1" rotation="-40 0 0"></a-image>
                    <a-entity text__descripcion-zas="align: center; color: #000000; value: Descubre nuestra plataforma\n con una experiencia\nde realidad aumentada; wrapCount: 38.5" position="0 0.177 -0.542" rotation="-40 0 0"></a-entity>
                </a-entity>

                <a-entity id="info-1">
                    <a-image src="#info-img-1" width="3" height="1.5" position="0 0.671 -1" geometry="width: 1.26; height: 1" rotation="-40 0 0"></a-image>
                    <a-entity text__descripcion-zas="align: center; color: #000000; value: Restaurant\nAndre ; wrapCount: 20; letterSpacing: 21.11; tabSize: 50" position="0 0.177 -0.542" rotation="-40 0 0"></a-entity>
                </a-entity>

                <a-entity id="info-2">
                    <a-entity text__descripcion-zas="align: center; color: #000000; value: Siguenos en nuestras redes sociales; wrapCount: 28.75" position="0 0.174 -0.534" rotation="-40 0 0"></a-entity>
                    <a-entity obj-model="mtl: #facebook-mtl; obj: #facebook-obj" rotation="55.718 0 0" position="-0.639 1.147 -0.985" scale="0.414 0.414 0.414" animation="property: position; to: -0.639 1.5 -0.985; loop: true; dur: 500; dir: alternate; elasticity: 40; easing:easeInOutQuad;" facebook-listener></a-entity>
                    <a-entity obj-model="mtl: #instagram-mtl; obj: #instagram-obj" rotation="55.718 0 0" position="0.668 1.147 -0.985" scale="0.414 0.414 0.414" animation="property: position; to: 0.668 1.5 -0.985; loop: true; dur: 500; dir: alternate; elasticity: 40; easing:easeInOutQuad;" instagram-listener></a-entity>
                </a-entity>

                <a-entity id="jetModel" scale="0.05 0.05 0.05" gltf-model="#avion-papel" parametric-path-follow="xFunction: cos(t); yFunction: 0.5*sin(3*t); zFunction: 2*sin(t); tMax: 6.283; loop: true" position="0.734 -0.874 2.241" rotation="64.487 -61.57300000000001 61.512">
                </a-entity>

                <a-entity id="efectos" iluminacion position="0 1 5.105" particleplayer="on: particleplayerstart; src: #particlesJson; img: #particleTex; dur: 4000; count: 50%; scale: 0.6; pscale: 2; interpolate: true; shader: standard; poolSize: 20; color: #0000ff"></a-entity>


            </a-entity>
        </a-marker>

        <a-entity camera>
            <a-entity cursor="rayOrigin:mouse" raycaster="showLine: true; far: 10" line="color: red;"></a-entity>
            <a-entity laser-controls="hand: right"></a-entity>
        </a-entity>


    </a-scene>
    <script>
        $("#btn-facebook").click(function() {
            abrirFacebook();
        });
        $("#btn-instagram").click(function() {
            abrirInstagram();
        });
    </script>
    <script src="js/controlador-escenario.js"></script>
</body>

</html>