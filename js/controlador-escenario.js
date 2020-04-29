$(document).ready(function() {
    var seleccionado = 0;
    var fingaleria = 2
    document.getElementById("herramientas").style.visibility = "hidden";
    $("#btn-facebook").hide();
    $("#btn-instagram").hide();

    function mostrar(elemento) {
        //console.log("mostrar: ",elemento);
        for (let item = 0; item <= fingaleria; item++) {
            var info = document.querySelector(('#info-' + item));
            if (item == elemento) {
                info.setAttribute('visible', true);
                seleccionado = elemento;
            } else {
                info.setAttribute('visible', false);
            }
        }
    }
    mostrar(0);

    $("#btn-siguiente").click(function() {
        //console.log("seleccionado :" , seleccionado);
        if (seleccionado == fingaleria) {
            seleccionado = -1;
        }
        seleccionado = seleccionado + 1;
        if(seleccionado == 2){
            $("#btn-facebook").show( "slow" );
            $("#btn-instagram").show( "slow" );
        }else{
            $("#btn-facebook").hide( "slow" );
            $("#btn-instagram").hide( "slow" );
        }
        mostrar(seleccionado);
    });



    //agrega aframe-inspector ya se en local o en linea
    var scene = document.querySelector('a-scene');
    if (window.location.hostname == "localhost") {
        scene.setAttribute('inspector', 'url: http://localhost:3333/dist/aframe-inspector.js')
        console.log("aframe-inspector local");
    } else {
        scene.setAttribute('inspector', 'url: https://cdn.jsdelivr.net/gh/aframevr/aframe-inspector@master/dist/aframe-inspector.min.js')
        console.log("aframe-inspector en linea");
    }
});