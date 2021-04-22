<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/aboutcss.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <ul class="topbar">
                <li><a href="http://localhost/dyken/public/about/ru"><i class="fa fa-globe" style='font-size:20px'></i> {{ __("EN")}}</a></li>
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
                    <h2>{{__("About")}}</h2>
                </div>
                <div class="overview_menu">{{__("Home/About")}}</div>
            </div>
        </div>
    </div>
    <div id="promo">
        <div class="container">
            <div class="promo_div">
                <h1 id="promo_title">{{ __("ABOUT DYKEN")}}</h1>
            </div>
        </div>
    </div>
    <div class="story">
        <div class="container2">
            <div class="story_title">{{__("Our Story")}}</div>
            <p>{{__("A Kazakh company focused on innovation and quality, Dyken designs products and experiences
                that have an everyday place in people's lives. Founded in 1981 in Lausanne, Switzerland, and quickly expanding to the Silicon Valley, Logitech started connecting people through innovative computer peripherals and many industry firsts, including the infrared cordless mouse, the thumb-operated trackball, the laser mouse, and more.")}}</p>
            <p>{{__("Since those early days, we have expanded both our expertise in product design and our global reach. For each of our products, we focus on how our customers connect and interact with the digital world. We keep design at the center of everything we create, in every team and every discipline, to create truly unique and meaningful experiences.")}}</p>
        </div>
    </div>
    <div class="barchart container2">
        <canvas id="bar" width="400" height="200"></canvas>
        <script type="text/javascript">
            var ctx = document.getElementById('bar');
            var myChart = new Chart(ctx, {
                "type": "bar",
                "data": {
                    "labels": ["2005", "2010", "2015", "2020"],
                    "datasets": [{
                        "label": "Progress in years",
                        "data": [1000, 1500, 2500, 4000],
                        "backgroundColor": ['RGB(68, 184, 172)', 'RGB(239, 192, 80)', 'RGB(195, 68, 122)', 'RGB(247, 202, 201)'],
                    }]
                },
                "options": {}
            });
        </script>
    </div>
    <div class="piechart container2">
        <canvas id="pie" width="300" height="100"></canvas>
        <script type="text/javascript">
            var ctx = document.getElementById('pie');
            var myChart = new Chart(ctx, {
                "type": "pie",
                "data": {
                    "labels": ["Almaty", "Astana", "Kostanay", "Pavlodar", "Karaganda"],
                    "datasets": [{
                        "label": "Our consumers",
                        "data": [40, 30, 20, 10],
                        "backgroundColor": ['RGB(68, 184, 172)', 'RGB(239, 192, 80)', 'RGB(195, 68, 122)', 'RGB(247, 202, 201)'],
                    }]
                },
                "options": {}
            });
        </script>
    </div>
    <div class="linechart container2">
        <canvas id="line" width="400" height="200"></canvas>
        <script type="text/javascript">
            var ctx = document.getElementById('line');
            var myChart = new Chart(ctx, {
                "type": "line",
                "data": {
                    "labels": ["January", "Feburary", "March", "April", "May", "June", "July"],
                    "datasets": [{
                        "label": "Our Sales in this year",
                        "data": [50, 60, 60, 70, 80, 90, 90],
                        "fill": false,
                        "borderColor": "rgb(75,192,192",
                        "lineTension": 0.1
                    }]
                },
                "options": {}
            });
        </script>
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