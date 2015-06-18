$(document).ready(function(){
    if ($('.buildings-block-map').length != 0) {
        ymaps.ready(init);
        var myMap,
            myPlacemark;

        function init(){
            myMap = new ymaps.Map("buildings-block-map", {
                center: [55.76, 37.64],
                zoom: 7,
                controls: ['smallMapDefaultSet']
            });

            myMap.behaviors.disable('scrollZoom');

            myPlacemark = new ymaps.Placemark([55.76, 37.64], {
                hintContent: 'Москва!',
                balloonContent: 'Столица России'
            });

            myMap.geoObjects.add(myPlacemark);
        }
    }
});