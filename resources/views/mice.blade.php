<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medigo</title>
  <link rel="stylesheet" href="{{ secure_asset('css/mice.css') }}">
  <script src=""></script>
  <!-- <link rel="stylesheet/less" type="text/css" href="/resources/css/style.css"/> -->
  <script src="jquery-3.5.1.min.js"></script>
  
  <script src="//cdn.jsdelivr.net/npm/less"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  
  <link rel="stylesheet" type="text/css" href="styles1.css" />
  <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
  
</head>

<body>
  <header>
    <div class="container">
      <ul class="topbar">
        <li><a href="http://localhost/dyken/public/mice/ru"><i class="fa fa-globe" style='font-size:20px'></i> {{ __("EN")}}</a></li>
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
                    <li><div class="dropdown">
                        <a class="dropbtn" href="">{{ __("Products")}} 
                            <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="http://localhost/dyken/public/mice">{{ __("Mice")}}</a>
                            <hr>
                            <a href="http://localhost/dyken/public/keyboard">{{ __("Keyboards")}}</a>
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
  <div class="container">
  <div class="container d-flex justify-content-center mt-50 mb-50">
    <div class="row">
        <div class="col-md-10">
            <div class="card card-body">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> <img src="https://resource.logitechg.com/e_trim/w_490,h_310,c_limit/c_lpad,ar_413:310,q_auto:best,f_auto,dpr_auto/content/dam/gaming/en/non-braid/hyjal-g502-hero/g502-hero-gallery-1-nb.png?v=1" width="200" height="150" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true">G502 HERO</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Mice</a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Devices</a></li>
                        </ul>
                        <p class="mb-3">G502 HERO features an advanced optical sensor for maximum tracking accuracy, customizable RGB lighting, custom game profiles, from 200 up to 25,600 DPI, and repositionable weights.</p>

                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold">$459.99</h3>
                        <div> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <div class="text-muted">1985 reviews</div> <button type="button" class="btn btn-warning mt-4 text-white"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="card card-body mt-3">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> <img src="https://resource.logitechg.com/e_trim/w_490,h_310,c_limit/c_lpad,ar_413:310,q_auto:best,f_auto,dpr_auto/content/dam/gaming/en/products/g502-hero-kda/g502-hero-kda-gallery-01.png?v=1" width="200" height="150" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true">G502 HERO KD/A</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Mice</a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Devices</a></li>
                        </ul>
                        <p class="mb-3">G502 HERO features an advanced optical sensor for maximum tracking accuracy, customizable RGB lighting, custom game profiles, from 200 up to 25,600 DPI, and repositionable weights.</p>
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold">$612.99</h3>
                        <div> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <div class="text-muted">2349 reviews</div> <button type="button" class="btn btn-warning mt-4 text-white"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="card card-body mt-3">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> <img src="https://resource.logitechg.com/e_trim/w_490,h_310,c_limit/c_lpad,ar_413:310,q_auto:best,f_auto,dpr_auto/content/dam/gaming/en/products/g305/g305-gallery-1.png?v=1" width="200" height="150" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true">G305</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Mice</a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Device</a></li>
                        </ul>
                        <p class="mb-3">G305 is a LIGHTSPEED wireless gaming mouse designed for serious performance with latest technology innovations at an affordable price point. Now in a variety of vibrant colors.</p>
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold">$459.99</h3>
                        <div> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <div class="text-muted">1985 reviews</div> <button type="button" class="btn btn-warning mt-4 text-white"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="card card-body mt-3">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> <img src="https://resource.logitechg.com/e_trim/w_490,h_310,c_limit/c_lpad,ar_413:310,q_auto:best,f_auto,dpr_auto/content/dam/gaming/en/products/pro-x-superlight/pro-x-superlight-black-gallery-1.png?v=1" width="200" height="150" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true">PRO X</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Mice</a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Devices</a></li>
                        </ul>
                        <p class="mb-3">Remove all obstacles in the way of winning with our lightest and fastest PRO mouse ever. The new weapon of choice for the world’s top esports professional athletes, it weighs less than 63 grams and delivers near frictionless glide. </p>
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold">$612.99</h3>
                        <div> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <div class="text-muted">2349 reviews</div> <button type="button" class="btn btn-warning mt-4 text-white"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="card card-body mt-3">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> <img src="https://resource.logitechg.com/e_trim/w_490,h_310,c_limit/c_lpad,ar_413:310,q_auto:best,f_auto,dpr_auto/content/dam/gaming/en/products/pro-wireless-gaming-mouse/pro-wireless-carbon-gallery-1.png?v=1" width="200" height="150" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true">PRO</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Mice</a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Device</a></li>
                        </ul>
                        <p class="mb-3">PRO Wireless was designed to be the ultimate gaming mouse for esports professionals. Over a 2 year period, Logitech G collaborated with more than 50 professional players to find the perfect shape, weight and feel combined with our LIGHTSPEED wireless and HERO 25k sensor technologies</p>
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold">$459.99</h3>
                        <div> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <div class="text-muted">1985 reviews</div> <button type="button" class="btn btn-warning mt-4 text-white"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
