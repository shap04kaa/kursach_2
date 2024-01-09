let map;
let center = [55.752518038645185,37.623184270891066];

function init() {
    map = new ymaps.Map('map-test', {
        center: center,
        zoom: 11
    });

    let placemark = new ymaps.Placemark(center, {}, {
      iconLayout: 'default#image',
		  iconImageHref: 'images/marker1_blue.svg',
		  iconImageSize: [30, 30],
		  iconImageOffset: [-17, -25]
    });

    map.controls.remove('geolocationControl');
    map.controls.remove('searchControl');
    map.controls.remove('trafficControl');
    map.controls.remove('typeSelector');
    map.controls.remove('fullscreenControl');
    map.controls.remove('zoomControl');
    map.controls.remove('rulerControl');
    // map.behaviors.disable(['scrollZoom']);

    map.geoObjects.add(placemark);
}

ymaps.ready(init);
