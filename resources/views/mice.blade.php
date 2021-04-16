<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medigo</title>
    <link rel="stylesheet" href="{{ secure_asset('css/mice.css') }}">

    <!-- <link rel="stylesheet/less" type="text/css" href="/resources/css/style.css"/> -->
    <script src="jquery-3.5.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/less" ></script>

    <link rel="stylesheet" type="text/css" href="styles1.css"/>
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'> 
</head>
<body>
    <header>
        <div class="container">
            <ul class="topbar">
                <li><a href=""><i class="fa fa-globe" style='font-size:20px'></i> {{ __("EN")}}</a></li>
                <li><a href=""><i class="fa fa-fw fa-user" style='font-size:20px'></i> {{ __("My account")}}</a></li>
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
                    <li><div class="dropdown">
                        <a class="dropbtn" href="">{{ __("Products")}} 
                            <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="http://localhost/dyken/public/mice">{{ __("Mice")}}</a>
                            <hr>
                            <a href="http://localhost/dyken/public/keyboard">{{ __("Keyboards")}}</a>
                            <hr>
                            <a href="http://localhost/dyken/public/headsets">{{ __("Headsets")}}</a>
                        </div>
                        </div> </li>
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
                    <h2>Mice</h2>
                </div>
                <div class="overview_menu">Home/Mice</div>
            </div>
        </div>
    </div>
    <div class="portfolio_grid">
    <div class="container">
      <div class="portfolio_grid_sys">
        <div class="portfolio_post">
          <img  class="portfolio_grid_img" src="/project/project9.jpg" alt="">
        </div>
        <div class="portfolio_post">
          <img class="portfolio_grid_img" src="/project/project8.jpg" alt="">
        </div>
        <div class="portfolio_post">
          <img class="portfolio_grid_img" src="/project/project7.jpg" alt="">
        </div>
        <div class="portfolio_post">
          <img class="portfolio_grid_img" src="/project/project6.jpg" alt="">
        </div>
        <div class="portfolio_post">
          <img class="portfolio_grid_img" src="/project/project5.jpg" alt="">
        </div>
        <div class="portfolio_post">
          <img class="portfolio_grid_img" src="/project/project4.jpg" alt="">
        </div>
        <div class="portfolio_post">
          <img class="portfolio_grid_img" src="/project/project3.jpg" alt="">
        </div>
        <div class="portfolio_post">
          <img class="portfolio_grid_img" src="/project/project2.jpg" alt="">
        </div>
        <div class="portfolio_post">
          <img class="portfolio_grid_img" src="/project/project1.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
    <footer>
        <div class="container">
            <nav class="end">
                <ul class="nav_footer">
                    <li><a href="http://localhost/dyken/public/"  class="menu_link">{{ __("Home")}}</a></li>
                    <li><a href="http://localhost/dyken/public/" class="menu_link">{{ __("Products")}}</a></li>
                    <li><a href="http://localhost/dyken/public/blog" class="menu_link">{{ __("Blog")}}</a></li>
                    <li><a href="http://localhost/dyken/public/contact" class="menu_link">{{ __("Contact")}}</a></li>
                    <li><a href="http://localhost/dyken/public/about" class="menu_link">{{ __("About")}}</a></li>
                </ul>
            </nav>
            <div class="copy">&copy;  COPYRIGHT &mdash; ОО "QOSTANAY ALUMNI"</div>
        </div>
    </footer>
</body>
</html>