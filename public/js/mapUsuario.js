//CREAR MAPA
function getOficinasJson(){
    //La funcion está definida en oficinas.blade.php
    var oficinas=getOficinasFromTemplate();

    var features=[];

    $(oficinas).each(function(index, oficina){
        var ofi={
            "type": "Feature",
            "geometry":
            {
                "type": "Point",
                "coordinates": [oficina.alt, oficina.lat],
                "longitud": oficina.lat,
                "altitud": oficina.alt
            },
            "properties":
            {
                "name": oficina.calle+", "+oficina.num_calle,
            }
        };

        var markerElement = document.createElement("i");
        markerElement.className = "fa fa-3x fa-map-marker text-primary";
        markerElement.style.color="#3C8DBC";

        let marker = new mapboxgl.Marker(markerElement)
            .setLngLat(ofi.geometry.coordinates)
            .setPopup(
                new mapboxgl.Popup({offset: 25})
                    .setHTML("<h3>"+ofi.properties.name+"</h3><h4>CP: "+oficina.cp+"</h4><button onclick='cambiarOficina("+oficina.id+")' class='btn btn-warning btn-sm'>Selecionar mi oficina</button>")
            )
            .addTo(map);

        features.push(ofi);
    });
    return features
}

var posicion=[-3.70, 40.42]; //por defecto madrid
//coge tus datos para la variable
navigator.geolocation.getCurrentPosition(function (loc) {
    posicion[0] = loc.coords.longitude;
    posicion[1] = loc.coords.latitude;
});

mapboxgl.accessToken = 'pk.eyJ1IjoidGFxdWl0b2dhenBhY2hvIiwiYSI6ImNqY2xwMDU0OTA5b28zM3JvNG95OWZlM3kifQ.y-N-aKL1KQeSLJLY6C2mFg';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v10',
    renderWorldCopies: true,
    center: posicion,
    zoom: 3.5,
    minZoom: 1.0
});
// map.addControl(new mapboxgl.NavigationControl());
map.on('load', function () {
    map.addLayer({
        "id": "points",
        "type": "symbol",
        "source": {
            "type": "geojson",
            "data": {
                "type": "FeatureCollection",
                "features": getOficinasJson()
            }
        },
        "layout": {
            "icon-image": "{icon}-15",
            "text-field": "{title}",
            "text-font": ["Open Sans Semibold", "Arial Unicode MS Bold"],
            "text-offset": [0, 0.6],
            "text-anchor": "top"
        }
    });
});

function cambiarOficina(id){
    $.post('http://'+window.location.hostname+'/taquitoGazpacho/editarUsuario/oficina', {"_token": $("[name='_token']")[0].value ,'ciudad': id},function(returnedData){
        $.notify("Oficina Cambiada satisfactoriamente!", "success");
    });
}
