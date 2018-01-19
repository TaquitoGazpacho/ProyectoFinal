//CREAR MAPA
function getOficinasJson(){
    var oficinas=getOficinasFromTemplate();
    var features=[];
    $(oficinas).each(function(index, oficina){
        features.push({
            "type": "Feature",
            "geometry": {
                "type": "Point",
                "coordinates": [oficina.alt, oficina.lat],
                "longitud": oficina.lat,
                "altitud": oficina.alt
            },
            "properties": {
                "title": oficina.calle+", "+oficina.num_calle,
                'marker-color': '#3bb2d0',
                'marker-size': 'large',
                'marker-symbol': 'rocket'
            }
        });
    });
    return features
}
mapboxgl.accessToken = 'pk.eyJ1IjoidGFxdWl0b2dhenBhY2hvIiwiYSI6ImNqY2xwMDU0OTA5b28zM3JvNG95OWZlM3kifQ.y-N-aKL1KQeSLJLY6C2mFg';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v10'
});
map.addControl(new mapboxgl.NavigationControl());
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
