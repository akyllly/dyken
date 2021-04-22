<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medigo</title>
  <link rel="stylesheet" href="{{ URL::asset('css/keyboards.css') }}">
  <script src=""></script>
  <!-- <link rel="stylesheet/less" type="text/css" href="/resources/css/style.css"/> -->
  
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
        <li><a href="http://localhost/dyken/public/keyboard/ru"><i class="fa fa-globe" style='font-size:20px'></i> {{ __("EN")}}</a></li>
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
          <h2>Keyboards</h2>
        </div>
        <div class="overview_menu">Home/Keyboards</div>
      </div>
    </div>
  </div>
  <div class="container">
  <div class="container d-flex justify-content-center mt-50 mb-50">
    <div class="row">
        <div class="col-md-10">
            <div class="card card-body">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> <img src="https://resource.logitechg.com/e_trim/w_490,h_310,c_limit/c_lpad,ar_413:310,q_auto:best,f_auto,dpr_auto/content/dam/gaming/en/products/pro-keyboard/pro-keyboard-gallery/uk-pro-gaming-keyboard-gallery-topdown.png?v=1" width="200" height="150" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true">PRO</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Keyboads</a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Devices</a></li>
                        </ul>
                        <p class="mb-3">The tournament-proven PRO gaming keyboard—now with advanced GX Clicky mechanical switches.</p>

                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold">$100.99</h3>
                        <div> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <div class="text-muted">1985 reviews</div> <button type="button" class="btn btn-warning mt-4 text-white"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="card card-body mt-3">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> <img src="https://resource.logitechg.com/e_trim/w_490,h_310,c_limit/c_lpad,ar_413:310,q_auto:best,f_auto,dpr_auto/content/dam/gaming/en/products/g915-tkl/g915-tkl-gallery/deu-g915-tkl-carbon-gallery-topdown.png?v=1" width="200" height="150" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true">G915 TKL</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Keyboads</a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Devices</a></li>
                        </ul>
                        <p class="mb-3">A breakthrough in design and engineering, now in black and white colorways. G915 TKL features LIGHTSPEED pro-grade wireless, advanced LIGHTSYNC RGB, and high-performance low-profile mechanical switches.</p>
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold">$120.99</h3>
                        <div> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <div class="text-muted">2349 reviews</div> <button type="button" class="btn btn-warning mt-4 text-white"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="card card-body mt-3">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> <img src="https://resource.logitechg.com/e_trim/w_490,h_310,c_limit/c_lpad,ar_413:310,q_auto:best,f_auto,dpr_auto/content/dam/gaming/en/products/g915/g915-gallery/uk-g915-wireless-gallery-topdown.png?v=1" width="200" height="150" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true">G915 LIGHTSPEED</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Keyboads</a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Device</a></li>
                        </ul>
                        <p class="mb-3">A breakthrough in design and engineering, the G915 features LIGHTSPEED pro-grade wireless, advanced LIGHTSYNC RGB, and new high-performance low-profile mechanical switches. Meticulously crafted from premium materials, the G915 is a sophisticated design of unparalleled beauty, strength, and performance. Meet G915 LIGHTSPEED and play the next dimension.</p>
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold">$150.99</h3>
                        <div> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <div class="text-muted">1985 reviews</div> <button type="button" class="btn btn-warning mt-4 text-white"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="card card-body mt-3">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> <img src="https://resource.logitechg.com/e_trim/w_490,h_310,c_limit/c_lpad,ar_413:310,q_auto:best,f_auto,dpr_auto/content/dam/gaming/en/products/g513/g513-carbon-gallery-1.png?v=1" width="200" height="150" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true">G513</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Keyboads</a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Devices</a></li>
                        </ul>
                        <p class="mb-3">G513 is a high-performance gaming keyboard featuring your choice of advanced GX mechanical switches. The detachable, memory-foam palmrest and premium aluminum-alloy construction make G513 full-featured and best-in-class.</p>
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold">$140.99</h3>
                        <div> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <div class="text-muted">2349 reviews</div> <button type="button" class="btn btn-warning mt-4 text-white"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="card card-body mt-3">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> <img src="https://resource.logitechg.com/e_trim/w_490,h_310,c_limit/c_lpad,ar_413:310,q_auto:best,f_auto,dpr_auto/content/dam/gaming/en/products/g815/g815-gallery-1.png?v=1" width="200" height="150" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true">G815</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Keyboads</a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Device</a></li>
                        </ul>
                        <p class="mb-3">Advanced gaming technologies in a sophisticated ultra-thin design. Fully customizable, equipped with LIGHTSYNC RGB and dedicated G-keys. Engineered for high-performance gameplay with low-profile GL mechanical switches in clicky, tactile, and linear variations. Experience G815 and play the next dimension.</p>
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold">$130.99</h3>
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