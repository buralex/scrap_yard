        ymaps.ready(init); // карта соберется после загрузки скрипта и элементов
        var myMap; // заглобалим переменную карты чтобы можно было ею вертеть из любого места
        function init () { // функция - собиралка карты и фигни
            myMap = new ymaps.Map("map", { // создаем и присваиваем глобальной переменной карту и суем её в див с id="map"
                    center: [59.896373, 30.251450], // ну тут центр
                    behaviors: ['default', 'scrollZoom'], // скроллинг колесом
                    zoom: 15.8 // тут масштаб
                });
        //     myMap.controls // добавим всяких кнопок, в скобках их позиции в блоке
        // 		.add('zoomControl', { left: 5, top: 5 }) //Масштаб
        // 		.add('typeSelector') //Список типов карты
        // 		.add('mapTools', { left: 35, top: 5 }) // Стандартный набор кнопок
        // 		.add('searchControl'); // Строка с поиском
	       // /* Создаем кастомные метки */
	       
	        myPlacemark2 = new ymaps.Placemark([59.896373, 30.251450], {
	                balloonContent: ''
	            	}, {
	            	iconImageHref: '../img/mark.png',
	            	iconImageSize: [38, 36]
	            	
	                
	                });
	        /* Добавляем */
	        myMap.geoObjects

	        	.add(myPlacemark2);

	        /* Фикс кривого выравнивания кастомных балунов */
			myMap.geoObjects.events.add([
		        'balloonopen'
		    ], function (e) {
		        var geoObject = e.get('target');
		        myMap.panTo(geoObject.geometry.getCoordinates(), {
		                                    delay: 0
		                                });
		    });
    }
