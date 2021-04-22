<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
    <link rel="stylesheet" href="{{ URL::asset('css/contactcss.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=64316aaf-b67c-443d-9e5f-1dae3a2414d8
    " type="text/javascript"></script>

</head>

<body>
    <header>
        <div class="container">
            <ul class="topbar">
                <li><a href="http://localhost/dyken/public/contact/ru"><i class="fa fa-globe" style='font-size:20px'></i> {{ __("EN")}}</a></li>
                <li><a href="http://localhost/dyken/public/home"><i class="fa fa-fw fa-user" style='font-size:20px'></i> {{ __("My account")}}</a></li>
                <li><a href=""><i class='fa fa-shopping-cart' style='font-size:20px'></i> {{ __("My cart")}}</a></li>
            </ul>
        </div>
    </header>
    <div class="menu">
        <div class="container">
            <nav class="menu_nav">
                <h1 class="medigo"><a href="http://localhost/dyken/public/">DYKEN</a></h1>
                <ul class="nav_list">
                    <li><a href="http://localhost/dyken/public/">{{ __("Home")}}</a></li>
                    <li>
                        <div class="dropdown">
                            <a class="dropbtn" href="">{{ __("Products")}}
                                <i class="fa fa-caret-down"></i></a>
                            <div class="dropdown-content">
                                <a href="http://localhost/dyken/public/mice">{{ __("Mice")}}</a>
                                <hr>
                                <a href="http://localhost/dyken/public/keyboard">{{ __("Keyboards")}}</a>
                            </div>
                        </div>
                    </li>
                    <li><a class="dropbtn" href="http://localhost/dyken/public/blog">{{ __("Blog")}}</li>
                    <li><a href="http://localhost/dyken/public/contact">{{ __("Contact")}}</a></li>
                    <li><a href="http://localhost/dyken/public/about">{{ __("About")}}</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="overview">
        <div class="container">
            <div class="overview_set">
                <div class="overview_title">
                    <h2>{{__("Contact")}}</h2>
                </div>
                <div class="overview_menu">{{__("Home/Contact")}}</div>
            </div>
        </div>
    </div>
    <div class="question">
        <div class="container">
            <h2 class="question_subtitle">{{__("Our addresses")}}</h2>
            <div class="address">
                <div class="address_title">{{__("Central office of the branch")}}</div>
                <div class="address_content">
                    <div class="address_text"><i class="fa fa-map-marker" aria-hidden="true" style="color: rgb(0, 168, 213);"></i> г. Алматы, {{__("117 Makataeva str. (building 'A'), Masanchi str., Lotos Business Center")}}</div>
                    <div class="address_text"><i class="fa fa-clock-o" aria-hidden="true" style="color: rgb(0, 168, 213);"></i> {{__("daily from 10: 00 to 19: 00 (without lunch break)")}}</div>
                    <div class="address_text"><i class="fa fa-phone" aria-hidden="true" style="color: rgb(0, 168, 213);"></i> +7 (777) 777-77-77</div>
                    <div class="address_text"><i class="fa fa-at" aria-hidden="true" style="color: rgb(0, 168, 213);"></i> dyken@gmail.com</div>
                </div>
            </div>
            <div class="address">
                <div class="address_title">{{__("Central office of the branch")}}</div>
                <div class="address_content">
                    <div class="address_text"><i class="fa fa-map-marker" aria-hidden="true" style="color: rgb(0, 168, 213);"></i> г. Астана, {{__("117 Makataeva str. (building 'A'), Masanchi str., Lotos Business Center")}}</div>
                    <div class="address_text"><i class="fa fa-clock-o" aria-hidden="true" style="color: rgb(0, 168, 213);"></i> {{("daily from 10: 00 to 19: 00 (without lunch break)")}}</div>
                    <div class="address_text"><i class="fa fa-phone" aria-hidden="true" style="color: rgb(0, 168, 213);"></i> +7 (777) 666-66-66</div>
                    <div class="address_text"><i class="fa fa-at" aria-hidden="true" style="color: rgb(0, 168, 213);"></i> dyken@gmail.com</div>
                </div>
            </div>
            <div class="address">
                <div class="address_title">{{__("Central office")}}</div>
                <div class="address_content">
                    <div class="address_text"><i class="fa fa-map-marker" aria-hidden="true" style="color: rgb(0, 168, 213);"></i> {{__("г. Караганда,")}} {{__("117 Makataeva str. (building 'A'), Masanchi str., Lotos Business Center")}}</div>
                    <div class="address_text"><i class="fa fa-clock-o" aria-hidden="true" style="color: rgb(0, 168, 213);"></i> {{("daily from 10: 00 to 19: 00 (without lunch break)")}}</div>
                    <div class="address_text"><i class="fa fa-phone" aria-hidden="true" style="color: rgb(0, 168, 213);"></i> +7 (777) 555-55-55</div>
                    <div class="address_text"><i class="fa fa-at" aria-hidden="true" style="color: rgb(0, 168, 213);"></i> dyken@gmail.com</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="map_title">Get in touch with us</h3>
        <div id="map" style="width:600px; height:400px">
        </div>
    </div>
    <script>
        ymaps.ready(init);

        function init() {
            var myMap = new ymaps.Map("map", {
                    center: [55.76, 37.64],
                    zoom: 10
                }, {
                    searchControlProvider: 'yandex#search'
                }),

                // Создаем геообъект с типом геометрии "Точка".
                myGeoObject = new ymaps.GeoObject({
                    // Описание геометрии.
                    geometry: {
                        type: "Point",
                        coordinates: [55.8, 37.8]
                    },
                    // Свойства.
                    properties: {
                        // Контент метки.
                        iconContent: 'We are here',
                    }
                }, {
                    // Опции.
                    // Иконка метки будет растягиваться под размер ее содержимого.
                    preset: 'islands#blackStretchyIcon',
                    // Метку можно перемещать.
                    draggable: true
                }),
                myPieChart = new ymaps.Placemark([
                    55.847, 37.6
                ], {
                    // Данные для построения диаграммы.
                    data: [{
                            weight: 8,
                            color: '#0E4779'
                        },
                        {
                            weight: 6,
                            color: '#1E98FF'
                        },
                        {
                            weight: 4,
                            color: '#82CDFF'
                        }
                    ],
                    iconCaption: "Pie chart"
                }, {
                    // Зададим произвольный макет метки.
                    iconLayout: 'default#pieChart',
                    // Радиус диаграммы в пикселях.
                    iconPieChartRadius: 30,
                    // Радиус центральной части макета.
                    iconPieChartCoreRadius: 10,
                    // Стиль заливки центральной части.
                    iconPieChartCoreFillStyle: '#ffffff',
                    // Cтиль линий-разделителей секторов и внешней обводки диаграммы.
                    iconPieChartStrokeStyle: '#ffffff',
                    // Ширина линий-разделителей секторов и внешней обводки диаграммы.
                    iconPieChartStrokeWidth: 3,
                    // Максимальная ширина подписи метки.
                    iconPieChartCaptionMaxWidth: 200
                });

            myMap.geoObjects
                .add(myGeoObject)
                .add(myPieChart)
                .add(new ymaps.Placemark([55.684758, 37.738521], {
                    balloonContent: 'цвет <strong>воды пляжа бонди</strong>'
                }, {
                    preset: 'islands#icon',
                    iconColor: '#0095b6'
                }))
                .add(new ymaps.Placemark([55.833436, 37.715175], {
                    balloonContent: '<strong>серобуромалиновый</strong> цвет'
                }, {
                    preset: 'islands#dotIcon',
                    iconColor: '#735184'
                }));

            var myGeoObject = new ymaps.GeoObject({
                // Описываем геометрию геообъекта.
                geometry: {
                    // Тип геометрии - "Ломаная линия".
                    type: "LineString",
                    // Указываем координаты вершин ломаной.
                    coordinates: [
                        [55.80, 37.50],
                        [55.70, 37.40]
                    ]
                },
                // Описываем свойства геообъекта.
                properties: {
                    // Содержимое хинта.
                    hintContent: "Я геообъект",
                    // Содержимое балуна.
                    balloonContent: "Меня можно перетащить"
                }
            }, {
                // Задаем опции геообъекта.
                // Включаем возможность перетаскивания ломаной.
                draggable: true,
                // Цвет линии.
                strokeColor: "#FFFF00",
                // Ширина линии.
                strokeWidth: 5
            });

            // Создаем ломаную с помощью вспомогательного класса Polyline.
            var myPolyline = new ymaps.Polyline([
                // Указываем координаты вершин ломаной.
                [55.80, 37.50],
                [55.80, 37.40],
                [55.70, 37.50],
                [55.70, 37.40]
            ], {
                // Описываем свойства геообъекта.
                // Содержимое балуна.
                balloonContent: "Ломаная линия"
            }, {
                // Задаем опции геообъекта.
                // Отключаем кнопку закрытия балуна.
                balloonCloseButton: false,
                // Цвет линии.
                strokeColor: "#000000",
                // Ширина линии.
                strokeWidth: 4,
                // Коэффициент прозрачности.
                strokeOpacity: 0.5
            });

            // Добавляем линии на карту.
            myMap.geoObjects
                .add(myGeoObject)
                .add(myPolyline);

            myGeoObject = new ymaps.GeoObject({
                // Геометрия = тип геометрии + координаты геообъекта.
                geometry: {
                    // Тип геометрии - прямоугольник.
                    type: 'Rectangle',
                    // Координаты.
                    coordinates: [
                        [55.665, 37.66],
                        [55.64, 37.53]
                    ]
                },
                // Свойства.
                properties: {
                    hintContent: 'Перетащи меня!',
                    balloonContent: 'Прямоугольник 2'
                }
            }, {
                // Опции.
                // Объект можно перетаскивать.
                draggable: true,
                // Цвет и прозрачность заливки.
                fillColor: '#ffff0022',
                // Цвет и прозрачность границ.
                strokeColor: '#3caa3c88',
                // Ширина линии.
                strokeWidth: 7
            });

            // Создаем прямоугольник с помощью вспомогательного класса.

            myMap.geoObjects
                .add(myGeoObject);
        }
    </script>
    <div class="vacancy">
        <div class="container">
            <div class="vacancy_title">
                Job openings
            </div>
            <div class="vacancy_subtitle">Job in LLP "DYKEN"</div>
            <div class="vacancy_main"><b>{{__("To our employees, we offer:")}}</b> </div>
            <ul>
                <li><b>Конкурентноспособную заработную плату и социальный пакет.</b> Уровень оплаты в нашей компании позволяет уверенно планировать своё будущее.</li>
                <li><b>Профессиональное развитие.</b> Работа в нашей команде позволяет постоянно совершенствовать профессиональные и личностные качества, а привлечение и участие в развивающих программах наших партнёров обеспечивает повышение квалификации всех сотрудников компании.</li>
                <li><b>Корпоративное управление и карьерный рост.</b> Мы предоставляем профессионалу все условия для проявления своих знаний, умений и способностей, дающих возможность полноценного карьерного роста.</li>
                <li><b>Лучшие ресурсы и технологии.</b> Для наших сотрудников мы создали наиболее оптимальные условия работы, которые помогают им наиболее полно проявить свои профессиональные качества.</li>
                <li><b>Дружный и сплоченный коллектив.</b> Мы готовы стать настоящим вторым домом, в который всегда приятно возвращаться после каждых выходных.</li>
                <li><b>Корпоративные праздники и спортивные мероприятия.</b> Наша компания поддерживает и поощряет спортивную активность сотрудников, регулярно проводятся корпоративные праздники.</li>
            </ul>
            <form action="http://localhost/dyken/public/upload-file">
                <input type="submit" value="Upload my Resume" height="200px" />
            </form>
        </div>
    </div>
    <footer>
        <div class="container">
            <nav class="end">
                <ul class="nav_footer">
                    <li><a href="http://localhost/dyken/public/" class="menu_link">{{ __("Home")}}</a></li>
                    <li><a href="http://localhost/dyken/public/" class="menu_link">{{ __("Products")}}</a></li>
                    <li><a href="http://localhost/dyken/public/blog" class="menu_link">{{ __("Blog")}}</a></li>
                    <li><a href="http://localhost/dyken/public/contact" class="menu_link">{{ __("Contact")}}</a></li>
                    <li><a href="http://localhost/dyken/public/about" class="menu_link">{{ __("About")}}</a></li>
                </ul>
            </nav>
            <div class="copy">&copy; COPYRIGHT &mdash; ОО "QOSTANAY ALUMNI"</div>
        </div>
    </footer>
</body>

</html>